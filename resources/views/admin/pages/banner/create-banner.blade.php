@extends('admin.layouts.b-main')

@section('content')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Slider Banner</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- Card -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Slider</h3>
              </div>

                <!-- Form -->
                <form class="form-horizontal" method="post" action="{{route('banner.store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="image_banner" class="col-sm-2 col-form-label">Gambar</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control @error('image_banner') is-invalid @enderror" id="image_banner" accept="image/*"
                        name="image_banner" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                        @error('image_banner')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                      </div>
                    </div>
                  </div>
                  <div class="mt-3"><img src="" id="output" width="500"></div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="{{route('banner.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
                  </div>

                </form>
                <!-- End Form -->

            </div>
          </div>
            <!-- End Card -->
        </div>
      </div>
    </section>
          <!-- End Content -->
  </div>
  <!-- End Wrapper -->

@endsection





