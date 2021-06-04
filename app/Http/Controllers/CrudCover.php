<?php

namespace App\Http\Controllers;
use App\Traits\OfferTrait;
use App\Cover;
use Illuminate\Http\Request;

class CrudCover extends Controller
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
        return view('viewAdmin.createCover');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $this->saveImage($request->image, 'assets/img/cover'); 

        //insert
        Cover::create([
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
        $cover = Cover::find($id);

        if(!$cover) return "Image couverture not exist!";

        $cover -> delete();
        return "Image couverture deleted succesful";
    }
}
