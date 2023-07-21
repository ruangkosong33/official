@extends('admin.layouts.b-main')

@section('content')

<!-- Wrapper -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="mb-0">Pegawai</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Header -->

    <!-- Section -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Data Pegawai</h3>
                        </div>

                        <!-- Form -->
                        <form action="{{route('employee.store')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="name_employee" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name_employee" class="form-control @error('name_employee') is-invalid @enderror"
                                        id="name_employee" placeholder="Nama Pegawai">

                                        @error('name_employee')
                                        <span class="invalid-feedback">{{$message}}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nip" class="col-sm-2 col-form-label">Nip</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="Nip">

                                        @error('nip')
                                        <span class="invalid-feedback"{{$message}}></span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="division_id" class="col-sm-2">Bidang</label>
                                    <div class="col-sm-6">
                                      <select name="division_id" class="form-control @error('division_id') is-invalid @enderror" id="division_id">
                                        <option value="">--Pilih--</option>
                                        @foreach ($division as $divisions)
                                        <option value={{$divisions->id}}>{{$divisions->name_division}}</option>
                                        @endforeach
                                      </select>

                                      @error('division_id')
                                        <span class="invalid-feedback">{{$message}}</span>
                                      @enderror

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="image_employee" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image_employee" class="form-control @error('image_employee') is-invalid @enderror" id="image_employee"
                                        onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">

                                        @error('image_employee')
                                            <span class="invalid-feedback"{{$message}}></span>
                                        @enderror

                                    </div>
                                </div>
                                    <!--ImageDisplay -->
                                    <div class="mt-3"><img src="" id="output" width="10%"></div>
                                    <!-- End -->

                                <div class="form-group row">
                                    <label for="position" class="col-sm-2 col-form-label">Level Jabatan</label>
                                    <div class="col-sm-10">
                                        <select name="level" class="form-control @error('level') is-invalid @enderror" id="level">
                                            <option value="">--Pilih--</option>
                                            <option value="1">Level 1 (Kepala Bidang)</option>
                                            <option value="2">Level 2 (Kepala Seksi)</option>
                                            <option value="3">Level 3 (Staff)</option>
                                            <option value="4">Level 4 (Tenaga Alih Daya)</option>
                                          </select>
    
                                          @error('level')
                                            <span class="invalid-feedback">{{$message}}</span>
                                          @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="position" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="position" class="form-control @error('position') is-invalid @enderror" id="nip" placeholder="Posisi">

                                        @error('position')
                                            <span class="invalid-feedback"{{$message}}></span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" id="status" placeholder="Aktif / Tidak Aktif">

                                        @error('status')
                                            <span class="invalid-feedback"{{$message}}></span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="religion" class="col-sm-2 col-form-label">Agama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="religion" class="form-control @error('religion') is-invalid @enderror" id="religion" placeholder="Agama">

                                        @error('religion')
                                            <span class="invalid-feedback"{{$message}}></span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="education_school" class="col-sm-2 col-form-label">Riwayat</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="education_school" class="form-control @error('education_school') is-invalid @enderror"
                                        id="education_school" placeholder="Pendidikan">

                                        @error('education_school')
                                            <span class="invalid-feedback"{{$message}}></span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="education_work" class="col-sm-2 col-form-label">Riwayat</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="education_work" class="form-control @error('education_work') is-invalid @enderror"
                                        id="education_work" placeholder="Diklat">

                                        @error('education_work')
                                            <span class="invalid-feedback"{{$message}}></span>
                                        @enderror

                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan</button>
                                <a href="{{route('employee.index')}}" button type="submit" class="btn btn-default">Kembali</button></a>
                            </div>
                        </form>
                        <!-- End Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

</div>
<!-- End Wrapper -->

@endsection

