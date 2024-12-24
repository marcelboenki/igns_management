<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Tcg\TcgController;
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
    return view('startscreen');
})->middleware(['auth', 'verified'])->name('startscreen');


Route::prefix('app')->name('app.')->group(function() {
    Route::get('/tradingcardgame', [TcgController::class, 'index'])->name('tcg.index');
});


require __DIR__.'/auth.php';
