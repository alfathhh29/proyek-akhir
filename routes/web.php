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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function (){
    echo "Hello World";
});
Route::get('/name/{name}', function ($name) {
    return "Hello" . $name;
});
Route::get('/nrp/{nrp}/{name}', function ($nrp, $name) {
    return "NRP dan Name" . $nrp . $name;
}) -> where ('NRP', '[0-9}+') -> where ('name','[A-Z]+');

Route::get('person', 'PersonController@index')->name ('person.index');

Route::get('/person/show/{param}', 'PersonController@show');
Route::resource('student', 'StudentController');

Route::get('/person/send-data', 'PersonController@SendData');
