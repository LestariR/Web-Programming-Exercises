<?php
// jika sudah ada cookie username
if (isset($_COOKIE['username']) != null){
	setcookie("randomBil", null, time()+24*3600,"/");
	header("Location:tebakAngka.php");
}
// jika belum ada cookie username
else {
	?>
	<h1>GAME TEBAK ANGKA</h1>
	<form method="post" action="loginTebakAngka.php">
		Username <input type="text" name="username">
		<input type="submit" name="login" value="MULAI">
	</form>	
	<?php
	if (isset($_POST['login'])){
		//mengeset cookie username
		setcookie("username", $_POST['username'], time()+7*24*3600,"/");
		//mengeset cookie bilangan random
		setcookie("randomBil", null, time()+24*3600,"/");
		//redirect ke tebakAngka.php
		header("Location:tebakAngka.php");
	}
}	
?>