<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }

    public function soon()
    {
        return view('coming_soon');
    }
}
