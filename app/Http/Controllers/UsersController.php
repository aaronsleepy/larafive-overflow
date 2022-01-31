<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;

class UsersController extends Controller
{
    /**
     * 사용자 가입 Form View 조회
     *
     * @return Factory|Application|View
     */
    public function create()
    {
        return view('users.create');
    }
}
