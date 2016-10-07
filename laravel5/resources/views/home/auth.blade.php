<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/top.css">
<title>风向标</title>
<meta content="2016旅游风向标,途牛风向标,途牛旅游网" name="keywords">
<meta content="途牛旅游网提供当季玩什么?国外旅游景点介绍,中国国内及国外旅游景点大全、旅游景点指南、景点图片,热门旅游景点排行榜等信息;哪好玩？哪便宜？尽在途牛风向标top.tuniu.com" name="description">
<link href="../css/reset.css" rel="stylesheet" type="text/css">
<script src="../js/ga.js" async="" type="text/javascript"></script><script src="../js/jquery-1.js" type="text/javascript"></script>
<script src="../js/base64.js" type="text/javascript"></script>
<link href="../css/mask.css" rel="stylesheet" type="text/css"><link id="rightCommonCss" rel="stylesheet" type="text/css" href="../css/right_common.css"></head>
<body>
<script type="text/javascript" src="../js/in-min.js"></script>
<script type="text/javascript" src="../js/header_v2.js"></script><script type="text/javascript" src="../js/getDegree.js"></script><script type="text/javascript" src="../js/screen_size.js"></script><link rel="stylesheet" href="../css/index_nav_menu.css"><link rel="stylesheet" type="text/css" href="../css/TN_date.css"><script type="text/javascript" src="../js/search_ajax.js"></script><link href="../css/head_nav_new.css" rel="stylesheet" type="text/css">
<script type="text/javascript">function selectTag(showContent,selfObj){ var tag = document.getElementById("tags").getElementsByTagName("li"); var taglength = tag.length; for(i=0; i<taglength; i++){ tag[i].className = ""; } selfObj.parentNode.className = "selectTag"; for(i=1; j=document.getElementById("tagContent"+i); i++){ j.style.display = "none"; } document.getElementById(showContent).style.display = "block";}var startCity = document.getElementById("startCity");if(startCity){ startCity.onmouseover = function(){ startCity.className = "head_start_city change_tab"; }; startCity.onmouseout = function(){ startCity.className = "head_start_city"; };}function getCookie(objName){ var arrStr = document.cookie.split("; "); for(var i = 0;i < arrStr.length;i ++){ var temp = arrStr[i].split("="); if(temp[0] == objName) return unescape(temp[1]); } return false;}var tuniuPPhoneDiv = document.getElementById("tuniu_400_num_phone");var tuniuPPhoneNumber = getCookie("p_phone_400");if (tuniuPPhoneDiv) { if (tuniuPPhoneNumber) { tuniuPPhoneDiv.innerHTML = tuniuPPhoneNumber; } else { tuniuPPhoneDiv.innerHTML = "4007-999-999"; }}$(function($) { var sub = $("#keyword-input-sub").val(); if(sub && sub != ''){ $("#keyword-input").val(sub); }});</script><!-- 页面类型 -->
<input name="page_type" id="page_type" value="130000" type="hidden">

<div class="top_area">
            <div class="wrap clearfix" style="background:#fff;">
                @include('includes.rankLogin')
            </div>
        </div> <!--start 面包屑和目的地导航 -->


<div class="wrapmain">
		<div class="nav-ind">
			<div class="navbar">
				<div class="indlogo"></div>
				<a href="{{URL('home/siterecommend')}}" class="indsep selected" id="shouye"><div class="shouye">首页</div></a>

                <a href="{{URL('home/ranking')}}" class="indsep" id="list"><div class="list">排行榜</div></a>
                                
				
				<a href="{{URL('home/themes')}}" class="indsep" id="theme"><div class="theme">主题推荐</div></a>
				
			</div>
		</div>
<!-- body-->
 <link rel="stylesheet" href="../css/gonglue_channel.css">
  <link rel="stylesheet" href="../css/jquery.css">
   <link rel="stylesheet" href="../css/indicator.css">
    <link rel="stylesheet" href="../css/floatnav.css">
    
