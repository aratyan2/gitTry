<?php

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

Route::get('hello',function(){
    return  '<html>
            <body>
            <h1>HelloWorld</h1>
            <p>TEST page.</p>
            </body>
            </html>';
});

Route::get('hello/test','HelloController@hello');
Route::get('access','HelloController@access');

