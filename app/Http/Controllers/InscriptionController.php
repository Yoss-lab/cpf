<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscription;

class InscriptionController extends Controller
{
    public function store(Request $request)
    {
       

        //insert
        Inscription::create([
           
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'cin' => $request->cin,
            'tel' => $request->tel,
            'email' =>   $request->email, 
            'formation' =>   $request->formation, 
            
            
        ]);

        return "Envoyé avec succée ";
        /* return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']); */
    }
}
