<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/top.css">
<title>旅游风向标</title>
<meta content="旅游风向标" name="keywords">
<meta content="" name="description">
<link href="../css/reset.css" rel="stylesheet" type="text/css">
<script src="../js/ga.js" async="" type="text/javascript"></script><script src="../js/jquery-1.js" type="text/javascript"></script>
<script src="../js/base64.js" type="text/javascript"></script>
<link href="../css/mask.css" rel="stylesheet" type="text/css"><link id="rightCommonCss" rel="stylesheet" type="text/css" href="../css/right_common.css"></head>
<body>
<script type="text/javascript" src="../js/in-min.js"></script>
<script type="text/javascript" src="../js/header_v2.js"></script>
<script type="text/javascript" src="../js/getDegree.js"></script>
<script type="text/javascript" src="../js/screen_size.js"></script>
<link rel="stylesheet" href="../css/index_nav_menu.css">
<link rel="stylesheet" type="text/css" href="../css/TN_date.css">
<script type="text/javascript" src="../js/search_ajax.js"></script>
<link href="../css/head_nav_new.css" rel="stylesheet" type="text/css"><!-- 头部start --><div class="header index_1200 header_1200"> <!-- 登陆条start --> <div class="header_top">
<link type="text/css" rel="stylesheet" href="../css/top_map.css"><style type="text/css"> .index_top_nav .item_duobao .dropdown_panel {width: 100%; left: -1px; text-align: center;}
</style><div class="header_top"> <!-- 头部end --><!-- 页面类型 -->
<input name="page_type" id="page_type" value="130000" type="hidden">

    <!--start 面包屑和目的地导航 -->
        <div class="top_area">
            <div class="wrap clearfix" style="background:#fff;">
                <div class="crumbs fl">
                    <a href="http://go.tuniu.com/" class="word" rel="nofollow">攻略首页</a>

                    <a href="http://trips.tuniu.com/" target="_blank" rel="nofollow" class="word">游记</a>
                    <a href="http://www.tuniu.com/way/" target="_blank" rel="nofollow" class="word">达人玩法</a>
                    <a href="http://top.tuniu.com/" rel="nofollow" class="word cur">风向标</a>
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
				<div class=""></div>
				<a href="http://top.tuniu.com/" class="indsep selected" id="shouye"><div class="shouye">首页</div></a>

                <a href="{{URL('home/ranking')}}" class="indsep" id="list"><div class="list">排行榜</div></a>
                                
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
    @foreach($data['season'] as $sea)	
        <div class="slide-card">
            <a href="http://top.tuniu.com/topic/d1242" target="_blank" rel="nofollow">
                <img style="display: inline;" src="{{$sea -> s_image}}" alt="{{$sea -> s_name}}" height="260" width="200">
                <div class="pwhat-bg"></div>
                <div class="pwhat-detail">
                    <p class="pwhat-title">{{$sea -> s_name}}</p>
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
        @foreach($data['authority'] as $sea1)
        <div class="product-list">
            <a href="http://top.tuniu.com/topic/d246" target="_blank"><img style="display: inline;"  src="{{$sea1 -> t_img}}" alt="{{$sea1 ->t_title}}" height="140" width="250"></a>
                        <div class="product-title">
                <a href="{{$sea1 ->t_id}}" target="_blank">{{$sea1 ->t_title}}</a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d246" target="_blank"></a>
        </div>
        @endforeach
		<div class="product-list">
            <img style="display: inline;" data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more6.jpg" src="../home/images/more1.jpg" alt="更多精彩" height="140" width="250">
            <a target="_blank" href="http://top.tuniu.com/topic/" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/" target="_blank"></a>
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
        @foreach($data['fresh'] as $sea2)
        <div class="product-list">
            <a href="http://top.tuniu.com/topic/d92" target="_blank"><img style="display: inline;"  src="{{$sea2 -> t_img}}" alt="{{$sea2 ->t_title}}" height="140" width="250"></a>
                        <div class="product-title">
                <a href="{{$sea2 ->t_id}}" target="_blank">{{$sea2 ->t_title}}</a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d92" target="_blank"></a>
        </div>
        @endforeach
		<div class="product-list">
            <img style="display: inline;" data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more6.jpg" src="../home/images/more2.jpg" alt="更多精彩" height="140" width="250">
            <a target="_blank" href="http://top.tuniu.com/topic/" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/" target="_blank"></a>
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
		@foreach($data['picture'] as $sea3)
        <div class="product-list">
            <a href="http://top.tuniu.com/topic/d512" target="_blank"><img  src="{{$sea3 -> t_img}}" alt="{{$sea3 ->t_title}}" height="140" width="250"></a>
                        <div class="product-title">
                <a href="{{$sea3 ->t_id}}" target="_blank">{{$sea3 ->t_title}}</a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d512" target="_blank"></a>
        </div>
		@endforeach
		<div class="product-list">
            <img style="display: inline;" data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more6.jpg" src="../home/images/more3.jpg" alt="更多精彩" height="140" width="250">
            <a target="_blank" href="http://top.tuniu.com/topic/" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/" target="_blank"></a>
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
		@foreach($data['cate'] as $sea4)
        <div class="product-list">
            <a href="http://top.tuniu.com/topic/d1114" target="_blank"><img  src="{{$sea4 ->t_img}}" alt="{{$sea4 ->t_title}}" height="140" width="250"></a>
                        <div class="product-title">
                <a href="{{$sea4 ->t_id}}" target="_blank">{{$sea4 ->t_title}}</a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d1114" target="_blank"></a>
        </div>
		@endforeach
		<div class="product-list">
            <img style="display: inline;" data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more6.jpg" src="../home/images/more4.jpg" alt="更多精彩" height="140" width="250">
            <a target="_blank" href="http://top.tuniu.com/topic/" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/" target="_blank"></a>
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
		@foreach($data['shop'] as $sea5)
        <div class="product-list">
            <a href="http://top.tuniu.com/topic/d1164" target="_blank"><img  src="{{$sea5 ->t_img}}" alt="{{$sea5 ->t_title}}" height="140" width="250"></a>
                        <div class="product-title">
                <a href="http://top.tuniu.com/topic/d1164" target="_blank">{{$sea5 ->t_title}}</a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d1164" target="_blank"></a>
        </div>
		@endforeach
		 <div class="product-list">
            <img style="display: inline;" data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more6.jpg" src="../home/images/more5.jpg" alt="更多精彩" height="140" width="250">
            <a target="_blank" href="http://top.tuniu.com/topic/" class="product-more indexicon">更多精彩</a>
            <a class="product-bg" href="http://top.tuniu.com/topic/" target="_blank"></a>
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
		@foreach($data['literature'] as $sea6)
        <div class="product-list">
            <a href="http://top.tuniu.com/topic/d112" target="_blank"><img style="display: inline;" src="{{$sea5 ->t_img}}" alt="{{$sea5 ->t_title}}" height="140" width="250"></a>
                        <div class="product-title">
                <a href="http://top.tuniu.com/topic/d112" target="_blank">{{$sea5 ->t_title}}</a>
            </div>
            <a class="product-title-bg" href="http://top.tuniu.com/topic/d112" target="_blank"></a>
        </div>
		@endforeach
               <div class="product-list">
            <img style="display: inline;" data-src="http://img3.tuniucdn.com/img/201506091800/indicator/more6.jpg" src="../home/images/more6.jpg" alt="更多精彩" height="140" width="250">
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
                <div class="mouth-page">
                    <a href="javascript:;" class="mouth-no" pid="01" monthid="01">1月</a>
                    <a href="javascript:;" class="mouth-no" pid="02" monthid="02">2月</a>
                    <a href="javascript:;" class="mouth-no" pid="03" monthid="03">3月</a>
                    <a href="javascript:;" class="mouth-no" pid="04" monthid="04">4月</a>
                    <a href="javascript:;" class="mouth-no" pid="05" monthid="05">5月</a>
                    <a href="javascript:;" class="mouth-no" pid="06" monthid="06">6月</a>
                    <a href="javascript:;" class="mouth-no" pid="07" monthid="07">7月</a>
                    <a href="javascript:;" class="mouth-no" pid="08" monthid="08">8月</a>
                    <a href="javascript:;" class="mouth-no mouth-select indexicon" pid="09" monthid="09">9月</a>
                    <a href="javascript:;" class="mouth-no" pid="10" monthid="10">10月</a>
                    <a href="javascript:;" class="mouth-no" pid="11" monthid="11">11月</a>
                    <a href="javascript:;" class="mouth-no" pid="12" monthid="12">12月</a>
                </div>
            </div>
            <div class="mouth-list">
	@foreach($data['month'] as $sea7)	
	<div class="mouth-card">
		<img data-src="{{$sea7 ->m_img}}" src="{{$sea7 ->m_img}}" alt="" height="216" width="192">
		<a class="mouth-bag indexicon" href="http://www.tuniu.com/g900/guide-0-0/" target="_blank">
		{{$sea7 ->m_name}} 
			
			
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


