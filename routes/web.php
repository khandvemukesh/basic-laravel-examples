<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JoinTableController;
use App\Http\Controllers\UnionTableController;

Route::get('/tableTwoJoin', [JoinTableController::class,'showCityAndUser']);
Route::get('/tableTwoUnion', [UnionTableController::class,'showUnionAndTwo']);
Route::controller(UserController::class)->group(function () {
Route::get('/','showUsers')->name('home');
Route::get('/user/{id}', 'showUserSingleRecord')->name('view.user');
Route::post('/add','addUser')->name('addUser');
Route::post('/updateuser/{id}', 'updateUser')->name('user.update');
Route::get('/updatepage/{id}', 'updatePage')->name('view.updatePage');
Route::get('/deleteuser/{id}', 'deleteUser')->name('view.delete');});
// Route::get('/about', function () {
//     return view('about');
// });
Route::view('addUser', '/addUser');
Route::get('/service', function () {
    return view('service');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});


// How Declare Controller In Routes

Route::controller(PageController::class)->group(function () {
Route::get('/demo', 'show')->name('demo');
Route::get('/blog', 'showBlog')->name('blog');
Route::get('/about/{id?}', 'showAbout')->name('about');

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
