<?php

namespace App\Http\Controllers;
use App\Traits\OfferTrait;
use App\Cover;
use App\Formation;
use App\Creference;
use App\Actualite;
use App\Gallerie;
use App\Inscription;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Resources\Views\acceuil;
class afficheController extends Controller
{
    use OfferTrait;
    
    public function getAllFormations()
    {
       
       ##################### paginate result ####################
         $formations = Formation::select(
            'image',
            'nomFormation',
            'type',
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

        $gallerie = Gallerie::select(
            'id','titre','sousTitre','image'
            
        )->get();

        return 
               view('a-propos',compact('references','gallerie') );
               
        
        }

        public function getacceuil()
        {
           
          
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
                   view('acceuil',compact('references','covers','actualites') );
                   
            
            }

            public function getAdminAct()
            {
               
              
                ##################### paginate result ####################
                
                $actualites = Actualite::select(
                    'id',
                    'image',
                    'titre',
                    'descAct',
                    'created_at'
                )->get();
        
                return 
                       view('viewAdmin.actualite',compact('actualites') );
                       
                
             }

             public function getAdminInscri()
             {
                
               
                 ##################### paginate result ####################
                 
                 $inscris = Inscription::select(
                     'id',
                     'nom',
                     'prenom',
                     'cin',
                     'tel',
                     'email',
                     'formation',
                     'created_at'
                 )->get();
         
                 return 
                        view('viewAdmin.inscription',compact('inscris') );
                        
                 
              }

                public function getAdminRef()
            {
               
              
                ##################### paginate result ####################
                
                $references = Creference::select(
                    'id',
                    'nom',
                    'image'
                    
                )->get();
        
                return 
                       view('viewAdmin.reference',compact('references') );
                       
                
                }

                public function getAdminCover()
                {
                   
                  
                    ##################### paginate result ####################
                    
                    $covers = Cover::select(
                        'id','text','image'
                        
                    )->get();
            
                    return 
                           view('viewAdmin.cover',compact('covers') );
                           
                    
                    }
       
                    public function getAdminGallerie()
                    {
                       
                      
                        ##################### paginate result ####################
                        
                        $gallerie = Gallerie::select(
                            'id','titre','sousTitre','image'
                            
                        )->get();
                
                        return 
                               view('viewAdmin.gallerie',compact('gallerie') );
                               
                        
                        }

                        public function getAdminMessages()
                        {
                           
                          
                            ##################### paginate result ####################
                            
                            $message = Contact::select(
                                'id','nom','email','objet','message','created_at'
                                
                            )->get();
                    
                            return 
                                   view('viewAdmin.message',compact('message') );
                                   
                            
                            }      
           
   
}
