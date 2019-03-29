<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScContactController extends Controller
{
    public function kontak()
    {
        return view('admin.sc-kontak');
    }

    public function pesan()
    {
        return view('admin.sc-pesan');
    }
}
