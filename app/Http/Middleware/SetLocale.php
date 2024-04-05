<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        if (session('locale') == null) {
            App::setLocale('pl');
            session(['locale' => 'pl']);
        } else if (session('locale') != null) {
            App::setLocale(Session::get('locale'));
        } else if (Auth::check()) {
            App::setLocale(strtolower(Auth::user()->country));
            session(['locale' => Auth::user()->country]);
        } else {
            App::setLocale('pl');
            session(['locale' => 'pl']);
        }

        return $next($request);
    }
}
