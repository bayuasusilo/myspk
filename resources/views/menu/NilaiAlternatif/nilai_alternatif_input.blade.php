<!-- Asset Atas -->
@include('layouts.top')
<!-- /Asset Atas -->

<!-- SideBar -->
@include('layouts.sidebar')
<!-- /SideBar -->

<!-- TopBar -->
@include('layouts.topbar')
<!-- /TopBar -->


<div class="container-fluid">
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><span class="fa fa-home"></span> Dashboard </a> /</li>
    <li><a href="{{ route('NilaiAlternatif') }}"><span class="fa fa-cog fa-spin fa-fw"></span> Nilai Alternatif </a> /</li>
    <li><a href="{{ route('NilaiAlternatif1') }}"><span class="fa fa-cog fa-spin fa-fw"></span> Table Nilai Alternatif </a> /</li>
    <li class="active"><span class="fa fa-star fa-spin fa-fw"> </span> Input Nilai Alternatif </li>
  </ol>
<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary">Input Nilai Alternatif</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardExample">
    <div class="card-body">
      <form method="POST" action="{{ route('Input2NilaiAlternatif') }}">
        @csrf
          @foreach ($Alternatif as $key =>$dataa)
          <input id="id" type="hidden" name="id" value="{{ $dataa->id_supplier }}" >
          <div class="form-group row">
              <label class="col-md-4 col-form-label text-md-right">{{ __('Supplier') }}</label>

              <div class="col-md-6">
                  <input name="{{ $dataa->id_supplier }}" type="text" class="form-control" value="{{ $dataa->nama_supplier }}" required autofocus disabled>
              </div>
          </div>
          @endforeach

          @foreach ($Kriteria as $key =>$dataa1)
          <div class="form-group row">
              <label for="Supplier" class="col-md-4 col-form-label text-md-right">{{ $dataa1->nama_kriteria }}</label>
              <input type="hidden" name="i{{ $dataa1->id_kriteria }}" value="{{ $dataa1->id_kriteria }}" >
              <div class="col-md-6">
                <select class="form-control custom-select2" name="n{{$dataa1->id_kriteria}}" required style="width: 100%; height: 38px;">
                  <option value="">Pilih</option>

                    @foreach ($NilaiKriteriaAlternatif as $key =>$dataa2)
                    @if($dataa1->id_kriteria == $dataa2->kriteria)
                    <option value="{{ $dataa2->id_nilai_kriteria_alternatif }}">{{ $dataa2->nilai }} - {{ $dataa2->keterangan }}</option>
                    <!--<option value="{{ $dataa2->id_nilai_kriteria_alternatif }}">{{ $dataa2->nilai }} - {{ $dataa2->keterangan }} - {{ $dataa2->get_kriteria->nama_kriteria }}</option>-->
                    @endif
                    @endforeach
                </select>
              </div>
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




<!-- footer -->
@include('layouts.footer')
<!-- /footer -->

<!-- Asset Bawah -->
@include('layouts.bot')
<!-- /Asset Bawah -->
