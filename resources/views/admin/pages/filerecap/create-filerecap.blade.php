@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">File Rekapitulasi Bagi Hasil</h1>
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
                            <h3 class="card-title">Tambah Data File Rekapitulasi Bagi Hasil</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('filerecap.store', ['recap'=>$recap])}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="city_id" class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                                    <div class="col-sm-10">
                                        <select name="citykab_id" class="form-control @error('citykab_id') is-invalid @enderror" id="citykab_id">
                                            <option disabledvalue="">--Pilih--</option>
                                            @foreach ($citykab as $citykabs)
                                            <option value={{$citykabs->id}}>{{$citykabs->name_citykab}}</option>
                                            @endforeach
                                        </select>

                                        @error('name_citykab')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="title_filerecap" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_filerecap" class="form-control @error('title_filerecap') is-invalid @enderror"
                                        id="title_filerecap" placeholder="Judul">

                                        @error('title_filerecap')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="file_recap" class="col-sm-2 col-form-label">File</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="file_recap" class="form-control @error('file_recap') is-invalid @enderror"
                                        id="file_recap">

                                        @error('file_recap')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('filerecap.index', ['recap'=>$recap])}}" button type="submit" class="btn btn-default">Kembali</button></a>
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

