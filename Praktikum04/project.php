<?php
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
	$myfile = fopen($namafile, "r") or die("Tidak bisa buka file");
	$jumlahData = 0;
	while (!feof($myfile)) {
		$baca = fgets($myfile);
		$data = explode("|", $baca);
		$nim = $data[0];
		$nama = $data[1];
		$tglLahir = $data[2];
		$alamat = $data[3];

		$pecahTglLahir = explode("-", $tglLahir);
		$tahunLahir = $pecahTglLahir[0];
		$sekarang = date("Y-m-d");
		$pecahSekarang = explode("-", $sekarang);
		$tahunSekarang = $pecahSekarang[0];
		$usia = $tahunSekarang - $tahunLahir;
		$nomor = $jumlahData + 1;
		echo "<tr>";
		echo "<td>".$nomor."</td>";
		echo "<td>".$nim."</td>";
		echo "<td>".$nama."</td>";
		echo "<td>".$tglLahir."</td>";
		echo "<td>".$alamat."</td>";
		echo "<td>".$usia."</td>";
		echo "</tr>";
		$jumlahData++ ;
	}
	echo "</table>";
	echo "<p align='center'>Jumlah Data : ".$jumlahData."</p>";
	fclose($myfile);
	?>