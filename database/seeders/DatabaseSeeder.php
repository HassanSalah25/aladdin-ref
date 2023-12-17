<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$data = ItemData::query()->orderBy('id','ASC')->chunk(100,function ($data){
            foreach ($data as $value)
            {
                $item = Item::where('item_title', $value['Business Name'])
                    ->where('item_address', $value['Address'])
                    ->first();
                $item->update([
                    'category_id' => $value->categories_details->id,
                ]);

            }
        });*/
//        dd($data);


        /* $cities = ItemDataEN::query()->groupby('City')
             ->select('City','iteems_en.State')->get();
         foreach ($cities as $city){
             $state = State::where('state_name',$city->State)->first();
             if(!$state)
                 $state = State::create([
                     'state_name' => $city->State,
                     'state_slug'=> str_replace(' ', '-',$city->State),
                     'locale'=> 'en',
                 ]);
             City::create([
                 'state_id' => $state->id,
                 'city_name' => $city->City,
                 'city_slug' => str_replace(' ', '-',$city->City),
                 'locale' => 'en',
             ]);

         }*/
        /* foreach ($cities as $city){
             $city->update(['city_slug'=>str_replace(' ', '-',$city->city_name)]);
         }
         foreach ($categories as $category){
             $category->update(['category_slug'=>str_replace(' ', '-',$category->category_name)]);
         }
         foreach ($items as $item)
         {   if($item->states_details == null)
             State::create([
                 'state_name'=>$item->State,
                 'state_slug'=>str_replace(' ', '-',$item->State),
             ]);
         }*/


        /* Category::chunk(100,function($categories){
                foreach($categories as $category){
                    $category->update(['category_parent_id' => null]);
                }
             });*/
        /*$jsonContent = file_get_contents('new_categories.json');
         $data = json_decode($jsonContent, true);

         foreach ($data as $values)
         {
             foreach ($values as $key => $value) {
                 $parent_category = Category::where('category_name', trim($key))
                     ->orWhere('category_name',trim($key))->first();

                 foreach ($value as $item) {

                     $category = Category::where('category_name', str_replace('ة','ه',trim($item)))
                         ->orWhere('category_name',trim($item))->first();
                     if(!$category){
                         dd(trim($item));
                     }
                     $category->update([
                         'category_parent_id' => $parent_category->id,
                     ]);

                 }


             }
         }*/
        /*  $jsonContent = file_get_contents('categories.json');
          $data = json_decode($jsonContent, true, 512, JSON_UNESCAPED_UNICODE);*/
