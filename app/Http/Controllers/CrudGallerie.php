<?php

namespace App\Http\Controllers;
use App\Traits\OfferTrait;
use App\Gallerie;
use Illuminate\Http\Request;

class CrudGallerie extends Controller
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
        return view('viewAdmin.createGallerie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $this->saveImage($request->image, 'assets/img/gallerie'); 

        //insert
        Gallerie::create([
            'titre' => $request->titre,
            'sousTitre' => $request->sousTitre,
            'image' => $image
            
            
        ]);

        return "تمت الاضافة بنجاح";
        /* return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //check if id exists
        $gallerie = Gallerie::find($id);

        if(!$gallerie) return "Image not exist!";

        $gallerie -> delete();
        return "Image deleted succesful";
    }
}
