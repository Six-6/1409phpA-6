<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html class="ie8"><![endif]-->
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>游记</title>
    <meta content="游记,旅游游记,游记攻略,自助游游记" name="keywords">
    <meta content="途牛游记频道,最佳的自助游游记攻略,靠谱的旅游游记,海量的旅游行程美图,在途牛驴友中秀出你的风采,分享您在旅游过程中的点点滴滴.尽在途牛旅游网(Tuniu.com)游记频道" name="description">
    <link rel="stylesheet" type="text/css" href="../css/foot.css">
    <script src="../js/ga.js" async="" type="text/javascript"></script><script type="text/javascript">
        var analyTuniuBeginTime=(new Date()).getTime();
    </script>
    <style type="text/css">
        .logo span { float:left; width:163px; height:55px; margin:5px 0 0 0;}
    </style>
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="UWRpZldlYUI9UywCLVNXDAsVGA4TEyx0OQ4zF2MAOHMDKBMTEgwLFg==">
<link href="../css/mask.css" rel="stylesheet" type="text/css"><link id="rightCommonCss" rel="stylesheet" type="text/css" href="../css/right_common.css"></head>
<body>

<link rel="stylesheet" href="../css/index_nav_menu.css">
<link rel="stylesheet" type="text/css" href="../css/TN_date.css">
<script type="text/javascript" src="../js/search_ajax.js">
</script><link href="../css/head_nav_new.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function selectTag(showContent,selfObj){ var tag = document.getElementById("tags").getElementsByTagName("li"); var taglength = tag.length; for(i=0; i<taglength; i++){ tag[i].className = ""; } selfObj.parentNode.className = "selectTag"; for(i=1; j=document.getElementById("tagContent"+i); i++){ j.style.display = "none"; } document.getElementById(showContent).style.display = "block";}var startCity = document.getElementById("startCity");if(startCity){ startCity.onmouseover = function(){ startCity.className = "head_start_city change_tab"; }; startCity.onmouseout = function(){ startCity.className = "head_start_city"; };}function getCookie(objName){ var arrStr = document.cookie.split("; "); for(var i = 0;i < arrStr.length;i ++){ var temp = arrStr[i].split("="); if(temp[0] == objName) return unescape(temp[1]); } return false;}var tuniuPPhoneDiv = document.getElementById("tuniu_400_num_phone");var tuniuPPhoneNumber = getCookie("p_phone_400");if (tuniuPPhoneDiv) { if (tuniuPPhoneNumber) { tuniuPPhoneDiv.innerHTML = tuniuPPhoneNumber; } else { tuniuPPhoneDiv.innerHTML = "4007-999-999"; }}$(function($) { var sub = $("#keyword-input-sub").val(); if(sub && sub != ''){ $("#keyword-input").val(sub); }});</script><!-- 页面类型 -->
<input name="page_type" id="page_type" value="130000" type="hidden">


<link rel="stylesheet" type="text/css" href="../css/slides.css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/yj_2016.css">
<link rel="stylesheet" href="../css/pub_mod.css">
@include('includes.login')
<!-- 游记新版轮播 start -->
<div id="full-screen-slider" class="head">

	    <!-- 游记banner 大图 start -->
    <ul id="slides">
			@foreach ($data['carousel'] as $error1)
			<li style="background: transparent url(&quot;{{$error1['t_img']}} &quot;) no-repeat scroll center top; z-index: 900; "><a href="{{URL('home/details')}}?id={{$error1['tt_id']}}"  rel="nofollow"></a></li>
			@endforeach	
	</ul>
			
    <!-- 游记banner 大图 end -->
    <div class="slide-center">
        <!-- 游记banner 小图 start -->
        <ul style="margin-left: 341px;" id="pagination">
			@foreach ($data['carousel'] as $error2)
        	<li class="">
                <div style="display: block;" class="slide-bg"></div>
                <a href="javascript:void(0)">
				<img width="220" height="152" src="{{$error2['t_img']}}">				
				</a>
            </li>
			@endforeach	
    		        </ul>
        <!-- 游记banner 小图 end -->
        <!-- 游记作者描述 start -->
        <ul id="description">
			@foreach ($data['carousel'] as $error3)
        	<li style="display: none; z-index: 900;">
                <a href="{{URL('home/details')}}?id={{$error3['tt_id']}}">
                    <div class="yj-name">{{$error3['t_title']}}</div>
                </a>
                <a href="{{URL('home/details')}}?id={{$error3['tt_id']}}">
                    <div class="auther-show">
                        <img src="{{$error3['path']}}" alt="">
                        <div class="auther-name">{{$error3['name']}}</div>
                    </div>
                </a>
            </li>
			@endforeach	
    		        </ul>
        <!-- 游记作者描述 end -->
    </div>
  
    <script src="../js/jquery.1.12.js"></script>
    <script>
        $(function(){
            $('#search_btn').click(function(){
                var token = $('#token').val();
                var search = $('#search').val();
            
               $.ajax({
                    url:"{{URL('home/search')}}",
                    type:"POST",
                    data:{
                        token:token,
                        search:search
                    },
               })
            })
        })
    </script>
    <!-- 游记搜索框 end -->
</div><!-- 游记新版轮播 end -->
<!-- 游记内容 start -->
<div class="yj-content">
    <!-- 左侧内容 start-->
    <div class="yj-left-show">
    	
<!-- 广告位  -->
    <a href="http://www.tuniu.com/trips/10104110" class="yj-left-show"  rel="nofollow">
        <img src="../image/Cii-TFfPij-IRbuzAAEzXSfoIwsAACJHAP60W8AATN195_w800_h0_c0_t0.jpg" alt="游记首页banner1【PC】">
    </a>
        <div class="yj-left-top">
            <!-- 游记tab start-->
            <ul class="yj-tab">
                <li><a href="{{URL('home/note')}}">推荐游记</a></li>   
                <li><a href="{{URL('home/lnews')}}">最新发布</a></li>
            </ul>
            <div class="content-title-right">
                <a class="my-note" href="{{URL('home/mysit')}}"  rel="nofollow">
                    <span></span>
                    <em>我的游记</em>
                </a>
                <a class="write-note" href="{{URL('home/publishs')}}"  rel="nofollow">
                    <span></span>
                    <em>发表游记</em>
                </a>
            </div>
        </div>
        <!-- 游记tab end-->
        
<!-- 游记列表 start-->
        <div class="yj-list-show">
            <div style="display: none;" class="commen-loadding">
				
			</div>
            <ul style="display: block;" class="yj-list">
				@foreach ($data['refined'] as $error4)
    			<li>
                    <a class="list-img" href="{{URL('home/details')}}?id={{$error4 ->tt_id}}"  rel="nofollow">
                        <img src="{{$error4->t_img}}" alt="">
                        <div class="list-recommend gl-jh"></div>
                    </a>
                    <div class="list-show">
                        <a href="{{URL('home/details')}}?id={{$error4 ->tt_id}}"  rel="nofollow">
                            <div class="list-name">{{$error4->t_title}}</div>
                            <div class="list-des">{{$error4->s_desc}}</div>
                        </a>
                        <div class="list-auther">
                            <div class="list-auther-left">
                            <a href="{{URL('home/details')}}?id={{$error4 ->tt_id}}">
                                <img src="{{$error4->path}}" alt="">
                                <div class="list-auther-name">{{$error4->name}}</div>
                            </a>
                                <div class="list-scan"><i></i>{{$error4->t_browse}}&nbsp;</div>
                                <div class="list-comment"><i></i>{{$error4->t_commentint}}&nbsp;</div>
                            </div>
                            
                                <div class="list-auther-right ding_yes" id="dingAjax" data-id="10106094">
                                <i></i>
								<span>{{$error4->t_zambia}}</span>
                                </div>
                        </div>
                    </div>
                </li>
				@endforeach
            </ul>
    		<ul class="yj-list"></ul>
            <ul class="yj-list"></ul>
            <ul class="yj-list"></ul>
                    </div>
        <!-- 游记列表 end-->
        <!-- 分页 -->
        <div data-curpage="1" data-pager-inited="true" class="pager pagination" data-init="pager" style="display: block;">
		<div class="page-bottom">		
		<a rel="nofollow"  href="javascript:void(0)" data-page="">共{{$data['mexpage']}}页</a>
		<a rel="nofollow"  href="javascript:void(0)" data-page="">第{{$data['page']}}页</a>
		<a rel="nofollow" class="page" href="{{URL('home/note')}}?page=1" pid="1" data-page="">首页</a>
		<a rel="nofollow" class="page" href="{{URL('home/note')}}?page={{$data['page']-1}}" pid="{{$data['page']-1}}">上一页</a>		
		<a rel="nofollow" class="page" href="{{URL('home/note')}}?page={{$data['page']+1}}" pid="{{$data['page']+1}}">下一页</a>
		<a rel="nofollow" class="page" href="{{URL('home/note')}}?page={{$data['mexpage']}}" pid="{{$data['mexpage']}}">尾页</a>
		</div>
		</div>
        <div class="pager pagination" data-init="pager" style="display:none"></div>
        <div class="pager pagination" data-init="pager" style="display:none"></div>
        <div class="pager pagination" data-init="pager" style="display:none"></div>
		        <!-- 交互数据 -->
    
