<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeltugas;

class tugasController extends Controller
{
    public function home ()
    {
    	return view('robi');
    }
    public function table ()
    {
    	$a = modeltugas::All();
    	return view('table', compact('a'));
    }
    public function paragraf ()
    {
    	return view('paragraf');
    }
    public function custom1 ()
    {
    	return view('custom1');
    }
     public function custom2 ()
    {
    	return view('custom2');
    }
}
