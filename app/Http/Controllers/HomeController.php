<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Jejak;
use App\Alumni;

class HomeController extends Controller
{
    public function index(){
        $berita = Berita::orderBy("created_at", "desc")->take(6)->get();
        $jejak = Jejak::orderBy("created_at", "desc")->take(10)->get();
        return view("welcome", ["berita"=> $berita, "jejak"=>$jejak]);
    }
    public function article($judul){
        $berita = Berita::where("judul", $judul)->first();
        return view("component.article.index",["berita" =>$berita]);
    }
    public function news(){
        $berita = Berita::orderBy("created_at", "desc")->get();
        return view("component.news.index", ["berita"=>$berita]);
    }
    public function jejak($judul){
        $jejak = Jejak::where("judul", $judul)->first();
        return view("component.article.index", ["berita" => $jejak]);
    }
    public function jejak_index(){
        $jejak = Jejak::orderBy("created_at", "desc")->get();
        return view("component.jejak.index",["jejak"=>$jejak]);
    }
    public function find(Request $req){
        $alumni = Alumni::where("nim", $req->input('nim'))->first();
        if(isset($alumni)){
            if($alumni->nama == $req->input("nama") && $alumni->nim == $req->input('nim') && $alumni->fakultas == $req->input("fakultas") && $alumni->tahun == $req->input("tahun")){
                return view("component.find.index",["alumni" => $alumni]);
            }else{
                return view("component.find.index",["alumni" => null]);
            }
        }else{
            return view("component.find.index",["alumni" => null]);
        }
    }
}
