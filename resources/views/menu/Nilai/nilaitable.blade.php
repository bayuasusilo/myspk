<!-- Begin Page Content -->
<div class="container-fluid">
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><span class="fa fa-home"></span> Dashboard </a> /</li>
    <li class="active"><span class="fa fa-cog fa-spin fa-fw"></span> Nilai </li>
  </ol>
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
              <th width="10%">Nilai</th>
              <th>Keterangan</th>
              <th width="10%">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nilai</th>
              <th>Keterangan</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($Nilai as $key =>$dataa)
            <tr>
              <td>{{ $dataa->nilai }}</td>
              <td>{{ $dataa->keterangan_nilai }}</td>
              <td><a href="{{ url('EditNilai', ['id'=>$dataa->id_nilai]) }}" class="btn btn-warning btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-exclamation-triangle"></i>
                </span>
                <span class="text">Edit</span></a>
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
