<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use view;
use App\Models\slideshow;

use App\Models\serv;

use App\Models\property; 
use App\Models\team; 
use App\Models\about; 
use App\Models\contact; 
use App\Models\sitedes; 


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
		
	  view()->composer('*', function ($view) {
            $service = serv::all();
			 $view->with('service',$service );
			$searchprice = property::distinct()->orderBy('price', 'DESC')->get(['price']);
			$view->with('searchprice',$searchprice );
		$searcharea = property::distinct()->get(['area']);
		$view->with('searcharea',$searcharea );
		$searchlocation = property::distinct()->get(['adress_line2']);
		$view->with('searchlocation',$searchlocation );
		$about=about::all();
		$view->with('about',$about );	
		$contact = contact::all();
		$view->with('contact',$contact );
		
		//$sitedescription=sitedes::first();
		$sitedescription=sitedes::all();                                                            
		$view->with('sitedescription',$sitedescription );
		
		
		
			
        });




	}
       

  
}
