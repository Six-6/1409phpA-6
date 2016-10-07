<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"  id="menu"> <!--<![endif]-->
 <style>
  #menu{
  background-repeat:no-repeat;
  }
  
  .menu1{
	background:url("../public/image/1.jpg");

  }
  
  .menu2{
	background:url("../public/image/2.jpg");
  }
  
  .menu3{
	background:url("../public/image/3.jpg");

  }
  
  .menu4{
	background:url("../public/image/4.jpg");

  }
  
  .menu5{
	background:url("../public/image/5.jpg");

  }
  
  .menu6{
	background:url("../public/image/6.jpg");

  }
  
  .menu7{
	background:url("../public/image/7.jpg");

  }
 </style>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demol.css" />
        <link rel="stylesheet" type="text/css" href="css/style3l.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-customl.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    <strong>&laquo; 惠玩 官网: </strong>www.huiW.com
                </a>
                <span class="right">
                    <a href="">
                        <strong>欢迎您来到惠玩官网</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form" style="margin-top:30px">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1>惠玩 登陆</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > 账号 </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="账号 或 邮箱"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> 密码 </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">免登陆</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="登陆" /> 
								</p>
                                <p class="change_link">
									您是否想成为惠玩成员？
									<a href="#toregister" class="to_register">去注册</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1> 用户 注册 </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">用户 账号</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" >用户邮箱</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">账号 密码</label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder=""/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">请确认您的密码</label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder=""/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									您以成为惠玩成员？
									<a href="#tologin" class="to_register">去登陆</a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
<script>
	window.onload=roll;
    function roll(){
  
		var menu=document.getElementById("container_demo");
		//随机产生数..math.random()产生0-1之间的随机数..4代表4张图片....可以自己增加..math.floor获取整数部分.+1实现1-4图片的获取。
		  
		var rnd=Math.floor(Math.random()*7)+1;

		//menu.className="menu"+rnd;  //class实现;

		//dom->获取style 采用驼峰写法..
		menu.style.backgroundImage="url('../public/image/"+rnd+".jpg')";
	  
	}
 </script>