@extends('admin.layouts.b-main')

@section('content')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
@endpush

<!-- Wrapper -->
<div class="content-wrapper">

    <!--Content Header-->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">File Pendapatan Asli Daerah</h1>
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
                    <h3 class="card-title">Data File Pendapatan Asli Daerah</h3>
                    <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('filepad.create', ['pad'=>$pad])}}"><i class="fas fa-plus"></i></a>
                        </li>
                    </ul>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($filepad as $key=>$filepads)
                              <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$filepads->title_filepad}}</td>
                                <td>{{$filepads->file_filepad}}</td>
                                <td>
                                    <a href="{{route('filepad.edit', ['filepad'=>$filepads])}}" class="btn btn-warning btn-sm">
                                      <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="post" action="{{route('filepad.destroy', ['filepad'=>$filepads])}}" class="d-inline">
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

    <script src=" https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>

    <script type="text/javascript">
        $(document).ready(function()
        {
           $('#myTable').DataTable();
        });
    </script>

</div>
<!-- End Wrapper -->

@endsection
