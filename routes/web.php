<?php

use App\Http\Controllers\IdeaController;
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

Route::get('/',[IdeaController::class, 'index'])->name('idea.index');

Route::view('/idea', 'show');
Route::get('/dashboard', function() {
    return 123;
})->name('dashboard');

require __DIR__.'/auth.php';
