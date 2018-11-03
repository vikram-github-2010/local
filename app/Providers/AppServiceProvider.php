<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Billing\Stripe;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);
         
         View::composer('layouts.sidebar', function ($view) {
            
           $archives= \App\Post::archives();
            
            $tags= \App\Tag::pluck('name');
            
            $view->with(compact('archives','tags'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Stripe::class, function (){
    
          return new Stripe(config('services.stripe.secret'));
        });
         
    }
}
