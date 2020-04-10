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
    <li><a href="{{ route('Nilai') }}"><span class="fa fa-cog fa-spin fa-fw"></span> Nilai </a> /</li>
    <li class="active"><span class="fa fa-star fa-spin fa-fw"> </span> Edit Nilai </li>
  </ol>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Nilai Preferensi</h6>
  </div>
  <div class="card-body">

    @foreach ($Nilai as $key =>$dataa)
    <form method="POST" action="{{ route('UpdateNilai') }}">
      @csrf
        <div class="form-group row">
            <label for="Nilai" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Nilai') }}</label>
                <input id="id" type="hidden" name="id" value="{{ $dataa->id_nilai }}" >
            <div class="col-md-6">
                <input id="nilai" type="text" class="form-control" name="nilai" required autofocus value="{{ $dataa->nilai }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="Nilai" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan Nilai') }}</label>

            <div class="col-md-6">
                <input id="ket_nilai" type="text" class="form-control" name="ket_nilai" required autofocus value="{{ $dataa->keterangan_nilai }}">
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
