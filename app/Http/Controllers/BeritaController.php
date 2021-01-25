<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use File;

class BeritaController extends Controller
{
    public function index(){
        $berita = Berita::all();
        return view("admin.component.berita.index",["berita" => $berita]);
    }
    public function edit($id){
        $berita = Berita::find($id);
        return view("admin.component.berita.edit", ["berita" => $berita]);
    }
    public function add(Request $req){
        return view("admin.component.berita.add");
    }
    public function store(Request $req){
        Berita::create([
            "judul" => $req->input("judul"),
            "deskripsi" => $req->input("deskripsi"),
            "gambar" => $req->file("gambar")->getClientOriginalName(),
        ]);
        $req->file("gambar")->move("assets/img/berita/", $req->file("gambar")->getClientOriginalName());
        return redirect()->route("admin.berita.index");
    }
    public function update(Request $req, $id){
        $berita = Berita::find($id);
        if($req->hasfile("gambar")){
            $gambar = $req->file("gambar");
            File::delete("assets/img/berita/".$berita->gambar);
            $gambar->move("assets/img/berita/",$gambar->getClientOriginalName());
            $berita->judul = $req->input("judul");
            $berita->deskripsi = $req->input("deskripsi");
            $berita->gambar = $gambar->getClientOriginalName();
            $berita->save();
            return redirect()->route("admin.berita.index");
        }else{
            $berita->judul = $req->input("judul");
            $berita->deskripsi = $req->input("deskripsi");
            $berita->save();
            return redirect()->route("admin.berita.index");;
        }
    }
    public function delete($id){
        Berita::find($id)->delete();
        return redirect()->route("admin.berita.index");
    }
}
