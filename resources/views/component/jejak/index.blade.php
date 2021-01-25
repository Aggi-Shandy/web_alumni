@extends('layouts.master')
@section("title", 'Jejak Alumni')
@section('content')

<section class="ftco-section">
  <div class="container">
    <div class="row no-gutters justify-content-center mb-4">
      <div class="col-md-6 text-center heading-section ftco-animate">
        <span class="subheading">Alumni STMIK</span>
        <h2 class="mb-4">Jejak Alumni</h2>
      </div>
    </div>
    <div class="row">
        @foreach($jejak as $j)
            <div class="col-md-6 col-lg-4 ftco-animate">
                <div class="blog-entry">
                    <a href="{{route('home.jejak',$j->judul)}}" class="block-20 d-flex align-items-end" style="background-image: url('{{asset('assets/img/jejak/'.$j->gambar)}}');">
                    </a>
                    <div class="text border border-top-0 p-4">
                        <h3 class="heading"><a href="{{route('home.jejak', $j->judul)}}">{{$j->judul}}</a></h3>
                        <p>{{$j->deskripsi}}</p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="{{route('home.jejak', $j->judul)}}" class="btn btn-warning">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
  </div>
  </div>
</section>
@endsection
