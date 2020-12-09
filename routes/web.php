<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
Route::get('/registration',[DataprintController::class, 'index']);
Route::post('/registration',[DataprintController::class, 'store'])->name('store');
Route::get('/download',[DataprintController::class, 'show'])->name('show');
Route::get('/downloading',[DataprintController::class, 'download'])->name('download');
