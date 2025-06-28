<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetReportController;

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


Route::get('/report', [AssetReportController::class, 'index'])->name('report.index');
Route::get('/report/download', [AssetReportController::class, 'downloadPDF'])->name('report.download');
