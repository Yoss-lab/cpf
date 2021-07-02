<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\OfferTrait;
use App\Cour;

class CRUDCours extends Controller
{

    use OfferTrait;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewAdmin.createCours');
   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pdf = $this->saveImage($request->pdf, 'assets/pdf'); 

        //insert
        Cour::create([
            'nom'=> $request->nom,
            'pdf' => $pdf
            
            
        ]);

        return "Envoyé avec succée ";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cour=Cour::find($id);
        return view('viewAdmin.pdf',compact('cour'));
    }

    public function download($pdf)
    {
       
        return response()->download('assets/pdf/'.$pdf);
    }
    

    public function showEtudiant($id)
    {
        $cour=Cour::find($id);
        return view('viewAdmin.pdf',compact('cour'));
    }

    public function downloadEtudiant($pdf)
    {
       
        return response()->download('assets/pdf/'.$pdf);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}



