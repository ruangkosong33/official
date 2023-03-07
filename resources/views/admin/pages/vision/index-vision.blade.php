@extends('admin.layouts.b-main')

@section('content')
@section('vision', 'active')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">VisI & Misi</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Header -->

    <!-- Section Content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Visi & Misi</h3>
                <div class="card-tools">
                    <ul class="nav nav-pilss ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('vision.index')}}"><i class="fas fa-plus"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-stripped" id="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Visi & Misi</th>
                            <th>Deksripsi</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visions as $visions)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$visions->title_vision}}</td>
                            <td>{{$visions->description_vision}}</td>
                            <td>
                                <a href="{{route('vision.edit', $visions->id)}}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!-- Form-->
                                <form method="post" action="{{route('vision.destroy')}}">
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
    </section>
    <!-- End Section -->

</div>
<!-- End Wrapper -->

@endsection

























@endsection
