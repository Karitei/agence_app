<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgenceController extends Controller
{
    public function index(){
        return view('users.ag_client.dashboard');
    }
}
