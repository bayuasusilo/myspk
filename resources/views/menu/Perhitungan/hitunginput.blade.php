<div class="container-fluid">
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><span class="fa fa-home"></span> Dashboard </a> /</li>
    <li class="active"><span class="fa fa-cog fa-spin fa-fw"></span> Pilih Produk Alternatif </li>
  </ol>
<!-- Collapsable Card Example -->
<div class="card shadow mb-4">
  <!-- Card Header - Accordion -->
  <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
    <h6 class="m-0 font-weight-bold text-primary">Input Jenis Produk Alternatif</h6>
  </a>
  <!-- Card Content - Collapse -->
  <div class="collapse show" id="collapseCardExample">
    <div class="card-body">
      <form method="POST" action="{{ route('InputHitung') }}">
        @csrf

          <div class="form-group row">
              <label for="Supplier" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Produk') }}</label>

              <div class="col-md-6">
                  <!--<input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>
                  -->
                  <select class="form-control custom-select2" name="jenisproduk" id="jenisproduk" required style="width: 100%; height: 38px;">
    								<option value="">Pilih</option>

                      @foreach ($JenisProduk as $key =>$dataa)
    									<option value="{{ $dataa->id_jenis_produk }}">{{ $dataa->nama_jenis_produk }}</option>
                      @endforeach
    							</select>

              </div>
          </div>
          <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                      {{ __('Hitung') }}
                  </button>

              </div>
          </div>
      </form>
    </div>
  </div>
</div>
</div>
