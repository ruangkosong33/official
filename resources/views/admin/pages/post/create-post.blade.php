@extends('admin.layouts.b-main')

@section('content')

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Berita</h1>
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
                <h3 class="card-title">Tambah Data Berita</h3>
              </div>

                <!-- Form -->
                <form class="form-horizontal" method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="title_category" class="col-sm-2 col-form-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control @error('title_post') is-invalid @enderror" id="title_post" placeholder="Judul Berita"
                        name="title_post" value="{{old('title_post')}}">

                        @error('title_post')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="description" class="col-sm-2 col-form-label">Isi</label>
                      <div class="col-sm-10">
                        <textarea class="form-control @error('description_post') is-invalid @enderror" id="editor" placeholder="Isi Berita"
                        name="description_post" value="{{old('description_post')}}"></textarea>

                        @error('description_post')
                            <span class="invalid-feedback">{{$message}}</span>
                        @enderror

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
                      <div class="mt-3"><img src="" id="output" width="500"></div>

                    </div>

                    <div class="form-group row">
                        <label for="category_id" class="col-sm-2">Kategori</label>
                        <div class="col-sm-6">
                          <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="category_id">
                            <option disabledvalue="">--Pilih--</option>
                            @foreach ($category as $categorys)
                            <option value={{$categorys->id}}>{{$categorys->title_category}}</option>
                            @endforeach
                          </select>

                          @error('category_id')
                          <span class="invalid-feedback">{{$message}}</span>
                          @enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="status" class="col-sm-2">Status</label>
                        <div class="col-sm-6">
                          <select name="status" class="form-control">
                            <option>--Pilih--</option>
                            <option value="1">Publish</option>
                            <option value="0">Draft</option>
                          </select>
                        </div>
                      </div>
                    </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="{{route('post.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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





