<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jejak;

class JejakController extends Controller
{
    public function index(){
        $jejak = Jejak::all();
        return view("admin.component.jejak.index",["jejak" => $jejak]);
    }
    public function edit($id){
        $jejak = Jejak::find($id);
        return view("admin.component.jejak.edit",["jejak"=>$jejak]);
    }
    public function add(){
        return view("admin.component.jejak.add");
    }
    public function store(Request $req){
        $gambar = $req->file("gambar");
        $gambar->move("assets/img/jejak/", $gambar->getClientOriginalName());
        Jejak::create([
            "judul" => $req->input("judul"),
            "deskripsi" => $req->input("deskripsi"),
            "gambar" => $req->file("gambar")->getClientOriginalName()
        ]);
        return redirect()->route("admin.jejak.index");
    }
    public function update(Request $req, $id){
        $jejak = Jejak::find($id);
        if($req->hasfile("gambar")){
            $gambar = $req->file("gambar");
            \File::delete("assets/img/jejak/".$jejak->gambar);
            $gambar->move("assets/img/jejak/", $gambar->getClientOriginalName());
            $jejak->judul = $req->input("judul");
            $jejak->deskripsi = $req->input("deskripsi");
            $jejak->gambar = $gambar->getClientOriginalName();
            $jejak->save();
        }else{
            $jejak->judul = $req->input('judul');
            $jejak->deskripsi = $req->input("deskripsi");
            $jejak->save();
        }
        return redirect()->route("admin.jejak.index");
    }
    public function delete($id){
        Jejak::find($id)->delete();
        return redirect()->route("admin.jejak.index");
    }
}