</div>
    <!-- 左侧内容 end-->
    <!-- 右侧内容 start-->
    <div class="yj-right-show">
		<div class="right-traverler">
    <div class="right-commen-tit">
        <p class="right-tit">大玩家</p>
        <a href="http://www.tuniu.com/traveler" class="right-more"  rel="nofollow">更多&nbsp;&gt;</a>
    </div>
    <div class="traverler-auther">
        <div class="traverler-img">
            <div class="traverler-sex  sex-men"></div>
            <a href="http://www.tuniu.com/person/AA9C5314291E4783C30A743717A49B4A"  rel="nofollow"><img src="../image/Cii-T1fNC3iIda7IADShmFy-wBoAACEVgBXhkgANKGw952_w90_h90_c1_t0.jpg" alt="" class="traverler-title-img"></a>
        </div>
        <div class="traverler-name">贱公子</div>
        <div class="traverler-des">大玩家，曾进义工旅行一年，爱摄影
一流的丽江混混，半吊子户外领队，三流的摄影师还是个不入流的旅行作家。对，我的生活，我的兴趣从2010年起就如同旅行和摄影是我每天的日常生活</div>
        <ul class="traverler-label">
                            	                		<li>摄影</li>
                	                            	                		<li>写攻略</li>
                	                            	                		<li>制定线路</li>
                	                            	                    </ul>
        <a href="http://www.tuniu.com/traveler/recruit/" class="master-btn" >申请大玩家</a>
    </div>
</div>       
		  
 <div class="right-commen-tit">
        <p class="right-tit">当前活动</p>
    </div>
    <ul class="activity-list">
       
               <li>
            <a href="http://www.tuniu.com/gt/youji/"  rel="nofollow">
                <div class="activity-img" style="background-image:url(http://m.tuniucdn.com/fb2/t1/G2/M00/26/06/Cii-T1e6_nCIDMvoAAAGNPLmob8AAAvHwP_-bQAAAZM836.png) "></div>
                <div class="activity-show">
                    <div class="activity-name">游记征文</div>
                    <div class="activity-des">写游记，赢千元大奖！</div>
                </div>
            </a>
        </li>   
                
            </ul>
  				
     
    </div>
    <!-- 右侧内容 end-->
</div>
<!-- 游记内容 end -->

<script type="text/javascript" src="../js/jquery-1.js"></script>
<script type="text/javascript" src="../js/template.js"></script>
<script type="text/javascript" src="../js/slides.js"></script>



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
                            <a href="http://www.tuniu.com/tours/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-1']);">跟团游</a>
                            <a href="http://www.tuniu.com/pkg/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-2']);">自助游</a>
                            <a href="http://www.tuniu.com/drive/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-3']);">自驾游</a>
                            
                        </p>
                        <p>
                            <a href="http://www.tuniu.com/theme/haidao/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-4']);">海岛游</a>
                            <a href="http://www.tuniu.com/flight/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-5']);">机票</a>
                            <a href="http://youlun.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-6']);">邮轮</a>
                        </p>
                        <p>
                            <a href="http://menpiao.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-7']);">门票</a>
                            <a href="http://www.tuniu.com/theme/qinzi/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-8']);">亲子游</a>
                            <a href="http://www.tuniu.com/visa/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-9']);">签证</a>
                        </p>
                        <p>
                            <a href="http://super.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-10']);">机票+酒店</a>
                            <a href="http://www.tuniu.com/theme/miyue/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-11']);">蜜月游</a>
                            <a href="http://hotel.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-12']);">酒店</a>
                        </p>
                        <p>
                            <a href="http://temai.tuniu.com/laoyutuijian"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-13']);">老于推荐</a>
                            <a href="http://www.tuniu.com/gongsi/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-14']);">公司旅游</a>
                            <a href="http://www.tuniu.com/niuren/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-15']);">牛人专线</a>
                        </p>
                        <p>
                            <a href="http://www.tuniu.com/zt/sfcf/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-16']);">首付出发</a>
                            <a href="http://www.tuniu.com/local/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-17']);">当地玩乐</a>
                            <a href="http://www.tuniu.com/zt/love/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_1','1-18']);">旅拍</a>
                        </p>
                    </dd>
                </dl>
            </li>
            <li>
                <i class="ts_2"></i>
                <dl class="trav_l ">
                    <dt class="tl_tt"><a>寻优惠</a></dt>
                    <dd class="tl_w">
                        <p><a href="http://temai.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_2','2-1']);">特卖</a></p>
                        <p><a href="http://hotel.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_2','2-2']);">订酒店 返现金</a></p>
                        <p><a href="http://1.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_2','2-4']);">一元夺宝</a></p>
                        <p><a href="http://www.tuniu.com/bank/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_2','2-5']);">银行特惠游</a></p>
                        <p><a href="http://www.tuniu.com/gt/guangfacxqq"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_2','2-6']);">银行分期游</a></p>
                    </dd>
                </dl>
            </li>
            <li>
                <i class="ts_3"></i>
                <dl class="trav_l ">
                    <dt class="tl_tt"><a>看攻略</a></dt>
                    <dd class="tl_w">
                        <p><a href="http://go.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_3','3-1']);">攻略</a></p>
                        <p><a href="http://top.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_3','3-2']);">途牛风向标</a></p>
                        <p><a href="http://trips.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_3','3-3']);">游记</a></p>
                        <p><a href="http://www.tuniu.com/way/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_3','3-4']);">达人玩法</a></p>
                    </dd>
                </dl>
            </li>
            <li>
                <i class="ts_4"></i>
                <dl class="trav_l ">
                    <dt class="tl_tt"><a>查服务</a></dt>
                    <dd class="tl_w tl_cont">
                        <p>
                            <a href="http://www.tuniu.com/help/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_4','4-1']);">帮助中心</a>
                            
                        </p>
                        <p>
                            <a href="http://www.tuniu.com/u/club"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_4','4-3']);">积分俱乐部</a>
                            
                        </p>
                        <p>
                            <a href="http://www.tuniu.com/static/sunshine_ensure/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_4','4-5']);">阳光保障</a>
                        </p>
                        <p><a href="http://train.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_4','4-2']);">火车时刻表</a></p>
                        <p><a href="http://metro.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','tydb_wzdt_4','4-6']);">地铁路线图</a></p>
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
        <a href="http://www.tuniu.com/static/sunshine_ensure/"  style="display:block;width:100%;height:100%;">
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
                <a href="http://1.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','点击','底部广告图_1_一元夺宝']);">
                    <img src="../image/tn_footer_01.jpg" alt="一元夺宝" height="58" width="238">
                </a>
            </li>
                        <li>
                <a href="http://www.tuniu.com/zt/brand/"  onclick="_gaq.push(['_trackEvent','common_sh','点击','底部广告图_2_品牌合作']);">
                    <img src="../image/tn_footer_042.jpg" alt="品牌合作" height="58" width="238">
                </a>
            </li>
                        <li>
                <a href="http://temai.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','点击','底部广告图_3_超值特卖-底部']);">
                    <img src="../image/tn_footer_06.jpg" alt="超值特卖-底部" height="58" width="238">
                </a>
            </li>
                        <li>
                <a href="http://super.tuniu.com/"  onclick="_gaq.push(['_trackEvent','common_sh','点击','底部广告图_4_超级自由行']);">
                    <img src="../image/Cii9EFaWDQ2IFdVUAAAaUoTPAnAAABcxwP_x9YAABpq60.jpg" alt="超级自由行" height="58" width="238">
                </a>
            </li>
                    </ul>
    </div>
    <!-- four_ad E -->
    <!-- img_place S -->
    <div class="img_place">
        <a href="http://www.tuniu.com/niuren/" rel="nofollow"  style="display: block;" onclick="_gaq.push(['_trackEvent','common_sh','点击','底部广告图_5_牛人专线']);">
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
        <a href="http://www.tuniu.com/corp/aboutus.shtml"  rel="nofollow">关于我们</a>
        <a $nofollow="" href="http://ir.tuniu.com/" >Investor Relations</a>
        <a href="http://www.tuniu.com/corp/contactus.shtml"  rel="nofollow">联系我们</a>
        <a href="http://www.tuniu.com/corp/advise.shtml"  rel="nofollow">投诉建议</a>
        <a rel="nofollow" href="http://www.tuniu.com/corp/advertising.shtml" >广告服务</a>
        <a rel="nofollow" href="http://www.tuniu.com/giftcard/" >旅游券</a>
        <a rel="nofollow" href="http://tuniu.zhiye.com/"  style="color: red;">途牛招聘</a>
        <a href="http://www.tuniu.com/corp/privacy.shtml"  rel="nofollow">隐私保护</a>
        <a href="http://www.tuniu.com/corp/duty.shtml"  rel="nofollow">免责声明</a>
        <a rel="nofollow" href="http://www.tuniu.com/corp/zizhi.shtml" >旅游度假资质</a>
        <a rel="nofollow" href="http://www.tuniu.com/theme/index/" >主题旅游</a>
        <a href="http://www.tuniu.com/corp/agreement.shtml"  rel="nofollow">用户协议</a>
        <a href="http://www.tuniu.com/corp/sitemap.shtml" >网站地图</a>
        <a rel="nofollow"  href="http://www.tuniu.com/ueip/index.html">UEIP</a>
        <a rel="nofollow" href="http://www.tuniu.com/help/" >帮助中心</a>
    </p>

    <!-- #TN-links -->
    <p id="copyright">Copyright © 2006-2016        <a rel="nofollow" href="http://www.tuniu.com/">南京途牛科技有限公司</a>
        <a rel="nofollow" href="http://www.tuniu.com/">Tuniu.com</a> |
        <a  href="http://www.tuniu.com/corp/company.shtml" rel="nofollow">营业执照</a> |
        <a  href="http://www.miibeian.gov.cn/" rel="nofollow">ICP证：苏B2-20130006</a> |
        <a  href="http://www.miibeian.gov.cn/" rel="nofollow">苏ICP备12009060号</a> |
        <a  href="http://sh.tuniu.com/">上海旅游网</a>
    </p>

    <!-- thr_ads S -->
