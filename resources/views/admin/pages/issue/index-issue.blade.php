@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Isu Strategis </h3>
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
                    <h3 class="card-title">Data Isu Strategis</h3>
                    <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">
                            <li class="nav-item">
                                @if($issue->isEmpty())
                                    <a class="nav-link btn-info active mr-1" href="{{route('issue.create')}}" data-toggle="tooltip" data-placement="top" title="Tambah"><i class="fas fa-plus"></i></a>
                                @endif
                            </li>
                            <li class="nav-item">
                                @foreach ($issue as $issues)
                                <a class="nav-link btn-primary active mr-1" href="{{route('issue.edit', $issues->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered" id="table1">
                        <tbody>
                            @foreach ($issue as $issues)
                            <tr>
                                <td width="30%">Sub Judul</td>
                                <td>{{$issues->title_issue}}</td>
                            </tr>
                            <tr>
                                <td width="30%">Deskripsi</td>
                                <td>{{$issues->description_issue}}</td>
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
