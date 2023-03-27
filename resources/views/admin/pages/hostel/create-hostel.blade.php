@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Asrama</h1>
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
                            <h3 class="card-title">Tambah Data Asrama</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('hostel.store')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name_division" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name_hostel" class="form-control @error('name_hostel') is-invalid @enderror"
                                        id="name_hostel" placeholder="Nama Asrama">
                                    </div>

                                    @error('name_hostel')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror

                                </div>

                                <div class="form-group row">
                                    <label for="name_division" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="address_hostel" class="form-control @error('address_hostel') is-invalid @enderror"
                                        id="address_hostel" placeholder="Alamat Asrama">
                                    </div>

                                    @error('address_hostel')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('hostel.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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

