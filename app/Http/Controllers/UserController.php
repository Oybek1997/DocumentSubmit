<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;


use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function save(Request $request)
    {

        //print_r($request->input());
        $user = new Home;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->password = $request->password;
        $user->phone_number = $request->phone_number;
        $user->Role = $request->Role;
        $user->save();


        return view('home');
    }
    public function Is_Admin(){
        $role='Role';
        if($role=='admin'){
            echo ("You are an Admin");
        }
    }
    public function index(){
        $users = DB::select('select * from users');
        return view('home',['users'=>$users]);
    }

    public function echart(Request $request)
    {
        $fruit = Product::where('product_type','fruit')->get();
        $veg = Product::where('product_type','vegitable')->get();
        $grains = Product::where('product_type','grains')->get();
        $fruit_count = count($fruit);
        $veg_count = count($veg);
        $grains_count = count($grains);
        return view('echart',compact('fruit_count','veg_count','grains_count'));
    }


    function field(){
        return view('home');
    }

    function show_users(){
        return view('users');
    }
}
