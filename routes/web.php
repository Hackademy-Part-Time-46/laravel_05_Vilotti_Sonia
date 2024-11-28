<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/',[MailController::class,'index'])->name('index');
Route::get('contact-us',[MailController::class, 'contactUs'])->name('contact-us');
Route::get('services/{services}',[MailController::class, 'show'])->name('show');
Route::post('contact-us',[MailController::class, 'store'])->name('store');
