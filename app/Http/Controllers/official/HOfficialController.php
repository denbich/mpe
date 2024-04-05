<?php

namespace App\Http\Controllers\official;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HOfficialController extends Controller
{
    public function dashboard()
    {
        return view('official.home.dashboard');
    }

    public function profile()
    {
        return view('official.home.profile');
    }

    public function settings()
    {
        return view('official.home.settings');
    }


}
