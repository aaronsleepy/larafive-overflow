<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\ConsoleOutput;

class PasswordsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function getRemind() {
        return view('passwords.remind');
    }

    public function postRemind(Request $request)
    {
        $this->validate($request, [
           'email' => 'required|email|exists:users'
        ]);
        $email = $request->get('email');
        $token = str_random(64);
        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        (new ConsoleOutput())->writeln(route('reset.create', $token));

        return redirect('home');
    }

    public function getReset($token = null)
    {
        return view('passwords.reset', 'token');
    }
}
