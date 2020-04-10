<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Table Jenis Barang</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>Email</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>Email</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($Admin as $key =>$dataa)
            <tr>
              <td><a href="{{ url('EditAdmin', ['id'=>$dataa->id]) }}">000{{ $dataa->id }}</a></td>
              <td>{{ $dataa->name }}</td>
              <td>{{ $dataa->email }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
