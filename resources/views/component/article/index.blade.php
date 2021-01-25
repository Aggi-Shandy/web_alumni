@extends('layouts.master')
@section("title", $berita->judul)
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <h2 class="mb-3">{{$berita->judul}}</h2>
                    <p>
                        <img src="{{asset('assets/img/berita/'.$berita->gambar)}}" alt="" class="img-fluid">
                    </p>
                    <p>{{$berita->deskripsi}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
