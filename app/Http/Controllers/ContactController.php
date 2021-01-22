<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function foo\func;

class ContactController extends Controller
{
    public function show ()
    {
        return view('contact');
    }

    public function store ()
    {

        //Validation

        request()->validate(['email' => 'required|email']);

        // Send Email to Log : Storage > Log

        Mail::raw ('User requires attention', function ($message){
            $message->to(request('email'))
                ->subject('Hello There,
                I would like further support on a certain matter, please contact me as soon as possible.');

        });

        return  redirect('/contact')
            ->with('message', 'Email Sent! We will get back to you soon :) ');


    }



}
