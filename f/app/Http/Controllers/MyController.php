<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function result(Request $request)
    {
        $value = $request->input('value');

        return view('welcome', compact('value'));
    }
}
