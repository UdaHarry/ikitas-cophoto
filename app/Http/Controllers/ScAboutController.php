<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\ScAboutSambutan;
use App\ScAboutBest;
use App\ScAboutTeam;

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

    public function getListBest(){
        return Datatables::of(ScAboutBest::query())
               ->setRowId(function(ScAboutBest $best){
                    return $best->id;
                 })
               ->setRowAttr([
                    "align" => "center"
                 ])
               ->addColumn('title',function(ScAboutBest $best){
                    return $best->title;
                 })
               ->addColumn('deskripsi',function(ScAboutBest $best){
                    return $best->deskripsi;
                 })
               ->addColumn('action',function(ScAboutBest $best){
                return '<div class="button-list" >
                            <!-- Custom width modal -->
                            <button type="button" class="btn btn-sm btn-icon waves-effect waves-light btn-warning" onclick="editDataBest('.$best->id.');" ><i class="fa fa-wrench"></i></button>
                        
                            <button type="button" class="btn btn-sm btn-icon waves-effect waves-light btn-danger" onclick="deleteDataBest('.$best->id.');" ><i class="fas fa-trash-alt"></i></button>
                        </div>';
                })
               ->rawColumns(['action'])
               ->make(true);    
    }

    public function addBest(Request $request){
        $addBest = new ScAboutBest;
        $addBest->title = $request['add_title'];
        $addBest->deskripsi = $request['add_Keterangan'];
        $addBest->save();
        return redirect('/my-sambutan')->with('sukses', 'Suksess Menambahkan');
    }
    
    public function editBest($id){
        $editBest = ScAboutBest::find($id);
        echo json_encode($editBest);
    }

    public function updateBest(Request $request){
        $updateBest = ScAboutBest::find($request['id_best']);
        $updateBest->title = $request['edit_title'];
        $updateBest->deskripsi = $request['edit_Keterangan'];
        $updateBest->update();
        return redirect('/my-sambutan')->with('sukses', 'Update Suksess');
    }

    public function deleteBest($id){
        ScAboutBest::destroy($id);
        return response()->json(['done']);
    }

    public function team()
    {
        return view('admin.sc-team');
    }

    public function getListTeam(){
        return Datatables::of(ScAboutTeam::query())
               ->setRowId(function(ScAboutTeam $team){
                    return $team->id;
                 })
               ->setRowAttr([
                    "align" => "center"
                 ])
               ->addColumn('foto',function(ScAboutTeam $team){
                return "<img src='".$team->photo_link()."' style='150px' height='150px' />";
                 })
               ->addColumn('nama',function(ScAboutTeam $team){
                    return $team->nama;
                 })
               ->addColumn('jobdesk',function(ScAboutTeam $team){
                    return $team->jobdesk;
                 })
               ->addColumn('facebook',function(ScAboutTeam $team){
                      return $team->facebook;
                 })
               ->addColumn('instagram',function(ScAboutTeam $team){
                    return $team->instagram;
                 })  
               ->addColumn('twitter',function(ScAboutTeam $team){
                    return $team->twitter;
                 })
               ->addColumn('linkedin',function(ScAboutTeam $team){
                    return $team->linkedin;
                 }) 
               ->addColumn('action',function(ScAboutTeam $team){
                return '<div class="button-list" >
                            <!-- Custom width modal -->
                            <button type="button" class="btn btn-sm btn-icon waves-effect waves-light btn-warning"  onclick="editDataTeam('.$team->id.');"><i class="fa fa-wrench"></i></button>
                        
                            <button type="button" class="btn btn-sm btn-icon waves-effect waves-light btn-danger" onclick="deleteDataTeam('.$team->id.');"><i class="fas fa-trash-alt"></i></button>
                        </div>';
                })
               ->rawColumns(['foto','action'])
               ->make(true);    
    }
}
