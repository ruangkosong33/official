@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Kabupaten/Kota</h1>
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
                            <h3 class="card-title">Tambah Data Kabupaten/Kota</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('city.store', ['apbd'=>$apbd])}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name_city" class="col-sm-2 col-form-label">Wilayah</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name_city" class="form-control @error('name_city') is-invalid @enderror"
                                        id="name_city" placeholder="Wilayah">

                                        @error('name_city')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="file_apbd" class="col-sm-2 col-form-label">File APBD</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="file_apbd" class="form-control @error('file_apbd') is-invalid @enderror"
                                        id="file_apbd">

                                        @error('file_apbd')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('city.index', ['apbd'=>$apbd])}}" button type="submit" class="btn btn-default">Kembali</button></a>
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

