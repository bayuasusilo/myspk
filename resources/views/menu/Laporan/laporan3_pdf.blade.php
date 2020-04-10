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


</body>
</html>
