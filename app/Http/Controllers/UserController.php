<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function add_user(){
        return view('users.admin.add_user');
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


          return view('users.admin.users_list');

    }

    public function userListTable(){

      //  $data = User::all();

        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at']);

        return Datatables::of($users)
            ->editColumn('STATUT', function($agence){
                // return $agence->STATUT;
                return $agence->STATUT == '0' ? "<button class='btn btn-danger'><span class=' label label-danger'>Inactif</span> </button>"
                    :"<button  class='btn btn-primary'><span class='primary label label-default'>Actif</span> </button>" ;
            })
            ->rawColumns(['STATUT'])
            ->make();

     //   return view('users.users_list', compact('users'));

    }

    public function offerList(){

        return view('users.admin.offers_list');
    }

    public function offerListTable(){

        //  $data = User::all();

        $data = Offer::all();

        return Datatables::of($data)
         /*   ->editColumn('STATUT', function($agence){
                // return $agence->STATUT;
                return $agence->STATUT == '0' ? "<button class='btn btn-danger'><span class=' label label-danger'>Inactif</span> </button>"
                    :"<button  class='btn btn-primary'><span class='primary label label-default'>Actif</span> </button>" ;
            })
            ->rawColumns(['STATUT'])

         */
            ->make(true);

        //   return view('users.users_list', compact('users'));

    }


}