<div class="thr_img">
    <ul class="clearfix">
        <li>
            <a href="http://www.tuniu.com/tours/"  onclick="_gaq.push(['_trackEvent','首页_sh','点击','底部广告图_6_跟团']);">
                <img src="../image/footer_1.jpg" alt="跟团" height="38" width="175">
            </a>
        </li>
        <li>
            <a href="http://www.tuniu.com/pkg/"  onclick="_gaq.push(['_trackEvent','首页_sh','点击','底部广告图_7_自助']);">
                <img src="../image/footer_2.jpg" alt="自助" height="38" width="175">
            </a>
        </li>
        <li>

            <a href="http://www.tuniu.com/merchants/"  onclick="_gaq.push(['_trackEvent','首页_sh','点击','底部广告图_8_供应商合作']);">
                <img src="../image/bottom.jpg" alt="供应商合作" height="38" width="175">
            </a>
        </li>
    </ul>
</div>
<!-- thr_ads E -->

    <div class="slide_order clearfix" id="slideOrder">
        <span class="fl">最新预订：</span>
        <div class="fl w_940">
            <ul style="width: 4482px; left: -945.327px;">
                            <li><!--[4天前]-->用户***337预订[五一]&lt;迪拜3晚6天自助游&gt;机酒全含，Damac精品酒店套房，EK直飞&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><!--[6天前]-->用户***228预订&lt;美西拉斯维加斯-洛杉矶6日游&gt;洛杉矶接机，含主题门票（当地游）&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><!--[15天前]-->用户***细预订&lt;红海8日自助游&gt;即时确认，直飞红海，接送机，落地签，五星酒店&nbsp;&nbsp;&nbsp;&nbsp;</li>
                            <li><!--[16天前]-->用户***196预订&lt;西班牙葡萄牙3-7日循环游&gt;多地集散 可订接送机 西班牙皇宫 黄金塔 红宫 杜丽多古城 圣家大教堂 大石角 太阳海岸 贝伦古塔（当地游）&nbsp;&nbsp;&nbsp;&nbsp;</li>
                        <li><!--[4天前]-->用户***337预订[五一]&lt;迪拜3晚6天自助游&gt;机酒全含，Damac精品酒店套房，EK直飞&nbsp;&nbsp;&nbsp;&nbsp;</li><li><!--[6天前]-->用户***228预订&lt;美西拉斯维加斯-洛杉矶6日游&gt;洛杉矶接机，含主题门票（当地游）&nbsp;&nbsp;&nbsp;&nbsp;</li><li><!--[15天前]-->用户***细预订&lt;红海8日自助游&gt;即时确认，直飞红海，接送机，落地签，五星酒店&nbsp;&nbsp;&nbsp;&nbsp;</li><li><!--[16天前]-->用户***196预订&lt;西班牙葡萄牙3-7日循环游&gt;多地集散 可订接送机 西班牙皇宫 黄金塔 红宫 杜丽多古城 圣家大教堂 大石角 太阳海岸 贝伦古塔（当地游）&nbsp;&nbsp;&nbsp;&nbsp;</li></ul>
        </div>
    </div>
    <div class="trav_corp">
        <a id="___szfw_logo___" href="https://credit.szfw.org/CX20160128013521800380.html" rel="nofollow" >
            <img src="../image/chengxinOne.png" style="height:41px;" alt="中国互联网诚信示范企业" border="0">
        </a>
        <a href="http://net.china.cn/" rel="nofollow"  onclick="tuniuRecorder.push('32_1_1_1_1_1')">
            <img src="../image/buliang.png" alt="违法和不良信息举报中心" height="47" width="109">
        </a>
        <a href="http://js.cyberpolice.cn/webpage/index.jsp" rel="nofollow"  onclick="tuniuRecorder.push('32_1_1_1_1_2')">
            <img src="../image/wangluo.png" alt="网络110报警服务" height="47" width="110">
        </a>
        <img src="../image/cata.png" alt="cata航空资质认证" height="47" width="110">
        <a  rel="nofollow" href="http://www.isc.org.cn/" onclick="tuniuRecorder.push('32_1_1_1_1_3')">
            <img src="../image/huiyuan.png" alt="中国互联网协会" height="47" width="110">
        </a>
        <a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1797102919" rel="nofollow"  onclick="tuniuRecorder.push('32_1_1_1_1_4')">
            <img src="../image/3acomp.png" alt="中国互联网协会信用评价中心" height="47" width="110">
        </a>

        <a title="可信网站"  href="https://ss.knet.cn/verifyseal.dll?sn=e14120832010056662smwq000000&amp;ct=df&amp;a=1&amp;pa=0.06350954016670585" rel="nofollow" onclick="tuniuRecorder.push('32_1_1_1_1_5')">
            <img src="../image/chengxin.png" alt="诚信网站" height="47" width="110">
        </a>
        <a href="http://www.jsgsj.gov.cn:60101/keyLicense/verifKey.jsp?serial=320000163820121119100000009204&amp;signData=LvIMjwILeOCOnIt65a1kGAk+FxZKCnAoexteChdi5LEEvVGY5TUoYBJ15zmxNW1dwAE4U4mMREXkWocqMPODoh+IfB2ojCxtCvMF4gVdgsMXKTbkhemenyjWlproKM0XWYyPNEYxgn8H1kxvUgCWX35ExI1xLVWA3Zuw7ZiLdYM=" rel="nofollow"  onclick="tuniuRecorder.push('32_1_1_1_1_6')">
            <img src="../image/dianziyingye.png" alt="营业执照" height="47" width="110">
        </a>
        <a  rel="nofollow" href="http://www.patachina.org/" onclick="tuniuRecorder.push('32_1_1_1_1_7')">
            <img src="../image/pata.png" alt="亚太旅游协会会员单位" height="47" width="140">
        </a>
    </div>

</div>
<!--end foot-->

<script language="javascript" src="../js/zeus.js"></script>
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
    _gaq.push(["_trackPageview", ""]);
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
    var analyTuniuSpend = 0;
    var tuniuTracker = _tat.getTracker();
    tuniuTracker.setPageName("");//do not delete
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


<div id="AutocompleteContainter_5b693" style="position: absolute; z-index: 9999; top: 93px; left: 543.5px;"><div class="autocomplete-w1"><div class="autocomplete" id="Autocomplete_5b693" style="display: none; max-height: 476px;"></div></div></div><div style="display: none;" class="search_pop_box" box="searchBox" id="searchAdvBox">
    <div class="search_box">
        <!-- basic sel start -->
        <h4 class="sb_tt clearfix">基本条件 <span class="closeSenSearch tn_fontface"></span></h4>
        <div class="search_filter">
            <div id="J_Filter" class="search_adv">
                <div style="display: block;" class="search_adv_con" id="J_Filters">
                    <div class="search_adv_item clearfix" id="J_FilterItems">
                        <dl filter-type="keyword">
	<dt class=".search_adv_tit">关键字</dt>
	<dd class="search_adv_properties">
		<div class="pkg_input">
			<input code="13" value="请输入目的地、主题或关键词" class="com_ipt input_addr" name="start" type="text">
		</div>
	</dd>
</dl><dl filter-type="prdType">
	<dt class="search_adv_tit">类型</dt>
	<dd class="search_adv_properties">
		<div class="search_adv_buxian">
			<a class="checked" filter-value="0" href="javascript:;">不限</a>
		</div>
		<div style="height: auto;" class="search_adv_others onlyShowOne">
		    		          <a href="javascript:;" filter-value="tours"><i class="icon"></i>跟团游</a>
		    		          <a href="javascript:;" filter-value="pkg"><i class="icon"></i>自助游</a>
		    		          <a href="javascript:;" filter-value="ticket"><i class="icon"></i>景点门票</a>
		    		          <a href="javascript:;" filter-value="around"><i class="icon"></i>当地参团</a>
		    		          <a href="javascript:;" filter-value="local"><i class="icon"></i>当地玩乐</a>
		    		          <a href="javascript:;" filter-value="cruise"><i class="icon"></i>邮轮</a>
		    		          <a href="javascript:;" filter-value="drive"><i class="icon"></i>自驾游</a>
		    		          <a href="javascript:;" filter-value="hotel"><i class="icon"></i>酒店</a>
		    		</div>
		<div class="search_adv_more">
			<span>更多<i class="tn_fontface"></i></span>
		</div>
	</dd>
