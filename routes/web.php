<?php
use App\Http\Controllers\regionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\villeController;
use App\Http\Controllers\établissementController;
use App\Http\Controllers\formateurController;
use App\Http\Controllers\metierController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('/regions', regionController::class);
Route::resource('/villes', villeController::class);
Route::resource('/établissements', établissementController::class);
Route::resource('/metiers', metierController::class);
Route::resource('/formateurs', formateurController::class);
require __DIR__.'/auth.php';
