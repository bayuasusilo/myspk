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

<center><a href="{{ url('laporan3/cetak_pdf', ['id'=> $ID ]) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin:20px;"><i class="fas fa-download fa-sm text-white-50"></i>CETAK PDF</a></center>
	<!-- Begin Page Content -->
	<div class="container-fluid" style=" width: 800px">
		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Print Perview Laporan Grafik Supplier</h6>
			</div>



	<div class="container">
		<table style=" width: 100%">
			<tr>
					<td width="20%"><center><img src="{{ asset('assets/gambar/logo.jpg')}}"
							alt="logo" height="100px"></img></td>
					<td><center><h4><b>TEMPAT RISET</b></h4>
						<h9>ALAMAT</h9></center>
								<hr>
					</td>
			</tr>
		</table>
		<br>
		@foreach ($hasil as $h)
		<p align="center" >LAPORAN GRAFIK SUPPLIER <br>
		{{$h->bulan}} - {{$h->tahun}} {{$h->get_jenisproduk->nama_jenis_produk}}</p>
		@endforeach
    <br>

      <table>
        @foreach($HasilDetail as $p)
        <tr height="50px">
          <th width="200px" class="small font-weight-bold">{{$p->get_supplier1->nama_supplier}}</th>
          <td width="300px" style="text-align:left;"><div class="small font-weight-bold" style="width:{{ number_format(($p->total/1)*100*3,1) }}px; height:20px; background:#f30;"></td>
          <th class="small font-weight-bold">{{number_format(($p->total/1)*100,1)}}%</th>
        </tr>
        @endforeach
      </table>
    <br>

		<table style=" width: 100%" >
      <tr>
          <td width="50%"></td>
          <td width="50%"><center>Jakarta, ({{  date('d/m/Y')  }})</td>
      </tr>
        <tr>
            <td width="50%"><center></td>
            <td width="50%"><center>Mengetahui</td>
        </tr>
    </table>
    <br></br>
    <br></br>
    <table style=" width: 100%">
        <tr>
            <td width="50%"><center></td>
            <td width="50%"><center>(.................)</td>
        </tr>
        <tr>
            <td width="50%"><center></td>
            <td width="50%"><center>Manager</td>
        </tr>
    </table>

	</div>

	<br></br>
	<br></br>

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
