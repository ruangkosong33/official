@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Agenda Kegiatan</h1>
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
                            <h3 class="card-title">Tambah Data Agenda Kegiatan</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('event.store')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="title_event" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_event" class="form-control @error('title_event') is-invalid @enderror"
                                        id="title_event" placeholder="Agenda Kegiatan" value="{{old('title_event')}}">

                                        @error('title_event')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="place" class="col-sm-2 col-form-label">Tempat</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="place" class="form-control @error('place') is-invalid @enderror" placeholder="Agenda Kegiatan"
                                        id="place" value="{{old('place')}}">

                                        @error('place')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="description_event" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="description_event" class="form-control @error('description_event') is-invalid @enderror"
                                        id="place" value="{{old('description_event')}}" placeholder="Agenda Kegiatan"></textarea>

                                        @error('description_event')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date_event" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="date_event" class="form-control @error('date_event') is-invalid @enderror"
                                        id="place" value="{{old('date_event')}}">

                                        @error('date_event')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('event.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
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

