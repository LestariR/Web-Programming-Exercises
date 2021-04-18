<!DOCTYPE html>
<html>
<head>
	<title>Praktikum 04</title>
</head>
<body>
	<?php
	function usia($tglLahir){
		$pecahTglLahir = explode("-", $tglLahir);
		$tahunLahir = $pecahTglLahir[0];
		$sekarang = date("Y-m-d");
		$pecahSekarang = explode("-", $sekarang);
		$tahunSekarang = $pecahSekarang[0];
		$usia = $tahunSekarang - $tahunLahir;
		return $usia;
	}
	echo "<p align='center'><b>DATA MAHASISWA</b></p>";
	echo "<table border='1' align='center'>";
	echo "<thead>";
	echo "<tr>";
	echo "<td><b>No</b></td>";
	echo "<td><b>NIM</b></td>";
	echo "<td><b>Nama Mhs</b></td>";
	echo "<td><b>Tanggal Lahir</b></td>";
	echo "<td><b>Alamat</b></td>";
	echo "<td><b>Usia (Thn)</b></td>";
	echo "</tr>";
	echo "</thead>";

	$namafile = "datamhs.dat";
	$datamhs = fopen($namafile, "r") or die("Tidak bisa buka file");
	$jumlahData = 0;
	while (!feof($datamhs)) {
		$baca = fgets($datamhs);
		$data = explode("|", $baca);
		$nomor = $jumlahData + 1;
		echo "<tr>";
		echo "<td>".$nomor."</td>";
		echo "<td>".$data[0]."</td>";
		echo "<td>".$data[1]."</td>";
		echo "<td>".$data[2]."</td>";
		echo "<td>".$data[3]."</td>";
		echo "<td>".usia($data[2])."</td>";
		echo "</tr>";
		$jumlahData++ ;
	}
	echo "</table>";
	echo "<p align='center'>Jumlah Data : ".$jumlahData."</p>";
	fclose($datamhs);
	?>

</body>
</html>