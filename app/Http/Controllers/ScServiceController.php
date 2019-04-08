<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\ScService;
use App\User;

class ScServiceController extends Controller
{
    public function service()
    {
        $data['user'] = User::select('foto')->get();
        return view('admin.sc-service',$data);
        
    }

    public function getServiceList(){
        return Datatables::of(ScService::query())
               ->setRowId(function(ScService $service){
                    return $service->id;
                 })
               ->setRowAttr([
                    "align" => "center"
                 ])
               ->addColumn('icon',function(ScService $service){
                return '<h3>'.$service->icon.'</h3>';
                 })
               ->addColumn('service',function(ScService $service){
                    return $service->service;
                 })
               ->addColumn('keterangan',function(ScService $service){
                    return $service->keterangan;
                 })
               ->addColumn('action',function(ScService $service){
                return '<div class="button-list" >
                            <!-- Custom width modal -->
                            <button type="button" class="btn btn-sm btn-icon waves-effect waves-light btn-warning"  onclick="editDataService('.$service->id.');"><i class="fa fa-wrench"></i></button>
                        
                            <button type="button" class="btn btn-sm btn-icon waves-effect waves-light btn-danger" onclick="deleteDataService('.$service->id.');"><i class="fas fa-trash-alt"></i></button>
                        </div>';
                })
               ->rawColumns(['icon','action'])
               ->make(true);    
    }

    public function addService(Request $request){
        $addService = new ScService;
        $addService->icon = $request['addIcon'];
        $addService->service = $request['addService'];
        $addService->keterangan = $request['addKeterangan'];
        $addService->save();
        return redirect('/my-service')->with('sukses', 'Suksess Menambahkan');
    }

    public function editService($id){
        $service = ScService::find($id);
        echo json_encode($service);
    }

    public function updateService(Request $request){
        $updateService = ScService::find($request['id_service']);
        $updateService->icon = $request['edit_Icon'];
        $updateService->service = $request['edit_Service'];
        $updateService->keterangan = $request['edit_Keterangan'];
        $updateService->update();
        return redirect('/my-service')->with('sukses', 'Update Suksess');
    }

    public function deleteService($id){
        ScService::destroy($id);
        return response()->json(['done']);
    }
}
