<?php

use App\Http\Controllers\RentalPortalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Laravel-ready route for the rental portal dashboard. Once Laravel is fully
| installed, this route can render resources/views/rental-portal.blade.php.
|
*/

Route::get('/', [RentalPortalController::class, 'index'])->name('rental.portal');
