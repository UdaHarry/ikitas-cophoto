<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSettingController extends Controller
{
    public function setting(){
        $data['user'] = User::select('foto')->get();
        return view('admin.sc-setting',$data);
    }

    public function editSetting($id)
    {
        $setting = User::find($id);
        echo json_encode($setting);
    }

    public function updateSetting(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'img-foto' => 'mimes:png',
        ]);
        if ($validator->fails()) {
            return redirect('/my-setting')->with('gagal', 'Update Gagal');
        } else{
            // dd($request->all());
            $setting = User::find($id);
            if ($request->hasfile('img-foto')) {
                $path = $request->file('img-foto')->store('user');
                $setting->foto = "storage/".$path;
            }
            if(!empty($request['newpass'])){
                if (!Hash::check($request['oldpass'], $setting->password)) {
                    return redirect('/my-setting')->with('gagal', 'Password Lama Salah');
                }
                if($request['newpass'] !== $request['verpass']){
                    return redirect('/my-setting')->with('gagal', 'Password Verifikasi Sesuai');
                }
                $setting->password = bcrypt($request['newpass']);
            }
            $setting->update();
            return redirect('/my-setting')->with('sukses', 'Update Suksess');
        }
    }
}
