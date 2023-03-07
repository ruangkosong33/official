@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col sm-6">
                    <h1 class="m-0">Visi & Misi</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Header -->

    <!-- Content -->
    <section class="section">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Data Visi & Misi</h3>
            </div>

            <!-- Form -->
            <form action="{{route('vision.edit', $vision->id)}}" method="post" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group row">
                        <label for="title_vision" class="form-label col-sm-2">Sub Judul</label>
                            <input type="text" class="form-control @error('title_vision') is-invalid @enderror" name="title_vision" placeholder="Sub Judul"
                            id="title_vision" value="{{old('title_vision') ?? $vision->title_vision}}">

                            @error('title_vision')
                            <span class="invalid-feedback">{{$message}}</span>
                            @enderror

                    </div>

                    <div class="form-group row">
                        <label for="description_vision" class="form-label col-sm-2">Deskripsi</label>
                            <input type="text" class="form-control @error ('description_vision') is-invalid @enderror" name="description_vision"
                            id="description_vision" value="{{old('description_vision') ?? $vision->description_vision}}">

                            @error ('description_vision')
                                <span class="invalid-feedback">{{$message}}</span>
                            @enderror

                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="{{route('vision.index')}}" button type="submit" class="btn btn-default">Kembali</a></button>
                </div>
            </form>
            <!-- End Form -->
        </div>

    </section>
    <!-- End Section -->

</div>
<!-- End Wrapper -->

@endsection




