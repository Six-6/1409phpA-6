<?php
$name=Session::get("name");
$u_id=Session::get("u_id");
?>

<style type="text/css">
    .left1{float:right;}
</style>

<div class="top1">

    @if(empty($name))
        <div class="conter"><span>欢迎访问 <a href="{{URL('/')}}">惠玩旅行社官网</a></span>　请
    <span id="_Check_head_Login">

    <span><a href="{{URL('blo')}}">登录</a></span>
    <span>|</span>

    <span><a href="{{URL('register')}}" id="">注册</a></span>
        @else
            <div class="conter"><span>欢迎光临 <a href="{{URL('/')}}">惠玩旅行社官网</a></span>　
  <span id="_Check_head_Login">

        <span><a href="{{URL('home/userhome')}}" >{{$name}}</a></span>
    <span>|</span>
    <span><a href="{{URL('home/userhome')}}" target="_blank" id="{{Session::get('u_id')}}">用户中心</a></span>
    <span>|</span>

    <span><a href="{{URL('home/personDel')}}" >退出</a></span>
      @endif
</span><script language="javascript">Check_head_Login();</script>
                <span class="left1"><img src="../home/homepage/pic1.jpg" height="16" width="46">{{--</span>
                <span>--}}旅游预订电话 <strong>18513975642</strong></span>
            </div>
        </div>
</div>