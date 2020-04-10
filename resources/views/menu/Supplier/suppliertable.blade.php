<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Table Supplier</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No Telpn</th>
              <th>Produk</th>
              <th width="10%">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No Telpn</th>
              <th>Produk</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($Supplier as $key =>$dataa)
            <tr>
              <td><a href="{{ url('EditSupplier', ['id'=>$dataa->id_supplier]) }}">000{{ $dataa->id_supplier }}</a></td>
              <td>{{ $dataa->nama_supplier }}</td>
              <td>{{ $dataa->alamat_supplier }}</td>
              <td>{{ $dataa->tlpn_supplier }}</td>
              <td>{{ $dataa->get_supplier->nama_jenis_produk }}</td>
              <td><center><a onclick="return confirm('Apakah anda yakin?')" href="{{ url('DeleteSupplier', ['id'=>$dataa->id_supplier]) }}" class="btn btn-danger btn-icon-split btn-sm">
                <span class="icon text-white-50">
                  <i class="fas fa-trash"></i>
                </span></a>
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
