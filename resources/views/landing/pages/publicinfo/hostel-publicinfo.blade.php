@extends('landing.layouts.f-master')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endpush
@section('f-content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(../fk88/assets/images/backgrounds/page-header-bg.jpg);">
        </div>
        <div class="page-header__shape-2 float-bob-x">
            <img src="{{asset('fk88/assets/images/shapes/page-header-shape-2.png')}}" alt="">
        </div>
        <div class="page-header__shape-1 float-bob-y">
            <img src="{{asset('fk88/assets/images/shapes/page-header-shape-1.png')}}" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="{{asset('fk88/assets/images/shapes/page-header-shape-3.png')}}" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Info Publik</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{route('dashboard.index')}}">Beranda</a></li>
                        <li><span>/</span></li>
                        <li>Info Publik</li>
                        <li><span>/</span></li>
                        <li>Asrama</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->
    <!--Faq Search Start-->
    <section class="faq-search">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">BPKAD KALTIM</span>
                </div>
                <h2 class="section-title__title">Asrama</span></h2>
            </div>
        </div>
    </section>
    <!--Faq Search End-->
    <section>
        <div class="container">
            <div class="row pb-5">
                <table id="datatable1" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hostels as $hostel)
                        <tr>
                            <td>{{$hostel->name_hostel}}</td>
                            <td>{{$hostel->address_hostel}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable1').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json',
                },
            });
        });
    </script>
@endpush