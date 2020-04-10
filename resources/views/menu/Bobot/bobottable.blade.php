<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;
use App\Kriteria;
use App\Bobot;
use DB;
error_reporting(~E_NOTICE);
class AHP{
    function get_row_total($matrix){
        $arr = array();
        foreach($matrix as $key => $val){
            foreach($val as $k => $v){
                $arr[$k]+=$v;
            }
        }
        return $arr;
    }

//     function normalize($matrix, $row_total){
//         $arr = array();
//         foreach($matrix as $key => $val){
//             foreach($val as $k => $v){
//                 $arr[$key][$k] = $v / $row_total[$k];
//             }
//         }
//         return $arr;
//     }
//
//     function get_priority($normal){
//         $arr = array();
//         foreach($normal as $key => $val){
//             $arr[$key] = array_sum($val) / count($val);
//
//             //coba
//             $save = $arr[$key];
//             $id = $key+1;
//             $update = Kriteria::find($id);
//             $update->bobot_kriteria = $save;
//             $update->save();
//         }
//         return $arr;
//     }
//
//     function get_cm($matrix, $priority){
//         $arr = array();
//         foreach($matrix as $key => $val){
//             foreach($val as $k => $v){
//                 $arr[$key]+=$v * $priority[$k];
//             }
//         }
//
//         foreach($arr as $key => $val){
//             $arr[$key] = $val/$priority[$key];
//         }
//
//         return $arr;
//     }
//
//     function get_consistency($cm){
//         $arr = array();
//
//         $sum = array_sum($cm);
//         $count = count($cm);
//         $arr['ci'] = (($sum / $count) - $count) / ($count - 1);
//
//         $nRI = array (
//          1=>0,
//          2=>0,
//          3=>0.58,
//          4=>0.9,
//          5=>1.12,
//          6=>1.24,
//          7=>1.32,
//          8=>1.41,
//          9=>1.46,
//          10=>1.49,
//             11=>1.51,
//             12=>1.48,
//             13=>1.56,
//             14=>1.57,
//             15=>1.59
//         );
//         $arr['ri'] = $nRI[count($cm)];
//         $arr['cr'] = $arr['ci'] / $arr['ri'];
//         $arr['consistency'] =  $arr['cr']<=0.1 ? 'consistent' : 'inconsistent';
//
//         return $arr;
//     }
}
?>

<?php
function display($arr, $echo = true){
    $result = '<table class="table table-bordered" width="100%" cellspacing="0">';
    foreach($arr as $key => $val){
        $result.= '<tr>';
        foreach($val as $k => $v){
            $result.='<td>' . number_format($v,3) . '</td>';
        }
        $result.= '</tr>';
    }
    $result.= '</table>';

    if($echo)
        echo $result;
    else
        return $result;
}


$matrix = $new;

?>



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
	  <li><a href="{{ route('Bobot') }}"><span class="fa fa-cog fa-spin fa-fw"></span> Analisa Bobot Kriteria </a> /</li>
	  <li class="active"><span class="fa fa-star fa-spin fa-fw"> </span> Tabel Analisa Bobot Kriteria </li>
	</ol>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Table Perhitungan</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">

<!-- <table class="table table-bordered" width="100%" cellspacing="0">
  <thead>
    <tr>
      @foreach($Kriteria as $key=> $a)
      <th width="15%">{{$a->nama_kriteria}}</th>
      @endforeach
    </tr>

  </thead>
  <tbody>

    <?php
    // echo '<h3>Step 1 Matrix Kriteria</h3>';
    // $ahp = new AHP($matrix);
    // display($matrix);
    //
    // echo '<br></br>';
    // echo '<h3>Step 2 Total Jumlah</h3>';
    // $row_total = $ahp->get_row_total($matrix);
    // display(array($row_total));
    //
    // echo '<br></br>';
    // echo '<h3>Step 3 Normalisasi</h3>';
    // $normal = $ahp->normalize($matrix, $row_total);
    // display($normal);
    //
    // echo '<br></br>';
    // echo '<h3>Step 4 Hasil Bobot Kriteria</h3>';
    // $priority = $ahp->get_priority($normal);
    // display(array($priority));
    //
    // echo '<br></br>';
    // echo '<h3>Step 5 Tes Konsistensi</h3>';
    // $cm = $ahp->get_cm($matrix, $priority);
    // display(array($cm));
    //
    // echo '<br></br>';
    // echo '<h3>Step 6 Hasil Tes Konsistensi</h3>';
    // $consistency = $ahp->get_consistency($cm);
    //
    // echo '<B>CI: ' . $consistency['ci'] . '<br />';
    // echo '<B>CI: ' . $consistency['ri'] . '<br />';
    // echo '<B>CR: ' . $consistency['cr'] . '<br />';
    // echo '<B>Consistency: ' . $consistency['consistency'] . '<br />';
    ?>
  </tbody>
</table> -->


    <?php
    echo '<h3>Step 1 Matrix Kriteria</h3>';
    display($matrix);

    // echo '<br></br>';
    // echo '<h3>Step 2 Total Jumlah</h3>';
    // display(array($row_total));

    echo '<br></br>';
    echo '<h3>Step 2 Normalisasi</h3>';
    display($perkalianmatrix);

    echo '<br></br>';
    echo '<h3>Step 3 Jumlah Baris</h3>';
    // display(array($jumlahbaris));
    //
    // echo '<br></br>';
    // echo '<h3>Step 4 Total Jumlah</h3>';
    // echo $totaljumlah;
    ?>

    <table class="table table-bordered" width="100%" cellspacing="0">
          @foreach($jumlahbaris as $key=> $a)
          <tr>
          <td><center>{{number_format($a,3)}}</td>
          </tr>
          @endforeach
    </table>
    <p><center>=</center></p>
    <table class="table table-bordered" width="100%" cellspacing="0">
          <tr>
          <td><center>{{number_format($totaljumlah,3)}}</td>
          </tr>
    </table>

    <table class="table table-bordered" width="100%" cellspacing="0">
      <thead>
        <tr>
          @foreach($Kriteria as $key=> $a)
          <th width="15%">{{$a->nama_kriteria}}</th>
          @endforeach
        </tr>

      </thead>
      <tbody>
    <?php
    echo '<br></br>';
    echo '<h3>Step 5 Hasil Bobot Kriteria</h3>';
    display(array($bobot));

    ?>
  </tbody>
</table>

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
