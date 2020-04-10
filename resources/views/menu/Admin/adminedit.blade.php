  <!-- Asset Atas -->
  @include('layouts.top')
  <!-- /Asset Atas -->

  <!-- SideBar -->
  @include('layouts.sidebar')
  <!-- /SideBar -->

  <!-- TopBar -->
  @include('layouts.topbar')
  <!-- /TopBar -->

  <!-- TopBar -->
  @include('layouts.alert')
  <!-- /TopBar -->


<div class="container-fluid">
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><span class="fa fa-home"></span> Dashboard </a> /</li>
    <li><a href="{{ route('Admin') }}"><span class="fa fa-cog fa-spin fa-fw"></span> Admin </a> /</li>
    <li class="active"><span class="fa fa-star fa-spin fa-fw"> </span> Profile </li>
  </ol>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Admin</h6>
  </div>
  <div class="card-body">
    @foreach ($Admin as $key =>$dataa)

    @if($dataa->id === Auth::user()->id)


    <form method="POST" action="{{ route('UpdateAdmin') }}">
      @csrf
        <div class="form-group row">

            <input id="id" type="hidden" name="id" value="{{ $dataa->id }}" >
            <label for="Admin" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="nama" type="text" class="form-control" name="nama" value="{{ $dataa->name }}" required autofocus >
            </div>
        </div>


        <div class="form-group row">
            <label for="Admin" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

            <div class="col-md-6">
                <input id="email" type="text" class="form-control" name="email" value="{{ $dataa->email }}" required autofocus >
            </div>
        </div>

        <div class="form-group row">
            <label for="Admin" class="col-md-4 col-form-label text-md-right">{{ __('Kata Sandi') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" placeholder="Kata Sandi" class="form-control" name="password" value="" required autofocus >
            </div>
        </div>

        <div class="form-group row">
            <label for="Admin" class="col-md-4 col-form-label text-md-right">{{ __('Ulangi Kata Sandi') }}</label>

            <div class="col-md-6">
                <input id="password1" type="password" placeholder="Ulangi Kata Sandi" class="form-control" name="password1" value="" required autofocus >
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
    @else
    <p>Anda hanya bisa mengubah data Anda sendiri!</p>
    @endif
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
