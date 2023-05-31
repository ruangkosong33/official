@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Video</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Header -->

    <!-- Section -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Video</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('video.store')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
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
                                    <label fo="title_video" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_sop" class="form-control @error('title_video') is-invalid @enderror"
                                        id="title_video" placeholder="Video">

                                        @error('title_video')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="image_video" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image_video" class="form-control @error('image_video') is-invalid @enderror"
                                        id="image_video" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                                        @error('image_video')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                    <div class="mt-3"><img src="" id="output" width="500"></div>
                                </div>

                                <div class="form-group row">
                                    <label for="link" class="col-sm-2 col-form-label">Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="link" class="form-control @error('link') is-invalid @enderror"
                                        id="link" placeholder="Url">

                                        @error('link')
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

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('video.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
                            </div>
                        </form>
                        <!-- End Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

</div>
<!-- End Wrapper -->

@endsection
