<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function add_user(){
        return view('users.add_user');
    }

    public function select_dashboard(){
        $user_role = Auth::user()->role;

      //  dd($user_role);

        if( $user_role == "0"){
            return redirect()->route('admin_dashboard');
        }
        if( $user_role == "1"){
            return redirect()->route('agency_dashboard');
        }
        if( $user_role == "2"){
            return redirect()->route('buisness_dashboard');
        }

    }

    public function profile(){

        $user_role = Auth::user()->role;

        if( $user_role == "0"){
            return view('users.admin.profile');
        }
        if( $user_role == "1"){
            return view('users.ag_client.profile');
        }
        if( $user_role == "2"){
            return view('users.buss_client.profile');
        }
    }

    public function userList(){

        $users = User::all();
        return view('users.users_list', compact('users'));
    }
}