</dl><dl filter-type="tourDay">
	<dt class="search_adv_tit">行程天数</dt>
	<dd class="search_adv_properties">
		<div class="search_adv_buxian">
			<a class="checked" filter-value="0" href="javascript:;">不限</a>
		</div>
		<div style="height: auto;" class="search_adv_others">
		    		          <a href="javascript:;" filter-value="1"><i class="icon"></i>1天</a>
		    		          <a href="javascript:;" filter-value="2"><i class="icon"></i>2天</a>
		    		          <a href="javascript:;" filter-value="3"><i class="icon"></i>3天</a>
		    		          <a href="javascript:;" filter-value="4"><i class="icon"></i>4天</a>
		    		          <a href="javascript:;" filter-value="5"><i class="icon"></i>5天</a>
		    		          <a href="javascript:;" filter-value="6"><i class="icon"></i>6天</a>
		    		          <a href="javascript:;" filter-value="7"><i class="icon"></i>7天</a>
		    		          <a href="javascript:;" filter-value="8"><i class="icon"></i>8天</a>
		    		          <a href="javascript:;" filter-value="9"><i class="icon"></i>9天</a>
		    		          <a href="javascript:;" filter-value="10"><i class="icon"></i>10天</a>
		    		          <a href="javascript:;" filter-value="11"><i class="icon"></i>11天</a>
		    		          <a href="javascript:;" filter-value="12"><i class="icon"></i>12天</a>
		    		          <a href="javascript:;" filter-value="13"><i class="icon"></i>13天</a>
		    		          <a href="javascript:;" filter-value="14"><i class="icon"></i>14天</a>
		    		          <a href="javascript:;" filter-value="15"><i class="icon"></i>15天</a>
		    		          <a href="javascript:;" filter-value="16"><i class="icon"></i>16天</a>
		    		          <a href="javascript:;" filter-value="17"><i class="icon"></i>17天</a>
		    		          <a href="javascript:;" filter-value="18"><i class="icon"></i>18天</a>
		    		          <a href="javascript:;" filter-value="19"><i class="icon"></i>19天</a>
		    		          <a href="javascript:;" filter-value="20"><i class="icon"></i>20天</a>
		    		          <a href="javascript:;" filter-value="21"><i class="icon"></i>21天</a>
		    		          <a href="javascript:;" filter-value="22"><i class="icon"></i>22天</a>
		    		          <a href="javascript:;" filter-value="23"><i class="icon"></i>23天</a>
		    		          <a href="javascript:;" filter-value="24"><i class="icon"></i>24天</a>
		    		          <a href="javascript:;" filter-value="25"><i class="icon"></i>25天</a>
		    		          <a href="javascript:;" filter-value="26"><i class="icon"></i>26天</a>
		    		          <a href="javascript:;" filter-value="27"><i class="icon"></i>27天</a>
		    		          <a href="javascript:;" filter-value="28"><i class="icon"></i>28天</a>
		    		          <a href="javascript:;" filter-value="29"><i class="icon"></i>29天</a>
		    		          <a href="javascript:;" filter-value="30"><i class="icon"></i>30天</a>
		    		          <a href="javascript:;" filter-value="31"><i class="icon"></i>31天</a>
		    		          <a href="javascript:;" filter-value="32"><i class="icon"></i>32天</a>
		    		          <a href="javascript:;" filter-value="33"><i class="icon"></i>33天</a>
		    		          <a href="javascript:;" filter-value="34"><i class="icon"></i>34天</a>
		    		          <a href="javascript:;" filter-value="35"><i class="icon"></i>35天</a>
		    		          <a href="javascript:;" filter-value="36"><i class="icon"></i>36天</a>
		    		          <a href="javascript:;" filter-value="37"><i class="icon"></i>37天</a>
		    		          <a href="javascript:;" filter-value="38"><i class="icon"></i>38天</a>
		    		          <a href="javascript:;" filter-value="40"><i class="icon"></i>40天</a>
		    		          <a href="javascript:;" filter-value="41"><i class="icon"></i>41天</a>
		    		          <a href="javascript:;" filter-value="42"><i class="icon"></i>42天</a>
		    		          <a href="javascript:;" filter-value="43"><i class="icon"></i>43天</a>
		    		          <a href="javascript:;" filter-value="44"><i class="icon"></i>44天</a>
		    		          <a href="javascript:;" filter-value="46"><i class="icon"></i>46天</a>
		    		          <a href="javascript:;" filter-value="53"><i class="icon"></i>53天</a>
		    		          <a href="javascript:;" filter-value="57"><i class="icon"></i>57天</a>
		    		          <a href="javascript:;" filter-value="91"><i class="icon"></i>91天</a>
		    		</div>
		<div class="search_adv_more">
			<span>更多<i class="tn_fontface"></i></span>
		</div>
	</dd>
</dl><dl filter-type="price">
    <dt class="search_adv_tit">价格区间</dt>
    <dd class="search_adv_properties">
        <div class="J_FilterCustomPrice search_adv_custom">
            <div class="search_adv_custom_inner">
                <span class="search_adv_input">
                    <i>¥</i>
                    <input name="min" type="text">
                </span>
                <span class="search_adv_sep">-</span>
                <span class="search_adv_input">
                    <i>¥</i>
                    <input name="max" type="text">
                </span>
                <div class="search_adv_custom_btns">
                    <a href="javascript:;" class="J_FilterCustomBtnCls search_adv_custom_cls">清空</a>
                    <a href="javascript:;" class="J_FilterCustomBtnOK search_adv_custom_ok">确定</a>
                </div>
            </div>
        </div>
    </dd>
</dl>                    </div> 
                </div>
            </div>
        </div>
        <!-- basic sel end -->
        <!-- more sel start -->
        <div class="moreCondition hide">
            <h4 class="sb_tt mar_top30">更多条件</h4>
            <div class="search_filter">
                <div id="J_Filter" class="search_adv">
                    <div style="display: block;" class="search_adv_con" id="J_Filters">
                        <div class="search_adv_item clearfix" id="J_FilterItems">
                            <dl filter-type="play_jiaotongCombination">
	<dt class="search_adv_tit">交通类型</dt>
	<dd class="search_adv_properties">
		<div class="search_adv_buxian">
			<a class="checked" filter-value="0" href="javascript:;">不限</a>
		</div>
		<div style="height: auto;" class="search_adv_others">
		    		          <a href="javascript:;" filter-value="495"><i class="icon"></i>汽车往返</a>
		    		          <a href="javascript:;" filter-value="494"><i class="icon"></i>火车往返</a>
		    		          <a href="javascript:;" filter-value="498"><i class="icon"></i>直飞</a>
		    		          <a href="javascript:;" filter-value="499"><i class="icon"></i>转机</a>
		    		          <a href="javascript:;" filter-value="496"><i class="icon"></i>飞机+火车往返</a>
		    		          <a href="javascript:;" filter-value="500"><i class="icon"></i>联运</a>
		    		          <a href="javascript:;" filter-value="1368"><i class="icon"></i>飞机+汽车往返</a>
		    		          <a href="javascript:;" filter-value="1758"><i class="icon"></i>高铁/动车</a>
		    		          <a href="javascript:;" filter-value="493"><i class="icon"></i>飞机往返</a>
		    		</div>
		<div class="search_adv_more">
			<span>更多<i class="tn_fontface"></i></span>
		</div>
	</dd>
</dl><dl filter-type="play_chanpinCombination">
	<dt class="search_adv_tit">产品特色</dt>
	<dd class="search_adv_properties">
		<div class="search_adv_buxian">
			<a class="checked" filter-value="0" href="javascript:;">不限</a>
		</div>
		<div style="height: auto;" class="search_adv_others">
		    		          <a href="javascript:;" filter-value="1536"><i class="icon"></i>纯玩无购物</a>
		    		          <a href="javascript:;" filter-value="2017"><i class="icon"></i>海景房</a>
		    		          <a href="javascript:;" filter-value="2005"><i class="icon"></i>情侣蜜月</a>
		    		          <a href="javascript:;" filter-value="2007"><i class="icon"></i>亲子游</a>
		    		          <a href="javascript:;" filter-value="1530"><i class="icon"></i>免费wifi</a>
		    		          <a href="javascript:;" filter-value="2065"><i class="icon"></i>摄影采风</a>
		    		          <a href="javascript:;" filter-value="2064"><i class="icon"></i>购物血拼</a>
		    		          <a href="javascript:;" filter-value="2006"><i class="icon"></i>爸妈游</a>
		    		          <a href="javascript:;" filter-value="2035"><i class="icon"></i>海滨/岛屿</a>
		    		          <a href="javascript:;" filter-value="1779"><i class="icon"></i>中文服务</a>
		    		          <a href="javascript:;" filter-value="1812"><i class="icon"></i>无自费</a>
		    		          <a href="javascript:;" filter-value="2063"><i class="icon"></i>美食</a>
		    		          <a href="javascript:;" filter-value="2125"><i class="icon"></i>公园乐园</a>
		    		          <a href="javascript:;" filter-value="2004"><i class="icon"></i>毕业旅行</a>
		    		          <a href="javascript:;" filter-value="2070"><i class="icon"></i>游学</a>
		    		          <a href="javascript:;" filter-value="5343"><i class="icon"></i>有自由活动时间</a>
		    		          <a href="javascript:;" filter-value="2216"><i class="icon"></i>一岛一酒店</a>
		    		          <a href="javascript:;" filter-value="2040"><i class="icon"></i>踏青赏花</a>
		    		          <a href="javascript:;" filter-value="2076"><i class="icon"></i>温泉/Spa</a>
		    		          <a href="javascript:;" filter-value="2052"><i class="icon"></i>民俗风情</a>
		    		          <a href="javascript:;" filter-value="2108"><i class="icon"></i>潜水</a>
		    		          <a href="javascript:;" filter-value="4991"><i class="icon"></i>高性价比</a>
		    		          <a href="javascript:;" filter-value="1512"><i class="icon"></i>新航假期</a>
		    		          <a href="javascript:;" filter-value="2036"><i class="icon"></i>湖光山色</a>
		    		          <a href="javascript:;" filter-value="2054"><i class="icon"></i>宗教祈福</a>
		    		          <a href="javascript:;" filter-value="2037"><i class="icon"></i>自然遗产/景区</a>
		    		          <a href="javascript:;" filter-value="1805"><i class="icon"></i>机场接/送</a>
		    		          <a href="javascript:;" filter-value="1109"><i class="icon"></i>免税店</a>
		    		          <a href="javascript:;" filter-value="2051"><i class="icon"></i>古镇水乡</a>
		    		          <a href="javascript:;" filter-value="2042"><i class="icon"></i>赏枫</a>
		    		          <a href="javascript:;" filter-value="2127"><i class="icon"></i>农家采摘</a>
		    		          <a href="javascript:;" filter-value="2066"><i class="icon"></i>婚纱摄影</a>
		    		          <a href="javascript:;" filter-value="2107"><i class="icon"></i>漂流</a>
		    		          <a href="javascript:;" filter-value="2675"><i class="icon"></i>租车自驾</a>
		    		          <a href="javascript:;" filter-value="2039"><i class="icon"></i>草原游</a>
		    		          <a href="javascript:;" filter-value="2101"><i class="icon"></i>滑雪</a>
		    		          <a href="javascript:;" filter-value="2038"><i class="icon"></i>戈壁沙漠</a>
		    		          <a href="javascript:;" filter-value="2053"><i class="icon"></i>古迹遗址</a>
		    		          <a href="javascript:;" filter-value="2067"><i class="icon"></i>旅游婚礼</a>
		    		          <a href="javascript:;" filter-value="4132"><i class="icon"></i>明星同款</a>
		    		          <a href="javascript:;" filter-value="637"><i class="icon"></i>潜水圣地</a>
		    		          <a href="javascript:;" filter-value="648"><i class="icon"></i>摄影采风</a>
		    		          <a href="javascript:;" filter-value="649"><i class="icon"></i>毕业旅行</a>
		    		          <a href="javascript:;" filter-value="652"><i class="icon"></i>亲子</a>
		    		          <a href="javascript:;" filter-value="655"><i class="icon"></i>民俗风情</a>
		    		          <a href="javascript:;" filter-value="656"><i class="icon"></i>古镇村落</a>
		    		</div>
		<div class="search_adv_more">
			<span>更多<i class="tn_fontface"></i></span>
		</div>
	</dd>
