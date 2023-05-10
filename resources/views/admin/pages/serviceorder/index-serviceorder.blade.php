@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Tertib Pelayanan</h3>
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
                    <h3 class="card-title">Data Tertib Pelayanan</h3>
                    <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                @if($serviceorder->isEmpty())
                                    <a class="nav-link btn-info active mr-1" href="{{route('serviceorder.create')}}" data-toggle="tooltip" data-placement="top" title="Tambah"><i class="fas fa-plus"></i></a>
                                @endif
                            </li>
                            <li class="nav-item">
                                @foreach ($serviceorder as $serviceorders)
                                    <a class="nav-link btn-primary active mr-1" href="{{route('serviceorder.edit', $serviceorders->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="table1">
                        <tbody>
                            @foreach ($serviceorder as $serviceorders)
                            <tr>
                                <td width="30%">Sub Judul</td>
                                <td>{{$serviceorders->title_serviceorder}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Deskripsi</td>
                                <td>{{$serviceorders->description_serviceorder}}</td>
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
