<?php
if (!isset($_COOKIE['email'])){
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Bermain penjumlahan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<?php 
		session_start(); 
		if (isset($_POST['submit'])) {
			if ($_SESSION['lives'] > 0) {
				if ($_POST['jawaban'] == $_SESSION['kunci']) {
					$_SESSION['score'] = $_SESSION['score'] + 10;
					echo "<h3>Hello ".$_COOKIE['nama'].", Selamat jawaban Anda benar...</h3>" ;
					echo "<p>Lives : ".$_SESSION['lives']." | Score : ".$_SESSION['score']."</p>";
				}else {
					if ($_SESSION['lives'] == 1){
						$_SESSION['score'] = $_SESSION['score'] - 2;
						header("Location:gameover.php");
					} else {
						$_SESSION['score'] = $_SESSION['score'] - 2;	
						$_SESSION['lives'] = $_SESSION['lives'] - 1;
						echo "<h3>Hello ".$_COOKIE['nama'].", sayang jawaban Anda salah... tetap semangat ya!!!</h3>" ;
						echo "<p>Lives : ".$_SESSION['lives']." | Score : ".$_SESSION['score']."</p>";
					}
				}

				?>
				<br>
				<a href="main.php"><button>Soal Selanjutnya</button></a>
				<?php	
			}else {
				header("Location:gameover.php");
			}
		}

		?>
	</div>

</body>
</html>