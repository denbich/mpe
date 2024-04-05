<?php

namespace App\Http\Controllers\citizen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HCitizenController extends Controller
{
    public function dashboard()
    {
        return view('citizen.home.dashboard'); // Updated view path
    }

    public function profile()
    {
        return view('citizen.home.profile'); // Updated view path
    }

    public function settings()
    {
        return view('citizen.home.settings'); // Updated view path
    }

    public function cars()
    {
        return view('citizen.cars.index'); // Updated view path
    }

    public function cups()
    {
        return view('citizen.cup.index'); // Updated view path
    }

    public function bike()
    {
        return view('citizen.bike.index'); // Updated view path
    }

    public function store()
    {
        return view('citizen.store'); // Updated view path
    }
}
