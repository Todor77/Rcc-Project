<?php
	session_start();

	if(empty($_SESSION['logged']))
    {
        header('Location:../pages/login/login1.php');
        die();
    }

    require('../conf/config.inc.php');

    $insert = mysql_query("INSERT INTO ic_cart(`product_id`,`user_id`,`date`) VALUES ('".$_POST['id']."', '".$_SESSION['userid']."','".time()."')");

    if($insert)
    {
    	echo "<script>alert('Производот е купен');</script>";
    	header('Location: '.$_POST['redirect'].'&offer=ok');
    }
    else 
    {
    	echo "<script>alert('Производот не е купен');</script>";
    	header('Location: '.$_POST['redirect'].'&offer=fail');
    }
?>