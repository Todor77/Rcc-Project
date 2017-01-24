<?php

session_start();
require('../../conf/config.inc.php');

if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$encrypt_password=md5($password);

	$query = mysql_query( "SELECT * FROM ic_users WHERE username = '".$username."' AND password = '".$encrypt_password."'");
	//$numrows= mysql_num_rows($query);

	$results = mysql_fetch_array($query);

	if($numrows != 1)
	{
		$_SESSION['sess_username']=$username;
		$_SESSION['logged'] = 1;
		$_SESSION['userid'] = $results['id'];
		$_SESSION['user_name'] = $results['first_name'].' '.$results['last_name'];
		if($results['is_admin'] === '1' OR $results['is_admin'] === 1)
		{
			$_SESSION['is_admin'] = 1;
			header('Location: ../../pages/admin.php');
		}
		else 
		{
			$_SESSION['is_admin'] = 0;
			header("Location:mem.php");
		}
		

	} 
	else 
	{
		echo "Погрешно корисничко име и лозинка!";
	}

}
else {
	echo "Сите полиња се задолжителни!";
}

?>

</body>
</html>