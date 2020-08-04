<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kuman;

class KumanController extends Controller
{
    public function index()
    {
    	$kuman = Kuman::latest()->get();
    	return view('kuman.index', compact('kuman'));
    }
    public function create()
    {
        return view('kuman.create');
    }
    public function store(Request $request)
    {
        kuman::create($request->all());

        return redirect()->route('kuman.index');
    }

}
