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

    <!--start 面包屑和目的地导航 -->
        <div class="top_area">
            <div class="wrap clearfix" style="background:#fff;">
                <div class="crumbs fl">
                    <a href="http://go.tuniu.com/" class="word" rel="nofollow">攻略首页</a>

                    <a href="http://trips.tuniu.com/" target="_blank" rel="nofollow" class="word">游记</a>
                    <a href="http://www.tuniu.com/way/" target="_blank" rel="nofollow" class="word">达人玩法</a>
                    <a href="http://top.tuniu.com/" rel="nofollow" class="word cur">途牛风向标</a>
                    <a href="http://www.tuniu.com/traveler" target="_blank" rel="nofollow" class="word">旅游达人</a>
                    <a href="http://ask.tuniu.com/" target="_blank" rel="nofollow" class="word">攻略问答</a>
                </div>
                <div class="f_youji fr">
                    <a class="report" href="http://www.tuniu.com/trips/write/">发表游记</a>
                                    </div>
            </div>
        </div>

<div class="wrapmain">
		<div class="nav-ind">
			<div class="navbar">
				<div class="indlogo"></div>
				<a href="http://top.tuniu.com/" class="indsep selected" id="shouye"><div class="shouye">首页</div></a>

                                                                  <a href="http://top.tuniu.com/line/" class="indsep" id="list"><div class="list">排行榜</div></a>
                                
				<a href="http://top.tuniu.com/trend/" class="indsep" id="trend">
                                    <div class="trend">出游趋势</div></a>
				<a href="http://top.tuniu.com/topic/" class="indsep" id="theme"><div class="theme">主题推荐</div></a>
				<a href="http://top.tuniu.com/notes/" class="indsep" id="intour">
                    <p class="inactive"></p>
                    <div class="intour">人在旅途</div></a>
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
    <a href="http://top.tuniu.com/topic/d1277" target="_blank" rel="nofollow">
        <img style="display: inline;" data-src="http://m.tuniucdn.com/fb2/t1/G2/M00/5A/31/Cii-TFfNM8OIamBpAAFpuEtHBVgAACE0QIJAPAAAWnQ412_w800_h0_c0_t0.jpg" src="{{$error1 -> s_image}}" alt="{{$error1 -> s_name}}" height="260" width="200">
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
<div class="product-one">
		@foreach($data['authority'] as $error2)
        <div class="product-list">
            <a href="" target="_blank"><img style="display: inline;" data-src="http://m.tuniucdn.com/fb2/t1/G2/M00/5A/22/Cii-T1fNLN6IPVK2AACmtBPUDQMAACEvgGCwaEAAKbM623_w800_h0_c0_t0.jpg" src="{{$error2 -> t_img}}" alt="{{$error2 -> t_title}}" height="140" width="250"></a>
                        <div class="product-title">
                <a href="http://top.tuniu.com/topic/d106" target="_blank">{{$error2 -> t_title}}</a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d106" target="_blank"></a>
        </div>
        @endforeach      
                <div class="product-list">
            <img style="display: inline;" data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more1.jpg" src="../image/more1.jpg" alt="更多精彩" height="140" width="250">
            <a target="_blank" href="http://top.tuniu.com/topic/" class="product-more indexicon">更多精彩</a>
            <a style="overflow: hidden; height: 0px;" class="product-bg" href="http://top.tuniu.com/topic/" target="_blank"></a>
        </div>
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
            <a href="" target="_blank"><img style="display: inline;" data-src="http://m.tuniucdn.com/fb2/t1/G2/M00/5A/27/Cii-TFfNLyeIVvN1AACpgUJvo0YAACExQMevh8AAKmZ020_w800_h0_c0_t0.jpg" src="{{$error3 -> t_img}}" alt="{{$error3 -> t_title}} " height="140" width="250"></a>
                        <div class="product-title">
                <a href="http://top.tuniu.com/topic/d323" target="_blank">{{$error3 -> t_title}} </a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d323" target="_blank"></a>
        </div>
        @endforeach
                <div class="product-list">
            <img data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more2.jpg" src="../image/more2.jpg" alt="更多精彩" height="140" width="250">
            <a target="_blank" href="http://top.tuniu.com/topic/?cate=36" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/?cate=36" target="_blank"></a>
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
            <a href="" target="_blank"><img style="display: inline;" data-src="http://m.tuniucdn.com/fb2/t1/G2/M00/5A/27/Cii-TFfNLyeIVvN1AACpgUJvo0YAACExQMevh8AAKmZ020_w800_h0_c0_t0.jpg" src="{{$error4 -> t_img}}" alt="{{$error4 -> t_title}} " height="140" width="250"></a>
                        <div class="product-title">
                <a href="http://top.tuniu.com/topic/d323" target="_blank">{{$error4 -> t_title}} </a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d323" target="_blank"></a>
        </div>
        @endforeach
                
                <div class="product-list">
            <img data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more3.jpg" src="../image/more3.jpg" alt="更多精彩" height="140" width="250">
            <a target="_blank" href="http://top.tuniu.com/topic/?cate=41" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/?cate=41" target="_blank"></a>
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
            <a href="" target="_blank"><img style="display: inline;" data-src="http://m.tuniucdn.com/fb2/t1/G2/M00/5A/27/Cii-TFfNLyeIVvN1AACpgUJvo0YAACExQMevh8AAKmZ020_w800_h0_c0_t0.jpg" src="{{$error5 -> t_img}}" alt="{{$error5 -> t_title}} " height="140" width="250"></a>
                        <div class="product-title">
                <a href="http://top.tuniu.com/topic/d323" target="_blank">{{$error5 -> t_title}} </a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d323" target="_blank"></a>
        </div>
        @endforeach
                
                <div class="product-list">
            <img data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more4.jpg" src="../image/more4.jpg" alt="更多精彩" height="140" width="250">
            <a target="_blank" href="http://top.tuniu.com/topic/?cate=38" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/?cate=38" target="_blank"></a>
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
            <a href="" target="_blank"><img style="display: inline;" data-src="http://m.tuniucdn.com/fb2/t1/G2/M00/5A/27/Cii-TFfNLyeIVvN1AACpgUJvo0YAACExQMevh8AAKmZ020_w800_h0_c0_t0.jpg" src="{{$error6 -> t_img}}" alt="{{$error6 -> t_title}} " height="140" width="250"></a>
                        <div class="product-title">
                <a href="http://top.tuniu.com/topic/d323" target="_blank">{{$error6 -> t_title}} </a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d323" target="_blank"></a>
        </div>
        @endforeach
                
                <div class="product-list">
            <img data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more5.jpg" src="../image/more5.jpg" alt="更多精彩" height="140" width="250">
            <a target="_blank" href="http://top.tuniu.com/topic/?cate=39" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/?cate=39" target="_blank"></a>
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
            <a href="" target="_blank"><img style="display: inline;" data-src="http://m.tuniucdn.com/fb2/t1/G2/M00/5A/27/Cii-TFfNLyeIVvN1AACpgUJvo0YAACExQMevh8AAKmZ020_w800_h0_c0_t0.jpg" src="{{$error7 -> t_img}}" alt="{{$error7 -> t_title}} " height="140" width="250"></a>
                        <div class="product-title">
                <a href="http://top.tuniu.com/topic/d323" target="_blank">{{$error7 -> t_title}} </a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d323" target="_blank"></a>
        </div>
        @endforeach
                
                <div class="product-list">
            <img data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more6.jpg" src="../image/more6.jpg" alt="更多精彩" height="140" width="250">
            <a target="_blank" href="http://top.tuniu.com/topic/" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/" target="_blank"></a>
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
    <img data-src="http://m.tuniucdn.com/filebroker/cdn/snc/9e/24/9e2493c550f94737126e23e01b64c7ac_w800_h0_c0_t0.jpg" src="{{$error8 -> m_img}}" alt="" height="216" width="192">
    <a class="mouth-bag indexicon" href="http://www.tuniu.com/g900/guide-0-0/" target="_blank">
	{{$error8 -> m_name}}    <div class="mouth-detail">
                </div>
    </a>
    <a class="mouth-bg" href="http://www.tuniu.com/g900/guide-0-0/" target="_blank"></a>
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
        <ul class="ts_box clearfix">
            <li class="trav_l_first">
                <i class="ts_1"></i>
                <dl class="trav_l ">
                    <dt class="tl_tt"><a>去旅游</a></dt>
                    <dd class="tl_w">
                        <p>
                            <a href="http://www.tuniu.com/tours/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-1']);">跟团游</a>
                            <a href="http://www.tuniu.com/pkg/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-2']);">自助游</a>
                            <a href="http://www.tuniu.com/drive/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-3']);">自驾游</a>
                            
                        </p>
                        <p>
                            <a href="http://www.tuniu.com/theme/haidao/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-4']);">海岛游</a>
                            <a href="http://www.tuniu.com/flight/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-5']);">机票</a>
                            <a href="http://youlun.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-6']);">邮轮</a>
                        </p>
                        <p>
                            <a href="http://menpiao.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-7']);">门票</a>
                            <a href="http://www.tuniu.com/theme/qinzi/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-8']);">亲子游</a>
                            <a href="http://www.tuniu.com/visa/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-9']);">签证</a>
                        </p>
                        <p>
                            <a href="http://super.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-10']);">机票+酒店</a>
                            <a href="http://www.tuniu.com/theme/miyue/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-11']);">蜜月游</a>
                            <a href="http://hotel.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-12']);">酒店</a>
                        </p>
                        <p>
                            <a href="http://temai.tuniu.com/laoyutuijian" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-13']);">老于推荐</a>
                            <a href="http://www.tuniu.com/gongsi/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-14']);">公司旅游</a>
                            <a href="http://www.tuniu.com/niuren/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-15']);">牛人专线</a>
                        </p>
                        <p>
                            <a href="http://www.tuniu.com/zt/sfcf/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-16']);">首付出发</a>
                            <a href="http://www.tuniu.com/local/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-17']);">当地玩乐</a>
                            <a href="http://www.tuniu.com/zt/love/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_1','1-18']);">旅拍</a>
                        </p>
                    </dd>
                </dl>
            </li>
            <li>
                <i class="ts_2"></i>
                <dl class="trav_l ">
                    <dt class="tl_tt"><a>寻优惠</a></dt>
                    <dd class="tl_w">
                        <p><a href="http://temai.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_2','2-1']);">特卖</a></p>
                        <p><a href="http://hotel.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_2','2-2']);">订酒店 返现金</a></p>
                        <p><a href="http://1.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_2','2-4']);">一元夺宝</a></p>
                        <p><a href="http://www.tuniu.com/bank/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_2','2-5']);">银行特惠游</a></p>
                        <p><a href="http://www.tuniu.com/gt/guangfacxqq" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_2','2-6']);">银行分期游</a></p>
                    </dd>
                </dl>
            </li>
            <li>
                <i class="ts_3"></i>
                <dl class="trav_l ">
                    <dt class="tl_tt"><a>看攻略</a></dt>
                    <dd class="tl_w">
                        <p><a href="http://go.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_3','3-1']);">攻略</a></p>
                        <p><a href="http://top.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_3','3-2']);">途牛风向标</a></p>
                        <p><a href="http://trips.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_3','3-3']);">游记</a></p>
                        <p><a href="http://www.tuniu.com/way/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_3','3-4']);">达人玩法</a></p>
                    </dd>
                </dl>
            </li>
            <li>
                <i class="ts_4"></i>
                <dl class="trav_l ">
                    <dt class="tl_tt"><a>查服务</a></dt>
                    <dd class="tl_w tl_cont">
                        <p>
                            <a href="http://www.tuniu.com/help/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_4','4-1']);">帮助中心</a>
                            
                        </p>
                        <p>
                            <a href="http://www.tuniu.com/u/club" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_4','4-3']);">积分俱乐部</a>
                            
                        </p>
                        <p>
                            <a href="http://www.tuniu.com/static/sunshine_ensure/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_4','4-5']);">阳光保障</a>
                        </p>
                        <p><a href="http://train.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_4','4-2']);">火车时刻表</a></p>
                        <p><a href="http://metro.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','tydb_wzdt_4','4-6']);">地铁路线图</a></p>
                    </dd>
                </dl>
            </li>
            <li class="trav_l_last">
                <i class="ts_5"></i>
                <dl class="trav_l ">
                    <dt class="tl_tt"><a>途牛APP</a></dt>
                    <dd class="tl_w tl_cont">
                        <p>
                            <a>扫描下载途牛APP</a>
                        </p>
                        <p>
                            <img src="../image/Cii9EFZw-n2IdcknAAAWy1znY7MAABCTQG1hlYAABbj820.jpg">
                        </p>
                    </dd>
                </dl>
        </li></ul>
    </div><!-- siteMap E -->
