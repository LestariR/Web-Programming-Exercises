<!DOCTYPE html>
<html>
<head>
	<title>Tabung</title>
</head>
<body>
	<?php
		echo "<h3><b>DATA UKURAN TABUNG</b></h3>";
		echo "<table border='1'>";
		echo "<thead>";
		echo "<tr>";
		echo "<td><b>NAMA TABUNG</b></td>";
		echo "<td><b>DIAMETER</b></td>";
		echo "<td><b>TINGGI</b></td>";
		echo "<td><b>LUAS</b></td>";
		echo "</tr>";
		echo "</thead>";

		$namafile = "datatabung.dat";
		$datatabung = fopen($namafile, "r");

		while (!feof($datatabung)) {
		 	$baca = fgets($datatabung);
		 	$data = explode(",", $baca);
		 	echo "<tr>";
		 	echo "<td>".$data[0]."</td>";
		 	echo "<td>".$data[1]."</td>";
		 	echo "<td>".$data[2]."</td>";
		 	echo "<td><a href='hitungluas.php?n=".$data[0]."&d=".$data[1]."&t=".$data[2]."'>view</a></td>";
		 	echo "</tr>";
		 } 
		 fclose($datatabung);
	?>
</body>
</html>