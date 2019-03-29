<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScAboutController extends Controller
{
    public function sambutan()
    {
        return view('admin.sc-sambutan');
    }

    public function pengenalan()
    {
        return view('admin.sc-pengenalan');
    }

    public function team()
    {
        return view('admin.sc-team');
    }
}
