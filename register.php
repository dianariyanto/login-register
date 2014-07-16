<?php
require('connect.php');
// Jika value tersubmit, masukkan value ke database.
if (isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "INSERT INTO user (username, password, email) VALUES ('$username', MD5('$password'), '$email')";
	$result = mysql_query($query);
	if($result){
		$msg = "Akun baru berhasil dibuat. <a href='login.php'>Login disini</a>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar Akun Baru</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'/>
</head>
<body>
<div class="register-form">
<h1>Daftar akun baru</h1>
<p class="notif"><?php if(isset($msg) & !empty($msg)){ echo $msg; } ?></p>
<form method="POST">
  <p class="label">Username</p>
  <p><input id="username" type="text" name="username" placeholder="paidi" /></p>
  <p class="label">E-Mail</p>
  <p><input id="password" type="email" name="email" required placeholder="paidi@email.com" /></p>
  <p class="label">Kata sandi</p>
  <p><input id="password" type="password" name="password" placeholder="password" /></p>
  <input class="btn register" type="submit" name="submit" value="Daftar" />
  <p class="tanya">Sudah punya akun? <a class="z" href="login.php">Login disini</a></p>
</form>
</div>
</body>
</html>