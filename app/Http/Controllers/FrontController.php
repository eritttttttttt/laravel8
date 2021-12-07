<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function hello($id)
    {
        $name = 'alien';
        return view('hello', compact('name', 'id'));
    }
}
