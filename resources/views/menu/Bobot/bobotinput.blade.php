<div class="container-fluid">

  <ol class="breadcrumb">
	  <li><a href="{{ route('home') }}"><span class="fa fa-home"></span> Dashboard </a> /</li>
	  <li class="active"><span class="fa fa-cog fa-spin fa-fw"></span> Analisa Bobot Kriteria /</li>
    @if ($jmlb > 0)
	  <li><a href="{{ route('InputBobotBreadcrumb') }}"><span class="fa fa-star fa-spin fa-fw"> </span> Tabel Analisa Bobot Kriteria </a></li>
    @endif
  </ol>
<div class="container-fluid">

<div class="card shadow mb-4">

  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary">Input Bobot</h6>
  </a>

  <div class="collapse show" id="collapseCardExample" >
    <div class="card-body">
      <form method="POST" action="{{ route('InputBobot') }}">
        @csrf

          @foreach ($Kriteria as $key =>$dataa1)
          <input type="hidden" class="form-control" name="jumlah" value="{{$loop->count}}" >

          <div class="form-group row">

              @foreach ($Kriteria as $key1 =>$dataa11)
              @if ($dataa11 > $dataa1)

              <div class="col-md-3" style="margin-bottom:5px">
                  <input type="text" class="form-control" name="P1" value="{{$dataa1->nama_kriteria}}" disabled required autofocus>
              </div>

              <div class="col-md-6">
                  <select class="form-control custom-select2" name="{{$dataa1->id_kriteria}}{{$dataa11->id_kriteria}}" required style="width: 100%; height: 38px;">
    								<option value="">Pilih</option>

                      @foreach ($Nilai as $key =>$dataa)
    									<option value="{{ $dataa->nilai }}">{{ $dataa->keterangan_nilai }}</option>
                      @endforeach
    							</select>
              </div>

              <div class="col-md-3">
                  <input type="text" class="form-control" name="P2" value="{{$dataa11->nama_kriteria}}" disabled required autofocus>
              </div>

              @else

                  <input type="hidden" class="form-control" name="{{$dataa1->id_kriteria}}{{$dataa11->id_kriteria}}" value="1" >

              @endif
              @endforeach
          </div>
          @endforeach

          <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Simpan') }}
                  </button>

              </div>
          </div>
      </form>
    </div>
  </div>
</div>
</div>