<script src="../js/jquery.js"></script>
<script type="text/javascript">
$(function(){
	$('.mouth-no').click(function(){
		var mouth = $(this).attr('pid');

		$.ajax
		({
			url:"{{URL('home/month')}}",
			type:"get",
			dataType:"json",
			data:{
					mouth:mouth
				},
			success:function(data)
			{
				var st='';
	
				for(var i=0;i<data.length;i++)
				{
					st+="<img data-src="+data[i].m_img+" src="+data[i].m_img+" alt='' height='216' width='192'>";
					st+="<a class='mouth-bag indexicon' href='' target='_blank'>"+
					data[i].m_name+"</a>";
				}

				$('.mouth-card').html(st)
			}
			
		})
	})
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
                            <img src="../home/images/Cii9EFZw-n2IdcknAAAWy1znY7MAABCTQG1hlYAABbj820.jpg">
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
                    <img src="../home/images/tn_footer_01.jpg" alt="一元夺宝" height="58" width="238">
                </a>
            </li>
                        <li>
                <a href="http://www.tuniu.com/zt/brand/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','点击','底部广告图_2_品牌合作']);">
                    <img src="../home/images/tn_footer_042.jpg" alt="品牌合作" height="58" width="238">
                </a>
            </li>
                        <li>
                <a href="http://temai.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','点击','底部广告图_3_超值特卖-底部']);">
                    <img src="../home/images/tn_footer_06.jpg" alt="超值特卖-底部" height="58" width="238">
                </a>
            </li>
                        <li>
                <a href="http://super.tuniu.com/" target="_blank" onclick="_gaq.push(['_trackEvent','common_bj','点击','底部广告图_4_超级自由行']);">
                    <img src="../home/images/Cii9EFaWDQ2IFdVUAAAaUoTPAnAAABcxwP_x9YAABpq60.jpg" alt="超级自由行" height="58" width="238">
                </a>
            </li>
                    </ul>
    </div>
    <!-- four_ad E -->
    <!-- img_place S -->
    <div class="img_place">
        <a href="http://www.tuniu.com/niuren/" rel="nofollow" target="_blank" style="display: block;" onclick="_gaq.push(['_trackEvent','common_bj','点击','底部广告图_5_牛人专线']);">
            <img src="../home/images/tn_footer_05l_007.jpg" alt="牛人专线" height="58" width="988">
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
                <img src="../home/images/footer_1.jpg" alt="跟团" height="38" width="175">
            </a>
        </li>
        <li>
            <a href="http://www.tuniu.com/pkg/" target="_blank" onclick="_gaq.push(['_trackEvent','首页_bj','点击','底部广告图_7_自助']);">
                <img src="../home/images/footer_2.jpg" alt="自助" height="38" width="175">
            </a>
        </li>
        <li>

            <a href="http://www.tuniu.com/merchants/" target="_blank" onclick="_gaq.push(['_trackEvent','首页_bj','点击','底部广告图_8_供应商合作']);">
                <img src="../home/images/bottom.jpg" alt="供应商合作" height="38" width="175">
            </a>
        </li>
    </ul>
</div>
<!-- thr_ads E -->

    <div class="slide_order clearfix" id="slideOrder">
        <span class="fl">最新预订：</span>
        <div class="fl w_940">
            <ul style="width: 3402px; left: -1275px;">
                            <li><!--[22天前]-->用户***130预订&lt;帕劳买飞鸟航空送尼莫酒店4晚5日自助游&gt;澳门直飞，7月5日赠送2天出海&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><!--[22天前]-->用户***717预订&lt;帕劳太平洋香港直飞买机票送酒店5晚6自助游&gt;帛琉大饭店&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><!--[23天前]-->用户***626预订&lt;长滩岛3晚4日半自助游&gt;巡礼游，香港直飞&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><!--[23天前]-->用户***239预订&lt;帕劳太平洋香港直飞买机票送酒店5晚6自助游&gt;帛琉大饭店&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        <li><!--[22天前]-->用户***130预订&lt;帕劳买飞鸟航空送尼莫酒店4晚5日自助游&gt;澳门直飞，7月5日赠送2天出海&nbsp;&nbsp;&nbsp;&nbsp;</li><li><!--[22天前]-->用户***717预订&lt;帕劳太平洋香港直飞买机票送酒店5晚6自助游&gt;帛琉大饭店&nbsp;&nbsp;&nbsp;&nbsp;</li><li><!--[23天前]-->用户***626预订&lt;长滩岛3晚4日半自助游&gt;巡礼游，香港直飞&nbsp;&nbsp;&nbsp;&nbsp;</li><li><!--[23天前]-->用户***239预订&lt;帕劳太平洋香港直飞买机票送酒店5晚6自助游&gt;帛琉大饭店&nbsp;&nbsp;&nbsp;&nbsp;</li></ul>
        </div>
    </div>
    <div class="trav_corp">
        <a id="___szfw_logo___" href="https://credit.szfw.org/CX20160128013521800380.html" rel="nofollow" target="_blank">
            <img src="../home/images/chengxinOne.png" style="height:41px;" alt="中国互联网诚信示范企业" border="0">
        </a>
        <a href="http://net.china.cn/" rel="nofollow" target="_blank" onclick="tuniuRecorder.push('32_1_1_1_1_1')">
            <img src="../home/images/buliang.png" alt="违法和不良信息举报中心" height="47" width="109">
        </a>
        <a href="http://js.cyberpolice.cn/webpage/index.jsp" rel="nofollow" target="_blank" onclick="tuniuRecorder.push('32_1_1_1_1_2')">
            <img src="../home/images/wangluo.png" alt="网络110报警服务" height="47" width="110">
        </a>
        <img src="../home/images/cata.png" alt="cata航空资质认证" height="47" width="110">
        <a target="_blank" rel="nofollow" href="http://www.isc.org.cn/" onclick="tuniuRecorder.push('32_1_1_1_1_3')">
            <img src="../home/images/huiyuan.png" alt="中国互联网协会" height="47" width="110">
        </a>
        <a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1797102919" rel="nofollow" target="_blank" onclick="tuniuRecorder.push('32_1_1_1_1_4')">
            <img src="../home/images/3acomp.png" alt="中国互联网协会信用评价中心" height="47" width="110">
        </a>

        <a title="可信网站" target="_blank" href="https://ss.knet.cn/verifyseal.dll?sn=e14120832010056662smwq000000&amp;ct=df&amp;a=1&amp;pa=0.06350954016670585" rel="nofollow" onclick="tuniuRecorder.push('32_1_1_1_1_5')">
            <img src="../home/images/chengxin.png" alt="诚信网站" height="47" width="110">
        </a>
        <a href="http://www.jsgsj.gov.cn:60101/keyLicense/verifKey.jsp?serial=320000163820121119100000009204&amp;signData=LvIMjwILeOCOnIt65a1kGAk+FxZKCnAoexteChdi5LEEvVGY5TUoYBJ15zmxNW1dwAE4U4mMREXkWocqMPODoh+IfB2ojCxtCvMF4gVdgsMXKTbkhemenyjWlproKM0XWYyPNEYxgn8H1kxvUgCWX35ExI1xLVWA3Zuw7ZiLdYM=" rel="nofollow" target="_blank" onclick="tuniuRecorder.push('32_1_1_1_1_6')">
            <img src="../home/images/dianziyingye.png" alt="营业执照" height="47" width="110">
        </a>
        <a target="_blank" rel="nofollow" href="http://www.patachina.org/" onclick="tuniuRecorder.push('32_1_1_1_1_7')">
            <img src="../home/images/pata.png" alt="亚太旅游协会会员单位" height="47" width="140">
        </a>
    </div>

</div>
<!--end foot-->


<script type="text/javascript">
    var tuniuRecorder = _zeus.getRecorder();
</script>

<script src="../js/getdata_v4.js"></script>
<script type="text/javascript" src="../js/jquery_autoSlide.js"></script>
<script type="text/javascript">
    $(function(){
        $("#slideOrder").autoSlide();
    })
</script>
<!--end foot-->
<script type="text/javascript">
var catLoaded = false;
$(document).mouseover(function() {
if (!catLoaded) {
    catLoaded = true;
    $(".categorys").load('/header/null');
}
});
function switch_city(code){
    var b = new Base64();
    code = code.toString();
    code = b.encode(code);
    var Days = 7;
    var exp  = new Date();
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = 'tuniuuser_citycode' + "="+ escape (code) + ";expires=" + exp.toGMTString()+";path=/;domain=.tuniu.com";
    window.location.reload();
}
</script>
<style>
.index_app{
left: 50%;top: 50%;margin-left: 510px;margin-top: -100px;position: fixed;_position:absolute;z-index:10000;border:1px solid #d8d8d8;padding:0 0 5px 0;background:#fff;
}
.index_app a,
.index_app img{ display: block;v}
.index_app .index_app_top{ margin-bottom: 2px; }
</style>
<script type="text/javascript" src="../js/indicator.js"></script>
<!-- GA/TA -->
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-4782081-5']);
	_gaq.push(['_setDomainName', 'tuniu.com']);
	_gaq.push(["_setAllowHash", false]);
	_gaq.push(["_setAllowAnchor", true]);
	_gaq.push(["_addOrganic", "baidu", "wd"]);
	_gaq.push(["_addOrganic", "baidu", "word"]);
	_gaq.push(["_addOrganic", "google", "q"]);
	_gaq.push(["_addOrganic", "118114", "kw"]);
	_gaq.push(["_addOrganic", "bing", "q"]);
	_gaq.push(["_addOrganic", "soso", "w"]);
	_gaq.push(["_addOrganic", "youdao", "q"]);
	_gaq.push(["_addOrganic", "sogou", "query"]);
	_gaq.push(["_addOrganic", "360", "q"]);
	_gaq.push(["_addOrganic", "baidu", "w"]);
	_gaq.push(["_addOrganic", "baidu", "q1"]);
	_gaq.push(["_addOrganic", "baidu", "q2"]);
	_gaq.push(["_addOrganic", "baidu", "q3"]);
	_gaq.push(["_addOrganic", "baidu", "q4"]);
	_gaq.push(["_addOrganic", "baidu", "q5"]);
	_gaq.push(["_addOrganic", "baidu", "q6"]);
	_gaq.push(["_addOrganic", "baidu", "q6"]);
	_gaq.push(["_addOrganic", "www.so.com", "u"]);
	_gaq.push(["_addOrganic", "www.so.com", "q"]);
	_gaq.push(["_addOrganic", "360", "u"]);
	_gaq.push(["_addOrganic", "360", "q"]);
	_gaq.push(["_trackPageview", "/度假/风向标/首页"]);
</script>
<script type="text/javascript"> (
function() {
	var ga = document.createElement('script');
	ga.type = 'text/javascript';
	ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(ga, s);
})();
</script>
<script type="text/javascript">
var u = (("https:" == document.location.protocol) ? "https://analy.tuniu.cn/analysisCollect/": "http://analy.tuniu.cn/analysisCollect/");
document.write(unescape("%3Cscript src='"+ u+ "tac.mini.js' type='text/javascript'%3E%3C/script%3E"));
</script><script src="../js/tac.js" type="text/javascript"></script>
<script type="text/javascript">
	var analyTuniuSpend = 0.031;
	var tuniuTracker = _tat.getTracker();
	tuniuTracker.setPageName("度假:风向标:首页");//do not delete
	tuniuTracker.addOrganic("baidu.com","w");
	tuniuTracker.addOrganic("baidu.com","q1");
	tuniuTracker.addOrganic("baidu.com","q2");
	tuniuTracker.addOrganic("baidu.com","q3");
	tuniuTracker.addOrganic("baidu.com","q4");
	tuniuTracker.addOrganic("baidu.com","q5");
	tuniuTracker.addOrganic("baidu.com","q6");
	tuniuTracker.addOrganic("www.so.com","u");
	tuniuTracker.addOrganic("www.so.com","q");
	tuniuTracker.addOrganic("so.360.cn","u");
	tuniuTracker.addOrganic("so.360.cn","q");
	tuniuTracker.trackPageView();
	tuniuTracker.enableLinkTracking();
	</script>

</div></div><div id="AutocompleteContainter_33ff2" style="position: absolute; z-index: 9999; top: 93px; left: 543.5px;"><div class="autocomplete-w1"><div class="autocomplete" id="Autocomplete_33ff2" style="display: none; max-height: 476px;"></div></div></div><div style="height: 631px;" id="rightCommon" class="right_common"><ul id="rightCommonUl" class="hide"><li id=""><ul id="rcTop"><li class="" style="height:148px;cursor:pointer;"></li><li style="height:42px;margin-top:20px;cursor:pointer;"><div class="rc_index"><p class="rc_app_box"><span class="rc_icon rc_app"></span></p></div><div class="rc_box rc_app_b nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_content"><a href="http://top.tuniu.com/%E6%97%A0" target="_blank"><img src="../home/images/head_qrcode_20160405.png" alt=""></a></div></div></li></ul></li><li><ul id="rcMid"><li class="mytuniuArea" style="padding:10px 0;cursorpointer;"><div class="rc_index"><p class=""><a href="http://www.tuniu.com/main.php?do=user_change_picture" target="_blank"><span class="rc_icon rc_tuniu"></span></a></p><p class="rc_wd" id="lessThanHide" style="padding:0;">我的途牛</p></div><div class="rc_box nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_common_box nologin"><div style="background-color:#fff;opacity:0.5;filter:alpha(opacity=50);width:236px;height:372px;position: absolute;top: 0;left: 0;display:none;" class="rcLoadingImg"></div><img src="../home/images/loading-72x72.gif" class="rcLoadingImg" style="position:absolute;top:150px;left:82px;display:none;"><p class="show_error" id=""></p><dl class="rc_double_col rc_w_s clearfix"><dt>账号：</dt><dd></dd></dl><p class="account hide"><input class="rc_common_input" type="text"><span class="lenovo"><span class="nickName"></span><br>来自.tuniu.com的密码</span></p><p><input tabindex="1" class="rc_common_input rcUserName" type="text"></p><dl class="rc_double_col rc_w_s clearfix"><dt>密码：</dt><dd><a href="http://www.tuniu.com/u/get_password" target="_blank" class="rc_g_color">找回密码</a></dd></dl><p><input tabindex="2" class="rc_common_input rcPassWord" type="password"></p><dl class="rc_double_col rc_w_s clearfix"><dt>验证码：</dt><dd></dd></dl><dl class="rc_double_col clearfix"><dt><input tabindex="3" class="rc_common_input rc_small rcVerCode" type="text"></dt><dd class="rc_pad_top"><img class="identify_img" alt="如验证码无法辨别，点击即可刷新。" onclick="" onload="" style="display: inline;" src="../home/images/identify.png" align="absmiddle" height="24" width="80"><img src="../home/images/refresh.jpg" alt="" class="change_img" style="display: inline;" align="absmiddle" height="24" width="24"></dd></dl><input class="rc_ableBtn" value="登录" type="button"><dl class="rc_double_col rc_reg clearfix"><dt>首次登录，请先<a href="http://www.tuniu.com/u/register" target="_blank" class="rc_g_color"> 注册</a></dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他<a href="http://www.tuniu.com/u/login" target="_blank" class="rc_g_color"> 登录&gt;&gt;</a></dd></dl></div></div></li><li class="hoverClick"><div class="rc_index"><p class="rc_topBot_b"><span class="rc_icon rc_collect"></span></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content"><p class="rc_des">我的关注</p></div></div><div class="rc_box rc_click_event nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_common_box nologin"><div style="background-color:#fff;opacity:0.5;filter:alpha(opacity=50);width:236px;height:372px;position: absolute;top: 0;left: 0;display:none;" class="rcLoadingImg"></div><img src="../home/images/loading-72x72.gif" class="rcLoadingImg" style="position:absolute;top:150px;left:82px;display:none;"><p class="show_error" id=""></p><dl class="rc_double_col rc_w_s clearfix"><dt>账号：</dt><dd></dd></dl><p class="account hide"><input class="rc_common_input" type="text"><span class="lenovo"><span class="nickName"></span><br>来自.tuniu.com的密码</span></p><p><input tabindex="1" class="rc_common_input rcUserName" type="text"></p><dl class="rc_double_col rc_w_s clearfix"><dt>密码：</dt><dd><a href="http://www.tuniu.com/u/get_password" target="_blank" class="rc_g_color">找回密码</a></dd></dl><p><input tabindex="2" class="rc_common_input rcPassWord" type="password"></p><dl class="rc_double_col rc_w_s clearfix"><dt>验证码：</dt><dd></dd></dl><dl class="rc_double_col clearfix"><dt><input tabindex="3" class="rc_common_input rc_small rcVerCode" type="text"></dt><dd class="rc_pad_top"><img class="identify_img" alt="如验证码无法辨别，点击即可刷新。" onclick="" onload="" style="display: inline;" src="../home/images/identify.png" align="absmiddle" height="24" width="80"><img src="../home/images/refresh.jpg" alt="" class="change_img" style="display: inline;" align="absmiddle" height="24" width="24"></dd></dl><input class="rc_ableBtn" value="登录" type="button"><dl class="rc_double_col rc_reg clearfix"><dt>首次登录，请先<a href="http://www.tuniu.com/u/register" target="_blank" class="rc_g_color"> 注册</a></dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他<a href="http://www.tuniu.com/u/login" target="_blank" class="rc_g_color"> 登录&gt;&gt;</a></dd></dl></div></div> </li><li class="hoverClick" style="display:none;"><div class="rc_index"><p class="rc_topBot_b"><span class="rc_icon rc_jifen"></span></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content"><p class="rc_des">我的积分</p></div> </div><div class="rc_box rc_click_event nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_common_box nologin"><div style="background-color:#fff;opacity:0.5;filter:alpha(opacity=50);width:236px;height:372px;position: absolute;top: 0;left: 0;display:none;" class="rcLoadingImg"></div><img src="../home/images/loading-72x72.gif" class="rcLoadingImg" style="position:absolute;top:150px;left:82px;display:none;"><p class="show_error" id=""></p><dl class="rc_double_col rc_w_s clearfix"><dt>账号：</dt><dd></dd></dl><p class="account hide"><input class="rc_common_input" type="text"><span class="lenovo"><span class="nickName"></span><br>来自.tuniu.com的密码</span></p><p><input tabindex="1" class="rc_common_input rcUserName" type="text"></p><dl class="rc_double_col rc_w_s clearfix"><dt>密码：</dt><dd><a href="http://www.tuniu.com/u/get_password" target="_blank" class="rc_g_color">找回密码</a></dd></dl><p><input tabindex="2" class="rc_common_input rcPassWord" type="password"></p><dl class="rc_double_col rc_w_s clearfix"><dt>验证码：</dt><dd></dd></dl><dl class="rc_double_col clearfix"><dt><input tabindex="3" class="rc_common_input rc_small rcVerCode" type="text"></dt><dd class="rc_pad_top"><img class="identify_img" alt="如验证码无法辨别，点击即可刷新。" onclick="" onload="" style="display: inline;" src="../home/images/identify.png" align="absmiddle" height="24" width="80"><img src="../home/images/refresh.jpg" alt="" class="change_img" style="display: inline;" align="absmiddle" height="24" width="24"></dd></dl><input class="rc_ableBtn" value="登录" type="button"><dl class="rc_double_col rc_reg clearfix"><dt>首次登录，请先<a href="http://www.tuniu.com/u/register" target="_blank" class="rc_g_color"> 注册</a></dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他<a href="http://www.tuniu.com/u/login" target="_blank" class="rc_g_color"> 登录&gt;&gt;</a></dd></dl></div></div></li><li class="hoverClick"><div class="rc_index"><p class="rc_topBot_b"><span class="rc_icon rc_order"></span></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content"><p class="rc_des">我的订单</p></div></div><div class="rc_box rc_click_event nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_common_box nologin"><div style="background-color:#fff;opacity:0.5;filter:alpha(opacity=50);width:236px;height:372px;position: absolute;top: 0;left: 0;display:none;" class="rcLoadingImg"></div><img src="../home/images/loading-72x72.gif" class="rcLoadingImg" style="position:absolute;top:150px;left:82px;display:none;"><p class="show_error" id=""></p><dl class="rc_double_col rc_w_s clearfix"><dt>账号：</dt><dd></dd></dl><p class="account hide"><input class="rc_common_input" type="text"><span class="lenovo"><span class="nickName"></span><br>来自.tuniu.com的密码</span></p><p><input tabindex="1" class="rc_common_input rcUserName" type="text"></p><dl class="rc_double_col rc_w_s clearfix"><dt>密码：</dt><dd><a href="http://www.tuniu.com/u/get_password" target="_blank" class="rc_g_color">找回密码</a></dd></dl><p><input tabindex="2" class="rc_common_input rcPassWord" type="password"></p><dl class="rc_double_col rc_w_s clearfix"><dt>验证码：</dt><dd></dd></dl><dl class="rc_double_col clearfix"><dt><input tabindex="3" class="rc_common_input rc_small rcVerCode" type="text"></dt><dd class="rc_pad_top"><img class="identify_img" alt="如验证码无法辨别，点击即可刷新。" onclick="" onload="" style="display: inline;" src="../home/images/identify.png" align="absmiddle" height="24" width="80"><img src="../home/images/refresh.jpg" alt="" class="change_img" style="display: inline;" align="absmiddle" height="24" width="24"></dd></dl><input class="rc_ableBtn" value="登录" type="button"><dl class="rc_double_col rc_reg clearfix"><dt>首次登录，请先<a href="http://www.tuniu.com/u/register" target="_blank" class="rc_g_color"> 注册</a></dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他<a href="http://www.tuniu.com/u/login" target="_blank" class="rc_g_color"> 登录&gt;&gt;</a></dd></dl></div></div></li><li class="hoverClick"><div class="rc_index"><p class="rc_topBot_b"><span class="rc_icon rc_quan"></span></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content"><p class="rc_des">我的礼券</p></div></div><div class="rc_box rc_click_event nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_common_box nologin"><div style="background-color:#fff;opacity:0.5;filter:alpha(opacity=50);width:236px;height:372px;position: absolute;top: 0;left: 0;display:none;" class="rcLoadingImg"></div><img src="../home/images/loading-72x72.gif" class="rcLoadingImg" style="position:absolute;top:150px;left:82px;display:none;"><p class="show_error" id=""></p><dl class="rc_double_col rc_w_s clearfix"><dt>账号：</dt><dd></dd></dl><p class="account hide"><input class="rc_common_input" type="text"><span class="lenovo"><span class="nickName"></span><br>来自.tuniu.com的密码</span></p><p><input tabindex="1" class="rc_common_input rcUserName" type="text"></p><dl class="rc_double_col rc_w_s clearfix"><dt>密码：</dt><dd><a href="http://www.tuniu.com/u/get_password" target="_blank" class="rc_g_color">找回密码</a></dd></dl><p><input tabindex="2" class="rc_common_input rcPassWord" type="password"></p><dl class="rc_double_col rc_w_s clearfix"><dt>验证码：</dt><dd></dd></dl><dl class="rc_double_col clearfix"><dt><input tabindex="3" class="rc_common_input rc_small rcVerCode" type="text"></dt><dd class="rc_pad_top"><img class="identify_img" alt="如验证码无法辨别，点击即可刷新。" onclick="" onload="" style="display: inline;" src="../home/images/identify.png" align="absmiddle" height="24" width="80"><img src="../home/images/refresh.jpg" alt="" class="change_img" style="display: inline;" align="absmiddle" height="24" width="24"></dd></dl><input class="rc_ableBtn" value="登录" type="button"><dl class="rc_double_col rc_reg clearfix"><dt>首次登录，请先<a href="http://www.tuniu.com/u/register" target="_blank" class="rc_g_color"> 注册</a></dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他<a href="http://www.tuniu.com/u/login" target="_blank" class="rc_g_color"> 登录&gt;&gt;</a></dd></dl></div></div></li><li class="hoverClick"><div class="rc_index"><p class="rc_topBot_b"><span class="rc_icon rc_kefutips"></span></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content"><p class="rc_des">消息提醒</p></div></div><div class="rc_box rc_click_event nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_common_box nologin"><div style="background-color:#fff;opacity:0.5;filter:alpha(opacity=50);width:236px;height:372px;position: absolute;top: 0;left: 0;display:none;" class="rcLoadingImg"></div><img src="../home/images/loading-72x72.gif" class="rcLoadingImg" style="position:absolute;top:150px;left:82px;display:none;"><p class="show_error" id=""></p><dl class="rc_double_col rc_w_s clearfix"><dt>账号：</dt><dd></dd></dl><p class="account hide"><input class="rc_common_input" type="text"><span class="lenovo"><span class="nickName"></span><br>来自.tuniu.com的密码</span></p><p><input tabindex="1" class="rc_common_input rcUserName" type="text"></p><dl class="rc_double_col rc_w_s clearfix"><dt>密码：</dt><dd><a href="http://www.tuniu.com/u/get_password" target="_blank" class="rc_g_color">找回密码</a></dd></dl><p><input tabindex="2" class="rc_common_input rcPassWord" type="password"></p><dl class="rc_double_col rc_w_s clearfix"><dt>验证码：</dt><dd></dd></dl><dl class="rc_double_col clearfix"><dt><input tabindex="3" class="rc_common_input rc_small rcVerCode" type="text"></dt><dd class="rc_pad_top"><img class="identify_img" alt="如验证码无法辨别，点击即可刷新。" onclick="" onload="" style="display: inline;" src="../home/images/identify.png" align="absmiddle" height="24" width="80"><img src="../home/images/refresh.jpg" alt="" class="change_img" style="display: inline;" align="absmiddle" height="24" width="24"></dd></dl><input class="rc_ableBtn" value="登录" type="button"><dl class="rc_double_col rc_reg clearfix"><dt>首次登录，请先<a href="http://www.tuniu.com/u/register" target="_blank" class="rc_g_color"> 注册</a></dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他<a href="http://www.tuniu.com/u/login" target="_blank" class="rc_g_color"> 登录&gt;&gt;</a></dd></dl></div></div></li></ul></li><li style="position:absolute;top:280px;"><ul id="rc_phone"></ul></li><li style="position:absolute;top:540px;" id="RCU_doArea"><ul id="rcLastBtm"></ul></li><li style="position:absolute;bottom:20px;"><ul id="rcBtm"><li class=""><div class="rc_index"><p class="rc_topBot_b"><a href="http://www.tuniu.com/corp/advise.shtml" target="_blank"><span class="rc_icon rc_advise"></span></a></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content"> <p class="rc_des"><a href="http://www.tuniu.com/corp/advise.shtml" target="_blank" style="display:block;width:60px;height:41px;color:#f80;">意见建议</a></p></div></div></li><li class="rcBackToTopSty" id="rcBackToTop"><div class="rc_index"><p class="rc_topBot_b"><span class="rc_icon rc_backtotop" id=""></span></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content"><p class="rc_des">返回顶部</p></div></div></li></ul></li></ul></div></body></html>