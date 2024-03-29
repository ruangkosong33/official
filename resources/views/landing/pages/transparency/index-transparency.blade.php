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
                <h2>Transparansi Pengelolaan Anggaran</h2>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="{{ route('dashboard.index') }}">Beranda</a></li>
                        <li><span>/</span></li>
                        <li>Transparansi Pengelolaan Anggaran</li>
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
                <h2 class="section-title__title">Transparansi Pengelolaan Anggaran</span></h2>
            </div>
        </div>
    </section>
    <!--Faq Search End-->
    <!--Faq Page Start-->
    <section class="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="faq-page__single">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            @foreach ($transparencies as $transparency)
                                <div class="accrodion  {{ $loop->iteration == 1 ? 'active' : '' }}">
                                    <div class="accrodion-title">
                                        <h4>{{ $loop->iteration }}. {{ $transparency->title_transparency }}</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <table class="display datatable-transparency" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Judul</th>
                                                        <th>Di Buat</th>
                                                        <th>Unduh</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($transparency->filetransparency as $filetransparency)
                                                        <tr>
                                                            <td>{{ $filetransparency->title_filetransparency }}</td>
                                                            <td>{{ $filetransparency->created_at->format('d') . ' ' . $filetransparency->created_at->monthName . ', ' . $filetransparency->created_at->year }}</td>
                                                            <td><a href="{{ route('landing.transparency.downloadFile', ['slug' => $filetransparency->slug]) }}"
                                                                    class="thm-btn calculator-menu__btn" target="_blank"
                                                                    rel="nofollow">Unduh</a></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Faq Page End-->
@endsection
@push('js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datatable-transparency').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/id.json',
                },
            });
        });
    </script>
@endpush
