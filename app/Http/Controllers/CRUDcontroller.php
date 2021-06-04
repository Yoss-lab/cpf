<?php

namespace App\Http\Controllers;
use App\Traits\OfferTrait;
use Illuminate\Http\Request;
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
        //
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
    public function store(Request $request)
    {
       
         $image = $this->saveImage($request->image, 'assets/img/formation'); 

        //insert
        Formation::create([
            'image' => $image,
            'nomFormation' => $request->nomFormation,
            'type' =>   $request->type, 
            'descFormation' =>  $request->descFormation,
            
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
        return view('detailsFormation', [
            'formation' => Formation::findOrFail($id)
        ]);
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
