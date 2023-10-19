<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{asset('fk88/assets/images/logo/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin BPKAD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @php
                $splitName = explode(' ',Auth::user()->username);
            @endphp
          <img src="https://ui-avatars.com/api/?name={{$splitName[0]}}&background=random" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">

          <a href="javascript:;" class="d-block">{{Auth::user()->username}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link @yield('dashboard')">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">Menu</li>

          @if(auth()->user()->level == 1)

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Profil
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('vision.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi & Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('formationhistory.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sejarah Pembentukan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('issue.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Isu Strategis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('structure.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Struktur Organisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('goalobjective.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tujuan & Sasaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('taskfunction.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tugas Pokok & Fungsi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('policydirection.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Arah Kebijakan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('serviceorder.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tertib Pelayanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('leader.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kepala Badan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('event.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agenda Kegiatan</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Organisasi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('division.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bidang</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('employee.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pegawai</p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Info Publik
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('hostel.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Asrama</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('auction.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lelang</p>
                  </a>
                </li>
            </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('download.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Download</p>
                  </a>
                </li>
            </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('bba.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Belanja Bagi Hasil</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('sk.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Belanja Bagi Hasil</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('recap.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Recap Bagi Hasil</p>
                  </a>
                </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bezier-curve"></i>
              <p>
                Integrasi Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('apbd.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>APBD</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('renja.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rencana Kerja</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('renstra.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Rencana Strategi</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('sop.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SOP</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('rpjmd.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>RPJMD</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('lkjip.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>LKJIP</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('lppd.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>LPPD</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('sidata.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Satu Data & SPBE</p>
                  </a>
                </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Program Kegiatan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('realisation.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Realisasi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('bansos.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Bantuan Sosial</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('responsible.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Penanggung Jawab</p>
                  </a>
                </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Potensi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('pad.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PAD</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('asset.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Aset</p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link @yield('category.index')">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('citykab.index')}}" class="nav-link @yield('citykab.index')">
              <i class="nav-icon fas fa-atom"></i>
              <p>
                Kota/Kabupaten
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('post.index')}}" class="nav-link @yield('post.index')">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Berita
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('law.index')}}" class="nav-link @yield('law.index')">
              <i class="nav-icon fas fa-gavel"></i>
              <p>
                Produk Hukum
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('transparency.index')}}" class="nav-link @yield('law.index')">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Transparansi Anggaran
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('banner.index')}}" class="nav-link @yield('banner.index')">
              <i class="nav-icon fas fa-inbox"></i>
              <p>
                Slider Banner
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('gallery.index')}}" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Galeri
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('video.index')}}" class="nav-link @yield('userlist.index')">
              <i class="nav-icon fas fa-video"></i>
              <p>
                Video
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('userlist.index')}}" class="nav-link @yield('userlist.index')">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Userlist
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link @yield('userlist.index')">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

          @endif

          @if(auth()->user()->level == 2)

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Info Publik
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('bba.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Belanja Bagi Hasil</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('sk.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Belanja Bagi Hasil</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('recap.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Recap Bagi Hasil</p>
                  </a>
                </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link @yield('userlist.index')">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

          @endif

          @if(auth()->user()->level == 3)

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Info Publik
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('hostel.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Asrama</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('auction.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lelang</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('download.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Download</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('bba.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Belanja Bagi Hasil</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('sk.index')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>SK Belanja Bagi Hasil</p>
                  </a>
                </li>
              </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('law.index')}}" class="nav-link @yield('law.index')">
              <i class="nav-icon fas fa-gavel"></i>
              <p>
                Produk Hukum
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('transparency.index')}}" class="nav-link @yield('law.index')">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Transparansi Anggaran
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link @yield('userlist.index')">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

          @endif

          @if(auth()->user()->level == 4)

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Profil
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('event.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

          @endif

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