<!-- three sun S -->
<div class="three_trav">
    <div class="thr_trav">
        <a href="http://www.tuniu.com/static/sunshine_ensure/" target="_blank" style="display:block;width:100%;height:100%;">
            <em class="tn_text" id="service_phone_head_text">客户服务电话（免长途费）</em>
            <em class="tn_phone" id="service_phone_head_phone">4007-999-999</em>
        </a>
    </div>
</div>
<!-- three sun E -->
<!-- four_ad S -->
<!-- four_ad S -->
    <div class="fourImgs">
        <ul class="clearfix">
                        <li>
                <a href="http://1.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','点击','底部广告图_1_一元夺宝']);">
                    <img src="../image/tn_footer_01.jpg" alt="一元夺宝" height="58" width="238">
                </a>
            </li>
                        <li>
                <a href="http://www.tuniu.com/zt/brand/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','点击','底部广告图_2_品牌合作']);">
                    <img src="../image/tn_footer_042.jpg" alt="品牌合作" height="58" width="238">
                </a>
            </li>
                        <li>
                <a href="http://temai.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','点击','底部广告图_3_超值特卖-底部']);">
                    <img src="../image/tn_footer_06.jpg" alt="超值特卖-底部" height="58" width="238">
                </a>
            </li>
                        <li>
                <a href="http://super.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','点击','底部广告图_4_超级自由行']);">
                    <img src="../image/Cii9EFaWDQ2IFdVUAAAaUoTPAnAAABcxwP_x9YAABpq60.jpg" alt="超级自由行" height="58" width="238">
                </a>
            </li>
                    </ul>
    </div>
    <!-- four_ad E -->
    <!-- img_place S -->
    <div class="img_place">
        <a href="http://www.tuniu.com/niuren/" rel="nofollow" target="_blank" style="display: block;" onclick="_gaq.push(['_trackEvent','common_bj','点击','底部广告图_5_牛人专线']);">
            <img src="../image/tn_footer_05l_007.jpg" alt="牛人专线" height="58" width="988">
        </a>
    </div>
    <!-- img_place E -->
