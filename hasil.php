<?php 

include "config/koneksi.php";

if(isset($_POST['simpan'])){

	$nomor1 = $_POST['nomor1']; $nomor2 = $_POST['nomor2']; $nomor3 = $_POST['nomor3'];
	$nomor4 = $_POST['nomor4']; $nomor5 = $_POST['nomor5']; $nomor6 = $_POST['nomor6'];
	$nomor7 = $_POST['nomor7']; $nomor8 = $_POST['nomor8']; $nomor9 = $_POST['nomor9']; 
	$nomor10 = $_POST['nomor10']; $nomor11 = $_POST['nomor11']; $nomor12 = $_POST['nomor12']; 
	$nomor13 = $_POST['nomor13']; $nomor14 = $_POST['nomor14']; $nomor15 = $_POST['nomor15']; 
	$nomor16 = $_POST['nomor16']; $nomor17 = $_POST['nomor17']; $nomor18 = $_POST['nomor18']; 
	$nomor19 = $_POST['nomor19']; $nomor20 = $_POST['nomor20']; $nomor21 = $_POST['nomor21'];
	$totalYa = $nomor1+$nomor2+$nomor3+$nomor4+$nomor5+$nomor6+$nomor7+$nomor8+$nomor9+$nomor10+$nomor11+$nomor12+$nomor13+$nomor14+$nomor15+$nomor16+$nomor17+$nomor18+$nomor19+$nomor20+$nomor21;

        $sql = mysqli_query($con, "INSERT INTO manusia (nama, jk, usia, jumlah_ya) VALUES('$_POST[nama]', '$_POST[jk]', '$_POST[usia]', '$totalYa')");


}


?>



<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Result</title>

		<link rel="stylesheet" type="text/css" href="assets/css/sb-admin-2.css">
	</head>
	<body>

			<div class="container" style="margin-top: 100px">
				<div class="card">
					<h5 class="card-header">Hasil</h5>
					<div class="card-body">
						<h5 class="card-title">Halo, <b><?= $_POST['nama']; ?></b></h5>
						<?php if( $totalYa <= 7 ) : ?>
							<p class="card-text text-success">Resiko anda terkena covid-19 adalah rendah.</p>
						<?php elseif( $totalYa <= 14 ) : ?>
							<p class="card-text text-warning">Resiko anda terkena covid-19 adalah sedang.</p>
						<?php elseif( $totalYa <= 21 ) : ?>
							<p class="card-text text-danger">Resiko anda terkena covid-19 adalah tinggi.</p>
						<?php endif; ?>
						<button class="btn btn-primary" onclick="document.location.href='/tugascorona_lingga'">Kembali</button>
					</div>
				</div>
			</div>

	</body>
</html>