<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\NosEscape;
use App\Models\Marketing;
use App\Models\HomeEventSection;
use App\Models\HomeVideoSection;
use App\Models\Review;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\HomeHeader;
use App\Models\HomeAboutus;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Share the 'nos_escapes' data with all views
        View::composer('*', function ($view) {
            $view->with('nosEscapes', NosEscape::all());  // Fetch all 'nos_escapes' records
            $view->with('marketing', Marketing::first());
            $view->with('homeEventSection', HomeEventSection::first());
            $view->with('homeVideo', HomeVideoSection::first());
            $view->with('homeHeader', HomeHeader::first());
            $view->with('homeAboutUs', HomeAboutus::first());
            $view->with('reviews', Review::all());
            $view->with('blogs', Blog::all());
            $view->with('faqs', Faq::all());

        });
    }
}