<!-- four_ad E -->

<!--start foot-->
<div id="TN-footer" class="tn_footer datalazyload" data-lazyload-type="data" data-lazyload-from="textarea">
        <p id="TN-24">途牛客服中心位于南京市 来电显示为 025-86859999 或 025-85080000</p>
    <p>北京途牛国际旅行社有限公司，旅行社业务经营许可证编号：L-BJ-CJ00144　　上海途牛国际旅行社有限公司，旅行社业务经营许可证编号：L-SH-CJ00107
    </p>
    <p id="TN-links">
        <a href="http://www.tuniu.com/corp/aboutus.shtml" target="_blank" rel="nofollow">关于我们</a>
        <a $nofollow="" href="http://ir.tuniu.com/" target="_blank">Investor Relations</a>
        <a href="http://www.tuniu.com/corp/contactus.shtml" target="_blank" rel="nofollow">联系我们</a>
        <a href="http://www.tuniu.com/corp/advise.shtml" target="_blank" rel="nofollow">投诉建议</a>
        <a rel="nofollow" href="http://www.tuniu.com/corp/advertising.shtml" target="_blank">广告服务</a>
        <a rel="nofollow" href="http://www.tuniu.com/giftcard/" target="_blank">旅游券</a>
        <a rel="nofollow" href="http://tuniu.zhiye.com/" target="_blank" style="color: red;">途牛招聘</a>
        <a href="http://www.tuniu.com/corp/privacy.shtml" target="_blank" rel="nofollow">隐私保护</a>
        <a href="http://www.tuniu.com/corp/duty.shtml" target="_blank" rel="nofollow">免责声明</a>
        <a rel="nofollow" href="http://www.tuniu.com/corp/zizhi.shtml" target="_blank">旅游度假资质</a>
        <a rel="nofollow" href="http://www.tuniu.com/theme/index/" target="_blank">主题旅游</a>
        <a href="http://www.tuniu.com/corp/agreement.shtml" target="_blank" rel="nofollow">用户协议</a>
        <a href="http://www.tuniu.com/corp/sitemap.shtml" target="_blank">网站地图</a>
        <a rel="nofollow" target="_blank" href="http://www.tuniu.com/ueip/index.html">UEIP</a>
        <a rel="nofollow" href="http://www.tuniu.com/help/" target="_blank">帮助中心</a>
    </p>

    <!-- #TN-links -->
    <p id="copyright">Copyright © 2006-2016        <a rel="nofollow" href="http://www.tuniu.com/">南京途牛科技有限公司</a>
        <a rel="nofollow" href="http://www.tuniu.com/">Tuniu.com</a> |
        <a target="_blank" href="http://www.tuniu.com/corp/company.shtml" rel="nofollow">营业执照</a> |
        <a target="_blank" href="http://www.miibeian.gov.cn/" rel="nofollow">ICP证：苏B2-20130006</a> |
        <a target="_blank" href="http://www.miibeian.gov.cn/" rel="nofollow">苏ICP备12009060号</a> |
        <a target="_blank" href="http://bj.tuniu.com/">北京旅游网</a>
    </p>

    <!-- thr_ads S -->
