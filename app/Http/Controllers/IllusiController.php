<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Illusi;

class IllusiController extends Controller
{
    public function index ()
    {
    	$illusi = Illusi::latest()->get();
    	return view('illusi.index', compact('illusi'));
    }
}
