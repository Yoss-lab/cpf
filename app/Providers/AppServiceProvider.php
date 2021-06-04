<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Traits\OfferTrait;
use App\Cover;
use App\Formation;
use App\Creference;
use App\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    use OfferTrait;
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
        ##################### paginate result ####################
        $formations = Formation::select(
            'id',
            'nomFormation',
            'image',
            'type',
            'prix',
            
            'descFormation'
            
        )->get();

        

        ##################### paginate result ####################
        $covers = Cover::select(
            'image'
            
        )->get();

        $references = Creference::select(
            'image'
            
        )->get();

        $actualites = Actualite::select(
            'image',
            'titre',
            'descAct',
            'created_at'
        )->get();

        return 
            
               
        
              View::share('data',$formations);
           
               
    }
}
