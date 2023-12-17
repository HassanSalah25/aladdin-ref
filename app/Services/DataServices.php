<?php

namespace App\Services;

use Amp\Loop;
use Amp\Http\Client\HttpClientBuilder;
use Amp\Http\Client\Request as AmpRequest;

class DataServices
{
    private $base_url = 'https://yellowpages.com.eg/';

    private $classes_names = [
        'name' => 'item-title',
        'address' => 'address-text',
        'about_us' => 'item-aboutUs',
        'category' => 'category',
        'map_link' => 'showMapSearch',
    ];
    private $ids = ['company'=>'company_id'];
    protected $xpath;

    private $lang;

    public function __construct(string $lang)
    {
        $this->lang = $lang;
    }

    public function getHTMLBody(string $body)
    {
        $dom = new \DOMDocument();

        // Suppress errors about invalid HTML
        libxml_use_internal_errors(true);

        $dom->loadHTML($body);

        // Restore error handling
        libxml_use_internal_errors(false);

        // Create a DOMXPath object to query elements by class
        return new \DOMXPath($dom);

    }

    public function getValuesByClass(string $className)
    {
        return $this->xpath->query("//*[contains(concat(' ', normalize-space(@class), ' '), ' $className ')]");
    }

    public function getValueByClass(string $className)
    {
        return $category = $this->xpath->query("//*[@class='$className']");
    }

    public function getValuesById(string $id)
    {
        return $this->xpath->query("//*[@id='$id']");
    }

    public function convertHTMLToCollection(string $body)
    {
        $collection = collect([]);
        $this->xpath = $this->getHTMLBody($body);

        $ids = $this->getValuesById($this->ids['company']);
        $category = $this->getValueByClass($this->classes_names['category']);
        $names = $this->getValuesByClass($this->classes_names['name']);
        $addresses = $this->getValuesByClass($this->classes_names['address']);
        $abouts = $this->getValuesByClass($this->classes_names['about_us']);
        $locations = $this->getValuesByClass($this->classes_names['map_link']);

        $count = $names->length - $addresses->length;

        // Loop through the matching elements and print their content
        foreach ($addresses as $key => $address)
        {
//            $location = $this->checkMap($locations,$ids[$key + $count]->getAttribute('value'));
//            if($location)
//                $location = $this->get_location($location);
//           $phones = $this->get_phones($ids[$key + $count]->getAttribute('value'));
            $collection->push([
               /* 'name' => utf8_decode($names[$key + $count]->nodeValue),
                'address' => trim(utf8_decode($address->nodeValue)),
                'about' => $abouts[$key] ? utf8_decode(trim($abouts[$key]->nodeValue)) : null,
                'category' => $category[$key] ? utf8_decode(trim($category[$key + $count]->nodeValue)) : null,*/
                'company_id' => $ids[$key + $count]->getAttribute('value'),
//                'phones' => $phones,
//                'location' => $location,
            ]);
        }
        return $collection;
    }

    public function checkMap($locations, $id)
    {
        foreach ($locations as $location)
        {
            $check = str_contains($location->getAttribute('href'),$id);
            if($check)
                return utf8_decode($location->getAttribute('href'));
        }
    }

    public function get_phones($company_id)
    {
        $arr = [];
        Loop::run(function () use (&$arr,$company_id) {

            $targetPhoneClass = 'phone-spans';
            $httpClient = HttpClientBuilder::buildDefault();
            $url = $this->base_url . $this->lang . "/getPhones/" . $company_id . "/true"; // Replace with the URL you want to fetch HTML from
            $promise = $httpClient->request(new AmpRequest($url));
            $response = yield $promise;
            $body = yield $response->getBody()->buffer();
            $xpath = $this->getHTMLBody($body);

            $phones = $xpath->query("//*[@class='$targetPhoneClass']");
            // Loop through the matching elements and print their content
            foreach ($phones as $key => $phone) {
                $arr [] = utf8_decode(trim($phone->nodeValue));
            }
        });
        return $arr;
    }

    public function get_location($company_id,$slug)
    {
        $arr = null;
        Loop::run(function () use (&$arr,$company_id,$slug) {
            $httpClient = HttpClientBuilder::buildDefault();
            $url = $this->base_url . $this->lang . "/profile/" .  $slug . "/" . $company_id . "#map"; // Replace with the URL you want to fetch HTML from
            $promise = $httpClient->request(new AmpRequest($url));
            $response = yield $promise;
            $body = yield $response->getBody()->buffer();
            $xpath = $this->getHTMLBody($body);
            $scriptTags =  $xpath->query("//script[@type='application/ld+json']");
            $coll = collect([]);
            foreach ($scriptTags as $key => $scriptTag) {

                    // Extract and decode the JSON content
                    $jsonString = $scriptTag->textContent;
                    $jsonData = json_decode($jsonString);
                    $coll->push($jsonData);
                    if ($jsonData !== null) {
                        // Now, $jsonData contains the extracted JSON data

                    } else {
                        echo 'Failed to decode JSON.';
                    }

            }
            $arr = isset($coll[1]) ? $coll[1]?->geo : null;
        });
        return $arr;
    }

    public function run(string $category_name, int $start_page, int $last_page)
    {
        $data = collect([]);
        Loop::run(function () use (&$data,$category_name,$start_page,$last_page) {
            try {
                $httpClient =  HttpClientBuilder::buildDefault();
                $promises = [];

                for($page_no = $start_page; $page_no <= $last_page; $page_no++) {
                    $url = $this->base_url . $this->lang . '/category/' . $category_name . '/p' . $page_no;
                    $promises[] = $httpClient->request(new AmpRequest($url));
                }
                $responses = yield $promises;

                foreach ($responses as $response)
                {
                    // Process each response here
                    $body = yield $response->getBody()->buffer();

                    $data = $data->merge($this->convertHTMLToCollection($body));

                }
            } catch (\Exception $e) {
                // Handle other exceptions
                if(str_contains($e->getMessage(),str_replace(['https://','/'],"",$this->base_url))){
                    echo 'Check Your Connection';
                }
                else
                    echo 'Pages That We Have Are ' .  $data->count()/20 ;
            }

        });
        return $data;
    }

}
