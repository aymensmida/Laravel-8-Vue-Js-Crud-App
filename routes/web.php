<?php

use Illuminate\Support\Facades\Route;

    /*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/

Route::fallback(function () {
    return view('layout/app');
});


