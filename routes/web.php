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
Route::get('/test1', function () {
    return 'hello';
});

// route parameters

Route::get('/test2/{id}', function ($id) {
    return $id;
});

Route::get('/test3/{id?}', function () {
    return 'welcome';
});

//route name

Route::get('/show-number/{id}', function ($id) {
    return $id;
}) ->name('a') ;

Route::get('/show-string/{id?}', function () {
    return 'welcome';
})->name('b');


// namespace

//Route::namespace('App\Http\Controllers\Front')->group(function (){
//    // all routes only access controller or methods in folder name Front
//   Route::get('/users','UserController@showUserName');
//});

// groups
//Route::prefix('users')->group(function (){
//    Route::get('show','App\Http\Controllers\Front\UserController@showUserName');
//});

// groups with middleware
Route::group(['prefix'=>'users','middleware' => 'auth'],function (){
    Route::get('/',function (){
        return 'worke';
    });
    Route::get('show','App\Http\Controllers\Front\UserController@showUserName');

});

// middleware
Route::get('check',function (){
    return 'middleware';
}) -> middleware('auth') ;

Route::group(['namespace'=>'App\Http\Controllers\Admin'],function (){
    Route::get('second','SecondController@showString')->middleware('auth');
    Route::get('second1','SecondController@showString1');
    Route::get('second2','SecondController@showString2');
    Route::get('second3','SecondController@showString3');
});

Route::get('login',function (){
    return 'must be login to access this Route';
})-> name('login');

Route::get('secondss','App\Http\Controllers\Admin\SecondController@showString');

//Resource
Route::resource('news','App\Http\Controllers\NewsController');
//
//Route::get('news','App\Http\Controllers\NewsControoler@show');
//Route::post('news','App\Http\Controllers\NewsControoler@store');
//Route::post('news/create','App\Http\Controllers\NewsControoler@create');
//Route::post('news/{id}/edit','App\Http\Controllers\NewsControoler@edit');
//Route::post('update/{id}','App\Http\Controllers\NewsControoler@update');
//Route::delete('news/{id}','App\Http\Controllers\NewsControoler@delete');

Route::get('index1','App\Http\Controllers\Front\UserController@getIndex');

// send data to view
Route::get('/welcome',function (){
    // first way
    $data=[];
    $data['id']=121;
    $data['name']='Abdullah Zaid';
    return view('welcome',$data);
    // second way
        // only on variable
//    return view('welcome') => with('id',121);
        // multiple variable
//    return view('welcome')->with(['id' => 121,'name' => 'Abdullah Zaid']);
});


Route::get('landing',function (){
    return view('landing');
});

Route::get('about',function (){
    return view('about');
});
