<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\Category;
use App\Models\PageSeo;
use App\Models\State;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically Generate an XML Sitemap';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $slug = PageSeo::where('name','states')->first()->slug;
        $key = 1;
        $sitmap = Sitemap::create();
        $blogs = Blog::get();
        foreach($blogs as $blog)
            $sitmap->add(
                Url::create("/blog/{$blog->slug_ar}")
                    ->setPriority(0.2)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            );
        /*$sitmap->add(
            Url::create("/")
                ->setPriority(0.6)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );
        $sitmap->add(
            Url::create("/sitemap_states_pages.xml")
                ->setPriority(0.6)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );
        $sitmap->add(
            Url::create("/sitemap_categories_pages.xml")
                ->setPriority(0.6)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );
        $sitmap->add(
            Url::create("/sitemap_single_page.xml")
                ->setPriority(0.6)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );
        $sitmap->add(
            Url::create("/sitemap_states.xml")
                ->setPriority(0.6)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );
        $sitmap->add(
            Url::create("/sitemap_categories.xml")
                ->setPriority(0.6)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );
        $sitmap->add(
            Url::create("/sitemap_blogs.xml")
                ->setPriority(0.6)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );
        $sitmap->add(
            Url::create("/sitemap_blogs_pages.xml")
                ->setPriority(0.6)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
        );*/
        
       /*for ($i = 1; $i <= 136; $i++)
            $sitmap->add(
                Url::create("/sitemap_category_{$i}.xml")
                    ->setPriority(0.6)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );*/

        /*for($i = 1; $i <= 40; $i++)
            $sitmap->add(
                Url::create("/sitemap_state_{$i}.xml")
                    ->setPriority(0.6)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
            );*/

        $sitmap->writeToFile(public_path('sitemap_blogs.xml'));



    }
}
