<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterEMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthMailController extends Controller
{
    public function sendRegisterMail(){
        $user = new User();
        $user->name = 'Diego';

        $registerEmail = new RegisterEmail($user);

        //return $registerEmail;

        Mail::to('diego_asms@hotmail.com')->send($registerEmail);
    }
}
