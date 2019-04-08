<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ScKontak;
use App\User;

class ScContactController extends Controller
{
    public function kontak()
    {
        $data['user'] = User::select('foto')->get();
        return view('admin.sc-kontak',$data);
    }

    public function editKontak($id)
    {
        $kontak = ScKontak::find($id);
        echo json_encode($kontak);
    }

    public function updateKontak(Request $request, $id)
    {
        $kontak = ScKontak::find($id);
        $kontak->update($request->all());
        return redirect('/my-kontak')->with('sukses', 'Update Suksess');
    }

}
