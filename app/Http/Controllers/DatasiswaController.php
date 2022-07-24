<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Datasiswa; //import dari model

class DatasiswaController extends Controller
{
    public function index(){

        $data = Datasiswa::all(); //ambil data dari model
        return view('/siswa', compact('data'));
    }
    public function tambahdata(){
        return view('/tambahdata');
    }
    public function insertdata(Request $request){
         

        $insert = new Datasiswa;
        $image = null;
           
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/fotosiswa',$name);
            $image = $name;
        }else{
            $image = $request->image;
        }
        $insert->nama = $request->nama;
        $insert->jeniskelamin = $request->jeniskelamin;
        $insert->notelpon = $request->notelpon;
        $insert->foto = $image;

        // return $insert;
        $insert->save();
        return redirect()->route('siswa')->with('success','data berhasil ditambahkan');
        
    }

    public function tampildata($id){
    $data = Datasiswa::find($id);

    return view('tampildata',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $update = new Datasiswa;
        $update = Datasiswa::find($id);
        $image = $update->foto;           
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/fotosiswa',$name);
            $image = $name;
        }else{
            $image = $update->foto;
        }
        $update->nama = $request->nama;
        $update->jeniskelamin = $request->jeniskelamin;
        $update->notelpon = $request->notelpon;
        $update->foto = $image;
        $update->save();
        return redirect()->route('siswa')->with('success','data berhasil diupdate');
    }
    public function delete($id){
        $data = Datasiswa::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('success','data berhasil dihapus');
    }
}
