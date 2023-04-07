@extends('admin.layouts.b-main')

@section('content')
@section('transparency', 'active')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Transparansi Anggaran</h3>
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
                    <h3 class="card-title">Data Transparansi Anggaran</h3>
                    <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active mr-2" href="{{route('transparency.create')}}"><i class="fas fa-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Produk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transparency as $key=>$transparencys)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$laws->title_law}}</td>
                                <td>
                                    <a href="{{route('law.edit', $laws->id)}}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <!-- Form-->
                                    <form method="post" action="{{route('law.destroy', $laws->id)}}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <!-- End Form -->
                                    <a href="{{route('filelaw.index', $laws)}}" class="btn btn-info btn-sm">
                                        <i class="fas fa-list"></i>
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
    <!-- End Section -->

</div>
<!-- End Wrapper -->

@endsection