</dl><dl filter-type="play_zutuanCombination">
	<dt class="search_adv_tit">组团特色</dt>
	<dd class="search_adv_properties">
		<div class="search_adv_buxian">
			<a class="checked" filter-value="0" href="javascript:;">不限</a>
		</div>
		<div style="height: auto;" class="search_adv_others">
		    		          <a href="javascript:;" filter-value="1543"><i class="icon"></i>铁定成团</a>
		    		          <a href="javascript:;" filter-value="2224"><i class="icon"></i>天天发团</a>
		    		          <a href="javascript:;" filter-value="490"><i class="icon"></i>私家团（1单1团）</a>
		    		          <a href="javascript:;" filter-value="1803"><i class="icon"></i>途牛独立团</a>
		    		          <a href="javascript:;" filter-value="489"><i class="icon"></i>小团出游(10人左右)</a>
		    		          <a href="javascript:;" filter-value="1954"><i class="icon"></i>循环团</a>
		    		          <a href="javascript:;" filter-value="2223"><i class="icon"></i>目的地成团</a>
		    		</div>
		<div class="search_adv_more">
			<span>更多<i class="tn_fontface"></i></span>
		</div>
	</dd>
</dl><dl filter-type="play_zhusuCombination">
	<dt class="search_adv_tit">住宿类型</dt>
	<dd class="search_adv_properties">
		<div class="search_adv_buxian">
			<a class="checked" filter-value="0" href="javascript:;">不限</a>
		</div>
		<div style="height: auto;" class="search_adv_others">
		    		          <a href="javascript:;" filter-value="507"><i class="icon"></i>舒适</a>
		    		          <a href="javascript:;" filter-value="511"><i class="icon"></i>别墅</a>
		    		          <a href="javascript:;" filter-value="516"><i class="icon"></i>旅馆客栈</a>
		    		          <a href="javascript:;" filter-value="517"><i class="icon"></i>公寓式酒店</a>
		    		          <a href="javascript:;" filter-value="518"><i class="icon"></i>青年旅舍</a>
		    		          <a href="javascript:;" filter-value="570"><i class="icon"></i>凯悦</a>
		    		          <a href="javascript:;" filter-value="667"><i class="icon"></i>农家乐</a>
		    		          <a href="javascript:;" filter-value="668"><i class="icon"></i>帐篷</a>
		    		          <a href="javascript:;" filter-value="1540"><i class="icon"></i>含国际五星</a>
		    		          <a href="javascript:;" filter-value="1542"><i class="icon"></i>特色住宿</a>
		    		          <a href="javascript:;" filter-value="1958"><i class="icon"></i>双酒店体验</a>
		    		          <a href="javascript:;" filter-value="2008"><i class="icon"></i>三星级/舒适</a>
		    		          <a href="javascript:;" filter-value="2009"><i class="icon"></i>四星级/高档</a>
		    		          <a href="javascript:;" filter-value="2010"><i class="icon"></i>五星级/豪华</a>
		    		          <a href="javascript:;" filter-value="2011"><i class="icon"></i>全程国际五星</a>
		    		          <a href="javascript:;" filter-value="2014"><i class="icon"></i>二星级及以下/经济</a>
		    		          <a href="javascript:;" filter-value="2017"><i class="icon"></i>海景房</a>
		    		          <a href="javascript:;" filter-value="2020"><i class="icon"></i>塞班海景酒店（OV）</a>
		    		          <a href="javascript:;" filter-value="2022"><i class="icon"></i>珊瑚海洋酒店（COP）</a>
		    		          <a href="javascript:;" filter-value="2024"><i class="icon"></i>哈发黛水晶楼</a>
		    		          <a href="javascript:;" filter-value="2029"><i class="icon"></i>玛丽安娜酒店</a>
		    		          <a href="javascript:;" filter-value="2030"><i class="icon"></i>世界酒店</a>
		    		          <a href="javascript:;" filter-value="2031"><i class="icon"></i>清泉酒店</a>
		    		</div>
		<div class="search_adv_more">
			<span>更多<i class="tn_fontface"></i></span>
		</div>
	</dd>
