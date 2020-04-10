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

<center><a href="{{ url('laporan2/cetak_pdf', ['id'=> $ID ]) }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="margin:20px;"><i class="fas fa-download fa-sm text-white-50"></i>CETAK PDF</a></center>
	<!-- Begin Page Content -->
	<div class="container-fluid" style=" width: 800px">
		<!-- DataTales Example -->
		<div class="card shadow mb-4">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Print Perview Laporan Supplier Tidak Terpilih</h6>
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
		<p align="center" >LAPORAN SUPPLIER TIDAK TERPILIH <br>
		{{$h->bulan}} - {{$h->tahun}} {{$h->get_jenisproduk->nama_jenis_produk}}</p>
		@endforeach
    <table class='table table-bordered'>
			<thead>
				<tr>
					<th width="5%">No</th>
					<th>Nama</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($HasilDetail as $p)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$p->get_supplier1->nama_supplier}}</td>
					<td>{{$p->get_supplier1->alamat_supplier}}</td>
				</tr>
				@endforeach
			</tbody>
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
