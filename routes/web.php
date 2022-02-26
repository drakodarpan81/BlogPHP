<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PhotoController;

use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', HomeController::class)->name('home');

/* Cursos */
Route::resource('cursos', CursoController::class);

/* Nosotros */
Route::view('nosotros', 'nosotros')->name('nosotros');

/* Email */
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from Online Web Tutor',
        'body' => 'Test mail sent by Laravel 8 using SMTP.'
    ];
   
    Mail::to('gestorsistemaslesp@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent, please check your inbox.");
  });