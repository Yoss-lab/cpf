<?php

namespace App\Http\Controllers;
use App\Traits\OfferTrait;
use App\Actualite;
use Illuminate\Http\Request;

class CrudActualite extends Controller
{ use OfferTrait;
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
        return view('viewAdmin.createActualite');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $this->saveImage($request->image, 'assets/img/actualite'); 

        //insert
        Actualite::create([
            'image' => $image,
            'titre' => $request->titre,
            'descAct' =>   $request->descAct, 
            'created_at' =>  $request->created_at,
            
        ]);

        return "Envoyé avec succée ";
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
         //check if formation id exists
         $act = Actualite::find($id);  // search in given table id only
         if (!$act)
             return response()->json([
                 'status' => false,
                 'msg' => ' not exist',
             ]);
 
         $act = Actualite::select('id', 'image', 'titre', 'descAct')->find($id);
 
         return view('viewAdmin.editActualite', compact('act'));
 
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
       $actualite = Actualite::find($id);

       if(!$actualite) return "actualite not exist!";

       $actualite -> delete();
       return "actualite deleted succesful";

    }
}
