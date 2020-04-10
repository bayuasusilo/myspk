<!-- Asset Atas -->
@include('layouts.top')
<!-- /Asset Atas -->

<!-- SideBar -->
@include('layouts.sidebar')
<!-- /SideBar -->

<!-- TopBar -->
@include('layouts.topbar')
<!-- /TopBar -->
<!-- Begin Page Content -->
<div class="container-fluid">
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><span class="fa fa-home"></span> Dashboard </a> /</li>
    <li><a href="{{ route('NilaiAlternatif') }}"><span class="fa fa-cog fa-spin fa-fw"></span> Nilai Alternatif </a> /</li>
    <li class="active"><span class="fa fa-star fa-spin fa-fw"> </span> Table Alternatif </li>
  </ol>
  <!-- DataTales Example -->


  <div class="card shadow mb-4">
    <!-- Card Header - Accordion -->
    <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
      <h6 class="m-0 font-weight-bold text-primary">Tambah</h6>
    </a>
    <div class="collapse " id="collapseCardExample">

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="10%">Kode</th>
              <th>Nama</th>
              <th>Produk</th>
              <th width="12%">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Produk</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($Alternatif as $key =>$dataa)
            <tr>
              <td>{{ $loop->index+1 }}</a></td>
              <td>{{ $dataa->nama_supplier }}</td>
              <td>{{ $dataa->get_supplier->nama_jenis_produk }}</td>
              <td><center><a href="{{ url('InputNilaiAlternatif', ['id'=>$dataa->id_supplier]) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
              <i class="fas fa-plus fa-sm text-white-50"></i> Tambah </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>




  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Table Supplier</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="10%">Kode</th>
              <th>Nama</th>
              <th>Produk</th>
              <th width="12%">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Produk</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($tes1 as $key =>$dataa)
            @if ($dataa->get_suppliernilai == null)
            <tr>
              <td>{{ $dataa->id_supplier }}</a></td>
              <td>{{ $dataa->nama_supplier }}</td>
              <td>{{ $dataa->get_supplier->nama_jenis_produk }}</td>
              <td><center><a href="{{ url('InputNilaiAlternatif', ['id'=>$dataa->id_supplier]) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
              <i class="fas fa-plus fa-sm text-white-50"></i> Tambah </a>
              </td>
            </tr>
            @endif
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
