@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Produk Hukum</h1>
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
                    <h3 class="card-title">Edit Data Produk Hukum</h3>
                </div>

                <!-- Form -->
                <form action="{{route('law.update', $law->id)}}" method="post" class="form-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="title_law" class="form-label col-sm-2">Kategori</label>
                                <input type="text" class="form-control @error('title_law') is-invalid @enderror" name="title_law" placeholder="Produk Hukum"
                                id="title_law" value="{{old('title_law') ?? $law->title_law}}">

                                @error('title_law')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror

                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{route('law.index')}}" button type="submit" class="btn btn-default">Kembali</a></button>
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




