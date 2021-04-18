<?php
	$nama = $_GET['n'];
	$diameter = $_GET['d'];
	$tinggi = $_GET['t'];

	$luasTabung = 2 * 3.14 * ($diameter/2) * (($diameter/2) + $tinggi);

	echo "<td>Luas tabung dengan diameter ".$diameter." dan tinggi ".$tinggi." adalah ".$luasTabung." satuan luas</td>";
?>