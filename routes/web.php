<?php

use App\Http\Controllers\Mails\AuthMailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('enviar-email', [AuthMailController::class, 'sendRegisterMail']);
