<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->addAuthorization();
    }

    protected function addAuthorization() {
        $this->middleware('guest', [
            'except' => 'destroy'
        ]);
    }

    /**
     * 로그인 Form View 반환
     *
     * @return Factory|Application|View
     */
    public function create()
    {
        return view('sessions.create');
    }
}
