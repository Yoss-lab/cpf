<?php

namespace App\Http\Controllers;
use App\Traits\OfferTrait;
use App\Cover;
use App\Formation;
use App\Creference;
use App\Actualite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class affichController extends Controller
{
    use OfferTrait;
    
    public function getAllFormation()
    {
       
       ##################### paginate result ####################
         $formations = Formation::select(
            
            'nomFormation'
            
            
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
            //    view('acceuil',compact('formations') );
               
        //je passe to AppServiceProvider.php pour affiche les données sur plusieurs blade (views)
        
              //View::share('data',$formations);
           // view()->composer('*','formations');
               
               
    }

       
}
