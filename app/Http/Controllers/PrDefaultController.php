<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrDefaultTop;
use App\PrDefaultOther;

class PrDefaultController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function editTop($id){
        $top = PrDefaultTop::find($id);
        echo json_encode($top);
    }

    public function updateTop($id){

    }

    public function editOther($id){
        $top = PrDefaultOther::find($id);
        echo json_encode($top);
    }
}
