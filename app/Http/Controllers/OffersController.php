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


        $offer = Offer::where('id', $id)->first();
        //dd($offre);
        return view('offers.pack',compact('offer'));
    }


    public function inscription_pack(){
        return view('offers.inscription_pack');
    }

     public function create(){
            return view('users.admin.create');
        }

     public function add_offer(Request $request){

        dd($request);
           // return view('users.admin.create');
        }


}
