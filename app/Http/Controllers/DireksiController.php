<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DireksiController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('direksi');
    }

    public function index(){
    	return view('direksi');
    }
}