<div class="note-wrap clearfix">
    <div class="note-index clearfix">
        <!-- 当季玩什么 -->
            <div class="galleryblock pwhat" id="p_what">
    <div class="notes-title maintitle"><h1>当季玩什么</h1></div>
@foreach($data['carousel'] as $error1)
<div class="slide-card">
    <a href="{{URL('home/scenicDetails')}}?ssid={{$error1 -> s_id}}"  rel="nofollow">
        <img style="display: inline;"  src="{{$error1 -> s_image}}" alt="{{$error1 -> s_name}}" height="260" width="200">
        <div class="pwhat-bg"></div>
        <div class="pwhat-detail">
            <p class="pwhat-title">{{$error1 -> s_name}}</p>
            <p class="pwhat-text phide"></p>
        </div>
    </a>
</div>
@endforeach
</div>




        <!--  当季玩什么end -->
        <!-- 我玩我风格 -->
                    <div class="galleryblock pstyle" id="p_style">
<div class="notes-title maintitle"><h1>我玩我风格</h1></div>
<div class="content">
<div class="block style-line clearfix" id="block_t1_s1">
<div class="wall-photo wall-one">
    <p class="wall-name">权威控</p>
    <div class="wall-name none top"><p class="subtitle">权威控</p></div>
    <div class="wall-reason">
        <p class="reason1">誓要玩遍经典景点</p>
        <p class="reason2">砖家推荐永远都是对的</p>
        <p class="reason3">刷着榜单走世界</p>
    </div>
    <div class="wall-intro intro-one">当别人还在研究世界必去的100个地方时，他们会说“我去过了”</div>
</div>
<div class="product-one" >
        @if(!empty($data['authority']))
    		@foreach($data['authority'] as $error2)
            <div class="product-list">
                <a href="{{URL('home/details')}}?sid={{$error2 -> tt_id}}"><img style="display: inline;" src="{{$error2 -> t_img}}" alt="{{$error2 -> t_title}}" height="140" width="250"></a>
                            <div class="product-title">
                    <a href="{{URL('home/details')}}?sid={{$error2 -> tt_id}}" >{{$error2 -> t_title}}</a>
                </div>
                <a class="product-title-bg" href="http://top.tuniu.com/topic/d106" ></a>
            </div>
            @endforeach      
                    <div class="product-list">
                <img style="display: inline;" data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more1.jpg" src="../image/more1.jpg" alt="更多精彩" height="140" width="250">
                <a  href="{{URL('home/themes')}}" class="product-more indexicon">更多精彩</a>
                <a style="overflow: hidden; height: 0px;" class="product-bg" href="http://top.tuniu.com/topic/" ></a>
            </div>
        @else
      
            <center>
                <img src="../image/zuiqiang.jpg"></br>
                <p style="font-size:20px;color:#87cefa">此地暂无权威 是否要<a id="zhanling" href="{{URL('home/publishs')}}">占领</a>他</p></br>
                <p style="font-size:15px;color:#87cefa">写游记赢大奖，大量<a href="{{URL('home/exchangeShow')}}">积分</a>等你拿</p>
            </center>
          
        @endif
    </div>
    </div>



                    <div class="block style-line clearfix" id="block_t1_s2">
<div class="wall-photo wall-two">
<p class="wall-name">尝鲜人</p>
<div class="wall-name none top"><p class="subtitle">尝鲜人</p></div>
    <div class="wall-reason">
        <p class="reason1">热衷各类新鲜玩法</p>
        <p class="reason2">新景点一网打尽</p>
        <p class="reason3">跟着潮流去旅游</p>
    </div>
    <div class="wall-intro intro-two">最新的潮店最热的景点，他们永远最先到达。</div>
