<?php 
session_start();
require('connect.php');
$username = $_SESSION['username'];
if ($username == ''){header('location: login.php');}
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Adminarea</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'/>
<script type='text/javascript' src='js/jquery.js?ver=1.11.0'></script>
</head>
<body class="admin">
<div class="admincontainer">
<div class="adminmenu">
<ul>
	<li class="brow">Browsky Panel</li>
    <li><a href="index.php">Dasbor</a></li>
    <li><a href="?page=statistik">Statistik</a></li>
    <li><a href="?page=pembelian">Pembelian</a></li>
    <li><a href="?page=penjualan">Penjualan</a></li>
    <li><a href="?page=laba">Laba</a></li>
    <li><a href="?page=rugi">Rugi</a></li>
    <li><a href="?page=pajak">Pajak</a></li>
    <li><a href="?page=pengaturan">Pengaturan</a></li>
    <li><a href="?page=tentang">Tentang</a></li>
</ul>
</div>
<div class="admincontent">
	<div class="haloadmin">
      <div class="left">Halo browsky <span><?php echo $username; ?></span>! Ini adalah halaman admin area.</div>
      <div class="right"><a class="logout" href='user.php?user=logout'>Logout</a></div>
      <div class="clear"></div>
    </div>
    <div class="isine">
        <?php 
		if(!$_GET["page"]){ echo "Badala";}
		else if ($_GET["page"]=="statistik") { echo "Statistik"; }
		else if ($_GET["page"]=="pembelian") { echo "Pembelian"; }
		else if ($_GET["page"]=="penjualan") { echo "Penjualan"; }
		else if ($_GET["page"]=="laba") { echo "Laba laba"; }
		else if ($_GET["page"]=="rugi") { echo "Rugi"; }
		else if ($_GET["page"]=="pajak") { echo "Pajak"; }
		else if ($_GET["page"]=="pengaturan") { echo "Pengaturan general"; }
		else if ($_GET["page"]=="tentang") { echo "Tentang kami"; }
		else { echo "Hello, world."; }
		?>
    </div>
</div>
</div>
<script type="text/javascript">
function rubahlebar() {
	var docwidth = jQuery(window).width();
	if (docwidth>480) {
		var rightwidth = docwidth-180;
		jQuery('.admincontent').css( "width", rightwidth+'px' );
	}
}
jQuery(document).ready(function() {
	rubahlebar();
	jQuery(window).resize(function() { rubahlebar(); });
});
</script>
</body>
</html>