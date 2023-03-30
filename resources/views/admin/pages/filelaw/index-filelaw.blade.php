@extends('admin.layouts.b-main')

@section('content')
@section('hostel', 'active')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">File Produk Hukum</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Header -->

    <!-- Section Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data File Produk Huku,</h3>
                    <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active mr-2" href="{{route('filelaw.create')}}"><i class="fas fa-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($filelaw as $filelaws)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$filelaws->title_filelaw}}</td>
                                <td>{{$filelaws->file_filelaw}}</td>
                                <td>
                                    <a href="{{route('filelaw.edit', $filelaws->id)}}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <!-- Form-->
                                    <form method="post" action="{{route('hostel.destroy', $hostels->id)}}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <!-- End Form -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

</div>
<!-- End Wrapper -->

@endsection
