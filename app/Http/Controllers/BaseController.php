<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function user()
    {
        return auth()->user();
    }

    public function userId()
    {
        return $this->user()->id;
    }
}
