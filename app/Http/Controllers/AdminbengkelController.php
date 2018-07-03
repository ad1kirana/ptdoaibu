<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminbengkelController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adminbengkel');
    }

    public function index(){
    	return view('adminbengkel');
    }
}
