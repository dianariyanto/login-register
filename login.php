<?php  // Memulai Session
session_start();
require('connect.php');
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Halaman Login</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'/>
</head>
<body>
<div class="login-form">
<h1>Login</h1>
<?php
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$thepassword = $_POST['password'];
$password = MD5($thepassword);
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM user WHERE username='$username' and password='$password'";
 
$result = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
echo "<p class='notif'>Username atau Kata sandi tidak cocok.</p>";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
header('location: index.php');
}else{
//3.2 When the user visits the page first time, simple login form will be displayed.
?>
<form method="POST">
    <p><input id="username" type="text" name="username" required placeholder="Username anda" /></p>
    <p><input id="password" type="password" name="password" required placeholder="Kata sandi" /></p>
    <input class="btn" type="submit" name="submit" value="Masuk" />
    <p class="tanya">Belum punya akun? <a class="ok" href="register.php">Daftar disini</a></p>
</form>
<?php } ?>
</div>
</body>
</html>