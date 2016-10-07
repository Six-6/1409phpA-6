<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/top.css">
<link rel="stylesheet" type="text/css" href="../css/gonglue_channel.css">
<link rel="stylesheet" type="text/css" href="../css/jquery.css">
<title>主题</title>
<meta content="主题旅游,旅行风向标,途牛风向标" name="keywords">
<meta content="途牛风向标提供最全面的主题旅游推荐：自驾、蜜月、亲子、踏青、赏花、漂流、温泉等各式主题旅游推荐,总有一款主题让您满意……最新最快的掌握当季旅游活动,一站式贴心旅游服务尽在途牛风向标。" name="description">
<link href="../css/reset.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../css/sideright.css">
<link rel="stylesheet" type="text/css" href="../css/pageration.css">
<script src="../js/ga.js" async="" type="text/javascript"></script><script src="../js/jquery-1.js" type="text/javascript"></script>
<script src="../js/base64.js" type="text/javascript"></script>
<link href="../css/mask.css" rel="stylesheet" type="text/css"><link id="rightCommonCss" rel="stylesheet" type="text/css" href="../css/right_common.css"></head>
<body>
<script type="text/javascript" src="../js/in-min.js"></script><script type="text/javascript" src="../js/header_v2.js"></script><script type="text/javascript" src="../js/getDegree.js"></script><script type="text/javascript" src="../js/screen_size.js"></script><link rel="stylesheet" href="../css/index_nav_menu.css"><link rel="stylesheet" type="text/css" href="../css/TN_date.css"><script type="text/javascript" src="../js/search_ajax.js"></script><link href="./css/head_nav_new.css" rel="stylesheet" type="text/css"><script type="text/javascript">function selectTag(showContent,selfObj){ var tag = document.getElementById("tags").getElementsByTagName("li"); var taglength = tag.length; for(i=0; i<taglength; i++){ tag[i].className = ""; } selfObj.parentNode.className = "selectTag"; for(i=1; j=document.getElementById("tagContent"+i); i++){ j.style.display = "none"; } document.getElementById(showContent).style.display = "block";}var startCity = document.getElementById("startCity");if(startCity){ startCity.onmouseover = function(){ startCity.className = "head_start_city change_tab"; }; startCity.onmouseout = function(){ startCity.className = "head_start_city"; };}function getCookie(objName){ var arrStr = document.cookie.split("; "); for(var i = 0;i < arrStr.length;i ++){ var temp = arrStr[i].split("="); if(temp[0] == objName) return unescape(temp[1]); } return false;}var tuniuPPhoneDiv = document.getElementById("tuniu_400_num_phone");var tuniuPPhoneNumber = getCookie("p_phone_400");if (tuniuPPhoneDiv) { if (tuniuPPhoneNumber) { tuniuPPhoneDiv.innerHTML = tuniuPPhoneNumber; } else { tuniuPPhoneDiv.innerHTML = "4007-999-999"; }}$(function($) { var sub = $("#keyword-input-sub").val(); if(sub && sub != ''){ $("#keyword-input").val(sub); }});</script><!-- 页面类型 -->
<input name="page_type" id="page_type" value="130000" type="hidden">

<div class="top_area">
            <div class="wrap clearfix" style="background:#fff;">
                @include('includes.rankLogin')
            </div>
        </div> 


<div class="wrapmain">
		<div class="nav-ind">
			<div class="navbar">
				<div class="indlogo"></div>
				<a href="{{URL('home/siterecommend')}}" class="indsep" id="shouye"><div class="shouye">首页</div></a>

                <a href="{{URL('home/ranking')}}" class="indsep" id="list"><div class="list">排行榜</div></a>
                                
				
				<a href="{{URL('home/themes')}}" class="indsep selected" id="theme"><div class="theme">主题推荐</div></a>

			</div>
		</div>


	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <link rel="stylesheet" href="../css/pub_mod.css">
	    <link rel="stylesheet" type="text/css" href="../css/index.css">
	    <link rel="stylesheet" type="text/css" href="../css/package.css">
	    <link rel="stylesheet" type="text/css" href="../css/toparea.css">
        <link rel="stylesheet" type="text/css" href="../css/gonglue-center.css">				
		<link rel="stylesheet" type="text/css" href="../css/ind-filter.css">
		<link rel="stylesheet" type="text/css" href="../css/trip.css">
        <script type="text/javascript" src="../js/ind-filter.js"></script>

	
	
