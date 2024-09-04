<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    function show(){
        $user = DB::table('stores')->insertOrIgnore([
            [
            'category'=> "Pants",
            'items'=>109,
            'status'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
            ],
           
    ]);
       if($user){
       return redirect()->route('home');
        
       }else{
        echo "<h1>No data Add</h1>";
       }
        // $user = DB::table('stores')->where('category','=','Clothes')
        //                            ->delete();
        //                            return dd($user);
    }

    function update(){
        $datas =DB::table('stores')->where('id',5)
                                   ->update([
                                    'items'=>400
                                   ]);
                                   return dump($datas);
    }
    
}
