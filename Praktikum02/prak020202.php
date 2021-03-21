<?php
$baris=4;
$kolom=5;
echo "<table border='1'>";
$k = 1;
for($i=1;$i<5;$i++){
	echo "<tr>";
	for($j=1;$j<6;$j++){
		echo "<td>".$k."</td>";
		$k++;
	}
	echo "</tr>";
}
echo "</table>";
?>
