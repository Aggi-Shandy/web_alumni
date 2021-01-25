@extends("admin.layouts.master")
@section("title", "Edit Alumni")
@section("content")
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h3>Edit Data Alumni</h3>
            <p class="card-description">
            Form untuk edit data alumni
            </p>
            <form class="forms-sample" action="{{route('admin.alumni.update', $alumni->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" value="{{$alumni->nama}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" id="nim" placeholder="NIM" name="nim" value="{{$alumni->nim}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="fakultas" class="col-sm-3 col-form-label">Fakultas</label>
                <div class="col-sm-9">
                    <select name="fakultas" id="fakultas" class="form-control">
                        @if($alumni->fakultas == 'Ekonomi')
                            <option selected>Ekonomi</option>
                        @else
                            <option>Ekonomi</option>
                        @endif
                        @if($alumni->fakultas == "Kedokteran")
                            <option selected>Kedokteran</option>
                        @else
                            <option>Kedokteran</option>
                        @endif
                        @if($alumni->fakultas == "Sastra")
                            <option selected>Sastra</option>
                        @else
                            <option>Sastra</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="hp" class="col-sm-3 col-form-label">No. HP</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="hp" name="handphone" placeholder="Handphone Number" value="{{$alumni->handphone}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tahun" class="col-sm-3 col-form-label">Tahun Masuk</label>
                <div class="col-sm-9">
                    <select name="tahun" id="tahun" class="form-control">
                        @if($alumni->tahun == '2018')
                            <option selected>2018</option>
                        @else
                            <option>2018</option>
                        @endif
                        @if($alumni->tahun == "2019")
                            <option selected>2019</option>
                        @else
                            <option>2019</option>
                        @endif
                        @if($alumni->tahun == "2020")
                            <option selected>2020</option>
                        @else
                            <option>2020</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" name="lahir" value="{{$alumni->lahir}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="file" class="col-sm-3 col-form-label">Foto</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" name="foto">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
            </form>
        </div>
        </div>
    </div>
@endsection
