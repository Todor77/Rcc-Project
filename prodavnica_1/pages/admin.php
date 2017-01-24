<?php
    session_start();
	
    if(!isset($_SESSION['logged']) AND $_SESSION['is_admin'] === 1)
    {
        header('Location: .php');
        die();
    }

    if(isset($_POST) AND !empty($_POST))
	{
		require('../php/admin.php');
		
		$admin = new Admin($_POST);

        if($admin->check)
        {
            echo "<script>alert('".$admin->success[0]."')</script>";
        }
        else 
        {
            $error = '';
            foreach ($admin->error as $key => $value) {
                $error .= $value;
            }

            echo "<script>alert('".$error."')</script>";
        }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Администрација</title>
	<meta charset="utf8"
	<link rel="stylesheet" type="text/css" href="../login&registration/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../login&registration/css/style.css" />
	<link rel="stylesheet" type="text/css" href="../login&registration/css/animate-custom.css" />
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			tinymce.init({selector:'#tinymce'});
		});
	</script>
</head>
<body>
	 <div class="container">
	 	<header>
            <h1>Продавница за авто делови</h1>
        </header>
        <section>
        	<div id="container_demo" >
        		<div id="wrapper">
                    <nav id="logged">
                        <span><h2>Здраво <?php echo $_SESSION['user_name'];?></h2></span>
                        <a href="login/logout.php" >Одлогирај се</a>
                    </nav>
                    <div id="login" class="animate form">
                        <form  action="#" method="POST" autocomplete="on" enctype="multipart/form-data"> 
                            <h1>Додади дел</h1> 
                             <p> 
                                <label for="title" class="uname" >  Наслов на делот</label>
                                <input name="title" required="required" type="text"/>
                            </p>
                            <p> 
                                <label for="price" class="uname" >  Цена</label>
                                <input name="price" required="required" type="text"/>
                            </p>
                            <p> 
                                <label for="price" class="uname" >  Одберете категорија</label>
                                <select name="category">
                                    <option value='1'>BMW</option>
                                    <option value='2'>AUDI</option>
                                    <option value='3'>Volkswagen</option>
                                </select>
                            </p>
                            <p> 
                                <label for="image" class="uname" >  Додади слика</label>
                                <input type="file" name="image" id="image">
                            </p>
                            <p> 
                                <label for="text" class="uname" >  Опис на делот</label>
                                <input name="text" id="tinymce" style="height:350px" type="text"></input>
                            </p>
                            <p class="login button"> 
                                <input type="submit" value="Додади"/> 
							</p>
                        </form>
                    </div>
                </div>
        </section>
	 </div>
</body>
</html>