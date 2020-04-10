
<div class="container-fluid">
<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#table1" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="table1">
    <h6 class="m-0 font-weight-bold text-primary">Table Nilai Crips </h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="table1">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="10%">No</th>
              <th>Nama Kriteria</th>
              <th>Keterangan</th>
              <th>Nilai</th>
              <th width="10%">Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Nama Kriteria</th>
              <th>Keterangan</th>
              <th>Nilai</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach ($NilaiKriteriaAlternatif as $key =>$dataa)
            <tr>
              <td>{{ $loop->index+1 }}</td>
              <td>{{ $dataa->get_kriteria->nama_kriteria }}</td>
              <td>{{ $dataa->keterangan }}</td>
              <td>{{ $dataa->nilai }}</td>
              <td><a href="{{ url('EditNilaiKriteriaAlternatif', ['id'=>$dataa->id_nilai_kriteria_alternatif]) }}" class="btn btn-warning btn-circle btn-sm">
                <span class="icon text-white-50">
                  <i class="fas fa-exclamation-triangle"></i>
                </span></a>
                <a onclick="return confirm('Apakah anda yakin?')" href="{{ url('DeleteNilaiKriteriaAlternatif', ['id'=>$dataa->id_nilai_kriteria_alternatif]) }}" class="btn btn-danger btn-icon-split btn-sm">
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
</div>
