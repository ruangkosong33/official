@extends('admin.layouts.b-main')

@section('content')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">
@endpush

<!-- Wrapper -->
<div class="content-wrapper">

    <!--Content Header-->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kategori File SP2D</h1>
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
                    <h3 class="card-title">Data File SP2D</h3>
                    <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('filesp2d.create')}}"><i class="fas fa-plus"></i></a>
                        </li>
                    </ul>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kota/Kab</th>
                                <th>Judul</th>
                                <th>File</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($filesp2d as $key=>$filesp2ds)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$filesp2ds->title_filedownload}}</td>
                                <td>{{$filesp2ds->filedownload}}</td>
                                <td>{{$filesp2ds->date}}</td>
                                <td>{{$filesp2ds->description}}</td>
                                <td>{{$filesp2ds->total}}</td>
                                <td>
                                    <a href="{{route('filesp2d.edit', $fiilesp2ds->id)}}" class="btn btn-warning btn-sm">
                                      <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="post" action="{{route('filesp2d.destroy', $filesp2ds->id)}}" class="d-inline">
                                      @csrf
                                      @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                    </form>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
    <!-- End Section Content -->

    @push('js-datatable')
        <!-- DataTables  & Plugins -->
        <script src="{{asset('rk88/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('rk88/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('rk88/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('rk88/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('rk88/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('rk88/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    @endpush

    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src=" https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function()
        {
           $('#myTable').DataTable();
        });
    </script>

</div>
<!-- End Wrapper -->

@endsection
