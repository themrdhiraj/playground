<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TractorController extends Controller
{
    public function index()
    {
        return view('tractor_new.index');
    }
}
