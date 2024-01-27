<?php
//web

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tp2Controller ;
use App\Http\Controllers\FileController ;
use App\Http\Controllers\UserController;
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
// use App\Http\Controllers\helloController ;

// Route::get('/{nom}/{prenom}', [helloController :: class , "index"]);
// Route ::redirect("/{nom}/{prenom}" , "login" , 301) ;
// Route::get('/reda', function () {
//     return view('Hello');
// });
// Route::resource('/product', ProductController::class);

// Route::get('/', [FileController::class, 'showDownloadButton']);
// Route::get('/download-file', [FileController::class, 'downloadFile'])->name('download.file');
// Route::get('/Download', [TestController::class, 'Download'])->name('Download');
// Route::get('/Download', [TestController::class, 'downloads'])->name('downloads');
// Route::get('/', [TestController::class, 'Form']);
// use App\Http\Controllers\FileController1;

// Route::get('/file/form', [FileController1::class, 'showForm']);
// Route::post('/file/upload', [FileController1::class, 'uploadFile'])->name('file.upload');
// Route::get('/file/download/{filename}', [FileController1::class, 'downloadFile'])->name('file.download');
// Route::get('/', [UserController :: class ,'show']);
// Route::post('/upload', [UserController :: class ,'insert'])->name('insert.file');
// Route::get('/d', [UserController :: class ,'download'])->name('download.file');
Route::resource('/product',Tp2Controller::class);