<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScServiceController extends Controller
{
    public function service()
    {
        return view('admin.sc-service');
    }
}
