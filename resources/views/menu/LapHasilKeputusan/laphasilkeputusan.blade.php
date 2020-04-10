<!-- Asset Atas -->
@include('layouts.top')
<!-- /Asset Atas -->

<!-- SideBar -->
@include('layouts.sidebar')
<!-- /SideBar -->

<!-- TopBar -->
@include('layouts.topbar')
<!-- /TopBar -->

<!-- TopBar -->
@include('layouts.alert')
<!-- /TopBar -->

<!-- Begin Page Content -->
<div class="container-fluid">
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><span class="fa fa-home"></span> Dashboard </a> /</li>
    <li class="active"><span class="fa fa-cog fa-spin fa-fw"></span> Table Hasil Keputusan </li>
  </ol>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Table Hasil Keputusan</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="5%">No</th>
              <th>Kode</th>
              <th>Jenis Produk</th>
              <th>Bulan</th>
              <th>Tahun</th>
              <th width="10%">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Jenis Produk</th>
              <th>Bulan</th>
              <th>Tahun</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($Hasil as $key =>$dataa)
            <tr>
              <th>{{ $key+1 }}</th>
              <td>{{ $dataa->id_hasil }}</td>
              <td>{{ $dataa->get_jenisproduk->nama_jenis_produk }}</td>
              <td>{{ $dataa->bulan }}</td>
              <td>{{  $dataa->tahun  }}</td>
              <td><a href="{{ url('laporan', ['id'=>$dataa->id_hasil]) }}"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> PRINT </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->



<!-- footer -->
@include('layouts.footer')
<!-- /footer -->

<!-- Asset Bawah -->
@include('layouts.bot')
<!-- /Asset Bawah -->
