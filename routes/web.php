<?php
use Illuminate\Support\Facades\Route;

/*

Route::get('/',fn()=>"hello");
Route::get('/home',fn()=>"home page");
Route::get('/products',fn()=>"product page");
Route::get('/about',fn()=>"about page");
Route::fallback(fn()=>"<h1><b>404</b>Not Found</h1>");

  */

Route::get('/',fn()=>view('welcome'));
Route::get('/home',fn()=>view('pages.home'));
Route::get('/about',fn()=>view('pages.main.about'));
Route::get('/product',fn()=>view('pages.main.product'));
Route::fallback(function (){
     output(sayError());
});



/*   closure vs concrete   */
$user="mgmg";
//function show(){
//    echo "hell".$user;
//}
$aa=function () use($user){
    echo "Hey I'm anonymous {$user}";
}            ;


function sayError(){
    echo "<h1>custom error</h1>"     ;
};
function output($func){
    $func();
}




//show();
//$aa();
