<?php

namespace PACOS\Http\Controllers;

use Illuminate\Http\Request;

class QuienesSomosController extends Controller
{
    public function index()
	{
	    return view('quienessomos');
	}
}
