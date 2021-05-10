<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	session_start();
	$_SESSION['lives'] = 5;
	$_SESSION['score'] = 0;
	?>
	<div class="wrapper">
		<h1>Selamat Datang di Game Penjumlahan Sederhana</h1>
		<div class="box">
			<h2>LOGIN</h2>
			<form method="post" action="login.php">
				<p>Masukkan Nama	: <input class="input" type="text" name="nama" required></p>
				<p>Masukkan Email	: <input class="input" type="email" name="email" required></p>
				<br><p><input class="submit" type="submit" name="login" value="Submit"></p>
			</form>	
		</div>
	</div>
	
	<?php
	if (isset($_POST['login'])){
		setcookie("nama", $_POST['nama'], time()+7*24*3600,"/");
		setcookie("email", $_POST['email'], time()+7*24*3600,"/");
		header("Location:main.php");
	}

	?>

</body>
</html>