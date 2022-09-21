<?php

use App\Models\Test;
use Illuminate\Http\Request;
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

Route::get('/text', function () {
    return view('text', [
        'heading' => 'Welcome to my test page',
        'data' => Test::all()
       
    ]);
});

// single data
Route::get('/single/{id}', function($id){
    return view('single',[
        'single'=>Test::find($id)
    ]);
});

// Route::get('/search', function (Request $request) {
//     return $request->name. ' ' . $request->age;
//     // dd($request->name. ' ' . $request->age);
    
// });

// Route::get('/posts', function(){
//   return response('<h1>Post</h1>',201)->header('Content-Type', 'application/json')->header('name','ali');
// });