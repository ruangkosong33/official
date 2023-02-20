@extends('admin.layouts.b-main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Slider Banner</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Edit Banner</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('banner.update', $banner->id)}}" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="card-body">
            <div class="form-group row">
              <label for="image_banner" class="col-sm-2 col-form-label">Gambar</label>
              <div class="col-sm-10">
                <input type="file" class="form-control @error('image_banner') is-invalid @enderror" id="image_banner" accept="image/*"
                name="image_banner" value="{{old('image_banner')}}" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                @error('image_banner')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror

              </div>
            </div>
          </div>
          <div class="mt-3"><img src="{{asset('uploads/image-banner/'. $banner->image_banner)}}" id="output" width="500"></div>


          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Simpan</button>
            <a href="{{route('banner.index')}}" button type="submit" class="btn btn-default">Kembali</a>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
      <!-- /.card -->
    </section>
  </div>


@endsection
