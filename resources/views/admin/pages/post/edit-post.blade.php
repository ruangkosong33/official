@extends('admin.layouts.b-main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Berita</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Edit Data Berita</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route ('post.update', $post->id)}}" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card-body">
            <div class="form-group row">
              <label for="title_post" class="col-sm-2 col-form-label">Judul</label>
              <div class="col-sm-6">
                <input type="text" name="title_post" value="{{old('title_post') ?? $post->title_post}}"
                class="form-control @error('title_post') is-invalid @enderror" id="title_post" placeholder="Judul Berita">

                @error('title_post')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror

              </div>
            </div>

            <div class="form-group row">
               <label for="description" class="col-sm-2">Deskripsi</label>
               <div class="col-sm-6">
                 <input type="text" id="description" name="descMription" placeholder="Deskripsi"
                 class="form-control @error('description') is-invalid @enderror" value="{{old('description') ?? $post->description}}">
               </div>

               @error('description')
               <span class="invalid-feedback">{{$message}}</span>
               @enderror
            </div>

            <div class="form-group row">
                <label for="status" class="col-sm-2">Status</label>
                <div class="col-sm-6">
                    <select name="status" id="status">
                        <option value="1">Publish</option>
                        <option value="2">Draft</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="image_post" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-6">
                  <input type="file" class="form control @error('image_post') is-invalid @enderror" id="image" placeholder="Gambar"
                  name="image_post" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                  @error('image_post')
                      <span class="invalid-feedback">{{$message}}</span>
                  @enderror
                </div>
                <div class="mt-3"><img src="{{asset('image-post/'. $post->image_post)}}" id="output" width="500"></div>

            </div>



          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Simpan</button>
            <a href="{{route ('post.index')}}" button type="submit" class="btn btn-default">Kembali</a>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
      <!-- /.card -->
    </section>
  </div>


@endsection

