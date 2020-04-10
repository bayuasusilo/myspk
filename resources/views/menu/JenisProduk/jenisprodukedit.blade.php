
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
    <li><a href="{{ route('JenisProduk') }}"><span class="fa fa-cog fa-spin fa-fw"></span> Jenis Produk </a> /</li>
    <li class="active"><span class="fa fa-star fa-spin fa-fw"> </span> Edit Jenis Produk </li>
  </ol>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Jenis Produk</h6>
  </div>
  <div class="card-body">
    @foreach ($JenisProduk as $key =>$dataa)
    <form method="POST" action="{{ route('UpdateJenisProduk') }}">
      @csrf
        <div class="form-group row">

            <input id="id" type="hidden" name="id" value="{{ $dataa->id_jenis_produk }}" >
            <label for="JenisProduk" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Produk') }}</label>

            <div class="col-md-6">
                <input id="nama" type="text" class="form-control" name="nama" value="{{ $dataa->nama_jenis_produk }}" required autofocus >
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
