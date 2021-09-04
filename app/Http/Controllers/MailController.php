<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){

        $detail = [
            'title'=> 'Hello Mohamed',
            'body' => 'Hello how are you i m fine '
        ];
       
        Mail::to('jamesgossling97@gmail.com')->send(new TestMail($detail));
       
        return 'email sent';
    }
}
