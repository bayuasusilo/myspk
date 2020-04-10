<!-- Begin Page Content -->
<div class="container-fluid">
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><span class="fa fa-home"></span> Dashboard </a> /</li>
    <li class="active"><span class="fa fa-cog fa-spin fa-fw"></span> Kriteria </li>
  </ol>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Table Kriteria</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Kode</th>
              <th>Keterangan</th>
              <th>Bobot Kriteria</th>
              <th>Atribut Kriteria</th>
              <th width="10%">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Kode</th>
              <th>Nama Kriteria</th>
              <th>Bobot Kriteria</th>
              <th>Atribut Kriteria</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($Kriteria as $key =>$dataa)
            <tr>
              <td>K{{ $dataa->id_kriteria }}</td>
              <td>{{ $dataa->nama_kriteria }}</td>
              <td>{{ $dataa->bobot_kriteria }}</td>
              <td>@if($dataa->atribut_kriteria == 1)
                      Benefit
                  @else
                      Cost
                  @endif
              </td>
              <td><center><a href="{{ url('EditKriteria', ['id'=>$dataa->id_kriteria]) }}" class="btn btn-warning btn-circle btn-sm">
                <span class="icon text-white-50">
                  <i class="fas fa-exclamation-triangle"></i>
                </span></a>

                <a onclick="return confirm('Apakah anda yakin?')" href="{{ url('DeleteKriteria', ['id'=>$dataa->id_kriteria]) }}" class="btn btn-danger btn-icon-split btn-sm">
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
