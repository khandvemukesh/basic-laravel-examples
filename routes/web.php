<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//               ********* Laravel Route Contraints *********
// Route::get('/news/{id?}/comment/{commentId}', function (string $id=null, string $commentId=null) {
//      if($id){
//            return '<h1>News Id = '.$id.'  '.$commentId.'<h1> ';}
//            else{
//             return'<h1>No Id Found!<h1>';
//             }
// })->whereAlphaNumeric('id');

// Laravel Name Routes

// Route::get('/about-us', function() {
//            return view('about');   
// })->name('about');
// Route::get('/news', function() {
//            return view('news');     
// })->name('news');

//Redirect Page to Another WebPage
// Route::redirect('/about-us', '/test');

// Route::view('/news', 'news');

// Route::fallback(function(){
//   return '<h2> Page Not Found!</h2>';
// });
