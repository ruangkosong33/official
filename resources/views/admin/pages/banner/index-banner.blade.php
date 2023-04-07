@extends('admin.layouts.b-main')

@section('content')
@section('banner.index', 'active')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Slider Banner</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Slider Banner</h3>
                    <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('banner.create')}}"><i class="fas fa-plus"></i></a>
                        </li>
                    </ul>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($banner as $key=>$banners)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><img src="{{asset('uploads/image-banner/'. $banners->image_banner)}}" width="80px"></td>
                            <td>
                                <a href="{{route('banner.edit', $banners->id)}}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                                </a>
                                <form method="post" action="{{route('banner.destroy', $banners->id)}}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger btn-delete">
                                <i class="fas fa-trash"></i>
                                </button>
                                </form>
                                <a href="#" class="btn btn-info btn-sm">
                                <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.col -->
</div>

@endsection
