@extends('landing.layouts.f-master')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endpush
@section('f-content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(../fk88/assets/images/backgrounds/service-three-bg.jpg);">
        </div>
        <div class="page-header__shape-2 float-bob-x">
            <img src="{{ asset('fk88/assets/images/shapes/page-header-shape-2.png') }}" alt="">
        </div>
        <div class="page-header__shape-1 float-bob-y">
            <img src="{{ asset('fk88/assets/images/shapes/page-header-shape-1.png') }}" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="{{ asset('fk88/assets/images/shapes/page-header-shape-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Anggaran Pendapatan dan Belanja Daerah</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('dashboard.index') }}">Beranda</a></li>
                        <li><span>/</span></li>
                        <li>Integrasi Data</li>
                        <li><span>/</span></li>
                        <li>Anggaran Pendapatan dan Belanja Daerah</li>
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
                <h2 class="section-title__title">Anggaran Pendapatan dan Belanja Daerah <br> {{ $apbd->year }}</span></h2>
            </div>
        </div>
    </section>
    <!--Services Details Start-->
    <section class="services-details" style="padding-top: 0px">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="services-details__left">
                        <div class="services-details__category">
                            <h3 class="services-details__category-title">Periode</h3>
                            <ul class="services-details__category-list list-unstyled">
                                @foreach ($apbds as $apbdItem)
                                    <li class="{{ $apbdItem->periode == $apbd->periode ? 'active' : '' }}">
                                        <a href="{{ route('landing.integration.apbd',['slug'=>$apbdItem->slug]) }}">{{ $apbdItem->periode }}
                                            <span class="icon-right-arrow"></span>
                                        </a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <div class="services-details__right">
                        <table id="datatable1" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Kota</th>
                                    <th>Judul</th>
                                    <th>Periode</th>
                                    <th>Unduh</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apbd->fileapbd as $fileapbd)
                                    <tr>
                                        <td>{{ $fileapbd->citykab->name_citykab }}</td>
                                        <td>{{ $fileapbd->title_fileapbd }}</td>
                                        <td>{{ $apbd->periode }}</td>
                                        <td><a href="" class="thm-btn calculator-menu__btn" target="_blank"
                                                rel="nofollow">Unduh</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services Details End-->
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
