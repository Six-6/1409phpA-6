<div class="top1">
  @if(empty(Session::get('name')))
    <div class="conter"><span>欢迎访问 <a href="#">惠玩旅行社官网</a></span>　请
    <span id="_Check_head_Login">
    <span><a href="{{URL('blo')}}" target="_blank">登录</a></span>
    <span>|</span>
    <span><a href="{{URL('register')}}" target="_blank" id="">注册</a></span>
    @else
  <div class="conter"><span>欢迎光临 <a href="#">惠玩旅行社官网</a></span>　
  <span id="_Check_head_Login">
        <span><a href="{{URL('home/personAdd')}}" target="_blank">{{Session::get('name')}}</a></span>
    <span>|</span>
    <span><a href="{{URL('home/userhome')}}" target="_blank" id="{{Session::get('u_id')}}">用户中心</a></span>
    <span>|</span>
    <span><a href="{{URL('home/personDel')}}" target="_blank" >退出</a></span>
    @endif
</span><script language="javascript">Check_head_Login();</script>
     <div class="hour"><img src="../home/homepage/pic1.jpg" height="19" width="46"></div>
     <div class="iph">旅游预订电话 <strong>18513975642</strong></div>
</div>
</div>
<div class="top2">
	<div class="conter">
    <div class="logo"><img src="../home/homepage/logo.png" height="54" width="329"><img src="../home/homepage/tage.png" height="50" width="116"></div>
    <div class="sourchNew" style="float:right"> 
      <form method="POST" action="{{URL('home/searchs')}}">
        <div class="select_text" style="background-color:greep;">
        <input placeholder="请输入关键字！" name="sous" style="height:35px;background-color:White;" type="text">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" style="height:35px;background-color:greep;" value="查询">
        </div>
        </form>
  </div>
  </div>  
  
    </div>
</div>



<div class="dh">
  <div class="conter">
      <div class="a1"><a href="javascript:void(0)">所有目的地分类</a></div>
      <div class="a2">
      <a href="{{URL('/')}}">首页</a>
      <a href="">北京游</a>
      <a href="">出境游</a>
      <a href="">国内游</a>
      </div>
      <div class="a3"><div style="position: absolute; left: 24px; top: 1px;"><img src="../home/homepage/HOT.png"></div>
        <a href="http://www.byts.com.cn/add/tejia.php">特价</a>
        <a href="http://www.byts.com.cn/visa/">签证</a>   
        <a href="http://www.byts.com.cn/zuche/bj/">租车</a>
        <a href="http://www.byts.com.cn/add/dingzhi.php">定制</a> 
        
      </div>
        <div class="clear"></div>


<script type="text/javascript">
function hover(n){
  for(var i=1;i<10;i++){
    $("#show"+n).css("display","none");
    }
  
  $("#show"+n).css("display","block");
  
  }
function mousout(n){
    $("#show"+n).css("display","none");
  }

</script>
       
        
        
  </div>
</div>