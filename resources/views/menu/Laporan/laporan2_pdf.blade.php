<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<link href="{{ asset('assets/template/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>

	<div class="container">
		<br></br>
		<table style=" width: 100%">
			<tr>
					<td width="20%"><center><img src="{{ asset('assets/gambar/logo.jpg')}}"
							alt="logo" height="90"></img></td>
					<td><center><h5><b>TEMPAT RISET</b></h5>
						<p>ALAMAT</p></center>
						<hr>
					</td>
			</tr>
		</table>
		<br>
		@foreach ($hasil as $h)
		<p align="center" >LAPORAN SUPPLIER TIDAK TERPILIH <br>
		{{$h->bulan}} - {{$h->tahun}} {{$h->get_jenisproduk->nama_jenis_produk}}</p>
		@endforeach
    <table class='table table-bordered' style='font-family:'Courier New', Courier, Monospace; font-size:80%'>
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

	</div>
</body>
</html>
