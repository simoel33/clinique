<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\UploadfileController;

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

Route::get('/medecins',[App\Http\Controllers\MedecinController::class,'getAllMedecins'])->name('all.medecins');
Route::get('/medecin/{id}',[App\Http\Controllers\MedecinController::class,'getMedcinWithid'])->name('id.medecins');
Route::get('/delete/{id}',[App\Http\Controllers\MedecinController::class,'deleteMedcinWithid'])->name('delete.medecins');
Route::get('/addmedecin',[App\Http\Controllers\MedecinController::class,'viewaddMedcin'])->name('viewadd.medecin');
Route::post('/addmedecin',[App\Http\Controllers\MedecinController::class,'addmedecin'])->name('add.medecin');
Route::get('/edit/{id}',[App\Http\Controllers\MedecinController::class,'editmedecin'])->name('edit.medecin');
Route::post('/edit',[App\Http\Controllers\MedecinController::class,'updatemedecin'])->name('update.medecin');
Route::get('/jointest',[App\Http\Controllers\MedecinController::class,'joinmedecin'])->name('join.test');
Route::get('/allfrommodel',[App\Http\Controllers\MedecinController::class,'getAllfromModel'])->name('all.model');
Route::get('/users',[PaginationController::class,'allUsers'])->name('all.users');
Route::get('/upload',[UploadfileController::class,'upload'])->name('upload.file');
Route::post('/upload',[UploadfileController::class,'uploadFile'])->name('up.file');
Route::get('/send',[MailController::class,'sendMail'])->name('email.test');




