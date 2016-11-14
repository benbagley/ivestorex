<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function help()
    {
        return view('pages.help-center');
    }

    public function learn()
    {
        return view('pages.learn');
    }

    public function pricing() {
        return view('pages.pricing');
    }
}
