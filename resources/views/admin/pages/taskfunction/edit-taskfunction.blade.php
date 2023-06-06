@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Tugas & Fungsi</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Header -->

    <!-- Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Tugas & Fungsi</h3>
                </div>

                <!-- Form -->
                <form action="{{route('taskfunction.update', $taskfunction->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title_taskfunction" class="form-label col-sm-2">Sub Judul</label>
                            <div class="col-sm-10">

                                <input type="text" class="form-control @error('title_taskfunction') is-invalid @enderror" name="title_taskfunction" placeholder="Sub Judul"
                                id="title_taskfunction" value="{{old('title_taskfunction') ?? $taskfunction->title_taskfunction}}">

                                @error('title_taskfunction')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="description_taskfunction" class="form-label col-sm-2">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('description_taskfunction') is-invalid @enderror" id="editor"
                                name="description_taskfunction">{{ old('description_taskfunction', $taskfunction->description_taskfunction ?? '') }}</textarea>

                                @error ('description_taskfunction')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{route('taskfunction.index')}}" button type="submit" class="btn btn-default">Kembali</a></button>
                    </div>
                </form>
                <!-- End Form -->

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
            filebrowserUploadUrl: "{{route('post.upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>

  @endsection




