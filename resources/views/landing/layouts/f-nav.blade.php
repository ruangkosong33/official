<header class="main-header-three">
    <nav class="main-menu main-menu-three">
        <div class="main-menu-three__wrapper">
            <div class="main-menu-three__wrapper-inner">
                <div class="main-menu-three__logo" style="left: 10px">
                    <a href="index.html"><img height="66" src="{{ asset('fk88/assets/images/logo/logo-bpkad.png') }}"
                            alt=""></a>
                </div>
                <div class="main-menu-three__wrapper-inner-content">
                    <div class="main-menu-three__top">
                        <div class="main-menu-three__top-inner">
                            <div class="main-menu-three__top-left">
                                <ul class="list-unstyled main-menu-three__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:bpkadkaltim@gmail.com">bpkadkaltim@gmail.com</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="text">
                                            <p>(0541) 733333</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-fax"></i>
                                        </div>
                                        <div class="text">
                                            <p>(0541) 737762</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-menu-three__top-right">
                                <div class="main-menu-three__social">
                                    <a href="https://twitter.com/bpkadkaltim"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/pages/BPKAD%20Prov.%20Kaltim/1900010416967704/"><i
                                            class="fab fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/bpkadkaltim/"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-menu-three__bottom">
                        <div class="main-menu-three__bottom-inner">
                            <div class="main-menu-three__main-menu-box" style="padding-left: 25px; padding-right: 25px;">
                                <div class="main-menu-three__main-menu-box-left" >
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="dropdown">
                                            <a href="{{ route('dashboard.index') }}">Beranda</a>
                                        </li>
                                        <li class="dropdown" style="margin-left: 15px">
                                            <a href="#">Profil </a>
                                            <ul>
                                                <li><a href="{{route('profil.vision')}}">Visi & Misi</a></li>
                                                <li><a href="{{route('profil.formationhistory')}}">Sejarah Pembentukan</a></li>
                                                <li><a href="{{route('profil.issue')}}">Isu Strategis</a></li>
                                                <li><a href="index3.html">Tujuan & Sasaran</a></li>
                                                <li><a href="index3.html">Tugas Pokok & Fungsi</a></li>
                                                <li><a href="index3.html">Arah Kebijakan</a></li>
                                                <li><a href="index3.html">Tertib Pelayanan</a></li>
                                                <li><a href="index3.html">Kepala Badan</a></li>
                                                <li><a href="index3.html">Agenda Kegiatan</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown" style="margin-left: 15px">
                                            <a href="index.html">Organisasi</a>
                                            <ul>
                                                @foreach ($divisions as $division)
                                                    <li><a href="index3.html">{{ $division->name_division }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="dropdown" style="margin-left: 15px">
                                            <a href="index.html">Info Publik</a>
                                            <ul>
                                                <li><a href="index.html">Asrama</a></li>
                                                <li><a href="index2.html">Lelang</a></li>
                                                <li><a href="index3.html">Download</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown" style="margin-left: 15px">
                                            <a href="index.html">Produk Hukum</a>
                                            <ul>
                                                @foreach ($laws as $law)
                                                    <li><a href="index3.html">{{ $law->title_law }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="dropdown" style="margin-left: 15px">
                                            <a href="index.html">Integrasi Data</a>
                                            <ul>
                                                <li><a href="index.html">APBD</a></li>
                                                <li><a href="index.html">Rencana Kerja</a></li>
                                                <li><a href="index.html">Rencana Strategi</a></li>
                                                <li><a href="index.html">SOP</a></li>
                                                <li><a href="index.html">RPJMD</a></li>
                                                <li><a href="index.html">LKJIP</a></li>
                                                <li><a href="index.html">LPPD</a></li>
                                                <li><a href="index.html">SIDATA</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown" style="margin-left: 15px">
                                            <a href="{{ route('dashboard.index') }}">Transparansi Anggaran</a>
                                        </li>
                                        <li class="dropdown" style="margin-left: 15px">
                                            <a href="index.html">Program Kegiatan </a>
                                            <ul>
                                                <li><a href="index.html">Penanggung Jawab Program & Kegiatan</a></li>
                                                <li><a href="index2.html">Realisasi Fisik & Keuangan</a></li>
                                                <li><a href="index3.html">Bantuan Sosial</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown" style="margin-left: 15px">
                                            <a href="index.html">Potensi</a>
                                            <ul>
                                                <li><a href="index.html">PAD</a></li>
                                                <li><a href="index2.html">Aset</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown" style="margin-left: 15px">
                                            <a href="#">BBH</a>
                                            <ul class="sub-menu">
                                                <li class="dropdown">
                                                    <a href="#">Rekap Per Kota/Kab</a>
                                                    <ul>
                                                        @foreach ($cityKabs as $cityKab)
                                                            <li><a href="index.html">{{$cityKab->name_citykab}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown " style="margin-left: 15px">
                                            <a href="index.html">PPID</a>
                                            <ul class="dropdown-menu-end">
                                                <li><a href="index.html">PAD</a></li>
                                                <li><a href="index2.html">Aset</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
