<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use App\Jejak;
use App\Alumni;

class DashboardController extends Controller
{
    public function index(){
        $berita = count(Berita::all());
        $jejak = count(Jejak::all());
        $alumni = count(Alumni::all());
        return view("admin.component.dashboard.index",[
            "berita" => $berita,
            "jejak" => $jejak,
            "alumni" => $alumni,
        ]);
    }
}
