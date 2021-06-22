<?php

namespace App\Http\Controllers;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    use OfferTrait;

  

    public function store(Request $request)
    {
       

        //insert
        Contact::create([
           
            'nom' => $request->nom,
            'email' =>   $request->email, 
            'objet' =>   $request->objet, 
            'message' =>  $request->message,
            
        ]);

        return  'Envoyé avec succée' ;
        /* return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']); */
    }
}
