<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class crud extends Controller
{
    public function store(OfferRequest $request)
    {
        //validate data before insert to database
        //$rules = $this->getRules();
        //$messages = $this->getMessages();
        // $validator = Validator::make($request->all() ,$rules, $messages);
        // if ($validator->fails()) {
        //    return redirect()->back()->withErrors($validator)->withInputs($request->all());
        // }


        $file_name = $this->saveImage($request->photo, 'images/offers');

        //insert
        Offer::create([
            'photo' => $file_name,
            'name_ar' => $request->name_ar,
            'name_en' =>   $request->name_en,
            'price' =>  $request->price,
            'details_ar' => $request->details_ar,
            'details_en' => $request->details_en,
        ]);

        return redirect()->back()->with(['success' => 'تم اضافه العرض بنجاح ']);
    }
}
