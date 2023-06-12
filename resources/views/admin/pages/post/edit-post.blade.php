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
              <label for="description" class="col-sm-2 col-form-label">Isi</label>
              <div class="col-sm-10">
                <textarea class="form-control @error('description_post') is-invalid @enderror" id="editor" placeholder="Isi Berita"
                name="description_post">{{ old('description_post', $post->description_post ?? '') }}</textarea>

              </div>
            </div>

            <div class="form-group row">
              <label for="category_id" class="col-sm-2">Kategori</label>
              <div class="col-sm-6">

                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="category_id">
                  <option disabledvalue="">--Pilih--</option>
                  @foreach ($category as $categorys)
                    @if($categorys->id == $post->category_id)
                    <option value={{$categorys->id}} selected='selected'>{{$categorys->title_category}}</option>
                    @endif
                  @endforeach
                </select>

              </div>
            </div>

            <div class="form-group row">
                <label for="status" class="col-sm-2">Status</label>
                <div class="col-sm-6">
                    <select name="status" class="form-control" id="status">
                        <option value="1"{{ old('status') === 'Publish' ? 'selected' : '' }}>Publish</option>
                        <option value="0"{{ old('status') === 'Draft' ? 'selected' : '' }}>Draft</option>
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
                <div class="mt-3"><img src="{{asset('uploads/image-post/'. $post->image_post)}}" id="output" width="500"></div>

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

  @section('ck-editor')

    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: "{{route('post.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>

  @endsection

@endsection

