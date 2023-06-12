@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">File SP2D</h1>
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
                            <h3 class="card-title">Ubah Data File SP2D</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('filesp2d.update',['sp2d'=>$filesp2d])}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="city_id" class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                                    <div class="col-sm-10">
                                        <select name="city_id" class="form-control @error('city_id') is-invalid @enderror" id="city_id">
                                            <option disabledvalue="">--Pilih--</option>
                                            @foreach ($city as $citys)
                                            <option value={{$citys->id}} {{ $citys->id == $filesp2d->citykab_id?'selected':'' }}>{{$citys->name_citykab}}</option>
                                            @endforeach
                                        </select>

                                        @error('city_id')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="title_sp2d" class="col-sm-2 col-form-label">SP2D</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_sp2d" class="form-control @error('title_sp2d') is-invalid @enderror"
                                        id="title_sp2d" placeholder="Judul" value="{{$filesp2d->title_sp2d}}">

                                        @error('title_sp2d')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="file_sp2d" class="col-sm-2 col-form-label">File</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="file_sp2d" class="form-control @error('file_sp2d') is-invalid @enderror"
                                        id="file_sp2d">

                                        @error('file_sp2d')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="date" class="form-control @error('date') is-invalid @enderror"
                                        id="file_sp2d" value="{{$filesp2d->date}}">

                                        @error('date')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="total" class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="total" class="form-control @error('total') is-invalid @enderror"
                                        id="total" placeholder="Jumlah" value="{{$filesp2d->total}}">
                                        @error('total')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description" rows="5">{{$filesp2d->description}}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('filesp2d.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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

