@extends('landing.layouts.f-master')
@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endpush
@section('f-content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(../fk88/assets/images/backgrounds/services-three-bg.png);">
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
                <h2>Belanja Bagi Hasil</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('dashboard.index') }}">Beranda</a></li>
                        <li><span>/</span></li>
                        <li>Belanja Bagi Hasil</li>
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
                <h2 class="section-title__title">SP2D BBH KABUPATEN/KOTA</span></h2>
            </div>
        </div>
    </section>
    <!--Faq Search End-->
    <section>
        <div class="container">
            <div class="row pb-5">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Kabaten/Kota</th>
                            <th>Judul</th>
                            <th>Uraian</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($filesp2ds as $filesp2d)
                            <tr>
                                <td>{{ $filesp2d->citykab->name_citykab }}</td>
                                <td><a class="team-one__hover-sub-title"
                                        href="{{ route('landing.bbh.downloadFile', ['slug' => $filesp2d->slug]) }}">{{ $filesp2d->title_sp2d }}</a>
                                </td>
                                <td>{{ $filesp2d->description }}</td>
                                @php
                                    $date = \Carbon\Carbon::parse($filesp2d->date);
                                @endphp
                                <td>{{ $date->format('d') . ' ' . $date->monthName . ', ' . $date->year }}</td>
                                <td>Rp. {{ number_format($filesp2d->total, '0', ',', '.') }}</td>
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
            $('#example').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json',
                },
                ordering: false
            });
        });
    </script>
@endpush
