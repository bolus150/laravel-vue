<?php

namespace App\Http\Controllers\Admin;

use App\User;

class UsersController extends AdminController
{
    public function __construct()
    {
        $this->middleware('isAdmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('Admin.home', compact('users'));
    }
}
