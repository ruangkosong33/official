@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Arah Kebijakan</h1>
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
                    <h3 class="card-title">Edit Data Arah Kebijakan</h3>
                </div>

                <!-- Form -->
                <form action="{{route('policydirection.update', $policydirection->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title_vision" class="form-label col-sm-2">Sub Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('title_policydirection') is-invalid @enderror" name="title_policydirection" placeholder="Sub Judul"
                                id="title_policydirection" value="{{old('title_polidcydirection') ?? $policydirection->title_policydirection}}">

                                @error('title_policydirection')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="description_policydirection" class="form-label col-sm-2">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('description_policydirection') is-invalid @enderror" id="editor"
                                name="description_policydirection">{{ old('description_policydirection', $policydirection->description_policydirection ?? '') }}</textarea>

                                @error ('description_policydirection')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>

                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{route('policydirection.index')}}" button type="submit" class="btn btn-default">Kembali</a></button>
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





