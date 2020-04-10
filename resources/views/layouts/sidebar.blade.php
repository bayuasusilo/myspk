<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3">SPK Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Master</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Komponen Master:</h6>
          <a class="collapse-item" href="{{ route('Supplier') }}">Data Supplier</a>
          <a class="collapse-item" href="{{ route('JenisProduk') }}">Data Jenis Produk</a>
          <!--<a class="collapse-item" href="{{ route('Admin') }}">Data Admin</a>-->
          <!--<a class="collapse-item" href="{{ route('Nilai') }}">Data Nilai</a>-->
          <a class="collapse-item" href="{{ route('Kriteria') }}">Data Kriteria</a>
          <a class="collapse-item" href="{{ route('NilaiKriteriaAlternatif') }}">Data Nilai Crips</a>
          <a class="collapse-item" href="{{ route('NilaiAlternatif') }}">Data Nilai Supplier</a>

        </div>
      </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Proses</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Komponen Proses:</h6>
          <a class="collapse-item" href="{{ route('Bobot') }}">Analisa Bobot</a>
          <a class="collapse-item" href="{{ route('Perhitungan') }}">Analisa Alternatif</a>
          <a class="collapse-item" href="{{ route('HasilPerhitungan') }}">Hasil Analisa</a>
        </div>
      </div>
    </li>


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan" aria-expanded="true" aria-controls="collapseLaporan">
        <i class="fas fa-fw fa-folder"></i>
        <span>Laporan</span>
      </a>
      <div id="collapseLaporan" class="collapse" aria-labelledby="headingLaporan" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Komponen Laporan:</h6>
          <a class="collapse-item" href="{{ route('LapHasilKeputusan') }}">Lap Hasil Keputusan</a>
          <a class="collapse-item" href="{{ route('LapAltTidakTerpilih') }}">Lap Supplier Tidak Terpilih</a>
          <a class="collapse-item" href="{{ route('LapGrafikAlt') }}">Lap Grafik Supplier</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
      Menu
    </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-user"></i>
        <span>Akun</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Komponen Admin:</h6>
          <a class="collapse-item" href="{{ route('Admin') }}">Admin</a>
          <a class="collapse-item" href="{{ url('EditAdmin', ['id'=>Auth::user()->id]) }}">Profile</a>
        </div>
      </div>
    </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->
