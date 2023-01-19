<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadFileController;
 
 
Route::get('/', [DownloadFileController::class, 'index']);
Route::get('get/{file_name}', [DownloadFileController::class, 'downloadFile']);

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

// Route::get('/', function () {
//     return view('welcome');
// });
