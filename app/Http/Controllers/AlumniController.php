<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumni;

class AlumniController extends Controller
{
    public function index(){
        $alumni = Alumni::all();
        return view("admin.component.alumni.index",["alumni" => $alumni]);
    }
    public function edit($id){
        $alumni = Alumni::find($id);
        return view("admin.component.alumni.edit",["alumni"=>$alumni]);
    }
    public function add(){
        return view("admin.component.alumni.add");
    }
    public function store(Request $req){
        $foto = $req->file("foto");
        $foto->move("assets/img/alumni/",$foto->getClientOriginalName());
        Alumni::create([
            "foto" => $foto->getClientOriginalName(),
            "nama" => $req->input("nama"),
            "nim" => $req->input("nim"),
            "fakultas" => $req->input("fakultas"),
            "handphone" => $req->input("handphone"),
            "lahir" => $req->input('lahir'),
            "tahun" => $req->input("tahun"),
        ]);
        return redirect()->route("admin.alumni.index");
    }
    public function update(Request $req, $id){
        $alumni = Alumni::find($id);
        if($req->hasfile("foto")){
            $foto = $req->file("foto");
            \File::delete("assets/img/alumni/".$alumni->foto);
            $foto->move("assets/img/alumni/",$foto->getClientOriginalName());
            $alumni->foto = $foto->getClientOriginalName();
            $alumni->nama = $req->input("nama");
            $alumni->nim = $req->input("nim");
            $alumni->fakultas = $req->input("fakultas");
            $alumni->handphone = $req->input("handphone");
            $alumni->tahun = $req->input("tahun");
            $alumni->lahir = $req->input("lahir");
            $alumni->save();
        }else{
            $alumni->nama = $req->input("nama");
            $alumni->nim = $req->input("nim");
            $alumni->fakultas = $req->input("fakultas");
            $alumni->handphone = $req->input("handphone");
            $alumni->tahun = $req->input("tahun");
            $alumni->lahir = $req->input("lahir");
            $alumni->save();
        }
        return redirect()->route("admin.alumni.index");
    }
    public function delete($id){
        Alumni::find($id)->delete();
        return redirect()->route("admin.alumni.index");
    }
}