</div>
<div class="product-one">
		@foreach($data['fresh'] as $error3)
        <div class="product-list">
            <a href="{{URL('home/details')}}?sid={{$error3 -> tt_id}}" ><img style="display: inline;"  src="{{$error3 -> t_img}}" alt="{{$error3 -> t_title}} " height="140" width="250"></a>
                        <div class="product-title">
                <a href="{{URL('home/details')}}?sid={{$error3 -> tt_id}}" >{{$error3 -> t_title}} </a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d323" ></a>
        </div>
        @endforeach
                <div class="product-list">
            <img data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more2.jpg" src="../image/more2.jpg" alt="更多精彩" height="140" width="250">
            <a  href="{{URL('home/freshs')}}" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/?cate=36" ></a>
        </div>
    </div>
    </div>
    



                    <div class="block style-line clearfix" id="block_t1_s3">
<div class="wall-photo wall-three">
    <p class="wall-name">快门控</p>
    <div class="wall-name none top"><p class="subtitle">快门控</p></div>
    <div class="wall-reason">
        <p class="reason1">出游第一考量是成片效果</p>
        <p class="reason2">单反手机自拍神器三位一体</p>
        <p class="reason3">自带高X格</p>
    </div>
    <div class="wall-intro intro-three">远可扛单反，近可玩自拍，别人旅行靠走，他们旅行靠拍</div>
</div>
<div class="product-one">
        @foreach($data['shutter'] as $error4)
        <div class="product-list">
            <a href="{{URL('home/details')}}?sid={{$error4 -> tt_id}}" ><img style="display: inline;"  src="{{$error4 -> t_img}}" alt="{{$error4 -> t_title}} " height="140" width="250"></a>
                        <div class="product-title">
                <a href="{{URL('home/details')}}?sid={{$error4 -> tt_id}}" >{{$error4 -> t_title}} </a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d323" ></a>
        </div>
        @endforeach
                
                <div class="product-list">
            <img data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more3.jpg" src="../image/more3.jpg" alt="更多精彩" height="140" width="250">
            <a  href="{{URL('home/shutter')}}" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/?cate=41" ></a>
        </div>
    </div>
    </div>
    



                    <div class="block style-line clearfix" id="block_t1_s4">
<div class="wall-photo wall-four">
    <p class="wall-name">美食家</p>
    <div class="wall-name none top"><p class="subtitle">美食家</p></div>
    <div class="wall-reason">
        <p class="reason1">宁可跑断腿，不能委屈胃</p>
        <p class="reason2">把“食物”叫做“好吃的”</p>
        <p class="reason3">提到一个城市必想到当地美食</p>
    </div>
    <div class="wall-intro intro-four">吃货的世界，你们这些凡人是不会明白的。</div>
</div>
<div class="product-one">
        @foreach($data['cate'] as $error5)
        <div class="product-list">
            <a href="{{URL('home/details')}}?sid={{$error5 -> tt_id}}" ><img style="display: inline;"  src="{{$error5 -> t_img}}" alt="{{$error5 -> t_title}} " height="140" width="250"></a>
                        <div class="product-title">
                <a href="{{URL('home/details')}}?sid={{$error5 -> tt_id}}" >{{$error5 -> t_title}} </a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d323" ></a>
        </div>
        @endforeach
                
                <div class="product-list">
            <img data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more4.jpg" src="../image/more4.jpg" alt="更多精彩" height="140" width="250">
            <a  href="{{URL('home/cate')}}" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/?cate=38" ></a>
        </div>
    </div>
    </div>
    



                    <div class="block style-line clearfix" id="block_t1_s5">
<div class="wall-photo wall-five">
    <p class="wall-name">购物狂</p>
    <div class="wall-name none top"><p class="subtitle">购物狂</p></div>
    <div class="wall-reason">
        <p class="reason1">熟稔每个城市的Outlets</p>
        <p class="reason2">机场最好买免税品张口就来</p>
        <p class="reason3">朋友口中的省钱达人</p>
    </div>
    <div class="wall-intro intro-five">最好最实惠的东东，问他们就对啦！</div>
