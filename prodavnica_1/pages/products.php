<?php
	
	require('../conf/config.inc.php');

	$products = mysql_query("SELECT * FROM ic_offer WHERE `category` = ".$_GET['prod']);

    $category = array('1' => 'BMW', '2' => 'AUDI', '3' => 'Volkswagen');

	if(isset($_GET['offer']))
	{
		if($_GET['offer'] === 'ok')
		{
			echo "<script>alert('Производот е успешно купен');</script>";
		}
		else if($_GET['offer'] === 'fail')
		{
			echo "<script>alert('Производот не е купен');</script>";
		}
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $category[$_GET['prod']];?> ПОНУДА </title>

    <!-- Bootstrap Core CSS -->
    <link href="../layout/styles/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../layout/styles/3-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">T</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
                <a class="navbar-brand" href="../index.php">Почетна</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../php/contact.html">Контакт</a>
                    </li>
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $category[$_GET['prod']];?> 
                    <small>ПОНУДА</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
        	<?php
        		while ($data = mysql_fetch_array($products)) {
                    if($data['image'] != '' OR !empty($data['image']) )
                    {
                        $image = '../uploads/'.$data['image'];
                    }
                    else 
                    {
                        $image = 'http://placehold.it/700x400';
                    }
        	?>
            <div class="col-md-4 portfolio-item">
                <a href="product.php?product=<?php echo $data['id'];?>">
                    <img class="img-responsive" src="<?php echo $image;?>" width="360">
                </a>
                <h3>
                    <a href="product.php?product=<?php echo $data['id'];?>"><?php echo $data['title'];?></a>
                </h3>
                <p><?php echo htmlspecialchars_decode($data['text']);?></p>
                <h2>ЦЕНА: <b><?php echo $data['price'];?></b></h2>
                <form action="../php/buy.php" method="POST">
                	<input type="hidden" name="redirect" value="<?php echo $_SERVER['REQUEST_URI'];?>">
                	<input type="hidden" name="id" value="<?php echo $data['id'];?>">
                	<input type="submit" class="buy" value="КУПИ ГО ПРОИЗВОДОТ">
                </form>
            </div>
            <?php
            	} 
            ?>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pagination -->
        <!-- <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
					 <li>
                        <a href="#">6</a>
                    </li>
					 <li>
                        <a href="#">7</a>
                    </li>
					 <li>
                        <a href="#">8</a>
                    </li>
					 <li>
                        <a href="#">9</a>
                    </li>
					 <li>
                        <a href="#">10</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Креирано од Тодор,Влатко,Благојче 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../layout/scripts/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../layout/scripts/bootstrap.min.js"></script>

</body>

</html>
