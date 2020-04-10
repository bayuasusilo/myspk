<div class="container-fluid">
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><span class="fa fa-home"></span> Dashboard </a> /</li>
    <li class="active"><span class="fa fa-cog fa-spin fa-fw"></span> Nilai Alternatif </li>
  </ol>
<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary">Tambah</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardExample">
    <div class="card-body">
      <a href="{{ route('NilaiAlternatif1')}}" class="btn btn-success btn-block"><i class="fab fa-split-f fa-fw"></i> Tambah Data Nilai</a>
    </div>
  </div>
</div>
</div>




<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Table Supplier</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <!--
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Alternatif</th>
              @foreach($Kriteria as $key=> $a)
              <th width="15%">{{$a->nama_kriteria}}</th>
              @endforeach

            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Alternatif</th>
              @foreach($Kriteria as $key=> $a)
              <th width="15%">{{$a->nama_kriteria}}</th>
              @endforeach

            </tr>
          </tfoot>
          <tbody>

            @foreach($NilaiAlternatif->chunk(5) as $chunk)

            @foreach($chunk as $key1 => $value1)
            <th><a href="{{ url('EditNilaiAlternatif', ['id'=>$value1->get_alternatif->id_supplier]) }}">{{$value1->get_alternatif->nama_supplier}}</a></th>
            @break
            @endforeach

            @foreach($chunk as $key1 => $value)
            <td> {{$value->get_nilai_kriteria_alternatif->keterangan}} ({{$value->get_nilai_kriteria_alternatif->nilai}})</td>
            @endforeach
            </tr>
            @endforeach


          </tbody>
        </table>
      -->



        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Alternatif</th>
              <th>Produk</th>
              @foreach($Kriteria as $key=> $a)
              <th width="15%">{{$a->nama_kriteria}}</th>
              @endforeach

            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Alternatif</th>
              <th>Produk</th>
              @foreach($Kriteria as $key=> $a)
              <th width="15%">{{$a->nama_kriteria}}</th>
              @endforeach

            </tr>
          </tfoot>
          <tbody>

            @foreach($tes->chunk($jmlk) as $chunk)

            @foreach($chunk as $key1 => $value1)
            <th><a href="{{ url('EditNilaiAlternatif', ['id'=>$value1->id_supplier]) }}">{{$value1->nama_supplier}}</a></th>
            <th>{{$value1->nama_jenis_produk}}</th>
            @break
            @endforeach

            @foreach($chunk as $key1 => $value)
            <td> {{$value->keterangan}} ({{$value->nilai}})</td>
            @endforeach
            </tr>
            @endforeach


          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->
