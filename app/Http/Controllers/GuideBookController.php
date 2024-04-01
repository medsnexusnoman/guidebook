<?php

namespace App\Http\Controllers;

use App\Models\CheckinGainProperty;
use App\Models\CheckInOptions;
use App\Models\CheckinPolicy;
use App\Models\CheckInproperty;
use App\Models\Checkins;
use App\Models\Checkout;
use App\Models\CheckoutBeforeCheckout;
use App\Models\CheckoutOptionBeforeCheckout;
use App\Models\CheckoutOptionPolicy;
use App\Models\CheckoutPolicyCheckout;
use App\Models\Direction;
use App\Models\DirectionOptionsDirection;
use App\Models\GuideBook;
use App\Models\Parking;
use App\Models\ParkingOptionProperty;
use App\Models\ParkingProperty;
use Database\Seeders\DirectionOptionsDirectionSeeder;
use Illuminate\Http\Request;

class GuideBookController extends BaseController
{
    public function index()
    {
        $guidebooks=GuideBook::where('user_id',$this->userId())->get();
        return view('guidebook.index')->with(['guidebooks' => $guidebooks]);
    }


    public function create()
    {
        return view('guidebook.add');
    }

    public function storeCheckins(Request $request)
    {
        $checkin = new Checkins();
        $checkin->name_of_the_card = $request->address;
        $checkin->earlist_time = $request->check_in;
        $checkin->check_in_window = $request->customRadioInline;
        $checkin->gain_access_to_property = $request->order_to_gain_property;
        $checkin->user_id = $this->userId();
        $checkin->guidebook_id = $request->id;
        $checkin->save();

        foreach ($request->property as $key => $value) {
            $check_policies = new CheckinGainProperty();
            $check_policies->guidebook_id=$request->id;
            $check_policies->user_id = $this->userId();
            $check_policies->checkin_id = $checkin->id;
            $check_policies->check_inproperties_id = $value;
            $check_policies->save();
        }

        foreach ($request->early as $key => $value) {
            $check_policies = new CheckinPolicy();
            $check_policies->guidebook_id=$request->id;
            $check_policies->user_id = $this->userId();
            $check_policies->checkin_id = $checkin->id;
            $check_policies->check_in_options_id = $value;
            $check_policies->save();
        }

        return redirect()->back()->with(["success"=>"Saved"]);
    }

    public function show($id)
    {
        $guidebook = GuideBook::findOrFail($id);
        $checkin = [
            "property" => CheckInproperty::all(),
            "early_check" => CheckInOptions::all(),
        ];

        $data=[
            "check_in_card"=>Checkins::where("user_id",$this->userId())->where('guidebook_id',$id)->get(),
            "direction"=>Direction::where("user_id",$this->userId())->where('guidebook_id',$id)->get(),
            "parking_card"=>Parking::where("user_id",$this->userId())->where('guidebook_id',$id)->get(),
            "departure_card"=>Checkout::where("user_id",$this->userId())->where('guidebook_id',$id)->get(),
            // "wifi"=>Direction::where("user_id",$this->userId())->where('guidebook_id',$id)->get(),
        ];
// dd($data["check_in_card"]);
        return view('guidebook.add')->with(['guidebook' => $guidebook, "checkin" => $checkin,'data'=>$data]);
    }

    public function createCheckin($id)
    {
        $guidebook = GuideBook::findOrFail($id);
        $checkin = [
            "property" => CheckInproperty::all(),
            "early_check" => CheckInOptions::all(),
        ];
        return view('guidebook.check_in_card')->with(['guidebook' => $guidebook, "checkin" => $checkin]);
    }


    public function createDirection($id)
    {
        $guidebook = GuideBook::findOrFail($id);
        $direction = DirectionOptionsDirection::all();
        return view('guidebook.directions')->with(['guidebook' => $guidebook,'direction'=>$direction]);
    }

    public function createCheckout($id)
    {
        $guidebook = GuideBook::findOrFail($id);
        $checkout = [
            "policies" => CheckoutOptionPolicy::all(),
            "before_checking" => CheckoutOptionBeforeCheckout::all(),
        ];
        return view('guidebook.checkout')->with(['guidebook' => $guidebook,'checkout'=>$checkout]);
    }

    public function storeCheckout(Request $request)
    {
        // dd($request->all());
        $checkin = new Checkout();
        $checkin->name_of_the_card = $request->address;
        $checkin->checkout_time = $request->check_in;
        $checkin->additional_information = $request->additional_checkout_information;
        $checkin->user_id = $this->userId();
        $checkin->guidebook_id = $request->id;
        $checkin->save();

        foreach ($request->before_checking as $key => $value) {
            $check_policies = new CheckoutBeforeCheckout();
            $check_policies->guidebook_id=$request->id;
            $check_policies->user_id = $this->userId();
            $check_policies->checkout_id = $checkin->id;
            $check_policies->checkout_option_before_checkout_id = $value;
            $check_policies->save();
        }

        foreach ($request->early as $key => $value) {
            $check_policies = new CheckoutPolicyCheckout();
            $check_policies->guidebook_id=$request->id;
            $check_policies->user_id = $this->userId();
            $check_policies->checkout_id = $checkin->id;
            $check_policies->checkout_option_policy_id = $value;
            $check_policies->save();
        }
        return redirect()->back()->with(["success"=>"Saved"]);
    }

    public function createParking($id)
    {
        $guidebook = GuideBook::findOrFail($id);
        $parking = [
            "property" => ParkingOptionProperty::all(),
        ];
        return view('guidebook.parking')->with(['guidebook' => $guidebook, "parking"=>$parking]);
    }

    public function storeParking(Request $request){
        // dd($request->all());
        $parking=new Parking();
        $parking->name_of_the_card=$request->address;
        $parking->park_a_vehicle=$request->park_a_vehicle;
        
        $parking->guidebook_id=$request->id;
        $parking->user_id=$this->userId();
        $parking->save();

        foreach ($request->parking_property as $key => $value) {
            $parting_properties=new ParkingProperty();
            $parting_properties->user_id=$this->userId();
            $parting_properties->guidebook_id=$request->id;
            $parting_properties->parking_id=$parking->id;
            $parting_properties->parking_option_property_id=$value;
            $parting_properties->save();
        }

        return redirect()->back()->with(["success"=>"Saved"]);
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

        $guidebook = new GuideBook();
        $guidebook->address = $request->address;
        $guidebook->latitude = $request->latitude;
        $guidebook->longitude = $request->longitude;
        $guidebook->apartment_no = $request->apartment_no;
        $guidebook->street_no = $request->street_number;
        $guidebook->street_name = $request->street_name;

        $guidebook->city = $request->city;
        $guidebook->state = $request->state;
        $guidebook->country = $request->country;
        $guidebook->postal_code = $request->postal_code;
        $guidebook->descriptive_name = $request->descriptive_name;
        $guidebook->address_linking_rule = $request->address_linking_rule;
        $guidebook->user_id = $this->userId();
        $guidebook->save();

        return redirect()->route('guidebook.show', $guidebook->id);
    }

    public function storeDirection(Request $request)
    {
        $direction = new Direction();
        $direction->name_of_card = $request->address;
        $direction->general_direction = $request->general_direction;
        $direction->guidebook_id = $request->guidebook_id;
        $direction->save();
    }
}
