<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function show(){
       $user = DB::table('admins')
       ->get();
        return view('admin',["admin"=>$user]);
    }
    function user($id = 1){
        $user = DB::table('admins')->where('id','=',$id)->get();
         return view('user',["data"=>$user]);
     }
}
