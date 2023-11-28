<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return 'Welcome to test page';
});

Route::get('test1/{id}', function ($id) {
    return 'Welcome to test page. The id is:    '.$id;
});

Route::get('test2/{id?}', function ($id = 0) {
    return 'The id is:    '.$id;
})->whereNumber('id');

Route::get('test4/{name?}', function ($name = null) {
    return 'The name is:    '.$name;
})->whereAlpha('name');

Route::get('test3/{id?}', function ($id = 0) {
    return 'The id is:    '.$id;
})->where(['id'=>'[0-9a-zA-Z]+']);

Route::get('test5/{id?}/{name?}', function (int $id = null, string $name = null) {
    return 'The Age is: ' . $id . '<br>And the Name is: ' . $name;
})->where(['id'=>'[0-9]+', 'name'=>'[a-zA-Z]+']);

Route::get('product/{category}', function ($cat) {
    return 'The Category is:    '.$cat;
})->whereIn('category',['laptop','pc','mobile']);

Route::get('w3school', function(){
    //return 'try';
    return view('w3school');
});


Route::get('about', function(){
    //return 'About Page.';
    return view('about');
});
Route::get('contact', function(){
    return 'Contact Us Page.';
});
Route::prefix('blog')->group(function(){
    Route::get('scince', function(){
        return 'Science Page.';
    });
    Route::get('sport', function(){
        return 'Sport Page.';
    });
    Route::get('math', function(){
        return 'Math Page.';
    });
    Route::get('medical', function(){
        return 'Medical Page.';
    });
    Route::get('/', function(){
        return 'Blog Page';
        //return view('test');
    });
});

/*Route::fallback(function(){
    //return "Not Found.";
    return redirect('/');
});*/