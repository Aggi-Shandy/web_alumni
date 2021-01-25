@extends("admin.layouts.master")
@section("title", "Alumni")
@section("content")
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <h3>Data Alumni</h3>
                <p class="card-description">
                    Data seluruh alumni
                </p>
            </div>
            <div class="col-md-8" style="justify-content:flex-end;display:flex;">
                <a href="{{route('admin.alumni.add')}}" class="btn btn-primary" style="height:40px;display:flex;align-items:center;"> <i class="mdi mdi-plus-circle mr-2"></i> Add Alumni</a>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nama Lengkap</th>
                <th>NIM</th>
                <th>Fakultas</th>
                <th>No. HP</th>
                <th>Tanggal Lahir</th>
                <th>Tahun Masuk</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($alumni as $a)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="py-3">
                        <img src="{{asset('assets/img/alumni/'.$a->foto)}}" alt="" style="width:70px;height:70px;">
                    </td>
                    <td>{{$a->nama}}</td>
                    <td>{{$a->nim}}</td>
                    <td>{{$a->fakultas}}</td>
                    <td>{{$a->handphone}}</td>
                    <td>{{$a->lahir}}</td>
                    <td>{{$a->tahun}}</td>
                    <td>
                        <div class="row">
                            <a href="{{route('admin.alumni.edit', $a->id)}}" class="btn btn-primary mr-2">Edit</a>
                            <a href="{{route('admin.alumni.delete', $a->id)}}" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>
@endsection
