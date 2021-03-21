<?php
$baris=4;
$kolom=5;
echo "<table border='1'>";
$k = 1;
for($i=1;$i<5;$i++){
	echo "<tr>";
	for($j=1;$j<6;$j++){
		if($k % 2 != 0){
			echo "<td bgcolor = 'white'><font color = 'red'>".$k."</font></td>";
		} else {
			echo "<td bgcolor = 'red'><font color = 'white'>".$k."</font></td>";
		}
		$k++;
	}
	echo "</tr>";
}
echo "</table>";
?>