</div>
<div class="product-one">
        @foreach($data['shopping'] as $error6)
        <div class="product-list">
            <a href="{{URL('home/details')}}?sid={{$error6 -> tt_id}}" ><img style="display: inline;"  src="{{$error6 -> t_img}}" alt="{{$error6 -> t_title}} " height="140" width="250"></a>
                        <div class="product-title">
                <a href="{{URL('home/details')}}?sid={{$error6 -> tt_id}}" >{{$error6 -> t_title}} </a>
            </div>
            <a class="product-title-bg" href="{{URL('home/details')}}?sid={{$error6 -> tt_id}}" ></a>
        </div>
        @endforeach
                
                <div class="product-list">
            <img data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more5.jpg" src="../image/more5.jpg" alt="更多精彩" height="140" width="250">
            <a  href="{{URL('home/shopping')}}" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/?cate=39" ></a>
        </div>
    </div>
    </div>
    



                    <div class="block style-line clearfix" id="block_t1_s6">
<div class="wall-photo wall-six">
    <p class="wall-name">文艺咖</p>
    <div class="wall-name none top"><p class="subtitle">文艺咖</p></div>
    <div class="wall-reason">
        <p class="reason1">小众冷门玩法发明者</p>
        <p class="reason2">爱好电影音乐书籍和旅行</p>
        <p class="reason3">一个人旅行才是正经事</p>
    </div>
    <div class="wall-intro intro-six">小清新，小文艺，小复古，不随大流的孤独旅行家就是你你你。</div>
</div>
<div class="product-one">
        @foreach($data['literature'] as $error7)
        <div class="product-list">
            <a href="{{URL('home/details')}}?sid={{$error7 -> tt_id}}" ><img style="display: inline;"  src="{{$error7 -> t_img}}" alt="{{$error7 -> t_title}} " height="140" width="250"></a>
                        <div class="product-title">
                <a href="{{URL('home/details')}}?sid={{$error7 -> tt_id}}" >{{$error7 -> t_title}} </a>
            </div>
            <a class="product-title-bg" href="{{URL('home/details')}}?sid={{$error7 -> tt_id}}" ></a>
        </div>
        @endforeach
                
                <div class="product-list">
            <img data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more6.jpg" src="../image/more6.jpg" alt="更多精彩" height="140" width="250">
            <a href="{{URL('home/literature')}}" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/" ></a>
        </div>
    </div>
    </div>
    



        <!-- 我玩我风格end -->
        <!-- 月度出游精选 -->
            <input id="monthNow" value="09" type="hidden">
     <div class="galleryblock pstyle" id="p_mouth">
            <div class="maintitle none">月度出游精选</div>
            <div class="notes-title">
                <h1>月度出游精选</h1>

            </div>
            <div class="mouth-list">
@foreach ($data['month'] as $error8)			
<div class="mouth-card" name="301">
    <a href="{{URL('home/pushClass')}}?jsid={{$error8 -> r_id}}"><img src="{{$error8 -> m_img}}" alt="" height="216" width="192"></a>
    <a class="mouth-bag indexicon" href="{{URL('home/pushClass')}}?jsid={{$error8 -> r_id}}" >
	{{$error8 -> m_name}}    <div class="mouth-detail">
                </div>
    </a>
    <a class="mouth-bg" href="{{URL('home/pushClass')}}?jsid={{$error8 -> r_id}}" ></a>
</div>
@endforeach
    </div>
</div>




        <!-- 月度出游精选end -->
                




    </div>
</div>

