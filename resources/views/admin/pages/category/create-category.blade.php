@extends('admin.layouts.b-main')

@section('content')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kategori</h1>
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
                <h3 class="card-title">Tambah Data Kategori</h3>
              </div>

                <!-- Form -->
                <form class="form-horizontal" method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="title_category" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control @error('title_category') is-invalid @enderror" id="title_category" placeholder="Nama Kategori"
                        name="title_category" value="{{old('title_category')}}">

                        @error('title_category')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                      </div>
                    </div>
                  </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="{{route('category.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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





