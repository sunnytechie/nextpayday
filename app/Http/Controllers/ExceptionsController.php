<?php

namespace App\Http\Controllers;

use App\Mail\ExceptionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ExceptionsController extends Controller
{
    public function notFound()
    {
        //send email to admin
        $email = "tech@nextpayday.co";
        Mail::to($email)->send(new ExceptionMail());

        //return view
        return view('errors.404');
    }

    public function internalServerError()
    {
        //send email to admin
        $email = "tech@nextpayday.co";
        Mail::to($email)->send(new ExceptionMail());

        //return view
        return view('errors.500');
    }
}
