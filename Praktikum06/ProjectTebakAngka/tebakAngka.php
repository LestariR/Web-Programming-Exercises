<?php
if (isset($_COOKIE['username'])){
	if (isset($_COOKIE['randomBil']) == null){
		setcookie("randomBil", rand(0, 100), time()+24*3600,"/");
		echo "<p>Hallo ".$_COOKIE['username'].", nama Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat antara 0-100. Silakan Anda tebak!!!</p>" ;
		?>
		<form method="post" action="tebakAngka.php">
			Bilangan tebakan Anda <input type="text" name="tebakan">
			<input type="submit" name="submit" value="Cek">
		</form>	
	<?php
	}
	if (isset($_COOKIE['randomBil']) != null) {
		if (isset($_POST['submit'])){
			if ($_POST['tebakan'] > $_COOKIE['randomBil']) {
				echo "<p>Hallo, nama Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat antara 0-100. Silakan Anda tebak!!!</p>" ;
				echo "<p>Wahhh.... masih salah ya,bilangan tebakan Anda terlalu tinggi</p>" ;
				?>
				<form method="post" action="tebakAngka.php">
					Bilangan tebakan Anda <input type="text" name="tebakan">
					<input type="submit" name="submit" value="Cek">
				</form>
				<?php
			}else if ($_POST['tebakan'] < $_COOKIE['randomBil']){
				echo "<p>Hallo, nama Saya Mr. PHP. Saya telah memilih secara random sebuah bilangan bulat 0-100. Silakan Anda tebak!!!</p>" ;
				echo "<p>Wahhh.... masih salah ya,bilangan tebakan Anda terlalu rendah</p>";
				?>
				<form method="post" action="tebakAngka.php">
					Bilangan tebakan Anda <input type="text" name="tebakan">
					<input type="submit" name="submit" value="Cek">
				</form>
				<?php
			}else if ($_POST['tebakan'] == $_COOKIE['randomBil']){
				echo "<p>Selamat ya... Anda benar, saya telah memilih bilangan ".$_COOKIE['randomBil'].".</p>";
				setcookie("randomBil", null, time()+24*3600,"/");
				echo "<p><a href='tebakAngka.php'>Ulangi lagi</a></p>";
				echo "<p><a href='exitTebakAngka.php'>exit</a></p>";
			}
		}	
	}
}if (!isset($_COOKIE['username'])){
	echo "<p>Silahkan <a href='loginTebakAngka.php'>Login</a> dulu!!!</p>";
}
?>