<div class="thr_img">
    <ul class="clearfix">
        <li>
            <a href="http://www.tuniu.com/tours/" target="_blank" onclick="_gaq.push(['_trackEvent','首页_bj','点击','底部广告图_6_跟团']);">
                <img src="../image/footer_1.jpg" alt="跟团" height="38" width="175">
            </a>
        </li>
        <li>
            <a href="http://www.tuniu.com/pkg/" target="_blank" onclick="_gaq.push(['_trackEvent','首页_bj','点击','底部广告图_7_自助']);">
                <img src="../image/footer_2.jpg" alt="自助" height="38" width="175">
            </a>
        </li>
        <li>

            <a href="http://www.tuniu.com/merchants/" target="_blank" onclick="_gaq.push(['_trackEvent','首页_bj','点击','底部广告图_8_供应商合作']);">
                <img src="../image/bottom.jpg" alt="供应商合作" height="38" width="175">
            </a>
        </li>
    </ul>
</div>
<!-- thr_ads E -->

    <div class="slide_order clearfix" id="slideOrder">
        <span class="fl">最新预订：</span>
        <div class="fl w_940">
            <ul style="width: 4602px; left: -364px;">
                            <li><!--[6天前]-->用户***212预订&lt;塞班岛二日游&gt;北部观光半日游，军舰岛一日游&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><!--[10天前]-->用户***881预订&lt;埃及红海6晚8日自助游&gt;即时确认，含机票签证酒店，赠接送机，直飞红海，4种住宿可选升级&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><!--[22天前]-->用户***865预订&lt;埃及红海6晚8日自助游&gt;即时确认，含机票签证酒店，赠接送机，直飞红海，4种住宿可选升级&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><!--[24天前]-->用户***部预订&lt;途牛旅游节大促-迪拜4晚6天自助游&gt;入住2晚七星帆船酒店2晚凯悦，送帆船酒店自助晚餐两次，送冲沙，送接送机&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        <li><!--[6天前]-->用户***212预订&lt;塞班岛二日游&gt;北部观光半日游，军舰岛一日游&nbsp;&nbsp;&nbsp;&nbsp;</li><li><!--[10天前]-->用户***881预订&lt;埃及红海6晚8日自助游&gt;即时确认，含机票签证酒店，赠接送机，直飞红海，4种住宿可选升级&nbsp;&nbsp;&nbsp;&nbsp;</li><li><!--[22天前]-->用户***865预订&lt;埃及红海6晚8日自助游&gt;即时确认，含机票签证酒店，赠接送机，直飞红海，4种住宿可选升级&nbsp;&nbsp;&nbsp;&nbsp;</li><li><!--[24天前]-->用户***部预订&lt;途牛旅游节大促-迪拜4晚6天自助游&gt;入住2晚七星帆船酒店2晚凯悦，送帆船酒店自助晚餐两次，送冲沙，送接送机&nbsp;&nbsp;&nbsp;&nbsp;</li></ul>
        </div>
    </div>
    <div class="trav_corp">
        <a id="___szfw_logo___" href="https://credit.szfw.org/CX20160128013521800380.html" rel="nofollow" target="_blank">
            <img src="../image/chengxinOne.png" style="height:41px;" alt="中国互联网诚信示范企业" border="0">
        </a>
        <a href="http://net.china.cn/" rel="nofollow" target="_blank" onclick="tuniuRecorder.push('32_1_1_1_1_1')">
            <img src="../image/buliang.png" alt="违法和不良信息举报中心" height="47" width="109">
        </a>
        <a href="http://js.cyberpolice.cn/webpage/index.jsp" rel="nofollow" target="_blank" onclick="tuniuRecorder.push('32_1_1_1_1_2')">
            <img src="../image/wangluo.png" alt="网络110报警服务" height="47" width="110">
        </a>
        <img src="../image/cata.png" alt="cata航空资质认证" height="47" width="110">
        <a target="_blank" rel="nofollow" href="http://www.isc.org.cn/" onclick="tuniuRecorder.push('32_1_1_1_1_3')">
            <img src="../image/huiyuan.png" alt="中国互联网协会" height="47" width="110">
        </a>
        <a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1797102919" rel="nofollow" target="_blank" onclick="tuniuRecorder.push('32_1_1_1_1_4')">
            <img src="../image/3acomp.png" alt="中国互联网协会信用评价中心" height="47" width="110">
        </a>

        <a title="可信网站" target="_blank" href="https://ss.knet.cn/verifyseal.dll?sn=e14120832010056662smwq000000&amp;ct=df&amp;a=1&amp;pa=0.06350954016670585" rel="nofollow" onclick="tuniuRecorder.push('32_1_1_1_1_5')">
            <img src="../image/chengxin.png" alt="诚信网站" height="47" width="110">
        </a>
        <a href="http://www.jsgsj.gov.cn:60101/keyLicense/verifKey.jsp?serial=320000163820121119100000009204&amp;signData=LvIMjwILeOCOnIt65a1kGAk+FxZKCnAoexteChdi5LEEvVGY5TUoYBJ15zmxNW1dwAE4U4mMREXkWocqMPODoh+IfB2ojCxtCvMF4gVdgsMXKTbkhemenyjWlproKM0XWYyPNEYxgn8H1kxvUgCWX35ExI1xLVWA3Zuw7ZiLdYM=" rel="nofollow" target="_blank" onclick="tuniuRecorder.push('32_1_1_1_1_6')">
            <img src="../image/dianziyingye.png" alt="营业执照" height="47" width="110">
        </a>
        <a target="_blank" rel="nofollow" href="http://www.patachina.org/" onclick="tuniuRecorder.push('32_1_1_1_1_7')">
            <img src="../image/pata.png" alt="亚太旅游协会会员单位" height="47" width="140">
        </a>
    </div>

</div>

</div></body></html>