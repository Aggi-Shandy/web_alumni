@extends('layouts.master')
@section("title", "Beranda")
@section('content')
<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image:url('{{asset('assets/img/carousel-img/college.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate mb-md-5">
        <span class="subheading">Alumni STMIK</span>
        <h1 class="mb-4">Ikatan Alumni STMIK Sumedang</h1>
      </div>
    </div>
    </div>
  </div>

  <div class="slider-item" style="background-image:url('{{asset('assets/img/carousel-img/college2.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate mb-md-5">
        <span class="subheading">Alumni STMIK</span>
        <h1 class="mb-4">Situs Ikatan Alumni STMIK Sumedang</h1>
      </div>
    </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row no-gutters justify-content-center mb-5">
      <div class="col-md-6 text-center heading-section ftco-animate">
        <span class="subheading">Alumni STMIK</span>
        <h2 class="mb-4">Berita Terbaru</h2>
      </div>
    </div>
    <div class="row">
        @foreach($berita as $b)
        <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
                <a href="{{route('home.article',$b->judul)}}" class="block-20 d-flex align-items-end" style="background-image: url('{{asset('assets/img/berita/'.$b->gambar)}}');">
                    <div class="meta-date text-center p-2">
                        <span class="day">{{$b->created_at->formatLocalized("%d")}}</span>
                        <span class="mos">{{$b->created_at->formatLocalized("%b")}}.</span>
                        <span class="yr">{{$b->created_at->format("Y")}}</span>
                    </div>
                </a>
                <div class="text border border-top-0 p-4">
                    <h3 class="heading"><a href="{{route('home.article', $b->judul)}}">{{$b->judul}}</a></h3>
                    <p>{{substr($b->deskripsi, 0,116)}}</p>
                    <div class="d-flex align-items-center mt-4">
                        <p class="mb-0"><a href="{{route('home.article',$b->judul)}}" class="btn btn-warning">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
  </div>
</section>


<section class="ftco-section testimony-section">
  <div class="container-fluid px-md-5">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center heading-section ftco-animate">
        <span class="subheading">Alumni STMIK</span>
        <h2 class="mb-4">Jejak Alumni</h2>
      </div>
    </div>
    <div class="row ftco-animate justify-content-center">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
            @foreach($jejak as $j)
            <div class="item">
                <div class="testimony-wrap d-flex">
                <div class="text pl-4">
                    <a class="name jejak-judul" href="{{route('home.jejak', $j->judul)}}">{{$j->judul}}</a>
                    <p>{{$j->deskripsi}}</p>
                    <span class="position"> <i class="fas fa-clock" style="margin-right:5px;"></i> {{$j->created_at->format("F d, Y")}}</span>
                </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>
    <center>
    <a href="{{route('home.jejak.index')}}" class="btn btn-warning px-5 py-2" style="margin-top:15px;">Read More <i class="fas fa-arrow-circle-right" style="margin-left:3px;"></i></a>
    </center>
  </div>
</section>
@endsection

