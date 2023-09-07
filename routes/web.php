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
Route::get('/news/{id?}/comment/{commentId}', function (string $id=null, string $commentId=null) {
     if($id){
           return '<h1>News Id = '.$id.'  '.$commentId.'<h1> ';}
           else{
            return'<h1>No Id Found!<h1>';
            }
})->whereAlphaNumeric('id');

// Route::view('/news', 'news');

Route::fallback(function(){
  return '<h2> Page Not Found!</h2>';
});
