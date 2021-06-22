<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CrudAdmin extends Controller
{
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
        return view('viewAdmin.createAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
         //$image = $this->saveImage($request->image, 'assets/img/formation'); 

        //insert
        Admin::create([
            //'image' => $image,
            'name' => $request->name,
            'prenom' => $request->prenom,
            'genre' => $request->genre,
            //'type' =>   $request->type, 
            'dat_naiss' =>   $request->dat_naiss, 
            'cin' =>  $request->cin,
            'tel' => $request->tel,
            'email' => $request->email,
            'user_name' => $request->user_name,
            'password' => Hash::make($request['password']),
            
            
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
         $admin = Admin::find($id);  // search in given table id only
         if (!$admin)
             return response()->json([
                 'status' => false,
                 'msg' => ' not exist',
             ]);
 
         $admin = Admin::select('id', 'name','prenom', 'genre', 'dat_naiss', 'cin', 'tel','email','user_name')->find($id);
 
         return view('viewAdmin.editAdmin', compact('admin'));
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
        //check if admin id exists
        $admin = Admin::find($id);

        if(!$admin) return "admin not exist!";

        $admin -> delete();
         return redirect()->back();
    }
}
