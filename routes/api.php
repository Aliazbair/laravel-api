<?php

use App\Http\Controllers\InformationsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/information',[InformationsController::class,'index']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data', function () {
    return response()->json([
        'data' => [
            [
                'title' => 'post one'
            ],
            [
                'title' => 'post tow'
            ],
            [
                'title' => 'post three'
            ],
            [
                'title' => 'post four'
            ],

        ],
        'count'=>3,
        'pages'=>27,
        'info'=>[
            'version' => '1.0.1',
            'date' => '2017-2022'
        ]
    ]);
});
