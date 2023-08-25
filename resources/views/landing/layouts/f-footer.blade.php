@php
use App\Models\Visitor;
use Carbon\Carbon;
$dateNow = Carbon::now();
$totalVisitor = Visitor::count();
@endphp
<footer class="site-footer">
    <div class="site-footer__shape-1 float-bob-x">
        <img src="{{asset('fk88/assets/images/shapes/site-footer-shape-1.png')}}" alt="">
    </div>
    <div class="site-footer__bg" style="background-image: url(../fk88/assets/images/backgrounds/site-footer-bg.png);">
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href="index.html"><img src="{{asset('fk88/assets/images/bpkad/logo_bpkad.png')}}" alt="" width="260"></a>
                        </div>
                        <p class="footer-widget__about-text">Sebuah Lembaga Pemerintah Provinsi Kalimantan Timur
                            Yang Bertanggung Jawab Dalam Pengelolaan Keeuangan Dan Aset Daerah.</p>
                        <div class="site-footer__social">
                            <a href="https://twitter.com/bpkadkaltim"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/profile.php?id=61550414739484"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/bpkadkaltim/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__newsletter">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">JAM PELAYANAN</h3>
                        </div>
                        <ul class="footer-widget__Contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="fas fa-clock"></span>
                                </div>
                                <div class="text">
                                    <a href="javascript:;">Senin – Kamis :  08.00 – 16.30</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-clock"></span>
                                </div>
                                <div class="text">
                                    <a href="javascript:;">Jumat :  08.00 – 12.00</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="fas fa-clock"></span>
                                </div>
                                <div class="text">
                                    <a href="javascript:;">Sabtu – Minggu : Tutup</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="footer-widget__column footer-widget__portfolio">
                        <div class="footer-widget__title-box">
                            <h3 class="footer-widget__title">Statistik</h3>
                        </div>
                        <div class="footer-widget__column footer-widget__about">
                            <div class="tick" data-value="{{sprintf("%08d", $totalVisitor);}}" id="visitor">
                                <span id="my-flip" data-view="flip"></span>
                            </div>
                            <table width="100%" class="mt-2">
                                <tr>
                                    <td width="55%">Pengunjung Hari ini</td>
                                    <td width="5%">:</td>
                                    <td class="text-end"><span class="badge bg-primary  mt-2" id="today-visitor"></span></td>
                                </tr>
                                <tr>
                                    <td>Pengunjung Bulan ini</td>
                                    <td>:</td>
                                    <td class="text-end"><span class="badge bg-secondary  mt-2" id="month-visitor"></span></td>
                                </tr>
                                <tr>
                                    <td>Pengunjung Tahun ini</td>
                                    <td>:</td>
                                    <td class="text-end"><span class="badge bg-danger  mt-2" id="year-visitor"></span></td>
                                </tr>
                                <tr>
                                    <td>Total Pengunjung</td>
                                    <td>:</td>
                                    <td class="text-end"><span class="badge bg-warning  mt-2" id="total-visitor"></span></td>
                                </tr>
                                <tr>
                                    <td>Pengunjung Online</td>
                                    <td>:</td>
                                    <td class="text-end"><span class="badge bg-success  mt-2" id="online-visitor"></span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© Copyright 2023. <a href="#">Badan Pengelolaan Keuangan & Aset Daerah Provinsi Kalimantan Timur</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
