@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Galeri</h1>
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
                            <h3 class="card-title">Tambah Data Galeri</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('gallery.store')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="category_id" class="col-sm-2">Kategori</label>
                                    <div class="col-sm-10">
                                        <select name="category_id" class="form-control @error ('category_id') is-invalid @enderror" id="category_id">
                                            <option value="">--Pilih--</option>
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
                                    <label for="title_gallery" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_gallery" class="form-control @error('title_gallery') is-invalid @enderror"
                                        id="title_gallery" placeholder="" value="{{old('title_gallery')}}">

                                        @error('title_gallery')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="place" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image_gallery" class="form-control @error('image_gallery') is-invalid @enderror"
                                        id="image_gallery" value="{{old('image_gallery')}}">

                                        @error('image_gallery')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('gallery.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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

