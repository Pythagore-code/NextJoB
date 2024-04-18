<?php

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

Route::get('test/{firstname}/{lastname}', function ($firstname = null, $lastname = null) {
    //return view('welcome')->with('firstname', $firstname)->with('lastname', $lastname);
    $data = [
        'firstname'=>$firstname,
        'lastname'=>$lastname,
    ];
    echo 'bonjour '. $firstname."" .$lastname;
    return view('welcome', $data);
});
