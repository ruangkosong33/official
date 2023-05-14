@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">LPPD</h1>
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
                            <h3 class="card-title">Edit Data LPPD</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('lppd.update', $lppd->id)}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="title_renja" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_lppd" class="form-control @error('title_lppd') is-invalid @enderror"
                                        id="title_lppd" placeholder="LPPD" value="{{old('title_lppd') ?? $lppd->title_lppd}}">

                                        @error('title_lppd')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="year" class="col-sm-2 col-form-label">Tahun</label>
                                    <div class="col-sm-10">
                                        <input type="integer" name="year" class="form-control @error('year') is-invalid @enderror"
                                        id="year" placeholder="Tahun" value="{{old('year') ?? $lppd->year}}">

                                        @error('year')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="file_lppd" class="col-sm-2 col-form-label">File Lppd</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="file_lppd" class="form-control @error('file_lppd') is-invalid @enderror"
                                        id="file_lppd" value="{{old('file_lppd') ?? $lppd->file_lppd}}">

                                        @error('file_lppd')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('lppd.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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

