@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Kepala Badan</h1>
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
                            <h3 class="card-title">Tambah Data Kepala Badan</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('leader.store')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name_leader" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name_leader" class="form-control @error('name_leader') is-invalid @enderror"
                                        id="name_leader" placeholder="Kepala Badan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="periode" class="col-sm-2 col-form-label">Periode</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('periode') is-invalid @enderror" id="periode"
                                        placeholder="Tahun" name="periode"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="image_leader" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image_leader" id="image_leader" class="form-control @error('image_leader') is-invalid @enderror">
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('leader.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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

