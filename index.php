<?php 

include "config/koneksi.php";

$bulan = array(
	'1' => 'Januari',
	'Februari', 'Maret', 'April', 'Mei',
	'Juni', 'Juli', 'Agustus', 'September',
	'Oktober', 'November', 'Desember'
);
$soal = array(
	'1' => 'Saya pergi keluar rumah.',
	'Saya menggunakan transportasi umum: online, angkot, bus, taksi, kereta api.',
	'Saya tidak memakai masker pada saat berkumpul dengan orang lain.',
	'Saya berjabat tangan dengan orang lain.',
	'Saya tidak membersihkan tangan dengan hand sanitizer/tissue basah sebelum pegang kemudi mobil/motor.',
	'Saya menyentuh benda / uang yang juga disentuh orang lain.',
	'Saya tidak berjarak 1,5 meter dengan orang lain ketika: belanja, bekerja, belajar, ibadah.',
	'Saya makan di luar rumah (warung / restaurant).',
	'Saya tidak minum hangat & cuci tangan dengan sabun setelah tiba di tujuan.',
	'Saya berada di wilayah kelurahan tempat pasien tertular.',
	'Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang (handle) pintu masuk rumah.',
	'Saya tidak mencuci tangan dengan sabun setelah tiba di rumah.',
	'Saya tidak menyediakan: tissues basah/antiseptic, masker, sbun antiseptic bagi keluarga di rumah.',
	'Saya tidak segera merendam baju & celanan bekas pakai di luar rumah kedalam air panas/sabun.',
	'Saya tidak segera mandi keramas setelah saya tiba di rumah.',
	'Saya tidak mensosialisasikan checklist penilaian resiko pribadi ini kepada keluarga dirumah.',
	'Saya dalam sehari tidak kena cahaya matahari minimal 15 menit.',
	'Saya tidak jalan kaki / berolahraga minimal 30 menit.',
	'Saya jarang minum vitamin C & E dan kurang tidur.',
	'Usia saya diatas 60 tahun',
	'Saya mempunyai penyakit: jantung/diabetes/gangguan pernafasan kronik'
);


if(isset($_POST['simpan'])){

	$nomor1 = $_POST['nomor1']; $nomor2 = $_POST['nomor2']; $nomor3 = $_POST['nomor3'];
	$nomor4 = $_POST['nomor4']; $nomor5 = $_POST['nomor5']; $nomor6 = $_POST['nomor6'];
	$nomor7 = $_POST['nomor7']; $nomor8 = $_POST['nomor8']; $nomor9 = $_POST['nomor9']; 
	$nomor10 = $_POST['nomor10']; $nomor11 = $_POST['nomor11']; $nomor12 = $_POST['nomor12']; 
	$nomor13 = $_POST['nomor13']; $nomor14 = $_POST['nomor14']; $nomor15 = $_POST['nomor15']; 
	$nomor16 = $_POST['nomor16']; $nomor17 = $_POST['nomor17']; $nomor18 = $_POST['nomor18']; 
	$nomor19 = $_POST['nomor19']; $nomor20 = $_POST['nomor20']; $nomor21 = $_POST['nomor21'];
	$totalYa = $nomor1+$nomor2+$nomor3+$nomor4+$nomor5+$nomor6+$nomor7+$nomor8+$nomor9+$nomor10+$nomor11+$nomor12+$nomor13+$nomor14+$nomor15+$nomor16+$nomor17+$nomor18+$nomor19+$nomor20+$nomor21;
	$lahir = $_POST['thn_lahir']. '-'. $_POST['bln_lahir']. '-'. $_POST['tgl_lahir'];
        
        list($year,$month,$day) = explode('-', $lahir);
        $year_diff = date("Y") - $year;
        $month_diff = date("m") - $month;
        $day_diff = date("d") - $day;

        if ($month_diff < 0) $year_diff--;
            elseif (($month_diff==0) && ($day_diff<0)) $year_diff--;
        
        $umur = $year_diff;



}



?>




<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Risk Test</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">


</head>
<body>

		<center>
			<h2 class="display-4">Risk Test for Corona Virus Transmission</h2>
		</center>
		<div class="container" style="margin-top: 30px">

			<form action="hasil.php" method="POST">

				<div class="col-md-12">
					<div class="form-group row">
						<div class="col-md-6">
							<label for="nama">Nama</label>
							<input type="text" required name="nama" class="form-control" placeholder="Nama kamu">
						</div>
						<div class="col-md-6">
							<label for="usia">Usia</label>
							<input type="number" required name="usia" class="form-control" placeholder="Usia kamu">
						</div>
						
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label for="jenkel">Jenis Kelamin</label>
							<div class="col-md-12">
								<center>
									<input type="radio" name="jk" id="l" value="L">
									<label for="l"><span>Laki-Laki</span></label>
									<input type="radio" name="jk" id="p" value="P" style="margin-left: 50px">
									<label for="p"><span>Perempuan</span></label>
								</center>
							</div>
						</div>
					</div>
				</div>



					<table class="table table-bordered">
						<thead align="center">
							<tr>
								<th>No</th>
								<th>Pernyataan</th>
								<th>Ya</th>
								<th>Tidak</th>
							</tr>
						</thead>
						<tbody>
							<?php for($i=1; $i<=count($soal); $i++) : ?>
								<tr>
									<?php if($i<=1) : ?>
										<th>A</th>
										<th colspan="3">POTENSI TERTULAR DILUAR RUMAH</th>
									<?php elseif($i>10 && $i<12) : ?>
										<th>B</th>
										<th colspan="3">POTENSI TERTULAR DIDALAM RUMAH</th>
									<?php elseif($i>16 && $i<18) : ?>
										<th>C</th>
										<th colspan="3">DAYA TAHAN TUBUH (IMUNITAS):</th>
									<?php endif; ?>
									</tr>
								<tr>
									<td align="center"><?= $i; ?></td>
									<td><?= $soal[$i]; ?></td>
									<td align="center">
										<input type="radio" required name="nomor<?= $i; ?>" value="1">
										<label for=""><span><span></span></span></label>
									</td>
									<td align="center">
										<input type="radio" required name="nomor<?= $i; ?>" value="0">
										<label for=""><span><span></span></span></label>
									</td>
								</tr>
							<?php endfor; ?>
						</tbody>
					</table>

					<center><button class="btn btn-primary" name="simpan">Submit</button></center>

				</div>
			</form>


		<script src="assets/js/jquery-3.5.0.min.js"></script>
		<script src="assets/js/bootstrap.js"></script>
	</body>
</html>