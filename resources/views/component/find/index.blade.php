@extends('layouts.master')
@section('title', "Cari Alumni")
@section('content')

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row no-gutters justify-content-center mb-4">
      <div class="col-md-6 text-center heading-section ftco-animate">
        <span class="subheading">Alumni STMIK</span>
        <h2 class="mb-4">Cari Alumni</h2>
      </div>
    </div>
    <div class="row block-9 justify-content-center mb-5">
      <div class="col-md-10 mb-md-5">
        <form action="{{route('home.find')}}" class="border p-5 contact-form row" method="POST">
            @csrf
          <div class="form-group col-md-6">
            <label for="name">Nama Lengkap</label>
            <input type="text" class="form-control" placeholder="Masukkan nama lengkap" name="nama">
          </div>
          <div class="form-group col-md-6">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" placeholder="Masukkan NIM" name="nim">
          </div>
          <div class="form-group col-md-6">
            <label for="faculty">Fakultas</label>
            <select class="form-control" name="fakultas">
              <option disabled selected>-Seluruh Fakultas-</option>
              <option>Ekonomi</option>
              <option>Kedokteran</option>
              <option>Sastra</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="year">Tahun Masuk</label>
            <select class="form-control" name="tahun">
              <option disabled selected>-Pilih Tahun Masuk Kuliah-</option>
              <option>2018</option>
              <option>2019</option>
              <option>2020</option>
            </select>
          </div>
          <div class="form-group col-md-12 pt-3">
            <button type="submit" class="btn btn-warning btn-block py-2 px-4 text-white">Cari Data</button>
          </div>
        </form>

      </div>
    </div>
    @if($alumni == "def")
    @elseif(isset($alumni))
    <div class="row block-9 justify-content-center mb-5">
      <div class="col-md-10 mb-md-5">
        <div class="contact-form border p-5 row">
                <div class="col-md-4" style=";display:flex !important;align-items:center;justify-content:center;">
                    <img src="{{asset('assets/img/alumni/'.$alumni->foto)}}" alt="" style="width:100%;border-radius:10px;">
                </div>
                <div class="col-md-4">
                <div class="form-group col-md-12">
                    <p>Nama Lengkap</p>
                    <h6 style="color:black;">{{$alumni->nama}}</h6>
                </div>
                <div class="form-group col-md-12">
                    <p>NIM</p>
                    <h6 style="color:black;">{{$alumni->nim}}</h6>
                </div>
                <div class="form-group col-md-12">
                    <p>Fakultas</p>
                    <h6 style="color:black;">{{$alumni->fakultas}}</h6>
                </div>
                <div class="form-group col-md-12">
                    <p>Tahun Masuk</p>
                    <h6 style="color:black;">{{$alumni->tahun}}</h6>
                </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <p>Tanggal Lahir</p>
                        <h6 style="color:black;">{{Carbon\Carbon::parse($alumni->lahir)->format("d F Y")}}</h6>
                    </div>
                    <div class="col-md-12">
                        <p>No. HP</p>
                        <h6 style="color:black;">{{$alumni->handphone}}</h6>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>
    @else
        <center>
            <h3>Alumni Tidak Ditemukan.</h3>
        </center>
    @endif


  </div>
</section>
@endsection
