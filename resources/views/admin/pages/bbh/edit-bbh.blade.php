@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Belanja Bagi Hasil</h1>
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
                            <h3 class="card-title">Edit Data Belanja Bagi Hasil</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('bbh.update', $bbh->id)}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="title_plan" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_plan" class="form-control @error('title_plan') is-invalid @enderror"
                                        id="title_plan" placeholder="Judul" value="{{old('title_plan') ?? $bbh->title_plan}}">

                                        @error('title_plan')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="year" class="col-sm-2 col-form-label">Tahun</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="year" class="form-control @error('year') is-invalid @enderror"
                                        id="year" placeholder="Judul" value="{{old('year') ?? $bbh->year}}">

                                        @error('year')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('bbh.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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

