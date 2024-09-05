<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class formController extends Controller
{
  
    public function getUser(){
        $data = DB::table('adduser')->paginate(5,['*'],'lol');
        return view('welcome',['data'=>$data]);
    }

   public function addUser(Request $req){
          
    $req->validate([
        'fullname'=> 'required',
        'email'=> 'required|email',
        'mobile_no'=>'required|numeric|digits:10',
        'age'=> 'required|numeric',
        'city'=>'required'
    ]);

       $add = DB::table('adduser')->insertOrIgnore([
             'fullname'=>$req->fullname,
             'email'=>$req->email,
             'phoneno'=>$req->mobile_no,
             'age'=>$req->age,
             'city'=>$req->city,
             
       ]);

       if($add){
          return redirect()->route('home');
       }
       else{
        echo "Data Not Insert";
       }
       
    }

    public function updateUser($ids = null){
        $datas = DB::table('adduser')->find($ids);
        if($datas){
            return view('updateUser',['datas'=>$datas]);
        }
    }

    public function postUpdate( Request $req){
        $update = DB::table('addUser')->where('id',$req->id)
                                    ->update([
                                        'fullname'=>$req->fullname,
                                        'email'=>$req->email,
                                        'phoneno'=>$req->mobile_no,
                                        'age'=>$req->age,
                                        'city'=>$req->city,
                                    ]);
        if($update){
            return redirect()->route('home');
        }else{
            echo "Some Error are came";
        }
    }

    public function deleteData($id = null){
    $data = DB::table('adduser')->where('id',$id)
                                ->delete();

    if($data){
        return redirect()->route('home');
    } else{
        echo "Some error are come";
    }
    }
}