</dl><dl filter-type="play_jiudianSCombination">
	<dt class="search_adv_tit">酒店品牌</dt>
	<dd class="search_adv_properties">
		<div class="search_adv_buxian">
			<a class="checked" filter-value="0" href="javascript:;">不限</a>
		</div>
		<div style="height: auto;" class="search_adv_others">
		    		          <a href="javascript:;" filter-value="572"><i class="icon"></i>喜来登</a>
		    		          <a href="javascript:;" filter-value="584"><i class="icon"></i>洲际</a>
		    		          <a href="javascript:;" filter-value="569"><i class="icon"></i>希尔顿</a>
		    		          <a href="javascript:;" filter-value="599"><i class="icon"></i>豪生</a>
		    		          <a href="javascript:;" filter-value="570"><i class="icon"></i>凯悦</a>
		    		          <a href="javascript:;" filter-value="603"><i class="icon"></i>悦榕集团Banyan Tree</a>
		    		          <a href="javascript:;" filter-value="573"><i class="icon"></i>万豪</a>
		    		          <a href="javascript:;" filter-value="2028"><i class="icon"></i>悦泰酒店</a>
		    		          <a href="javascript:;" filter-value="601"><i class="icon"></i>凯宾斯基</a>
		    		          <a href="javascript:;" filter-value="587"><i class="icon"></i>香格里拉酒店</a>
		    		          <a href="javascript:;" filter-value="602"><i class="icon"></i>铂尔曼</a>
		    		          <a href="javascript:;" filter-value="596"><i class="icon"></i>丽思卡尔顿酒店</a>
		    		          <a href="javascript:;" filter-value="598"><i class="icon"></i>美高梅度假酒店</a>
		    		          <a href="javascript:;" filter-value="597"><i class="icon"></i>维景</a>
		    		          <a href="javascript:;" filter-value="590"><i class="icon"></i>诺富特酒店</a>
		    		          <a href="javascript:;" filter-value="600"><i class="icon"></i>银泰</a>
		    		          <a href="javascript:;" filter-value="604"><i class="icon"></i>皇冠</a>
		    		          <a href="javascript:;" filter-value="607"><i class="icon"></i>阿达兰集团Adaaran</a>
		    		          <a href="javascript:;" filter-value="605"><i class="icon"></i>花间堂</a>
		    		          <a href="javascript:;" filter-value="586"><i class="icon"></i>四季</a>
		    		          <a href="javascript:;" filter-value="611"><i class="icon"></i>森塔拉集团Centara</a>
		    		          <a href="javascript:;" filter-value="615"><i class="icon"></i>假日酒店集团Holiday Inn</a>
		    		          <a href="javascript:;" filter-value="624"><i class="icon"></i>太阳旅游集团Sun Travel</a>
		    		          <a href="javascript:;" filter-value="576"><i class="icon"></i>华美达</a>
		    		          <a href="javascript:;" filter-value="585"><i class="icon"></i>索菲特</a>
		    		          <a href="javascript:;" filter-value="613"><i class="icon"></i>地中海俱乐部集团Club Med</a>
		    		          <a href="javascript:;" filter-value="1021"><i class="icon"></i>喜达屋集团</a>
		    		          <a href="javascript:;" filter-value="1851"><i class="icon"></i>BC集团</a>
		    		          <a href="javascript:;" filter-value="575"><i class="icon"></i>Fairmont酒店</a>
		    		          <a href="javascript:;" filter-value="608"><i class="icon"></i>艾登尼兹集团Aydeniz</a>
		    		          <a href="javascript:;" filter-value="621"><i class="icon"></i>贝安琪集团Per Aquum</a>
		    		          <a href="javascript:;" filter-value="2023"><i class="icon"></i>哈发黛主楼</a>
		    		          <a href="javascript:;" filter-value="616"><i class="icon"></i>椰林精选集团Coco Collection</a>
		    		          <a href="javascript:;" filter-value="2026"><i class="icon"></i>卡诺亚主楼</a>
		    		          <a href="javascript:;" filter-value="571"><i class="icon"></i>戴斯</a>
		    		          <a href="javascript:;" filter-value="574"><i class="icon"></i>迪斯尼奥兰多度假酒店</a>
		    		          <a href="javascript:;" filter-value="580"><i class="icon"></i>安娜塔拉集团</a>
		    		          <a href="javascript:;" filter-value="609"><i class="icon"></i>查亚集团Chaaya</a>
		    		          <a href="javascript:;" filter-value="1850"><i class="icon"></i>SUN集团</a>
		    		          <a href="javascript:;" filter-value="578"><i class="icon"></i>卓美亚集团</a>
		    		          <a href="javascript:;" filter-value="617"><i class="icon"></i>都喜集团Dusit</a>
		    		          <a href="javascript:;" filter-value="2024"><i class="icon"></i>哈发黛水晶楼</a>
		    		          <a href="javascript:;" filter-value="2027"><i class="icon"></i>卡诺亚高楼</a>
		    		          <a href="javascript:;" filter-value="612"><i class="icon"></i>环球集团Universal</a>
		    		          <a href="javascript:;" filter-value="1020"><i class="icon"></i>珍珠集团</a>
		    		          <a href="javascript:;" filter-value="606"><i class="icon"></i>温德姆</a>
		    		          <a href="javascript:;" filter-value="614"><i class="icon"></i>康斯丹集团Constance</a>
		    		          <a href="javascript:;" filter-value="2020"><i class="icon"></i>塞班海景酒店（OV）</a>
		    		          <a href="javascript:;" filter-value="2025"><i class="icon"></i>哈发黛塔加楼（TAGA）</a>
		    		          <a href="javascript:;" filter-value="581"><i class="icon"></i>泰姬集团</a>
		    		          <a href="javascript:;" filter-value="610"><i class="icon"></i>维拉集团Villa</a>
		    		          <a href="javascript:;" filter-value="669"><i class="icon"></i>瑞吉</a>
		    		          <a href="javascript:;" filter-value="897"><i class="icon"></i>昂格利</a>
		    		          <a href="javascript:;" filter-value="1816"><i class="icon"></i>红树林度假世界</a>
		    		          <a href="javascript:;" filter-value="1261"><i class="icon"></i>椰子黑鹦鹉酒店</a>
		    		          <a href="javascript:;" filter-value="1387"><i class="icon"></i>LUX</a>
		    		          <a href="javascript:;" filter-value="1388"><i class="icon"></i>英迪格</a>
		    		          <a href="javascript:;" filter-value="1265"><i class="icon"></i>莱佛士</a>
		    		          <a href="javascript:;" filter-value="1852"><i class="icon"></i>LUX集团</a>
		    		          <a href="javascript:;" filter-value="579"><i class="icon"></i>唯一集团</a>
		    		          <a href="javascript:;" filter-value="589"><i class="icon"></i>美居酒店</a>
		    		          <a href="javascript:;" filter-value="618"><i class="icon"></i>第六感集团Six Senses</a>
		    		          <a href="javascript:;" filter-value="895"><i class="icon"></i>3A</a>
		    		          <a href="javascript:;" filter-value="896"><i class="icon"></i>莉莉</a>
		    		          <a href="javascript:;" filter-value="899"><i class="icon"></i>依迪尔</a>
		    		          <a href="javascript:;" filter-value="1227"><i class="icon"></i>柏嘉亚布法隆</a>
		    		          <a href="javascript:;" filter-value="593"><i class="icon"></i>元明酒店</a>
		    		          <a href="javascript:;" filter-value="619"><i class="icon"></i>力士集团Lux*</a>
		    		          <a href="javascript:;" filter-value="1236"><i class="icon"></i>悦榕庄</a>
		    		          <a href="javascript:;" filter-value="1824"><i class="icon"></i>三亚大小洞天小月湾度假酒店</a>
		    		          <a href="javascript:;" filter-value="5091"><i class="icon"></i>京韵</a>
		    		          <a href="javascript:;" filter-value="595"><i class="icon"></i>丝绸麦哲伦酒店</a>
		    		          <a href="javascript:;" filter-value="622"><i class="icon"></i>立鼎世集团</a>
		    		          <a href="javascript:;" filter-value="1393"><i class="icon"></i>途家斯维登</a>
		    		          <a href="javascript:;" filter-value="5085"><i class="icon"></i>哈曼</a>
		    		          <a href="javascript:;" filter-value="594"><i class="icon"></i>格兰婆罗酒店</a>
		    		          <a href="javascript:;" filter-value="1563"><i class="icon"></i>萨沃伊水疗度假村</a>
		    		          <a href="javascript:;" filter-value="591"><i class="icon"></i>君悦酒店</a>
		    		          <a href="javascript:;" filter-value="744"><i class="icon"></i>乐天酒店集团</a>
		    		          <a href="javascript:;" filter-value="1180"><i class="icon"></i>Mana度假村</a>
		    		          <a href="javascript:;" filter-value="1210"><i class="icon"></i>Yasawa度假村</a>
		    		          <a href="javascript:;" filter-value="1269"><i class="icon"></i>拉布瑞思希尔顿</a>
		    		          <a href="javascript:;" filter-value="1835"><i class="icon"></i>亚龙湾天域度假酒店</a>
		    		          <a href="javascript:;" filter-value="1846"><i class="icon"></i>三亚阳光大酒店</a>
		    		          <a href="javascript:;" filter-value="5083"><i class="icon"></i>大卫传奇</a>
		    		          <a href="javascript:;" filter-value="577"><i class="icon"></i>太阳城集团</a>
		    		          <a href="javascript:;" filter-value="582"><i class="icon"></i>亚特兰蒂斯酒店</a>
		    		          <a href="javascript:;" filter-value="583"><i class="icon"></i>七星帆船酒店</a>
		    		          <a href="javascript:;" filter-value="588"><i class="icon"></i>丽晶酒店</a>
		    		          <a href="javascript:;" filter-value="592"><i class="icon"></i>汶莱帝国酒店</a>
		    		          <a href="javascript:;" filter-value="620"><i class="icon"></i>总督集团Viceroy</a>
		    		          <a href="javascript:;" filter-value="623"><i class="icon"></i>索尼娃集团Soneva</a>
		    		          <a href="javascript:;" filter-value="1181"><i class="icon"></i>Matamanoa度假村</a>
		    		          <a href="javascript:;" filter-value="1209"><i class="icon"></i>Namale度假村</a>
		    		          <a href="javascript:;" filter-value="1234"><i class="icon"></i>霍斯诺尔摩希尔顿</a>
		    		          <a href="javascript:;" filter-value="1390"><i class="icon"></i>世纪金源</a>
		    		          <a href="javascript:;" filter-value="1394"><i class="icon"></i>银座佳驿</a>
		    		          <a href="javascript:;" filter-value="5086"><i class="icon"></i>君锦滨海</a>
		    		          <a href="javascript:;" filter-value="5093"><i class="icon"></i>克拉码头</a>
		    		          <a href="javascript:;" filter-value="833"><i class="icon"></i>万豪温泉酒店</a>
		    		</div>
		<div class="search_adv_more">
			<span>更多<i class="tn_fontface"></i></span>
		</div>
	</dd>
</dl><dl filter-type="play_hancanCombination">
	<dt class="search_adv_tit">含餐</dt>
	<dd class="search_adv_properties">
		<div class="search_adv_buxian">
			<a class="checked" filter-value="0" href="javascript:;">不限</a>
		</div>
		<div style="height: auto;" class="search_adv_others">
		    		          <a href="javascript:;" filter-value="706"><i class="icon"></i>早餐</a>
		    		          <a href="javascript:;" filter-value="703"><i class="icon"></i>一价全含</a>
		    		          <a href="javascript:;" filter-value="705"><i class="icon"></i>早晚餐</a>
		    		          <a href="javascript:;" filter-value="704"><i class="icon"></i>早中晚餐</a>
		    		</div>
		<div class="search_adv_more">
			<span>更多<i class="tn_fontface"></i></span>
		</div>
	</dd>
</dl>                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- more sel end -->
        <div class="showallbtn_box">
            <div class="showallbtn_s">
                <a class="" href="javascript:void(0);">更多条件（交通类型、住宿类型、组团特色、产品特色）<em class="tn_fontface"></em></a>
            </div>
        </div>
        <div class="commit_btn">
            <input value="搜索" class="com_btn" onclick="searchAjax.advanceSearch(this);" type="button">
            <a onclick="search_input.clearSearchLens(this);" href="javascript:;">清空搜索条件</a>
        </div>
    </div>
