<?php
if (!isset($_COOKIE['email'])){
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game Over</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="gameover">
		<h2>GAME OVER</h2>
		<?php 
		include_once("config.php");
		session_start();
		$nama = $_COOKIE['nama'];
		$email = $_COOKIE['email'];
		$score =$_SESSION['score'];

		echo "<h3>Hello ".$_COOKIE['nama'].", sayang permainan telah selesai... Semoga kali lain bisa lebih baik!!!</h3>" ;
		echo "<p>Score Anda: ".$score."</p>";
		echo "<p><b>10 Pemain dengan Skor Tertinggi</b></p>";

		$_SESSION['lives'] = 0;

		$input = mysqli_query($mysqli, "INSERT INTO 
		peringkat(Nama, Email, Score) VALUES('$nama','$email','$score')");

		$result = mysqli_query($mysqli, "SELECT * FROM peringkat ORDER BY score DESC");

		$no = 1;
		?>
		<center>
			<table width="30%" border="1">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Score</th>
				</tr>
				<?php
				while ($data = mysqli_fetch_array($result)) {
					echo "<tr>";
					echo "<td>".$no."</td>";
					echo "<td>".$data['Nama']."</td>";
					echo "<td>".$data['Score']."</td>";
					$no ++ ;
					if ($no == 11){
						break;
					}
				}
				?>
			</table>
		</center>
		<br>
		<a href="index.php"><button>Main Lagi</button></a>
		<br/><br/>
		<a href="logout.php"><button>Logout</button></a>
	</div>
</body>
</html>
