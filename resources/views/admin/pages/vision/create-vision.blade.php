@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Visi & Misi</h1>
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
                            <h3 class="card-title">Tambah Data Visi & Misi</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('vision.create')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="title_vision" class="col-sm-2 col-form-label">Sub Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_vision" class="form-control @error('title_vision') is-invalid @enderror"
                                        id="title_vision" placeholder="Sub Judul">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description_vision" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('description_vision') is-invalid @enderror" id="description_vision"
                                        placeholder="Deskripsi">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('vision.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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





























@endsection
