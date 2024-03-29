@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">APBD</h1>
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
                    <h3 class="card-title">Edit Data APBD</h3>
                </div>

                <!-- Form -->
                <form action="{{route('apbd.update', $apbd->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-6">
                            <label for="periode" class="form-label col-sm-2">Periode</label>
                                <input type="text" class="form-control @error('periode') is-invalid @enderror" name="periode" placeholder="Kategori"
                                id="periode" value="{{old('poeriode') ?? $apbd->periode}}">

                                @error('periode')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                            <label for="year" class="form-label col-sm-2">Tahun</label>
                                <input type="text" class="form-control @error('year') is-invalid @enderror" name="year" placeholder="Tahun"
                                id="periode" value="{{old('year') ?? $apbd->year}}">

                                @error('year')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{route('apbd.index')}}" button type="submit" class="btn btn-default">Kembali</a></button>
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




