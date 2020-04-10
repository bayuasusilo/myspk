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
    <li><a href="{{ route('Supplier') }}"><span class="fa fa-cog fa-spin fa-fw"></span> Supplier </a> /</li>
    <li class="active"><span class="fa fa-star fa-spin fa-fw"> </span> Edit Supplier </li>
  </ol>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Supplier</h6>
  </div>
  <div class="card-body">

    @foreach ($Supplier as $key =>$dataa)
    <form method="POST" action="{{ route('UpdateSupplier') }}">
      @csrf
        <div class="form-group row">
            <label for="Supplier" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                <input id="id" type="hidden" name="id" value="{{ $dataa->id_supplier }}" >
            <div class="col-md-6">
                <input id="nama" type="text" class="form-control" name="nama" required autofocus value="{{ $dataa->nama_supplier }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="Supplier" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

            <div class="col-md-6">
                <input id="alamat" type="text" class="form-control" name="alamat" required autofocus value="{{ $dataa->alamat_supplier }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="Supplier" class="col-md-4 col-form-label text-md-right">{{ __('No Telepon') }}</label>

            <div class="col-md-6">
                <input id="tlpn" type="text" class="form-control" name="tlpn" required autofocus value="{{ $dataa->tlpn_supplier }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="Supplier" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Produk') }}</label>

            <div class="col-md-6">
                <!--<input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>
                -->
                <select class="form-control custom-select2" name="jenisproduk" id="jenisproduk" required style="width: 100%; height: 38px;">
                  <option value="{{ $dataa->id_jenis }}">{{ $dataa->get_supplier->nama_jenis_produk }}</option>

                    @foreach ($JenisProduk as $key =>$dataa)
                    <option value="{{ $dataa->id_jenis_produk }}">{{ $dataa->nama_jenis_produk }}</option>
                    @endforeach
                </select>

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
    @endforeach
  </div>
  </div>
  </div>


<!-- footer -->
@include('layouts.footer')
<!-- /footer -->

<!-- Asset Bawah -->
@include('layouts.bot')
<!-- /Asset Bawah -->
