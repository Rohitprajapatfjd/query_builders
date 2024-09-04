<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\storeController;
use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;


Route::controller(adminController::class)->group(function(){
    Route::get('/admin','show');
    Route::get('/user/{id?}','user')->name('users')->whereNumber('id');
});

Route::get('/store',[storeController::class,'show']);
Route::get('/add',[InsertController::class,'show']);
Route::get('/update',[InsertController::class,'update']);

Route::fallback(function(){
    return view('welcome');
});


// ***********************************form Routing Part ***************************



Route::view('/form', 'addUser')->name('form');

Route::controller(formController::class)->group(function () {
   Route::get('/', 'getUser')->name('home');
    Route::post('/adduser', 'addUser')->name('adduser');
    Route::get('/updateuser/{ids?}', 'updateUser')->name('updateUser');
    Route::post('/postupdate','postUpdate')->name('postUpdate');
   Route::get('/deletuser/{id?}', 'deleteData')->name('delete');
   
});