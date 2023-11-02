<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CompanyController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix"=>"todo"],function(){
    Route::get("/get/{id}",[TodoController::class,"get"]);
    Route::get("/gets",[TodoController::class,"gets"]);
    Route::post("/store",[TodoController::class,"store"]);
    Route::put("/update/{id}",[TodoController::class,"update"]);
    Route::delete("/delete/{id}",[TodoController::class,"delete"]);
});

Route::group(["prefix"=>"role"],function(){
    Route::get("/get/{id}",[RoleController::class,"get"]);
    Route::get("/gets",[RoleController::class,"gets"]);
    Route::post("/store",[RoleController::class,"store"]);
    Route::put("/update/{id}",[RoleController::class,"update"]);
    Route::delete("/delete/{id}",[RoleController::class,"delete"]);
});

Route::group(["prefix"=>"company"],function(){
    Route::get("/get/{id}",[CompanyController::class,"get"]);
    Route::get("/gets",[CompanyController::class,"gets"]);
    Route::post("/store",[CompanyController::class,"store"]);
    Route::put("/update/{id}",[CompanyController::class,"update"]);
    Route::delete("/delete/{id}",[CompanyController::class,"delete"]);
});
