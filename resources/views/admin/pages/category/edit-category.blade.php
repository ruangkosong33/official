@extends('admin.layouts.b-main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kategori</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Edit Kategori</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{route('category.update', $category->id)}}" class="form-horizontal">
          @csrf
          @method('PUT')

          <div class="card-body">
            <div class="form-group row">
              <label for="title_category" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-6">
                <input type="text" name="title_category" class="form-control @error('title_category') is-invalid @enderror" id="title_category"
                placeholder="Nama Kategori" value="{{old('title_category') ?? $category->title_category}}">
              </div>

              @error('title_category')
              <span class="invalid-feedback">{{$message}}</span>
              @enderror

            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Simpan</button>
            <a href="{{route('userlist.index')}}" button type="submit" class="btn btn-default">Kembali</a>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
      <!-- /.card -->
    </section>
  </div>


@endsection
