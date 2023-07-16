@extends('admin.layouts.b-main')

@section('content')
    <!-- Wrapper -->
    <div class="content-wrapper">

        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="mb-0">Bidang</h1>
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
                                <h3 class="card-title">Tambah Data Bidang</h3>
                            </div>

                            <!-- Form -->
                            <form action="{{ route('division.store') }}" class="form-horizontal"
                                enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name_division" class="col-sm-2 col-form-label">Bidang</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name_division"
                                                class="form-control @error('name_division') is-invalid @enderror"
                                                id="name_division" placeholder="Nama Bidang">
                                        </div>
                                        @error('name_division')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <label for="image_so" class="col-sm-2 col-form-label">Struktur Organisasi</label>
                                        <div class="col-sm-6">
                                            <input type="file"
                                                class="form control @error('image_so') is-invalid @enderror" id="image"
                                                placeholder="Gambar" name="image_so"
                                                onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                                            @error('image_so')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror

                                        </div>
                                        <div class="mt-3"><img src="" id="output" width="500"></div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control @error('deskripsi_so') is-invalid @enderror" id="editor" placeholder="Isi Berita"
                                                name="deskripsi_so">{{ old('deskripsi_so') }}</textarea>

                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Simpan</button>
                                    <a href="{{ route('division.index') }}" button type="submit"
                                        class="btn btn-default">Kembali</button></a>
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
