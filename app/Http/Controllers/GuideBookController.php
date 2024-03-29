<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use App\Models\GuideBook;
use Illuminate\Http\Request;

class GuideBookController extends BaseController
{
    public function index()
    {
        return view('guidebook.index');
    }
    

    public function create()
    {
        return view('guidebook.add');
    }

    public function show($id)
    {
        $guidebook=GuideBook::findOrFail($id);
        return view('guidebook.add')->with(['guidebook'=>$guidebook]);
    }

    public function createCheckin()
    {
        return view('guidebook.check_in_card');
    }


    public function createDirection($id)
    {
        $guidebook=GuideBook::findOrFail($id);
        return view('guidebook.directions')->with(['guidebook'=>$guidebook]);
    }

    public function createParking()
    {
        return view('guidebook.parking');
    }

    public function createWifi()
    {
        return view('guidebook.wifi');
    }

    public function storeAddress(Request $request)
    {

        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'apartment_no' => 'nullable|string|max:50',
            'street_number' => 'nullable|string|max:50',
            'street_name' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'descriptive_name' => 'nullable|string|max:255',
            'address_linking_rule' => 'required|string|max:255',
        ]);

        $guidebook=new GuideBook();
        $guidebook->address=$request->address;
        $guidebook->latitude=$request->latitude;
        $guidebook->longitude=$request->longitude;
        $guidebook->apartment_no=$request->apartment_no;
        $guidebook->street_no=$request->street_number;
        $guidebook->street_name=$request->street_name;

        $guidebook->city=$request->city;
        $guidebook->state=$request->state;
        $guidebook->country=$request->country;
        $guidebook->postal_code=$request->postal_code;
        $guidebook->descriptive_name=$request->descriptive_name;
        $guidebook->address_linking_rule=$request->address_linking_rule;
        $guidebook->user_id=$this->userId();
        $guidebook->save();

        return redirect()->route('guidebook.show',$guidebook->id);
    }
    
    public function storeDirection(Request $request)
    {
        $direction=new Direction();
        $direction->name_of_card=$request->address;
        $direction->general_direction=$request->general_direction;
        $direction->guidebook_id=$request->guidebook_id;
        $direction->save();
    }
}
