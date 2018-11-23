<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
	public function __construct() {
        $this->middleware('auth');
    }
    public function ide()
    {
    	return view('index');
    }
}
