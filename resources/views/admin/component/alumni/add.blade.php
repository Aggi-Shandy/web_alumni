@extends("admin.layouts.master")
@section("title", "Add Alumni")
@section("content")
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h3>Tambah Data Alumni</h3>
            <p class="card-description">
            Form untuk menambah data alumni
            </p>
            <form class="forms-sample" action="{{route('admin.alumni.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="nim" class="col-sm-3 col-form-label">NIM</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" id="nim" placeholder="NIM" name="nim">
                </div>
            </div>
            <div class="form-group row">
                <label for="fakultas" class="col-sm-3 col-form-label">Fakultas</label>
                <div class="col-sm-9">
                    <select name="fakultas" id="fakultas" class="form-control">
                        <option>Ekonomi</option>
                        <option>Kedokteran</option>
                        <option>Sastra</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="hp" class="col-sm-3 col-form-label">No. HP</label>
                <div class="col-sm-9">
                    <input type="number" class="form-control" id="hp" name="handphone" placeholder="Handphone Number">
                </div>
            </div>
            <div class="form-group row">
                <label for="tahun" class="col-sm-3 col-form-label">Tahun Masuk</label>
                <div class="col-sm-9">
                    <select name="tahun" id="tahun" class="form-control">
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-9">
                    <input type="date" class="form-control" name="lahir">
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
