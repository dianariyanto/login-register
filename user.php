<?php
if ( $_GET['user']=='login' ) {header('location: login.php');}
if ( $_GET['user']=='logout' ) {header('location: logout.php');}
if ( $_GET['user']=='register' ) {header('location: register.php');}
?>