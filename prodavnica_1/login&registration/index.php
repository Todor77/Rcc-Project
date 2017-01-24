<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Логин</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <!--<a href="">
                    <strong>&laquo; Previous Demo: </strong>Responsive Content Navigator
                </a>
				-->
                <span class="right">
                    <!--<a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        <strong>Back to the Codrops Article</strong>
                    </a>
					-->
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <!--<h1>За да се логирате внесете ги вашите податоци
					-->
				<nav class="codrops-demos">
					<span><h2>За да се логирате внесете ги вашите податоци подолу </span>
					<!--<a href="index.html" class="current-demo">Demo 1</a>
					<a href="index2.html">Demo 2</a>
					<a href="index3.html">Demo 3</a>
					-->
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="#" method="POST" autocomplete="on"> 
                                <h1>Логирај се</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" >  Корисничко име </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername "/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
								<!--
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
								-->
                                <p class="login button"> 
                                    <input type="submit" value="Логирај се" /> 
								</p>
                                <p class="change_link">
									Немате свој профил ?
									<a href="#toregister" class="to_register">Регистрирај се </a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="../php/register.php" method="POST" autocomplete="on"> 
                                <h1> Регистрација </h1>
									 <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Име</label>
                                    <input id="usernamesignup" name="ime" required="required" type="text" placeholder="Внесете ваше име" />
									</p>
									 <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Презиме</label>
                                    <input id="usernamesignup" name="prezime" required="required" type="text" placeholder="Внесете ваше презиме" />
									</p>
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u"> Корисничко име</label>
                                    <input id="usernamesignup" name="user" required="required" type="text" placeholder="Корисничкоиме690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Еmail</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="myemail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p"> Пасворд </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="п. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Ве молиме повторете го вашиот пасворд </label>
                                    <input id="passwordsignup_confirm" name="confirm" required="required" type="password" placeholder="пр. X8df!90EO"/>
                                </p>
								<p> 
                                    <label for="passwordsignup_confirm" class="text" data-icon="p">Адреса </label>
                                    <input id="passwordsignup_confirm" name="adresa" required="required" type="text" placeholder="пр.leninova_br1"/>
                                </p>
								<p> 
                                    <label for="passwordsignup_confirm" class="text" data-icon="p">Град </label>
                                    <input id="passwordsignup_confirm" name="grad" required="required" type="text" placeholder="пр.1300"/>
                                </p>
								<p> 
                                    <label for="passwordsignup_confirm" class="text" data-icon="p">Држава </label>
                                    <input id="passwordsignup_confirm" name="drzava" required="required" type="text" placeholder="пр.1300"/>
                                </p>
								<p> 
                                    <label for="passwordsignup_confirm" class="text" data-icon="p">Поштенски број </label>
                                    <input id="passwordsignup_confirm" name="post_br" required="required" type="text" placeholder="пр.1300"/>
                                </p>
								
                                <p class="signin button"> 
									<input type="submit" value="Регистрирај се"/> 
								</p>
                                <p class="change_link">  
									Веќе сте член ?
									<a href="#tologin" class="to_register"> Логирај се  </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>