<div id="floatnav" class="clearfix" style="top: 162.5px; left: 236.5px; opacity: 1;">
    <ul class="floatnav-list floatnav-view fl floatnavhidden">
    
       <div class="floatnav-list-item">
       <a href="#p_what" class="floatnavlink highlight">当季玩什么</a>
       <div class="floatnav-sublist">
       
       </div>
       </div>
       
       <div class="floatnav-list-item">
       <a href="#p_style" class="floatnavlink longtitle">我玩我风格月度出游精选探索世界</a>
       <div class="floatnav-sublist none">
       
           <div class="floatnav-sublist-item"><a href="#block_t1_s1" class="floatnavlink">权威控</a></div>
           
           <div class="floatnav-sublist-item"><a href="#block_t1_s2" class="floatnavlink">尝鲜人</a></div>
           
           <div class="floatnav-sublist-item"><a href="#block_t1_s3" class="floatnavlink">快门控</a></div>
           
           <div class="floatnav-sublist-item"><a href="#block_t1_s4" class="floatnavlink">美食家</a></div>
           
           <div class="floatnav-sublist-item"><a href="#block_t1_s5" class="floatnavlink">购物狂</a></div>
           
           <div class="floatnav-sublist-item"><a href="#block_t1_s6" class="floatnavlink">文艺咖</a></div>
           
       </div>
       </div>
       
       <div class="floatnav-list-item">
       <a href="#p_mouth" class="floatnavlink">月度出游精选</a>
       <div class="floatnav-sublist none">
       
       </div>
       </div>
       
       <div class="floatnav-list-item">
       <a href="#p_discovery" class="floatnavlink">探索世界</a>
       <div class="floatnav-sublist none">
       
       </div>
       </div>
       
    <div class="floatnav-list-totopitem">
    <a href="#" class="floatnavtotoplink"><span class="floatnavicon ibk"></span>返回顶部</a>
    </div>
</ul>
    
</div>
<script type="text/tmpl" id="floatnav-list-tmpl">
    <%_.each(nav_items, function(nav_item) {%>
       <div class="floatnav-list-item">
       <a href="#<%=nav_item.anchor%>" class="floatnavlink<%=nav_item.bLongTitle ? ' longtitle' : ''%>"><%=nav_item.title%></a>
       <div class="floatnav-sublist none">
       <%_.each(nav_item.children, function(child) {%>
           <div class="floatnav-sublist-item"><a href="#<%=child.anchor%>" class="floatnavlink"><%=child.title%></a></div>
           <%});%>
       </div>
       </div>
       <%});%>
    <div class="floatnav-list-totopitem">
    <a href="#" class="floatnavtotoplink"><span class="floatnavicon ibk"></span>返回顶部</a>
    </div>
</script>
<script type="text/javascript" charset="utf-8" src="../js/underscore-min.js"></script>
<script type="text/javascript" charset="utf-8" src="../js/jquery.js"></script>
<script type="text/javascript" charset="utf-8" src="../js/jquery_002.js"></script>
<script type="text/javascript" charset="utf-8" src="../js/floatnav.js"></script>
<script type="text/javascript" charset="utf-8" src="../js/floatnav-init.js"></script>
<script type="text/javascript" charset="utf-8" src="../js/noteIndex.js"></script>
<script type="text/javascript">
$().ready(function(){
	var obj = ["301","302","303","304","305","306","307","308","309","310","311","312"];
	$.each(obj,function(i,value){
		$("div[name='"+value+"']").hide();
	});
	var monthNow = $("#monthNow").attr('value');
  	$("div[name='"+"3"+monthNow+"']").show();
  	var mon = monthNow-1;
  	$(".mouth-page a:eq("+mon+")").addClass('mouth-select indexicon');
  	$(".mouth-no").click(function(){
  		$.each(obj,function(i,value){
  			$("div[name='"+value+"']").hide();
  		});
  	 	$("div[name='"+"3"+$(this).attr('monthId')+"']").show();
  		$(".mouth-page a").removeClass('mouth-select indexicon');
  		$(this).addClass('mouth-select indexicon');
  	});
})
</script></div>
<!--start foot-->
<!-- siteMap S -->
<link rel="stylesheet" type="text/css" href="../css/common_foot_v3.css"> <div class="trav_sev">
       
<div class="three_trav">
    <div class="thr_trav">
        <a href="http://www.tuniu.com/static/sunshine_ensure/"  style="display:block;width:100%;height:100%;">
            <em class="tn_text" id="service_phone_head_text">客户服务电话（免长途费）</em>
            <em class="tn_phone" id="service_phone_head_phone">4007-999-999</em>
        </a>
    </div>
</div>
</body></html>