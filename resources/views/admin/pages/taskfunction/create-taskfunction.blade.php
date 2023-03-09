@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Tugas & Fungsi</h1>
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
                            <h3 class="card-title">Tambah Data Tugas & Fungsi</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('taskfunction.store')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="title_taskfunction" class="col-sm-2 col-form-label">Sub Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_taskfunction" class="form-control @error('title_function') is-invalid @enderror"
                                        id="title_taskfunction" placeholder="Sub Judul">
                                    </div>

                                    @error('title_taskfunction')
                                        <span class="invalid-feedback">{{$message}}</span>
                                    @enderror

                                </div>

                                <div class="form-group row">
                                    <label for="description_taskfunction" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control @error('description_taskfunction') is-invalid @enderror" id="description_taskfunction"
                                        placeholder="Deskripsi" name="description_taskfunction">{{old('description_taskfunction')}}</textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('taskfunction.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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

