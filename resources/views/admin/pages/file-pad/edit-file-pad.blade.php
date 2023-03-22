@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Pegawai</h1>
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
                            <h3 class="card-title">Tambah Data Pegawai</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('filepad.edit', ['pad'=>$pad])}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name_employee" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_filepad" class="form-control @error('title_filepad') is-invalid @enderror"
                                        id="title_filepad" placeholder="Judul" value="{{old('title_filepad') ?? $filepad->title_filepad}}">

                                        @error('title_filepad')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nip" class="col-sm-2 col-form-label">Nip</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="Nip"
                                        value="{{old('nip') ?? $employee->nip}}">

                                        @error('nip')
                                        <span class="invalid-feedback"{{$message}}></span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('employee.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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

