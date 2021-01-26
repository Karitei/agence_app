<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function travels(){

        return view('offers.travels');
    }

    public function journey(){

        return view('offers.journey');
    }
}
