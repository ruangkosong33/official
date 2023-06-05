@extends('admin.layouts.b-main')

@section('content')
@section('post.index', 'active')

@push('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap4.min.css">
@endpush

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Berita</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Berita</h3>
                    <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('post.create')}}"><i class="fas fa-plus"></i></a>
                        </li>
                    </ul>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="myTable">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th>Gambar</th>
                            <th>Kategori</th>
                            <th>Status</th>
                            <th>Penulis</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $key=>$posts)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{Str::limit($posts->title_post, '15', '....')}}</td>
                                <td><img src="{{asset('uploads/image-post/'. $posts->image_post)}}" width="80px"></td>
                                <td>{{$posts->category->title_category}}</td>
                                <td><span class="badge badge-pill badge-success">{{$posts->status == 0 ? 'Draft':'Publish'}}</span></td>
                                <td>{{$posts->user->username}}</td>
                                <td>
                                    <a href="{{route('post.edit', $posts->id)}}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form method="post" action="{{route('post.destroy', $posts->id)}}" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                    <button class="btn btn-sm btn-danger btn-delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    </form>
                                    <a href="#" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
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
    <!-- /.col -->

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

@endsection


