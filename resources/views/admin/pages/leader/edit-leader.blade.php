@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Kepala Badan</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Header -->

    <!-- Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Edit Data Kepala Badan</h3>
                </div>

                <!-- Form -->
                <form action="{{route('leader.update', $leader->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="name_leader" class="form-label col-sm-2">Nama</label>
                                <input type="text" class="form-control @error('name_leader') is-invalid @enderror" name="name_leader" placeholder="Sub Judul"
                                id="name_leader" value="{{old('name_leader') ?? $leader->name_leader}}">

                                @error('name_leader')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                        </div>

                        <div class="form-group row">
                            <label for="image_leader" class="form-label col-sm-2">Foto</label>
                                <input type="file" class="form-control @error('image_leader') is-invalid @enderror" name="image_leader" id="image_leader" accept="image/*"
                                value="{{old('image_leader')}}" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                                @error('image_leader')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                        </div>

                        <div class="form-group row">
                            <label for="periode" class="form-label col-sm-2">Periode</label>
                                <textarea class="form-control @error('description_issue') is-invalid @enderror" name="periode"
                                id="periode">{{old('periode') ?? $leader->periode}}</textarea>

                                @error ('periode')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{route('leader.index')}}" button type="submit" class="btn btn-default">Kembali</a></button>
                    </div>
                </form>
                <!-- End Form -->

            </div>
        </div>

    </section>
    <!-- End Section -->

</div>
<!-- End Wrapper -->

@endsection




