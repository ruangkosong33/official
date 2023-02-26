@extends('admin.layouts.b-main')

@section('content')
@section('userlist.index', 'active')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data User</h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="fas fa-plus"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-bordered table-striped" id="myTable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($user as $key=>$users)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$users->username}}</td>
                  <td>{{$users->email}}</td>
                  <td>{{$users->status}}</td>
                  <td>
                      <a href="{{route('userlist.edit', $users->id)}}" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i>
                      </a>
                      <form method="post" action="{{route('userlist.destroy', $users->id)}}" class="d-inline">
                        @csrf
                        @method('DELETE')
                      <button class="btn btn-sm btn-danger btn-delete">
                        <i class="fas fa-trash"></i>
                      </button>
                      </form>
                      <a href="{{route('userlist.show', $users->id)}}" class="btn btn-info btn-sm">
                        <i class="fas fa-eye"></i>
                      </a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
    </section>
    <!-- /.col -->
</div>

@endsection
