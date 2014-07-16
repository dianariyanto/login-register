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
    <li><a href="#">Dasbor</a></li>
    <li><a href="#">Statistik</a></li>
    <li><a href="#">Pembelian</a></li>
    <li><a href="#">Penjualan</a></li>
    <li><a href="#">Laba</a></li>
    <li><a href="#">Rugi</a></li>
    <li><a href="#">Pajak</a></li>
    <li><a href="#">Pengaturan</a></li>
    <li><a href="#">Tentang</a></li>
</ul>
</div>
<div class="admincontent">
	<div class="haloadmin">
      <div class="left">Halo browsky <span><?php echo $username; ?></span>! Ini adalah halaman admin area.</div>
      <div class="right"><a class="logout" href='logout.php'>Logout</a></div>
      <div class="clear"></div>
    </div>
    <div class="isine">
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
        <p>Halo browsky</p>
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