<?php
function hitungGaji($gol, $masaKerja){
	if ($gol == "A") {
		if($masaKerja < 10){
			$gaji = 5000000;
		}else {
			$gaji = 7000000;
		}
	}else {
		if($masaKerja < 10){
			$gaji = 6000000;
		}else {
			$gaji = 8000000;
		}
	}
	return $gaji;
}
echo "Gaji karyawan golongan A dengan masa kerja 1 tahun adalah Rp " .hitungGaji("A", 1). ",- <br>";
echo "Gaji karyawan golongan A dengan masa kerja 11 tahun adalah Rp " .hitungGaji("A", 11). ",- <br>";
echo "Gaji karyawan golongan B dengan masa kerja 3 tahun adalah Rp " .hitungGaji("B", 3). ",- <br>";
echo "Gaji karyawan golongan B dengan masa kerja 15 tahun adalah Rp " .hitungGaji("B", 15). ",- <br>";
?>