<div class="content">
	<!--顶部出游提示-->
	<div class="top_tip">
<!--		<strong>主题推荐：</strong>自驾、蜜月、亲子、踏青、赏花、漂流、温泉等各式主题旅游推荐，总有一款主题让您满意……-->
        <div class="search_wrapper clearfix">
            <div class="filter_innerbox">
                <div id="J_FilterItems" class="pkg_filter_item clearfix">
                	                    <dl>

	                    <dd class="pkg_filter_properties J_properties01">

	                        <div class="pkg_filter_others">
	                            <div class="fenlei01 all_02">
									<a href="{{URL('home/themes')}}" rel="nofollow" class="a1 ">权威</a>
									<a href="{{URL('home/freshs')}}" rel="nofollow" class="a1 ">尝鲜</a>     		                        
                                	<a href="{{URL('home/shutter')}}" rel="nofollow" class="a1 ">快门</a>     		                        
									<a href="{{URL('home/cate')}}" rel="nofollow" class="a1 ">美食</a>     		                        
									<a href="{{URL('home/shopping')}}" rel="nofollow" class="a1 ">购物</a>     		                        
                                	<a href="{{URL('home/literature')}}" rel="nofollow" class="a1 ">文艺</a>     		                     			    		                                                        	                                </div>
		                    </div>	   		                                       
			                	
	                    </dd>
	                </dl>
	                                                                            
                </div>
            </div>
        </div>
	</div>
	<!--chujing content-->
	<!--theme content s-->
	<div class="thcontent clearfix">
	
	<div class="w1030">
		@foreach($data['data'] as $esson)
		<div class="square themebg">	 
			<span class="sprite sprite1"></span>
			<a class="pic imgbox" href="{{URL('home/details')}}?id={{$esson->tt_id}}" > 
			<img style="display: inline;" height="200" src="{{$esson -> t_img}}" />
			</a> <a href="{{URL('home/details')}}?id={{$esson->tt_id}}"  class="lh40" title="{{$esson -> t_title}}">{{$esson -> t_title}}</a>
		</div> 
		@endforeach

    </div>
	</div>
	
	
	<!-- 分页start -->
	<div class="pagination">
		<div class="page-bottom">
			<a rel="nofollow" href="">一共{{$data['mexpage']}}</a>
			<a rel="nofollow" href="">第{{$data['page']}}</a>
			<a rel="nofollow" href="{{$data['url']}}?page=1">首页</a>
			<a rel="nofollow" href="{{$data['url']}}?page={{$data['page']-1}}">上一页</a>
			<a rel="nofollow" href="{{$data['url']}}?page={{$data['page']+1}}">下一页</a>
			<a rel="nofollow" href="{{$data['url']}}?page={{$data['mexpage']}}">末页</a>
		</div>
	</div>
	<!-- 分页end -->
</div>

</div>
<!--start foot-->
<!-- siteMap S -->
<link rel="stylesheet" type="text/css" href="../css/common_foot_v3.css"> <div class="trav_sev">
        
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
            <ul style="width: 4602px; left: -1590.34px;">
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
	_gaq.push(["_trackPageview", "/度假/北京/风向标/主题推荐/首页"]);
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
	var analyTuniuSpend = 0.054;
	var tuniuTracker = _tat.getTracker();
	tuniuTracker.setPageName("度假:北京:风向标:主题推荐:首页");//do not delete
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




<!-- search_inputBox end -->
</div></body></html>