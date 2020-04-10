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



<!-- Begin Page Content -->
<div class="container-fluid">
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><span class="fa fa-home"></span> Dashboard </a> /</li>
    <li><a href="{{ route('Perhitungan') }}"><span class="fa fa-cog fa-spin fa-fw"></span> Pilih Produk Alternatif </a> /</li>
    <li class="active"><span class="fa fa-star fa-spin fa-fw"> </span> Pemilihan Alternatif </li>
  </ol>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Table Hasil</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <form method="POST" action="{{ route('PilihAlternatif') }}">
          @csrf
          <input type="hidden" name="jmhd" value="{{ $JMHD }}">

        <table class="table table-bordered"  width="100%" cellspacing="0" >
          <thead>
            <tr>
              <th width="2%"></th>
              <th>Alternatif</th>
              <th>Hasil</th>


            </tr>
          </thead>
          <tbody>

            @foreach ($HasilDetail as $key => $value)


              <th><input type="checkbox" name="id{{ $loop->index+1 }}" value="{{ $value->id_hasil_detail }}"></th>
              <th>{{ $value->get_supplier1->nama_supplier }}</th>
              <th>{{ number_format($value->total,3) }}</th>

                <tr></tr>

              @endforeach

            </tbody>
          </table>


                  <button type="submit" class="btn btn-primary">
                      {{ __('Simpan') }}
                  </button>

        </form>
        </div>
      </div>
    </div>
  </div>

<!-- /.container-fluid -->


<!-- footer -->
@include('layouts.footer')
<!-- /footer -->

<!-- Asset Bawah -->
@include('layouts.bot')
<!-- /Asset Bawah -->
