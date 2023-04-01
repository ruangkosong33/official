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
                    <h1 class="m-0">Kategori</h1>
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
                    <h3 class="card-title">Data Kategori</h3>
                    <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('category.create')}}"><i class="fas fa-plus"></i></a>
                        </li>
                    </ul>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
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
           $('#myTable').DataTable({
                processing :true,
                serverside : true,
                ajax : "{{route('category.index')}}",
                columns:
                [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'title_category', name: 'title_category'},
                    {data: 'slug', name: 'slug'},
                    {data: 'action', name: 'action'}

                ]
           });
        });
    </script>

</div>
<!-- End Wrapper -->

@endsection
