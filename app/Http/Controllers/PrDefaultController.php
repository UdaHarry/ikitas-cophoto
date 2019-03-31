<?php

namespace App\Http\Controllers;

use Validator;
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

    public function updateTop(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'img-landing' => 'mimes:jpeg,jpg,png,gif',
            'img-banner' => 'mimes:jpeg,jpg,png,gif',
        ]);
        
        if ($validator->fails()) {
            return redirect('my-admin')->with('gagal', 'Update Gagal');
        } else{
            $default = PrDefaultTop::find($id);
            if ($request->hasfile('img-landing')) {
                $path = $request->file('img-landing')->store('default');
                $default->gambar_landing = "storage/".$path;
            }
            if ($request->hasfile('img-banner')) {
                $path = $request->file('img-banner')->store('default');
                $default->gambar_banner = "storage/".$path;
            }
            $default->update();
            return redirect('my-admin')->with('sukses', 'Update Suksess');
        }
    }

    public function editOther($id){
        $other = PrDefaultOther::find($id);
        echo json_encode($other);
    }

    public function updateOther(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'img-icon' => 'mimes:png',
        ]);

        if ($validator->fails()) {
            return redirect('my-admin')->with('gagal', 'Update Gagal');
        } else{
            $other = PrDefaultOther::find($id);
            if ($request->hasfile('img-icon')) {
                $path = $request->file('img-icon')->store('default');
                $other->webicon = "storage/".$path;
            }
            $other->webname    = $request['webname'];
            $other->about    = $request['about-text'];
            $other->fb    = $request['fb'];
            $other->twit    = $request['twit'];
            $other->ig    = $request['ig'];
            $other->linked    = $request['linked'];
            $other->update();
            return redirect('my-admin')->with('sukses', 'Update Suksess');
        }
    }
}
