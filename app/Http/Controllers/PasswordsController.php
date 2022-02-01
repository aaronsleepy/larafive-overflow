<?php

namespace App\Http\Controllers;

class PasswordsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getRemind() {
        return view('passwords.remind');
    }
}
