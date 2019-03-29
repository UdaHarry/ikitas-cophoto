<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrDefaultController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
