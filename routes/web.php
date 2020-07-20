<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    return view('welcome');

    $data = [

        'title'=>'Hi Mr Adwin',
        'content'=>'Hello mr are you using mail gun how its possible'


    ];

    Mail::send('email.test',$data,function($message){

        $message->to('nadeematislam@gmail.com','Nadeem')->subject('Hello Brother');


    });



});
