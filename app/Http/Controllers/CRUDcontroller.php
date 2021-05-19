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
        return view('formation.createFormation');
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

    public function getAllFormations()
    {
       /* $offers = Offer::select('id',
            'price',
            'photo',
            'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
            'details_' . LaravelLocalization::getCurrentLocale() . ' as details'
        )->get(); // return collection of all result*/


       ##################### paginate result ####################
         $offers = Offer::select('id',
            'image',
            'nomFormation',
            'type' . LaravelLocalization::getCurrentLocale() . ' as type',
            'descFormation' . LaravelLocalization::getCurrentLocale() . ' as formation'
        )/* ->paginate(PAGINATION_COUNT) */;



        //return view('offers.all', compact('offers'));


        return view('offers.paginations',compact('offers'));
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
        //
    }
}
