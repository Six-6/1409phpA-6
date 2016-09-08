@include("home/common/left")
<h2 class="common_h2">个人资料</h2>
<form action="personUpd" method="post" name="add_place_form" id="user_info_edit_form" onsubmit="return check()">
    <div class="common-w1 gstyle mb15">
        <table class="form-table3" border="0" cellpadding="0" cellspacing="0" width="790">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

            <tbody>
            @foreach($person as $v)
                <tr>
                    <input type="hidden" name="u_id" value="{{$v->u_id}}"/>
                    <td align="right"><span>用户名：</span></td>
                    <td><span id="tel_old">{{$v->user}}</span> (ID:3851)</td>
                </tr>

                <tr>
                    <td align="right"><span>邮箱：</span></td>
                    <td>
                        <input name="email" class="txt-sss" value="{{$v->email}}"
                               style="width:200px; float:left; margin-top:5px;" onblur="return check_email();"
                               type="text">
                        <span id="email"></span>
                    </td>


                </tr>
                <tr id="email_tip2">
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td align="right" width="120">手机：</td>
                    <td><input name="phone" class="txt-sss" value="{{$v->phone}}"
                               onblur="return check_tel();" style="float:left; margin-top:5px;" type="text">&nbsp;&nbsp;
                        <span id="tel"></span>
                    </td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td align="right">姓名：</td>
                    <td><input name="name" id="name" onblur="return check_name()" class="txt-sss" value="{{$v->name}}"
                               type="text">
                        <span id="namea"></span>
                    </td>
                </tr>
                <tr>
                    <td align="right">联系QQ：</td>
                    <td><input name="qq" id="qq" value="{{$v->qq}}" class="txt-sss" type="text"></td>
                </tr>
                <tr>
                    <td align="right">性别：</td>
                    <td>
                        <select id="sex" name="sex">
                            @if($v->sex==1)
                                <option selected="selected" value="男">男</option>
                            @elseif($v->sex==2)
                                <option value="女">女</option>
                            @elseif($v->sex==0)
                                <option value="保密">保密</option>
                            @endif
                        </select></td>
                </tr>
                <tr>
                    <td align="right">出生日期：</td>
                    <td>
                        <span style="position:relative;">
                            <input id="birthday" value="{{$v->birthday}}" size="10" name="birthday" type="text">
                        <span id="birthday"></span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td align="right">证件：</td>
                    <td>
                        <select id="paper_type" name="t_id">
                            @if(empty($v->t_id))
                                @foreach($type as $val)
                                    <option value="{{$val['t_id']}}">{{$val['t_name']}}</option>
                                @endforeach
                            @else
                                <option value="{{$v->t_id}}">{{$v->t_name}}</option>
                            @endif
                        </select>
                        <input class="txt-m" onblur="return check_card()" value="{{$v->t_number}}" name="t_number"
                               type="text">
                        <span id="number"></span>
                    </td>
                </tr>
                <tr>
                    <td align="right">地址：</td>
                    <td>
                        <input name="address" class="txt-sss" value="{{$v->address}}" style="width:300px;"
                               type="text">
                    </td>
                </tr>
            @endforeach
            <tr>
                <td align="right">提示：</td>
                <td><span class="cdyellow">您的资料将被默认保存为第一游客信息，请您完整如实填写，避免资料不实带来的不便。</span></td>
            </tr>
            <tr>
                <td align="right">&nbsp;</td>

                <td height="36">
                    <input value="提交" type="submit">
                </td>
            </tr>
            </tbody>
        </table>
    </div>


    <!-- rightBar end -->
</form>
<div class="clr"></div>
@include("home/common/footer")
<script src="jq.js"></script>
<script>
    function check() {
        if (check_email() || check_tel() || check_card() || check_name()) {
            return true;
        } else {
            return false;
        }
    }
    /**用户名验证**/
    function check_name() {
        flag = '';
        var name = $("input[name=name]").val();
        var names = document.getElementById("namea");
        var tok = $("input[name=_token]").val();
        if (name == "" || name == null) {
            names.innerHTML = "<span style='color: red'>用户名不能为空！</span>";
            return false;
        }
        $.post("personVer", {name: name, _token: tok}, function (msg) {
            var u = $.parseJSON(msg);
            if (u == 1) {
                names.innerHTML = "<span style='color: red'>用户名已存在！</span>";
                flag =  false;
            }
            return flag;
        });
        names.innerHTML = "<span style='color: red'>用户名可以使用！</span>";
        return true;
    }
    /**身份证号验证**/
    function check_card() {
        var number = $("input[name=t_number]").val();
        var numbers = document.getElementById("number");
        if (number == "" || number == null) {
            numbers.innerHTML = "<span style='color: red'>身份证格式不对！</span>";
            return false;
        }
        if (!(/(^\d{15}$)|(^\d{17}([0-9]|X)$)/.test(number))) {
            numbers.innerHTML = "<span style='color: red'>身份证格式不对！</span>";
            return false;
        }
        numbers.innerHTML = "<span style='color: green'>身份证可以使用！</span>";
        return true;
    }
    /**手机号验证**/
    function check_tel() {
        var phone = $("input[name=phone]").val();
        var phones = document.getElementById("tel");
        if (phone == "" || phone == null) {
            phones.innerHTML = "<span style='color: red'>手机号不能为空！</span>";
            return false;
        }
        if (!(/^1[3|4|5|7|8]\d{9}$/.test(phone))) {
            phones.innerHTML = "<span style='color: red'>手机号格式不对！</span>";
            return false;
        }
        phones.innerHTML = "<span style='color: green'>手机号可以使用！</span>";
        return true;
    }
    /**邮箱验证**/
    function check_email() {
        var email = $("input[name=email]").val();
        var emails = document.getElementById("email");
        if (email == "" || email == null) {
            emails.innerHTML = "<span style='color: red'>邮箱不能为空！</span>";
            return false;
        }
        if (!isEmail(email)) {
            emails.innerHTML = "<span style='color: red'>邮箱格式不对！</span>";
            return false;
        }
        emails.innerHTML = "<span style='color: green'>邮箱可以使用！</span>";
        return true;
    }
    /**邮箱规则**/
    function isEmail(str) {
        var reg = /[a-z0-9-]{1,30}@[a-z0-9-]{1,65}.[a-z]{3}/;
        return reg.test(str);
    }
</script>