<?php
if (isset($_POST['submit'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tglLahir = $_POST['tgllhr'];
	$tempatLahir = $_POST['tmptlhr'];

	if (empty($nim) || empty($nama) || empty($tglLahir) || empty($tempatLahir)){
		echo "Maaf, anda harus melengkapi <a href='tambahdata.html'>form</a>";
	} else {
	$namafile = "datamhs.dat";
	$datamhs = fopen($namafile, "a") or die("Tidak bisa buka file");
	fwrite($datamhs, $nim."|");
	fwrite($datamhs, $nama."|");
	fwrite($datamhs, $tglLahir."|");
	fwrite($datamhs, $tempatLahir."\n");
	fclose($datamhs);
	echo "Berhasil menambah data";
	}
} else {
	echo "Maaf, anda harus mengisi <a href='tambahdata.html'>form</a> terlebih dahulu!";
}

?>