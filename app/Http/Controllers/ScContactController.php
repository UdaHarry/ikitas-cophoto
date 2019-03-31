<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ScKontak;

class ScContactController extends Controller
{
    public function kontak()
    {
        return view('admin.sc-kontak');
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
        return redirect('/my-admin/secondary-layout/kontak')->with('sukses', 'Update Suksess');
    }

}
