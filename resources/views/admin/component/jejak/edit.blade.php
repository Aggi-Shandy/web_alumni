@extends("admin.layouts.master")
@section("title", "Edit Jejak Alumni")
@section("content")
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h3>Edit Data Jejak Alumni</h3>
            <p class="card-description">
            Form untuk edit data jejak alumni
            </p>
            <form class="forms-sample" action="{{route('admin.jejak.update',$jejak->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" value="{{$jejak->judul}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                <div class="col-sm-9">
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control" placeholder="Deksripsi">{{$jejak->deskripsi}}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="file" class="col-sm-3 col-form-label">Gambar</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control" name="gambar">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
            </form>
        </div>
        </div>
    </div>
@endsection
