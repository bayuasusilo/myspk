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
    <li><a href="{{ route('NilaiKriteriaAlternatif') }}"><span class="fa fa-cog fa-spin fa-fw"></span> Nilai Crips </a> /</li>
    <li class="active"><span class="fa fa-star fa-spin fa-fw"> </span> Edit Nilai Crips </li>
  </ol>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Supplier</h6>
  </div>
  <div class="card-body">

    @foreach ($NilaiKriteriaAlternatif as $key =>$dataa)
    <form method="POST" action="{{ route('UpdateNilaiKriteriaAlternatif') }}">
      @csrf
      <div class="form-group row">
        <input id="id" type="hidden" name="id" value="{{ $dataa->id_nilai_kriteria_alternatif }}" >
          <label for="NilaiKriteriaAlternatif" class="col-md-4 col-form-label text-md-right">{{ __('Kriteria') }}</label>

          <div class="col-md-6">
              <input id="Kriteria" type="text" class="form-control" name="Kriteria" required autofocus value="{{$dataa->get_kriteria->nama_kriteria}}" disabled>
          </div>
      </div>

        <div class="form-group row">
            <label for="NilaiKriteriaAlternatif" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

            <div class="col-md-6">
                <input id="keterangan" type="text" class="form-control" name="keterangan" required autofocus value="{{$dataa->keterangan}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="NilaiKriteriaAlternatif" class="col-md-4 col-form-label text-md-right">{{ __('Nilai') }}</label>

            <div class="col-md-6">
                <input id="nilai" type="text" class="form-control" name="nilai" required autofocus value="{{$dataa->nilai}}">
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
