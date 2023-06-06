@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Tertib Pelayanan</h1>
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
                            <h3 class="card-title">Tambah Data Tertib Pelayanan</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('serviceorder.store')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="title_serviceorder" class="col-sm-2 col-form-label">Sub Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_serviceorder" class="form-control @error('title_serviceorder') is-invalid @enderror"
                                        id="title_serviceorder" placeholder="Sub Judul">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description_serviceorder" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control @error('description_serviceorder') is-invalid @enderror" id="editor" placeholder="Deskripsi"
                                                name="description_serviceorder">{{ old('description_serviceorder') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('serviceorder.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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
@section('ck-editor')
    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: "{{ route('post.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endsection
