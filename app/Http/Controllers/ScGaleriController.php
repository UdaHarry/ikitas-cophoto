<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScGaleriController extends Controller
{
    public function galeri()
    {
        return view('admin.sc-galeri');
    }
}
