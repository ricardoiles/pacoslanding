<?php

namespace PACOS\Http\Controllers;

use Illuminate\Http\Request;

class TengoPACOSController extends Controller
{
    public function index()
	{
	    return view('tengopacos');
	}
}
