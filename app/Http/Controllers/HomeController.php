<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function mail()
    {
        $name = 'Begüm';
        Mail::to('begumkaratas18@gmail.com')->send(new SendMailable($name));
        return 'Email was sent';
    }
}