</div><div style="display: none;" class="search_inputBox" id="searchInputBox">    <div class="search_inputList">

        <dl class="sib_dl clearfix">

            <dt class="sib_tt">热门搜索</dt>

            <dd class="tn_fontface closeThisBox"></dd>

        </dl>

        <dl class="clearfix sib_des">

            <dt>国内</dt>

            <dd>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-1-云南" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E4%BA%91%E5%8D%97/">云南</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-2-九寨沟" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E4%B9%9D%E5%AF%A8%E6%B2%9F/">九寨沟</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-3-三亚" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E4%B8%89%E4%BA%9A/">三亚</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-4-青岛" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E9%9D%92%E5%B2%9B/">青岛</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-5-厦门" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E5%8E%A6%E9%97%A8/">厦门</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-6-古北水镇" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E5%8F%A4%E5%8C%97%E6%B0%B4%E9%95%87/">古北水镇</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-7-北戴河" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E5%8C%97%E6%88%B4%E6%B2%B3/">北戴河</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-8-张家界" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E5%BC%A0%E5%AE%B6%E7%95%8C/">张家界</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-9-大连" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E5%A4%A7%E8%BF%9E/">大连</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-10-长白山" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E9%95%BF%E7%99%BD%E5%B1%B1/">长白山</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-11-新疆" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E6%96%B0%E7%96%86/">新疆</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-12-丽江" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E4%B8%BD%E6%B1%9F/">丽江</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-13-西安" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E8%A5%BF%E5%AE%89/">西安</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-14-上海" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E4%B8%8A%E6%B5%B7/">上海</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-国内-15-西藏" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E8%A5%BF%E8%97%8F/">西藏</a>
                    </div>
                            </dd>

        </dl>

        <dl class="clearfix sib_des">

            <dt>出境</dt>

            <dd>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-1-泰国" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E6%B3%B0%E5%9B%BD/">泰国</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-2-日本" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E6%97%A5%E6%9C%AC/">日本</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-3-巴厘岛" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E5%B7%B4%E5%8E%98%E5%B2%9B/">巴厘岛</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-4-韩国" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E9%9F%A9%E5%9B%BD/">韩国</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-5-马尔代夫" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E9%A9%AC%E5%B0%94%E4%BB%A3%E5%A4%AB/">马尔代夫</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-6-普吉岛" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E6%99%AE%E5%90%89%E5%B2%9B/">普吉岛</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-7-欧洲" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E6%AC%A7%E6%B4%B2/">欧洲</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-8-台湾" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E5%8F%B0%E6%B9%BE/">台湾</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-9-香港" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E9%A6%99%E6%B8%AF/">香港</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-10-济州岛" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E6%B5%8E%E5%B7%9E%E5%B2%9B/">济州岛</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-11-新加坡" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E6%96%B0%E5%8A%A0%E5%9D%A1/">新加坡</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-12-俄罗斯" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E4%BF%84%E7%BD%97%E6%96%AF/">俄罗斯</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-13-美国" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E7%BE%8E%E5%9B%BD/">美国</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-14-塞班" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E5%A1%9E%E7%8F%AD/">塞班</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-出境-15-毛里求斯" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E6%AF%9B%E9%87%8C%E6%B1%82%E6%96%AF/">毛里求斯</a>
                    </div>
                            </dd>

        </dl>

        <dl class="clearfix sib_des">

            <dt>主题</dt>

            <dd>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-主题-1-坝上草原" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E5%9D%9D%E4%B8%8A%E8%8D%89%E5%8E%9F/">坝上草原</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-主题-2-草原" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E8%8D%89%E5%8E%9F/">草原</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-主题-3-国庆" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E5%9B%BD%E5%BA%86/">国庆</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-主题-4-上海迪士尼" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E4%B8%8A%E6%B5%B7%E8%BF%AA%E5%A3%AB%E5%B0%BC/">上海迪士尼</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-主题-5-张北草原" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E5%BC%A0%E5%8C%97%E8%8D%89%E5%8E%9F/">张北草原</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-主题-6-丰宁坝上草原" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E4%B8%B0%E5%AE%81%E5%9D%9D%E4%B8%8A%E8%8D%89%E5%8E%9F/">丰宁坝上草原</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-主题-7-上海迪士尼乐园" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E4%B8%8A%E6%B5%B7%E8%BF%AA%E5%A3%AB%E5%B0%BC%E4%B9%90%E5%9B%AD/">上海迪士尼乐园</a>
                    </div>
                                    <div class="an_mo J_MForHS" liwithhan="搜索热门搜索-主题-8-草原天路" style="display:inline;">
                        <a href="http://s.tuniu.com/search_complex/whole-bj-0-%E8%8D%89%E5%8E%9F%E5%A4%A9%E8%B7%AF/">草原天路</a>
                    </div>
                            </dd>

        </dl>

    </div>


