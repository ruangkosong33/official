@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Sejarah Pembentukan</h3>
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
                    <h3 class="card-title">Data Sejarah Pembentukan</h3>
                    <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                @if($formationhistory->isEmpty())
                                    <a class="nav-link btn-info active mr-1" href="{{route('formationhistory.create')}}" data-toggle="tooltip" data-placement="top" title="Tambah"><i class="fas fa-plus"></i></a>
                                @endif
                            </li>
                            <li class="nav-item">
                                @foreach ($formationhistory as $formationhistorys)
                                <a class="nav-link btn-primary active mr-1" href="{{route('formationhistory.edit', $formationhistorys->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="table1">
                        <tbody>
                            @foreach ($formationhistory as $datas)
                            <tr>
                                <td width="30%">Sub Judul</td>
                                <td>{{$datas->title_formationhistory}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Deskripsi</td>
                                <td>{!!$datas->description_formationhistory!!}</td>
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
