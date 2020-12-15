<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuisnessController extends Controller
{
    public function index(){
        return view('users.buss_client.dashboard');
    }
}
