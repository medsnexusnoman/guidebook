<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideBookController extends Controller
{
    public function index()
    {
        return view('guidebook.index');
    }

    public function create()
    {
        return view('guidebook.add');
    }

    public function createCheckin()
    {
        return view('guidebook.check_in_card');
    }

    public function createDirection()
    {
        return view('guidebook.directions');
    }

    public function createParking()
    {
        return view('guidebook.parking');
    }

    public function createWifi()
    {
        return view('guidebook.wifi');
    }
    
}
