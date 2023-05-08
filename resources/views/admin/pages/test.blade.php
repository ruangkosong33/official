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
                    <h1 class="m-0">Ajax</h1>
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
                    <h3 class="card-title">Data Ajax</h3>
                    <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item">
                            <a href="" class="btn btn-primary" id="btn-tambah" data-toggle="modal" data-target="#modal-default">
                                <i class="fas fa-plus"></i>
                            </a>
                        </li>
                    </ul>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>

            </div>
        </div>
    </section>
    <!-- End Section Content -->

    <!-- Modal -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <!-- Form -->
                    <form id="forms" class="form-horizontal" method="post">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control"
                                    id="name" placeholder="Nama">
                                </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <input type="text" name="category" class="form-control"
                                    id="category" placeholder="Kategori">
                                </div>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary simpan">Simpan</button>
                </div>

            </div>
        </div>
    </div>
    <!-- End Modal -->
    

    @push('js-datatable')
        <!-- DataTables  & Plugins -->
        <script src="{{asset('rk88/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('rk88/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('rk88/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('rk88/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('rk88/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('rk88/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    @endpush

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src=" https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function()
        {
           $('#myTable').DataTable({
                processing :true,
                serverside : true,
                ajax : "{{route('test.index')}}",
                columns:
                [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'name', name: 'name'},
                    {data: 'category', name: 'category'},
                    {data: 'action', name: 'action', orderable: false},

                ]
           });
        });

        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '#btn-tambah', function(e)
        {
            e.preventDefault();
            $('#modal-default').modal('show');
            $('.simpan').click(function()
            {
                $.ajax(
                    {
                        url:"{{route('test.store')}}",
                        type:'POST',
                        data:
                        {
                            "_token":"{{csrf_token()}}",
                            name : $('#name').val(),
                            category : $('#category').val(),
                        },
                        success:function(response)
                        {
                            console.log(response);
                            $('#myTable').DataTable().ajax.reload();
                        }
                    }
                );
            });
        });

        // $(document).on('simpan', '#forms', function(e)
        // {
        //     e.preventDefault();
        //     $.ajax(
        //         {
        //             url:$(this).attr('action'),
        //             type:$(this).attr('method'),
        //             typeData:"JSON",
        //             data: new FormData(this),
        //             contentType: false,
        //             success : function(res)
        //             {
        //                 console.log(res);
                        
        //             },
        //             error:function(xhr)
        //             {
        //                 console.log(xhr);
        //             }
        //         }
        //     )
        // })
    </script>
</div>
<!-- End Wrapper -->

@endsection
