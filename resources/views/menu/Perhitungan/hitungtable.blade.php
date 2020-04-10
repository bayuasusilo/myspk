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
    <li class="active"><span class="fa fa-star fa-spin fa-fw"> </span> Proses Hitung </li>
  </ol>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Table Nilai</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered"  width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Alternatif</th>
              @foreach($Kriteria as $key=> $a)
              <th width="15%">{{$a->nama_kriteria}}</th>
              @endforeach

            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Alternatif</th>
              @foreach($Kriteria as $key=> $a)
              <th width="15%">{{$a->nama_kriteria}}</th>
              @endforeach

            </tr>
          </tfoot>
          <tbody>

            @foreach($Tablenilai->chunk($jmlk) as $chunk)

            @foreach($chunk as $key1 => $value1)
            <th>{{$value1->nama_supplier}}</th>
            @break
            @endforeach

            @foreach($chunk as $key2 => $value)
            <td> {{$value->nilai}} </td>
            @endforeach
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>



<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Table Normalisasi</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered"  width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Alternatif</th>
              @foreach($Kriteria as $key=> $a)
              <th width="15%">{{$a->nama_kriteria}}</th>
              @endforeach

            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Bobot Alternatif</th>
              @foreach($Kriteria as $key=> $a)
              <th width="15%">{{$a->bobot_kriteria}}</th>
              @endforeach

            </tr>
          </tfoot>
          <tbody>

            @php
            $nama = 0;
            @endphp

            @foreach ($Tablenilai as $key => $value)
              @php
              $max=$value->nilai;
              $min=$value->nilai;
              $nilai=0;
              @endphp

              @foreach ($Tablenilai as $key => $value2)
                @if($value->id_kriteria == $value2->id_kriteria)

                  @if($value->atribut_kriteria == 1)
                    @if($value2->nilai > $max)
                    @php $max=$value2->nilai; @endphp
                    @endif
                  @else
                    @if($value2->nilai < $min)
                    @php $min=$value2->nilai;@endphp @endif
                  @endif

              @endif
              @endforeach

              @if($value->atribut_kriteria == 1)
              @php $nilai = $value->nilai / $max;@endphp
              @else
              @php $nilai = $min / $value->nilai;@endphp
              @endif


              @if($value->id_supplier == $nama)

              @else
              <tr></tr>
              <th>{{$value->nama_supplier}}</th>
              @endif

              @php
              $nama = $value->id_supplier;
              @endphp
              <td> {{ number_format($nilai,3) }} </td>


              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<!-- /.container-fluid -->



<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Table Hasil</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <form method="POST" action="{{ route('SaveHitung') }}">
          @csrf

          <input type="hidden" name="jml" value="{{ $JmlSupplier }}">
          <input type="hidden" name="kj" value="{{ $j }}">
          <input type="hidden" name="kd" value="{{  $j  }}{{  date('m')  }}{{  date('y')  }}">
          <input type="hidden" name="m" value="{{  date('M')  }}">
          <input type="hidden" name="y" value="{{  date('Y')  }}">

        <table class="table table-bordered"  width="100%" cellspacing="0" >
          <thead>
            <tr>
              <th width="5%"><center>No</th>
              <th>Alternatif</th>
              <th>Hasil</th>


            </tr>
          </thead>
          <tfoot>
            <tr>
              <th><center>No</th>
              <th>Alternatif</th>
              <th>Hasil</th>

            </tr>
          </tfoot>
          <tbody>


            @php
            $no = 1;
            $nomor=1;
            @endphp
            @foreach ($Supplier as $key => $value0)
              @php $Total1=0; @endphp


            @php
            $nama = 0;
            @endphp

            @foreach ($Tablenilai as $key => $value)
              @php
              $max=$value->nilai;
              $min=$value->nilai;
              $nilai=0;
              @endphp

              @foreach ($Tablenilai as $key => $value2)
                @if($value->id_kriteria == $value2->id_kriteria)

                  @if($value->atribut_kriteria == 1)
                    @if($value2->nilai > $max)
                    @php $max=$value2->nilai; @endphp
                    @endif
                  @else
                    @if($value2->nilai < $min)
                    @php $min=$value2->nilai;@endphp @endif
                  @endif

              @endif
              @endforeach

              @if($value->atribut_kriteria == 1)
              @php $nilai = $value->nilai / $max;@endphp
              @else
              @php $nilai = $min / $value->nilai;@endphp
              @endif


              @if($value->id_supplier == $nama)

              @else

              @endif

              @php
              $nama = $value->id_supplier;
              @endphp


              @php
              $hasil = $nilai * $value->bobot_kriteria;
              @endphp


              @if($value->id_supplier == $value0->id_supplier)
                @php $Total1= $Total1+$hasil;  @endphp
              @endif

              @endforeach

              <!--<th>{{$no}}</th>-->
              @if ($Total1 == 0)<!--jika nilai 0 tidak ditampilkan-->
              @else<!--jika nilai 0 tidak ditampilkan-->
              <th><center>{{$no}}</th>
              <th><input type="hidden" name="id{{$nomor}}" value="{{ $value0->id_supplier }}">{{ $value0->nama_supplier }}</th>
              <th><input type="hidden" name="total{{$nomor}}" value="{{ $Total1 }}">{{number_format($Total1,3)}}</th>
              @php $nomor=$nomor+1; @endphp
              @endif<!--jika nilai 0 tidak ditampilkan-->


              @if($no==$no)
                <tr></tr>
              @endif
              @php
              $no=$no+1;
              @endphp
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
