<?php
session_start(); 
require('../conf/config.inc.php');
function dberror() {  
	die("DB Error " . mysql_errno() . " : " . mysql_error());
}//definiranje na funcija za spravuvanje so greski


function mysqlclean($input, $maxlength, $connection){
	$input = substr($input, 0, $maxlength);
	$input = mysql_real_escape_string($input, $connection);
	return $input;
}//definiranje na funkcijata mysqlclean za podobruvanje na bezbednostaa
if(empty($_POST['username']) || empty($_POST['password']) ||  empty($_POST['mail']) || empty($_POST['ime']) || empty($_POST['prezime'])|| empty($_POST['adresa']) || empty($_POST['grad']) || empty($_POST['drzava']) || ))
{
	$_SESSION['errors']['empty'] = "Сите полиња треба да се пополнети";
	@header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
}
	$user=mysqlclean($_POST['username'],20, $connection);
	$password=mysqlclean($_POST['password'],20, $connection);
	$email=mysqlclean($_POST['mail'],50, $connection);
	$ime=mysqlclean($_POST['ime'],15, $connection);
	$prezime=mysqlclean($_POST['prezime'],15, $connection);
	$adresa=mysqlclean($_POST['adresa'],30, $connection);
	$grad=mysqlclean($_POST['grad'],15, $connection);
	$drzava=mysqlclean($_POST['drzava'],15, $connection);
	$error = false;
	
	if(preg_match_all("/[a-z]{1,1}[a-z0-9_\.]{3,14}/", $user, $matches)!=1 || strlen($matches[0][0]) != strlen($user))
	{ 
		$error = true;
		$_SESSION['errors']['usern'] = 'Корисничкото име треба да се состои само од букви(a-z), бројки(0-9) и карактерите \'.\' и \'_\' и мора да има од 4 до 15 карактери. ';
	}
	
	if(preg_match_all("/[a-z0-9_\.]{6,15}/", $password, $matches)!=1 || strlen($matches[0][0]) != strlen($password))
	{ 
		$error = true;
		$_SESSION['errors']['password'] = 'Лозинката треба да се состои само од букви(a-z), бројки(0-9) и карактерите \'.\' и \'_\' и мора да има од 6 до 15 карактери. ';
	}
	
	if($password != $confirmPassword)
	{
		$error = true;
		$_SESSION['errors']['conf_pass'] = 'Лозинките не се совпаѓаат.';
	}
	
	if(preg_match_all("/^[a-zA-Z0-9_\.]+@[a-zA-Z0-9\_]+\.[a-zA-Z0-9\_\.]+$/", $email, $matches)!=1 || strlen($matches[0][0]) != strlen($email))
	{ 
		$error = true;
		$_SESSION['errors']['e-mail'] = 'Невалиден формат на елекронска адреса.';
	}
	
	if(preg_match_all("/[a-zA-Z]+/", $ime, $matches)!=1 || strlen($matches[0][0]) != strlen($ime))
	{ 
		$error = true;
		$_SESSION['errors']['name'] = 'Името може да се состои само од букви(a-z). ';
	}
	
	if(preg_match_all("/[a-zA-Z]+/", $prezime, $matches)!=1 || strlen($matches[0][0]) != strlen($prezime))
	{ 
		$error = true;
		$_SESSION['errors']['lastname'] = 'Презимето може да се состои само од букви(a-z). ';
	}
	if(preg_match_all("/[a-zA-Z0-9\s\.\/]+/", $adresa, $matches)!=1 || strlen($matches[0][0]) != strlen($adresa))
	{ 
		$error = true;
		$_SESSION['errors']['address'] = 'Адресата може да се состои само од букви(a-z), бројки(0-9) и карактерите \'.\' и \'/\' ';
	}
	if(preg_match_all("/[a-zA-Z]+/", $grad, $matches)!=1 || strlen($matches[0][0]) != strlen($grad))
	{ 
		$error = true;
		$_SESSION['errors']['city'] = 'Името на градот може да се состои само од букви(a-z). ';
	}
	if(preg_match_all("/[a-zA-Z]+/", $drzava, $matches)!=1 || strlen($matches[0][0]) != strlen($drzava))
	{ 
		$error = true;
		$_SESSION['errors']['country'] = 'Името на државата може да се состои само од букви(a-z). ';
	}
	if(preg_match_all("/[0-9]+/", $post_br, $matches)!=1 || strlen($matches[0][0]) != strlen($post_br))
	{ 
		$error = true;
		$_SESSION['errors']['postn'] = 'Поштенскиот број може да се состои само од бројки. ';
	}
	if($error)
	{
		header("Location: {$_SERVER['HTTP_REFERER']}");
		exit();
	}	
	$query1="SELECT username FROM ic_users WHERE username='{$user}'";
	if (!($result =@mysql_query($query1, $connection)))
	{
		echo "Cannot connect to the database.";
		exit;
	}
	if(mysql_num_rows($result)>0)
	{
		 
		 $_SESSION['errors']['usern'] = "Корисничкото име е веќе во употреба";
		 header("Location: {$_SERVER['HTTP_REFERER']}");
		 exit;
	}
	else
	{
		$password = crypt($password, $user[0].$user[1]); 
		$query2="INSERT INTO ic_users (first_name, last_name, email, address, city, post_code, country, username, password, active, created) 
		VALUES('{$ime}', '{$prezime}', '{$email}', '{$adresa}', '{$grad}', '{$p_}', '{$drzava}', {$user}, {$password}, '1', '".time()."')";
		if($result =@mysql_query($query2, $connection))
		{
			$_SESSION['user']=$user;
			echo "<div class='login'><fieldset> ".$_SESSION['user']."    <a href=\"index.php?logoff=logmeoff\">Logout</a></fieldset></div>";
			echo "Вашата регистрација е успешна.";
			exit;
		}
	}
?>