@extends("admin.layouts.master")
@section('title', "Dashboard")
@section("content")
    <h2 class="mb-3 mt-2">Overview</h2>
    <h4 class="mb-4">Informasi Tentang Website Anda</h4>
    <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body dashboard-tabs p-0">
                  <div class="tab-content py-5">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                      <div class="d-flex flex-wrap justify-content-xl-between">
                        <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi mdi-newspaper mr-3 text-primary" style="font-size:70px;"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <h3 class="mb-2 text-primary">Berita Alumni</h3>
                            <h4>{{$berita}}</h4>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-shoe-print mr-3 text-danger" style="font-size:70px;"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <h3 class="mb-1 text-danger">Jejak Alumni</h3>
                            <h4>{{$jejak}}</h5>
                          </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                          <i class="mdi mdi-account mr-3 text-success" style="font-size:70px"></i>
                          <div class="d-flex flex-column justify-content-around">
                            <h3 class="mb-1 text-success">Total Alumni</h3>
                            <h4>{{$alumni}}</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
