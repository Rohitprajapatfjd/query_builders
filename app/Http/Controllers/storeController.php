<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class storeController extends Controller
{
    function show(){
        $data = DB::table('stores')
                 ->orderBy('id')
                //->first(); not use get method with this;
                //->limit(4)
                // ->min('id');
                 // ->whereBetween('id',[3,6])
                // ->whereNotBetween('id',[3,6])
                 //->whereIn('id',[3,6])
                  // ->whereDate('created_at','2024-09-02')
                //  ->whereMonth('created_at',9)
                    // ->where('id','>',3)
                    // ->where('status','=',0)
                   ->get();

       return  view('store',['data'=>$data]);
     // return dump($data);
    }
}
