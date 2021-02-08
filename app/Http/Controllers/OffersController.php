<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function travels(){

        return view('offers.travels');
    }

    public function journey(){

        $offres = Offer::where('pack', 1)->get();
        //dd($offres);

        return view('offers.shop',compact('offres'));
    }

    public function pack($id){

        $offres = Offer::where('id', $id)->first();
       // dd($offres);
        return view('offers.pack');
    }


}