<!-- search_inputBox end -->
</div><div style="height: 631px;" id="rightCommon" class="right_common"><ul id="rightCommonUl" class="hide"><li id=""><ul id="rcTop"><li class="" style="height:148px;cursor:pointer;"></li><li style="height:42px;margin-top:20px;cursor:pointer;"><div class="rc_index"><p class="rc_app_box"><span class="rc_icon rc_app"></span></p></div><div class="rc_box rc_app_b nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_content"><a href="http://trips.tuniu.com/%E6%97%A0" ><img src="../image/head_qrcode_20160405.png" alt=""></a></div></div></li></ul></li><li><ul id="rcMid"><li class="mytuniuArea" style="padding:10px 0;cursorpointer;"><div class="rc_index"><p class=""><a href="http://www.tuniu.com/main.php?do=user_change_picture" ><span class="rc_icon rc_tuniu"></span></a></p><p class="rc_wd" id="lessThanHide" style="padding:0;">我的途牛</p></div><div class="rc_box nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_common_box nologin"><div style="background-color:#fff;opacity:0.5;filter:alpha(opacity=50);width:236px;height:372px;position: absolute;top: 0;left: 0;display:none;" class="rcLoadingImg"></div><img src="../image/loading-72x72.gif" class="rcLoadingImg" style="position:absolute;top:150px;left:82px;display:none;"><p class="show_error" id=""></p><dl class="rc_double_col rc_w_s clearfix"><dt>账号：</dt><dd></dd></dl><p class="account hide"><input class="rc_common_input" type="text"><span class="lenovo"><span class="nickName"></span><br>来自.tuniu.com的密码</span></p><p><input tabindex="1" class="rc_common_input rcUserName" type="text"></p><dl class="rc_double_col rc_w_s clearfix"><dt>密码：</dt><dd><a href="http://www.tuniu.com/u/get_password"  class="rc_g_color">找回密码</a></dd></dl><p><input tabindex="2" class="rc_common_input rcPassWord" type="password"></p><dl class="rc_double_col rc_w_s clearfix"><dt>验证码：</dt><dd></dd></dl><dl class="rc_double_col clearfix"><dt><input tabindex="3" class="rc_common_input rc_small rcVerCode" type="text"></dt><dd class="rc_pad_top"><img class="identify_img" alt="如验证码无法辨别，点击即可刷新。" onclick="" onload="" style="display: inline;" src="../css/identify.htm" align="absmiddle" height="24" width="80"><img src="../image/refresh.jpg" alt="" class="change_img" style="display: inline;" align="absmiddle" height="24" width="24"></dd></dl><input class="rc_ableBtn" value="登录" type="button"><dl class="rc_double_col rc_reg clearfix"><dt>首次登录，请先<a href="http://www.tuniu.com/u/register"  class="rc_g_color"> 注册</a></dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他<a href="http://www.tuniu.com/u/login"  class="rc_g_color"> 登录&gt;&gt;</a></dd></dl></div></div></li><li class="hoverClick"><div class="rc_index"><p class="rc_topBot_b"><span class="rc_icon rc_collect"></span></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content"><p class="rc_des">我的关注</p></div></div><div class="rc_box rc_click_event nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_common_box nologin"><div style="background-color:#fff;opacity:0.5;filter:alpha(opacity=50);width:236px;height:372px;position: absolute;top: 0;left: 0;display:none;" class="rcLoadingImg"></div><img src="../image/loading-72x72.gif" class="rcLoadingImg" style="position:absolute;top:150px;left:82px;display:none;"><p class="show_error" id=""></p><dl class="rc_double_col rc_w_s clearfix"><dt>账号：</dt><dd></dd></dl><p class="account hide"><input class="rc_common_input" type="text"><span class="lenovo"><span class="nickName"></span><br>来自.tuniu.com的密码</span></p><p><input tabindex="1" class="rc_common_input rcUserName" type="text"></p><dl class="rc_double_col rc_w_s clearfix"><dt>密码：</dt><dd><a href="http://www.tuniu.com/u/get_password"  class="rc_g_color">找回密码</a></dd></dl><p><input tabindex="2" class="rc_common_input rcPassWord" type="password"></p><dl class="rc_double_col rc_w_s clearfix"><dt>验证码：</dt><dd></dd></dl><dl class="rc_double_col clearfix"><dt><input tabindex="3" class="rc_common_input rc_small rcVerCode" type="text"></dt><dd class="rc_pad_top"><img class="identify_img" alt="如验证码无法辨别，点击即可刷新。" onclick="" onload="" style="display: inline;" src="../css/identify.htm" align="absmiddle" height="24" width="80"><img src="../image/refresh.jpg" alt="" class="change_img" style="display: inline;" align="absmiddle" height="24" width="24"></dd></dl><input class="rc_ableBtn" value="登录" type="button"><dl class="rc_double_col rc_reg clearfix"><dt>首次登录，请先<a href="http://www.tuniu.com/u/register"  class="rc_g_color"> 注册</a></dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他<a href="http://www.tuniu.com/u/login"  class="rc_g_color"> 登录&gt;&gt;</a></dd></dl></div></div> </li><li class="hoverClick" style="display:none;"><div class="rc_index"><p class="rc_topBot_b"><span class="rc_icon rc_jifen"></span></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content"><p class="rc_des">我的积分</p></div> </div><div class="rc_box rc_click_event nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_common_box nologin"><div style="background-color:#fff;opacity:0.5;filter:alpha(opacity=50);width:236px;height:372px;position: absolute;top: 0;left: 0;display:none;" class="rcLoadingImg"></div><img src="../image/loading-72x72.gif" class="rcLoadingImg" style="position:absolute;top:150px;left:82px;display:none;"><p class="show_error" id=""></p><dl class="rc_double_col rc_w_s clearfix"><dt>账号：</dt><dd></dd></dl><p class="account hide"><input class="rc_common_input" type="text"><span class="lenovo"><span class="nickName"></span><br>来自.tuniu.com的密码</span></p><p><input tabindex="1" class="rc_common_input rcUserName" type="text"></p><dl class="rc_double_col rc_w_s clearfix"><dt>密码：</dt><dd><a href="http://www.tuniu.com/u/get_password"  class="rc_g_color">找回密码</a></dd></dl><p><input tabindex="2" class="rc_common_input rcPassWord" type="password"></p><dl class="rc_double_col rc_w_s clearfix"><dt>验证码：</dt><dd></dd></dl><dl class="rc_double_col clearfix"><dt><input tabindex="3" class="rc_common_input rc_small rcVerCode" type="text"></dt><dd class="rc_pad_top"><img class="identify_img" alt="如验证码无法辨别，点击即可刷新。" onclick="" onload="" style="display: inline;" src="../css/identify.htm" align="absmiddle" height="24" width="80"><img src="../image/refresh.jpg" alt="" class="change_img" style="display: inline;" align="absmiddle" height="24" width="24"></dd></dl><input class="rc_ableBtn" value="登录" type="button"><dl class="rc_double_col rc_reg clearfix"><dt>首次登录，请先<a href="http://www.tuniu.com/u/register"  class="rc_g_color"> 注册</a></dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他<a href="http://www.tuniu.com/u/login"  class="rc_g_color"> 登录&gt;&gt;</a></dd></dl></div></div></li><li class="hoverClick"><div class="rc_index"><p class="rc_topBot_b"><span class="rc_icon rc_order"></span></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content"><p class="rc_des">我的订单</p></div></div><div class="rc_box rc_click_event nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_common_box nologin"><div style="background-color:#fff;opacity:0.5;filter:alpha(opacity=50);width:236px;height:372px;position: absolute;top: 0;left: 0;display:none;" class="rcLoadingImg"></div><img src="../image/loading-72x72.gif" class="rcLoadingImg" style="position:absolute;top:150px;left:82px;display:none;"><p class="show_error" id=""></p><dl class="rc_double_col rc_w_s clearfix"><dt>账号：</dt><dd></dd></dl><p class="account hide"><input class="rc_common_input" type="text"><span class="lenovo"><span class="nickName"></span><br>来自.tuniu.com的密码</span></p><p><input tabindex="1" class="rc_common_input rcUserName" type="text"></p><dl class="rc_double_col rc_w_s clearfix"><dt>密码：</dt><dd><a href="http://www.tuniu.com/u/get_password"  class="rc_g_color">找回密码</a></dd></dl><p><input tabindex="2" class="rc_common_input rcPassWord" type="password"></p><dl class="rc_double_col rc_w_s clearfix"><dt>验证码：</dt><dd></dd></dl><dl class="rc_double_col clearfix"><dt><input tabindex="3" class="rc_common_input rc_small rcVerCode" type="text"></dt><dd class="rc_pad_top"><img class="identify_img" alt="如验证码无法辨别，点击即可刷新。" onclick="" onload="" style="display: inline;" src="../css/identify.htm" align="absmiddle" height="24" width="80"><img src="../image/refresh.jpg" alt="" class="change_img" style="display: inline;" align="absmiddle" height="24" width="24"></dd></dl><input class="rc_ableBtn" value="登录" type="button"><dl class="rc_double_col rc_reg clearfix"><dt>首次登录，请先<a href="http://www.tuniu.com/u/register"  class="rc_g_color"> 注册</a></dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他<a href="http://www.tuniu.com/u/login"  class="rc_g_color"> 登录&gt;&gt;</a></dd></dl></div></div></li>
<li class="hoverClick"><div class="rc_index"><p class="rc_topBot_b"><span class="rc_icon rc_quan"></span></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content"><p class="rc_des">我的礼券</p></div></div><div class="rc_box rc_click_event nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_common_box nologin"><div style="background-color:#fff;opacity:0.5;filter:alpha(opacity=50);width:236px;height:372px;position: absolute;top: 0;left: 0;display:none;" class="rcLoadingImg"></div><img src="../image/loading-72x72.gif" class="rcLoadingImg" style="position:absolute;top:150px;left:82px;display:none;"><p class="show_error" id=""></p><dl class="rc_double_col rc_w_s clearfix"><dt>账号：</dt><dd></dd></dl><p class="account hide"><input class="rc_common_input" type="text"><span class="lenovo"><span class="nickName"></span><br>来自.tuniu.com的密码</span></p><p><input tabindex="1" class="rc_common_input rcUserName" type="text"></p><dl class="rc_double_col rc_w_s clearfix"><dt>密码：</dt><dd><a href="http://www.tuniu.com/u/get_password"  class="rc_g_color">找回密码</a></dd></dl><p><input tabindex="2" class="rc_common_input rcPassWord" type="password"></p><dl class="rc_double_col rc_w_s clearfix"><dt>验证码：</dt><dd></dd></dl><dl class="rc_double_col clearfix"><dt><input tabindex="3" class="rc_common_input rc_small rcVerCode" type="text"></dt><dd class="rc_pad_top"><img class="identify_img" alt="如验证码无法辨别，点击即可刷新。" onclick="" onload="" style="display: inline;" src="../css/identify.htm" align="absmiddle" height="24" width="80"><img src="../image/refresh.jpg" alt="" class="change_img" style="display: inline;" align="absmiddle" height="24" width="24"></dd></dl><input class="rc_ableBtn" value="登录" type="button"><dl class="rc_double_col rc_reg clearfix"><dt>首次登录，请先<a href="http://www.tuniu.com/u/register"  class="rc_g_color"> 注册</a></dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他<a href="http://www.tuniu.com/u/login"  class="rc_g_color"> 登录&gt;&gt;</a></dd></dl></div></div></li><li class="hoverClick"><div class="rc_index"><p class="rc_topBot_b"><span class="rc_icon rc_kefutips"></span></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content"><p class="rc_des">消息提醒</p></div></div><div class="rc_box rc_click_event nopad"><span class="rc_arrow"><i class="triangle_border"><em></em></i></span><div class="rc_common_box nologin"><div style="background-color:#fff;opacity:0.5;filter:alpha(opacity=50);width:236px;height:372px;position: absolute;top: 0;left: 0;display:none;" class="rcLoadingImg"></div><img src="../image/loading-72x72.gif" class="rcLoadingImg" style="position:absolute;top:150px;left:82px;display:none;"><p class="show_error" id=""></p><dl class="rc_double_col rc_w_s clearfix"><dt>账号：</dt><dd></dd></dl><p class="account hide"><input class="rc_common_input" type="text"><span class="lenovo"><span class="nickName"></span><br>来自.tuniu.com的密码</span></p><p><input tabindex="1" class="rc_common_input rcUserName" type="text"></p><dl class="rc_double_col rc_w_s clearfix"><dt>密码：</dt><dd><a href="http://www.tuniu.com/u/get_password"  class="rc_g_color">找回密码</a></dd></dl><p><input tabindex="2" class="rc_common_input rcPassWord" type="password"></p><dl class="rc_double_col rc_w_s clearfix"><dt>验证码：</dt><dd></dd></dl><dl class="rc_double_col clearfix"><dt><input tabindex="3" class="rc_common_input rc_small rcVerCode" type="text"></dt><dd class="rc_pad_top"><img class="identify_img" alt="如验证码无法辨别，点击即可刷新。" onclick="" onload="" style="display: inline;" src="../css/identify.htm" align="absmiddle" height="24" width="80"><img src="../image/refresh.jpg" alt="" class="change_img" style="display: inline;" align="absmiddle" height="24" width="24"></dd></dl><input class="rc_ableBtn" value="登录" type="button"><dl class="rc_double_col rc_reg clearfix"><dt>首次登录，请先<a href="http://www.tuniu.com/u/register"  class="rc_g_color"> 注册</a></dt><dd>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其他<a href="http://www.tuniu.com/u/login"  class="rc_g_color"> 登录&gt;&gt;</a></dd></dl></div></div></li></ul></li><li style="position:absolute;top:280px;"><ul id="rc_phone"></ul></li><li style="position:absolute;top:540px;" id="RCU_doArea"><ul id="rcLastBtm"></ul></li><li style="position:absolute;bottom:20px;"><ul id="rcBtm"><li class=""><div class="rc_index"><p class="rc_topBot_b"><a href="http://www.tuniu.com/corp/advise.shtml" ><span class="rc_icon rc_advise"></span></a></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content"> <p class="rc_des"><a href="http://www.tuniu.com/corp/advise.shtml"  style="display:block;width:60px;height:41px;color:#f80;">意见建议</a></p></div></div></li><li class="rcBackToTopSty" id="rcBackToTop"><div class="rc_index"><p class="rc_topBot_b"><span class="rc_icon rc_backtotop" id=""></span></p></div><div class="rc_box nopad nobord rc_hover_event"><div class="rc_content">
<p class="rc_des">返回顶部</p></div></div></li></ul></li></ul></div></body></html>