@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Tugas Pokok & Fungsi</h3>
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
                    <h3 class="card-title">Data Tugas Pokok & Fungsi</h3>
                    <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                @if($taskfunction->isEmpty())
                                    <a class="nav-link btn-info active mr-1" href="{{route('taskfunction.create')}}" data-toggle="tooltip" data-placement="top" title="Tambah"><i class="fas fa-plus"></i></a>
                                @endif
                            </li>
                            @foreach ($taskfunction as $taskfunctions)
                            <li class="nav-item">
                                <a class="nav-link btn-primary active mr-1" href="{{route('taskfunction.edit', $taskfunctions->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="table1">
                        <tbody>
                            @foreach ($taskfunction as $taskfunctions)
                            <tr>
                                <td width="30%">Sub Judul</td>
                                <td>{{$taskfunctions->title_taskfunction}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Deskripsi</td>
                                <td>{!!$taskfunctions->description_taskfunction!!}</td>
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
