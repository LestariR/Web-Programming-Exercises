<?php
if (!isset($_COOKIE['email'])){
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bermain Penjumlahan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<?php 
		session_start();

		if ($_SESSION['lives'] == 0){
			$_SESSION['lives'] = 5;
			$_SESSION['score'] = 0;
		}

		$bil1 = rand(0, 20);
		$bil2 = rand(0, 20);
		$kunci = $bil1 + $bil2;
		$_SESSION['kunci'] = $kunci;

		echo "<h3>Hello ".$_COOKIE['nama'].", tetap semangat ya... you can do the best!!!</h3>" ;
		echo "<p>Lives : ".$_SESSION['lives']." | Score : ".$_SESSION['score']."</p>";
		?>
		<form class="box-soal" method="post" action="cek.php">
			<br>
			<?php
			echo "Berapakah ".$bil1. " + ".$bil2. " = ";
			?>
			<input class="jawab" type="text" name="jawaban">
			<input class="submit" type="submit" name="submit" value="Submit">
		</form>	
	</div>

</body>
</html>