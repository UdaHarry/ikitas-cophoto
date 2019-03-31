<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\scGaleri;

class ScGaleriController extends Controller
{
    public function galeri()
    {
        return view('admin.sc-galeri');
    }

    public function getGaleriList(){
        return Datatables::of(scGaleri::query())
               ->setRowId(function(scGaleri $galeri){
                    return $galeri->id;
                 })
               ->setRowAttr([
                    "align" => "center"
                 ])
               ->addColumn('foto',function(scGaleri $galeri){
                return "<img src='".$galeri->photo_link()."' style='150px' height='150px' />";
                 })
               ->addColumn('label',function(scGaleri $galeri){
                    return $galeri->label;
                 })
               ->addColumn('quote',function(scGaleri $galeri){
                    return $galeri->quote;
                 })
               ->addColumn('action','admin.action-button-galeri')
               ->rawColumns(['foto','action'])
               ->make(true);    
    }

    public function addGaleri(Request $request){
        dd($request->all());
    }
}
