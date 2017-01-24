<?php 
session_start();
if(!isset($_SESSION["sess_username"])){
	header("location:login.php");
} else {
?>
<!doctype html>
<html>
<head>
<title>Welcome</title>
</head>
<body>
<div id="navigation">
<div id="nav" align="center">
<h2>Добредојдовте <?=$_SESSION['sess_username'];?>! <a href="logout.php">Одлогирај се</a></h2>
<br/>

<form method="post" action="../../index.php"  value="search">
 <input type="submit" value="Почетна">
</div>
</div>
<p>

 
 </p>
</body>
</html>
<?php
}
?>


