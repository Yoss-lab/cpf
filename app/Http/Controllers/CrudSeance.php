<?php

namespace App\Http\Controllers;
use App\Traits\OfferTrait;
use App\Seance;
use Illuminate\Http\Request;

class CrudSeance extends Controller
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
        return view('viewAdmin.createSeanceLive');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $this->saveImage($request->image, 'assets/img/Seances'); 
       

        //insert
        Seance::create([
            
            'numR' => $request->numR,
            'sujet' => $request->sujet,
            'description' => $request->description,
            'heure' => $request->heure,
            'lien' => $request->lien,
            'codeSecret' => $request->codeSecret,
            'image' => $image,
           
            
            
            
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
        $live=Seance::find($id);
        return view('seanceLigne',compact('live'));
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
