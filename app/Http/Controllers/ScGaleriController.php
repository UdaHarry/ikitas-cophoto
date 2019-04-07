<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\ScGaleri;
use App\ScGaleriLabel;

class ScGaleriController extends Controller
{
    public function galeri()
    {   
        $data['label'] = ScGaleriLabel::get();
        return view('admin.sc-galeri',$data);
    }

    public function getGaleriList(){
        return Datatables::of(ScGaleri::query())
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
               ->addColumn('action',function(scGaleri $galeri){
                return '<div class="button-list" >
                            <!-- Custom width modal -->
                            <button type="button" class="btn btn-sm btn-icon waves-effect waves-light btn-warning"  onclick="editDataGaleri('.$galeri->id.');"><i class="fa fa-wrench"></i></button>
                        
                            <button type="button" class="btn btn-sm btn-icon waves-effect waves-light btn-danger" onclick="deleteDataGaleri('.$galeri->id.');"><i class="fas fa-trash-alt"></i></button>
                        </div>';
                })
               ->rawColumns(['foto','action'])
               ->make(true);    
    }

    public function editGaleri($id){
      $galeri = ScGaleri::find($id);
      echo json_encode($galeri);
    }

    public function deleteGaleri($id){
      ScGaleri::destroy($id);
      return response()->json(['done']);
    }

    public function updateGaleri(Request $request){
      $updateGaleri = ScGaleri::find($request['id']);
      if ($request->hasfile('edit_foto')) {
        $path = $request->file('edit_foto')->store('galeri');
        $updateGaleri->foto = "storage/".$path;
      }
      $updateGaleri->label = $request['edit_label'];
      $updateGaleri->quote = $request['edit_quote'];
      $updateGaleri->update();
      return redirect('/my-galeri')->with('sukses', 'Suksess Update');
    }

    public function addGaleri(Request $request){
        $addGaleri = new ScGaleri;
        if ($request->hasfile('foto')) {
          $path = $request->file('foto')->store('galeri');
          $addGaleri->foto = "storage/".$path;
        }
        $addGaleri->label = $request['label'];
        $addGaleri->quote = $request['quote'];
        $addGaleri->save();
        return redirect('/my-galeri')->with('sukses', 'Suksess Menambahkan');
    }

    public function getGaleriLabelList(){
        return Datatables::of(ScGaleriLabel::query())
               ->setRowId(function(ScGaleriLabel $Glabel){
                    return $Glabel->id;
                 })
               ->setRowAttr([
                    "align" => "center"
                 ])
               ->addColumn('label',function(ScGaleriLabel $Glabel){
                    return $Glabel->label;
                 })
               ->addColumn('action',function(ScGaleriLabel $Glabel){
                return '<div class="button-list" >
                            <!-- Custom width modal -->
                            <button type="button" class="btn btn-sm btn-icon waves-effect waves-light btn-warning"  onclick="editDataLabel('.$Glabel->id.');"><i class="fa fa-wrench"></i></button>
                        
                            <button type="button" class="btn btn-sm btn-icon waves-effect waves-light btn-danger" onclick="deleteDataLabel('.$Glabel->id.');"><i class="fas fa-trash-alt"></i></button>
                        </div>';
                })
                ->rawColumns(['action'])
               ->make(true);    
    }

    public function editLabel($id){
      $label = ScGaleriLabel::find($id);
      echo json_encode($label);
    }

    public function deleteLabel($id){
      ScGaleriLabel::destroy($id);
      return response()->json(['done']);
    }

    public function addLabel(Request $request){
      $addLabel = new ScGaleriLabel;
      $addLabel->label = $request['galeri_label'];
      $addLabel->save();
      return redirect('/my-galeri')->with('sukses', 'Suksess Menambahkan');
    }

    public function updateLabel(Request $request){
      $updateLabel = ScGaleriLabel::find($request['id_label']);
      $updateLabel->label = $request['edt_label'];
      $updateLabel->update();
      return redirect('/my-galeri')->with('sukses', 'Suksess Update');
    }
}
