<?php 
  session_start();

  require('conf/config.inc.php');

  $products = mysql_query("SELECT * FROM ic_offer LIMIT 10");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Modular Business
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<!--<html xmlns="http://www.w3.org/1999/xhtml">
-->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Aвто Делови</title>
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />

<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.jcarousel.setup.js"></script>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="topbar">
    <p>Tel: 077/695/298 or 070/888/801        | Mail: avtodelovi@gmail.com 
	
<?php 
  if(isset($_SESSION['logged']))
  {
    echo "<div id='logged'>Здраво ".$_SESSION['user_name']." <a href='pages/login/logout.php'>Одлогирај се</a></div>";
  }
  else 
  {

  }
?>
</div></p>

   <!--<ul>
      <li><a href="#">BMW</a></li>
      <li><a href="#">Volkswagen</a></li>
      <li><a href="#">Audi</a></li>
    
    </ul>
	-->
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="header">
    <div class="fl_left">
	
      <h1><a href="index.html">АВТО ДЕЛОВИ </a>  
     
	 </a></h1> 
     
    </div>
	<!--
    <div class="fl_right"> <a href="#"><img src="images/demo/468x60.gif" alt="" /></a> </div>
    -->
	<br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="topnav">
    <ul>
      <li class="active"><a href="index.php">Почетна</a></li>
	  </li>
      <!--<li><a href="pages/style-demo.html">BMW</a><span> </span></li>
      <li><a href="pages/full-width.html">AUDI</a><span> </span></li>
      <li><a href=""pages/full-width.html"">Volkswagen</a><span> </span>
        
      </li>
	    
      <li class="last"><a href="#">Понуда</a> 
	  -->
	   <li><a href="#">Понуда</a>
	  <ul>
          <li><a href="pages/products.php?prod=1">BMW</a></li>
          <li><a href="pages/products.php?prod=2">AUDI</a></li>
          <li><a href="pages/products.php?prod=3">Volkswagen</a></li>
		  </li>
        </ul>
		
		<li><a href="pages/login/login1.php">Логирај се </a></li>
	  <li class="last"><a href="php/contact.html">Контакт </a> </li>
	   
        </ul>
	
   
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="featured_slide">
    <div id="featured_content">
      <ul>
      <?php
        while ($data = mysql_fetch_array($products)) {
      ?>
        <li><a href="pages/product.php?product=<?php echo $data['id'];?>"><img src="uploads/<?php echo $data['image'];?>" alt="" /></a></li>
      <?php 
      }
      ?>
      </ul>
    </div>
    <a href="javascript:void(0);" id="featured-item-prev"><img src="layout/images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="layout/images/next.png" alt="" /></a> </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
   
	
	
	
	<div class="custom"> 
	
	<div class="span3 text-center"><img src="images/demo/shipping.png" border="0" alt=""
	<div class="span3 text-center"><img src="images/demo/motor.jpg" border="0" alt=""
	
	
	<span style="span3"><h1><b>Плаќање во вашиот дом</b></p></b></span></h3>
	<div class="custom">
	<div class="span3 text-center"><img src="images/demo/call.png" border="0" alt=""
	<div class="custom" align="right">
	<div class="custom" align="right">
	<span style="span3"><h1><b>Информации на телефон <b></h1></span></h3></span>
	
	
	
	<p>077/568/279 и 070/888/801</P>
	</div>
	</div>
	
</p>
</p>
</div>
</div>
</div>
</div>

	  	
      <!--<img class="imgl" src="images/demo/imgl.gif" alt="" width="125" height="125" />
      <p><strong>Indonectetus facilis leo nibh</strong></p>
      <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>.</p>
      <p>This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer.</p>
      <p>For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
      <p>Lacusenim inte trices lorem anterdum nam sente vivamus quis fauctor mauris wisinon vivamus. Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Sagittislaorem dolor ipsum at urna et pharetium malesuada nis consectus odio.</p>
    -->
	<!--</div>
    <div id="column">
      <div class="holder">
        <h2>Информации за Дизајнерите</h2>
        <ul id="latestnews">
          <li><img class="imgl" src="images/demo/80x80.gif" width alt="" />
            <p><strong>Indonectetus facilis leo nibh.</strong></p>
            <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
          <li class="last"><img class="imgl" src="images/demo/80x80.gif" alt="" />
            <p><strong>Indonectetus facilis leo nibh.</strong></p>
            <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<!--<div class="wrapper col6">
  <div id="footer">
    <div id="newsletter">
	-->
	
     <!-- <h2>Stay In The Know !</h2>
      <p>Please enter your email to join our mailing list</p>
      <form action="#" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>
      <p>To unsubscribe please <a href="#">click here &raquo;</a></p>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<!-<div class="wrapper col8"></p>
  <div id="copyright">
    <p class="fl_left"> 2016 - Сите права се задржани </p>
    <p class="fl_right">Креирано од  Тодор,Зоран,Митко</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>