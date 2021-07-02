<?php

namespace App\Http\Controllers;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ValidationRequest;
use App\Formation;

class CRUDcontroller extends Controller
{
    use OfferTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::select(
            'image',
            'nomFormation',
            'type',
            'descFormation'
        )->get();

        return 
               view('acceuil',compact('formations') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewAdmin.createFormation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationRequest $request)
    {
       
         $image = $this->saveImage($request->image, 'assets/img/formation'); 

        //insert
        Formation::create([
            'image' => $image,
            'nomFormation' => $request->nom,
            'type' =>   $request->type, 
            'categorie' =>   $request->categorie, 
            'prix' =>   $request->prix, 
            'descFormation' =>  $request->descrption,
            'module1' =>   $request->module1,  
            'module2' =>   $request->module2, 
            'module3' =>   $request->module3, 
            
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
    public function show(Formation $formation)
    {
        return view('detailsFormation',compact('formation'));


      
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
        $formations = Formation::find($id);  // search in given table id only
        if (!$formations)
            return response()->json([
                'status' => false,
                'msg' => ' not exist',
            ]);

        $formations = Formation::select('id', 'nomFormation', 'type', 'prix', 'descFormation', 'image')->find($id);

        return view('viewAdmin.editFormation', compact('formations'));

      
      
        
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
       //check if formation id exists
       

       $formation = Formation::select('id','image','nomFormation','type','descFormation')->find($id);
       if(!$formation) return "formation not exist!";

      $formation-> update($request->all());
      return "modifie avec succée";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //check if formation id exists
        $formation = Formation::find($id);

        if(!$formation) return "formation not exist!";

        $formation -> delete();
         return redirect()->back();
    }
}
