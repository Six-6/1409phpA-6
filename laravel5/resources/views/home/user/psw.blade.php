@include("home/common/left")
<h2 class="common_h2">修改密码</h2>
<form action="pswUpd" method="post" onsubmit="return check()">
    <div class="common-w1 gstyle mb15">
        <table width="790" border="0" cellpadding="0" cellspacing="0" class="form-table3">
            <tr>
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <td align="right"><span>请输入原密码：</span></td>
                <td><input type="text" name="pwd" class="txt-sss" style="float:left; margin-top:5px;"
                           onblur="return check_pwd()"/>
                    <span id="pwd"></span>
                </td>
            </tr>
            <tr>
                <td align="right"><span>输入新密码：</span></td>
                <td><input type="text" name="psw" onblur="return check_psw()" class="txt-sss"
                           style=" float:left; margin-top:5px;"/>
                    <span id="psw"></span>
                </td>
            </tr>
            <tr id="email_tip2">
                <td colspan="2"></td>
            </tr>
            <tr>
                <td width="120" align="right">再次输入新密码：</td>
                <td><input type="text" name="psws" class="txt-sss"
                           onblur="return check_psws();" style="float:left; margin-top:5px;"/>
                    <span id="psws"></span>
                </td>
            </tr>
            <tr>
                <td align="right">&nbsp;</td>
                <td height="36">
                    <input type="submit" value="修改" />
                </td>
            </tr>
        </table>
    </div>
</form>
@include("home/common/footer")
<script src="./jq.js"></script>
<script>
    /**密码提交验证**/
    function check(){
        if(check_pwd() || check_psw() || check_psws()){
            return true;
        }else{
            return false;
        }
    }
    /**原密码**/
    function check_pwd(){
        var pwd=$("input[name=pwd]").val();
        var pwds=document.getElementById("pwd");
        var tok=$("input[name=_token]").val();
        if(pwd=="" || pwd == null){
            pwds.innerHTML="<font style='color: red'>原密码不能为空！</font>";
            return false;
        }
        $.post("checkPwd",{pwd:pwd,_token:tok},function(msg){
            var u=$.parseJSON(msg);
            if(u==1){
                pwds.innerHTML="<font style='color: red'>原密码不正确！</font>";
                return false;
            }
        });
        pwds.innerHTML="<font style='color: green'>原密码正确！</font>";
        return true;
    }
    /**新密码**/
    function check_psw(){
        var psw=$("input[name=psw]").val();
        var psws=document.getElementById("psw");
        if(psw=="" || psw==null){
            psws.innerHTML="<font style='color: red'>新密码不能为空！</font>";
            return false;
        }
        if(psw.length<6){
            psws.innerHTML="<font style='color: red'>新密码长度必须是6位以上！</font>";
            return false;
        }
        psws.innerHTML="<font style='color: green'>新密码可以使用！</font>";
        return true;
    }
    /**重输新密码**/
    function check_psws(){
        var psw=$("input[name=psw]").val();
        var psws=$("input[name=psws]").val();
        var checkpsw=document.getElementById("psws");
        if(psws!=psw){
            checkpsw.innerHTML="<font style='color: red'>2次密码输入不一致！</font>";
            return false;
        }
        checkpsw.innerHTML="<font style='color: green'>确认密码可以使用！</font>";
        return true;
    }
</script>