//        $dataCollection = new Collection($data);
//        $arr = [];
//        foreach ($data as $value) {
//            try {
//                $filteredCollection = $dataCollection->filter(function ($item) use ($value) {
//                    return strcasecmp($item['category_name'], $value['category_en_id']) === 0;
//                });
//                $val = $filteredCollection->first();
//                $value['category_en_id'] = $val['id'] ?? $value['category_en_id'];
//                array_push($arr,$value);
//            } catch (\Exception $e) {
//                dd($value, $val);
//            }
//        }
//        $updatedJsonData = json_encode($arr,JSON_UNESCAPED_UNICODE);*/
//       /* foreach ($data as $value){
//            $category = Category::where('id',$value['id'])->first();
//
//            $category?->update(["category_en_id" => @$value['category_en_id']]);
//        }*/
        /*$data = ItemDataEN::query()
            ->orderBy('id', 'asc')
            ->chunk(1000, function ($data) {
                foreach ($data as $value) {
                    $city = City::where('city_name', $value->City)->first();
                    $state = State::where('state_name', $value->State)->first();
                    $item = Item::create([
                        'locale' => 'en',
                        'category_id' => $value->categories_details->id,
                        'item_title' => $value['Business Name'],
                        'item_slug' => str_replace(' ', '-', $value['Business Name']),
                        'item_address' => $value->Address,
                        'item_address_hide' => 0,
                        'state_id' => $state->id,
                        'city_id' => $city->id,
                        'country_id' => 1,
                        'item_type' => 1,
                        'item_hour_time_zone' => 'Africa/Cairo',
                        'item_hour_show_hours' => 2
                    ]);



                }
            });*/

        /* Category::orderBy('id','asc')
             ->chunk(10,function ($categories){
            foreach ($categories as $category){
                if (!$category->items->first())
                    $category->delete();
            }
         });*/
        /* $data_service = new DataServices('ar');

         ItemData::orderBy('id','asc')
         ->chunk(100,function ($items) use ($data_service){
            foreach ($items as $item){
                $arr = $data_service->run($item->Category, 1, 2);

            }

         });*/

        /*$data = ItemData::query()
            ->orderBy('id','ASC')
            ->chunk(100,function ($data){
                foreach ($data as $value)
                {
                    $item = Item::create([
                        'category_id' => $value->categories_details->id,
                        'item_title' => $value['Business Name'],
                        'item_slug' => str_replace(' ','-',$value['Business Name']),
                        'item_address' => $value->Address,
                        'item_address_hide' => 0,
                        'state_id' => $value->states_details->id,
                        'city_id' => $value->cities_details->id,
                        'country_id' => 1,
                        'item_lat' => $value->item_lat,
                        'item_lng' => $value->item_lng,
                        'item_type' => 1,
                        'item_hour_time_zone' => 'Africa/Cairo',
                        'item_hour_show_hours' => 2
                    ]);

                }
            });*/
        /*
                ItemDataEN::query()->orderBy('id', 'asc')
                    ->chunk(1000,function ($items){
                        foreach ($items as $item){
                            if($item->phones){
                                foreach ($item->phones as $phone)
                                {
                                    $phone->update(['item_id' => $item->company_id]);
                                }
                            }
                        }
                    });*/

// Write the updated JSON data back to the file
//        file_put_contents('categories.json', $updatedJsonData);

//        $categories = Category::with('items')
//            ->where('locale', 'ar')
//            ->get();
//
//        foreach ($categories as $category) {
//            $category->update([
//                'items_count' => $category->items->count(),
//                'children_count' => $category->children->count()
//
//            ]);
//        }

        //   $file = fopen('metas.csv', "r");

        // if ($file) {
        //     // Skip the header row
        //     fgetcsv($file);
        //     while (($data = fgetcsv($file, 1000, ',')) !== false) {
        //         $arr = explode("/",urldecode($data[0]));
        //         if(filter_var($data[0], FILTER_VALIDATE_URL)){
        //             try{
        //                 if($arr[3] == 'category')
        //                     $slug = end($arr);
        //                 else
        //                     $slug = $arr[5];
        //             }catch (\Exception $exception){
        //                 dd($data);
        //             }


        //         $category = Category::where('category_slug', $slug)->first();
        //         if($category)
        //             $category->update([
        //                 'meta_title' => $data[2],
        //                 'meta_description' => $data[4],
        //                 'canonical' => urldecode($data[0]),
        //                 'meta_keywords' => isset($data[8]) ? ( $data[8] ? $data[8] : ( $data[7] ? $data[7] : $category->category_name) ) : $data[7] ,
        //                 'category_description' => isset($data[9])? ( $data[9] ? ( $data[7] ? $data[7] : $category->category_name) : $category->category_name ) : $data[7],
        //                 ]);
        //         }
        //     }

        // }
        // fclose($file);

           Item::chunk(500,function($items){
             foreach($items as $item){
                 /*   $category->update(['children_count' => $category->children?->count()]);
                  $category->update(['items_count' => $category->items?->count()]);*/

                $baseSlug = $item->item_slug;
                $count = 0;
                 while (Item::where('item_slug', $baseSlug)->exists()) {
                     if($count > 0){
                         $slug = $baseSlug . '-' . $count;
                         $item->item_slug = $slug;
                         $item->save();
                     }
                     $count++;
                 }
             }
           });



    }

}
