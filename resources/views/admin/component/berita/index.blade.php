@extends("admin.layouts.master")
@section("title", "Berita Alumni")
@section("content")
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <h3>Berita Alumni</h3>
                            <p class="card-description mt-2">
                                Data seluruh berita alumni
                            </p>
                        </div>
                        <div class="col-md-8" style="justify-content:flex-end;display:flex;">
                            <a href="{{route('admin.berita.add')}}" class="btn btn-primary" style="align-items:center;display:flex; height:40px;">
                                <i class="mdi mdi-plus-circle mr-2"></i> Add Berita
                            </a>
                        </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Gambar
                          </th>
                          <th>
                            Judul
                          </th>
                          <th>
                            Deskripsi
                          </th>
                          <th>
                            Tanggal Dibuat
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            @foreach($berita as $b)
                                <td>
                                <div class="d-flex" style="justify-content:center">
                                        <a href="{{asset('assets/img/berita/'.$b->gambar)}}" style="" target="__blank">
                                            <i class="mdi mdi-file-image" style="font-size:30px;"></i>
                                        </a>
                                </div>
                                </td>
                                <td>
                                    {{$b->judul}}
                                </td>
                                <td>
                                    <div class="d-block" style="max-width:400px;height:50px;overflow:auto;">
                                        {{$b->deskripsi}}
                                    </div>
                                </td>
                                <td>
                                    {{$b->created_at->format("F d, Y")}}
                                </td>
                                <td>
                                    <div class="row">
                                        <a href="{{route('admin.berita.edit',$b->id)}}" class="btn btn-primary mr-2">Edit</a>
                                        <a href="{{route('admin.berita.delete', $b->id)}}" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            @endforeach

                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
