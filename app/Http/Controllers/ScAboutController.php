<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\ScAboutSambutan;

class ScAboutController extends Controller
{
    public function sambutan()
    {
        return view('admin.sc-sambutan');
    }

    public function editSambutan($id){
        $editSambutan = ScAboutSambutan::find($id);
        echo json_encode($editSambutan);
    }

    public function updateSambutan(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'img_sabutan' => 'mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
            return redirect('my-sambutan')->with('gagal', 'Update Gagal');
        } else{
            $updateOther = ScAboutSambutan::find($id);
            if ($request->hasfile('img_sabutan')) {
                $path = $request->file('img_sabutan')->store('about');
                $updateOther->img_sambutan = "storage/".$path;
            }
            $updateOther->title    = $request['sam_title'];
            $updateOther->deskripsi    = $request['sam_deskripsi'];
            $updateOther->update();
            return redirect('my-sambutan')->with('sukses', 'Update Suksess');
        }
    }

    public function listBest($id){
        $service = ScService::find($id);
        echo json_encode($service);
    }

    public function team()
    {
        return view('admin.sc-team');
    }
}
