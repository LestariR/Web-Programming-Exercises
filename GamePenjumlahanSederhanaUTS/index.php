<!DOCTYPE html>
<html>
<head>
	<title>Game Penjumlahan Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<?php 
		if (isset($_COOKIE['email'])) {
			$_SESSION['lives'] = 5;
			$_SESSION['score'] = 0;
			echo "<h3>Hallo ".$_COOKIE['nama'].", selamat datang kembali di permainan ini!!!</h3>";
			?>
			<a href="main.php"><button>Start Game</button></a>
			<?php
			echo "<p>Bukan Anda? (<a href='logout.php'>klik di sini</a>)</p>";
		}else {
			header("Location:login.php");
		}
		?>
	</div>

</body>
</html>