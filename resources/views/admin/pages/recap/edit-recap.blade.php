@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Rekapitulasi Belanja Bagi Hasil</h1>
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
                            <h3 class="card-title">Tambah Data Rekapitulasi Belanja Bagi Hasil</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('recap.store')}}" class="form-horizontal" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="periode" class="col-sm-2 col-form-label">Periode</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="periode" class="form-control @error('periode') is-invalid @enderror"
                                        id="periode" placeholder="Periode" value="{{old('periode') ?? $recap->periode}}">

                                        @error('periode')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="years" class="col-sm-2 col-form-label">Tahun</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="years" class="form-control @error('years') is-invalid @enderror"
                                        id="years" placeholder="Tahun" value="{{old('years') ?? $recap->years}}">

                                        @error('years')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('recap.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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

