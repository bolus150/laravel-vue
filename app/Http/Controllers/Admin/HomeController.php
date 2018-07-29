<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class HomeController extends AdminController
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
