<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Endlevelcategory;
use App\Models\Toplevelcategory;
use App\Models\Midlevelcategory;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // view()->composer('*', function ($view) {    
        //     $toplevelcategories = Toplevelcategory::get();
        //     $view->with('toplevelcategories', $toplevelcategories);
        // });
        // view()->composer('*', function ($view) {    
        //     $endlevelcategories = Endlevelcategory::get();
        //     $view->with('endlevelcategories', $endlevelcategories);
        // });
        // view()->composer('*', function ($view) {    
        //     $midlevelcategories = Midlevelcategory::get();
        //     $view->with('midlevelcategories', $midlevelcategories);
        // });
        $toplevelcategories = Toplevelcategory::get();
        $endlevelcategories = Endlevelcategory::get();
        $midlevelcategories = Midlevelcategory::get();
        view()->share('toplevelcategories', $toplevelcategories);
        view()->share('endlevelcategories', $endlevelcategories);
        view()->share('midlevelcategories', $midlevelcategories);
    }
}