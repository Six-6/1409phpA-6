<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/login.css" />
</head>
<body>
<div class="page">
	<div class="loginwarrp">
		<div class="logo">管理员登陆</div>
        <div class="login_form">
			<!-- <form id="Login" name="Login" method="post" onsubmit="return dl()" > -->
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
				<li class="login-item" id="lis">
					<span>用户名：</span>
                    <input type="text" onblur="names()" name="u_name" id='na' class="login_input">
				</li>
				<span id="sp"></span>
				<li class="login-item">
					<span>密　码：</span>
					<input type="password" onblur="pwds()" name="u_pwd" id='pwd' class="login_input">
					
				</li>
				<span id="sppwd"></span>
				<div class="clearfix"></div>
				<li class="login-sub">
					<input type="button" onclick="dl()" name="Submit" value="登录" />
				</li>                      
           <!-- </form> -->
		</div>
	</div>
</div>
</body>
</html>
<script src="js/jquery1.8.js"></script>
<script>
    function names()
    {
        var name=$("#na").val();
        if(name=='')
        {
            $("#sp").html("<p style='color:red'>不能为空</p>");
            return false;
        }else
        {
            var r_name=/^[a-z]\w{5,17}$/i;
            if(!r_name.test(name))
            {
                 $("#sp").html("<p style='color:red'>用户名由6-18位的字母数字下划线组成，不能由数字开头</p>");
                 return false;
            }
            else
            {
                return true;
            }
            
        }
    }
     function pwds()
    {
        var pwd=$("#pwd").val();
        if(pwd=='')
        {
            $("#sppwd").html("<p style='color:red'>密码不能为空</p>");
            return false;
        }else
        {
            var r_pwd=/^\w{6,}$/;
            if(!r_pwd.test(pwd))
            {
                 $("#sppwd").html("<p style='color:red'>密码不能少于六位</p>");
                 return false;
            }
            else
            {
                return true;
            }
            
        }
    }
    function dl( )
    {
        if(names()&&pwds())
        {
            var name=$("#na").val();
            var pwd=$("#pwd").val();
            $.get('loin',{'name':name,'pwd':pwd},function(msg){
                if(msg==1)
                {
                    location.href='in';
                }else
                {
                    $("#sppwd").html("<p style='color:red'>用户名或密码错误</p>");
                }
            })
        }
    }
</script>