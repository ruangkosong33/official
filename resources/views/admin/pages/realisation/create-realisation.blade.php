@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Realiasasi Fisik & Keuangan</h1>
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
                            <h3 class="card-title">Tambah Data Realisasi Fisik & Keuangan</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('realisation.store')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="title_realisation" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_realisation" class="form-control @error('title_realisation') is-invalid @enderror"
                                        id="title_realisation" placeholder="Realisasi Fisik & Keuangan">

                                        @error('title_realisation')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="file_realisation" class="col-sm-2 col-form-label">File</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="file_realisation" class="form-control @error('file_realisation') is-invalid @enderror"
                                        id="file_realisation">

                                        @error('file_realisation')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('realisation.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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

