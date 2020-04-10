<div class="container-fluid">
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><span class="fa fa-home"></span> Dashboard </a> /</li>
    <li class="active"><span class="fa fa-cog fa-spin fa-fw"></span> Nilai Crips </li>
  </ol>
<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary">Input Nilai Crips</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardExample">
    <div class="card-body">
      <form method="POST" action="{{ route('InputNilaiKriteriaAlternatif') }}">
        @csrf
          <div class="form-group row">
              <label for="Supplier" class="col-md-4 col-form-label text-md-right">{{ __('Kriteria') }}</label>

              <div class="col-md-6">
                  <select class="form-control custom-select2" name="kriteria" id="kriteria" required style="width: 100%; height: 38px;">
                    <option value="">Pilih</option>

                      @foreach ($Kriteria as $key =>$dataa)
                      <option value="{{ $dataa->id_kriteria }}">{{ $dataa->nama_kriteria }}</option>
                      @endforeach
                  </select>

              </div>
          </div>


          <div class="form-group row">
              <label for="Supplier" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

              <div class="col-md-6">
                  <input id="nama" type="text" class="form-control" name="nama" required autofocus>
              </div>
          </div>

          <div class="form-group row">
              <label for="Supplier" class="col-md-4 col-form-label text-md-right">{{ __('Nilai') }}</label>

              <div class="col-md-6">
                  <input id="nilai" type="text" class="form-control" name="nilai" required autofocus>
              </div>
          </div>

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
