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
    <li><a href="{{ route('Kriteria') }}"><span class="fa fa-cog fa-spin fa-fw"></span> Kriteria </a> /</li>
    <li class="active"><span class="fa fa-star fa-spin fa-fw"> </span> Edit Kriteria </li>
  </ol>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Kriteria</h6>
  </div>
  <div class="card-body">

    @foreach ($Kriteria as $key =>$dataa)
    <form method="POST" action="{{ route('UpdateKriteria') }}">
      @csrf
        <div class="form-group row">
            <label for="Kriteria" class="col-md-4 col-form-label text-md-right">{{ __('Nama Kriteria') }}</label>
                <input id="id" type="hidden" name="id" value="{{ $dataa->id_kriteria }}" >
            <div class="col-md-6">
                <input id="nama" type="text" class="form-control" name="nama" required autofocus value="{{ $dataa->nama_kriteria }}">
            </div>
        </div>


        <div class="form-group row">
            <label for="Kriteria" class="col-md-4 col-form-label text-md-right">{{ __('Atribut') }}</label>

            <div class="col-md-6">
                <!--<input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>
                -->
                <select class="form-control custom-select2" name="atribut" id="atribut" required style="width: 100%; height: 38px;">
                  <option value="{{ $dataa->atribut_kriteria }}">@if($dataa->atribut_kriteria == 1)
                                                            - Benefit -
                                                        @else
                                                            - Cost -
                                                        @endif</option>

                    <option value="1">Benefit</option>
                    <option value="2">Cost</option>
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
