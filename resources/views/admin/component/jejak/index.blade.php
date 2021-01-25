@extends("admin.layouts.master")
@section("title", "Jejak Alumni")
@section("content")
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Data Jejak Alumni</h3>
                            <p class="card-description">
                                Data seluruh jejak alumni
                            </p>
                        </div>
                        <div class="col-md-8" style="display:flex;justify-content:flex-end;">
                            <a href="{{route('admin.jejak.add')}}" class="btn btn-primary" style="height:40px;display:flex;align-items:center;"> <i class="mdi mdi-plus-circle mr-2"></i> Add Jejak Alumni</a>
                        </div>
                    </div>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
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
                        @foreach($jejak as $j)
                            <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                            <div class="d-flex" style="justify-content:center">
                                        <a href="{{asset('assets/img/jejak/'.$j->gambar)}}" style="" target="__blank">
                                            <i class="mdi mdi-file-image" style="font-size:30px;"></i>
                                        </a>
                                    </div>
                            </td>
                            <td>
                            {{$j->judul}}
                            </td>
                            <td>
                                <div class="d-block" style="overflow:auto;height:50px;max-width:400px;">
                                    {{$j->deskripsi}}
                                </div>
                            </td>
                            <td>
                                {{$j->created_at->format("F d, Y")}}
                            </td>
                            <td>
                                <div class="row">
                                    <a href="{{route('admin.jejak.edit',$j->id)}}" class="btn btn-primary mr-2 ml-2">Edit</a>
                                    <a href="{{route('admin.jejak.delete', $j->id)}}" class="btn btn-danger">Delete</a>
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
