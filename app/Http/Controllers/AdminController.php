<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Dashboard Home Page.
    */
    public function index()
    {
        return "dfd";
        return view('admin.home');
    }
}
