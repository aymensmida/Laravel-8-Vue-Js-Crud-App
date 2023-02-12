<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


    /*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------

*/

Route::middleware('api')->group(function () {
    Route::get('allbooks', [App\Http\Controllers\BookController::class,'index']);
    Route::get('book{id}', [App\Http\Controllers\BookController::class,'show']);
    Route::post('update{id}', [App\Http\Controllers\BookController::class,'update']);
    Route::post('store', [App\Http\Controllers\BookController::class,'store']);
    Route::delete('delete{id}', [App\Http\Controllers\BookController::class,'destroy']);
});

