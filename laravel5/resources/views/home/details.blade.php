<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><script src="../js/ga.js" async="" type="text/javascript"></script>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/top.css">
<link rel="stylesheet" type="text/css" href="../css/gonglue_channel.css">
<link rel="stylesheet" type="text/css" href="../css/jquery.css">
<title>景点推荐_风向标</title>
<meta content="清迈小清新人气取景地, 2016清迈景点推荐,途牛风向标" name="keywords">
<meta content="2016清迈景点推荐,社交网站Instagram公布了2014年全球十大最受欢迎拍照地，清迈力排众议高调上榜。的确，来清迈什么都可以不带，相机不能不带。无论是文艺青年...,途牛风向标提供当季热门目的地旅游TOP榜" name="description">
<link href="../css/reset.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../css/sideright.css">
<link rel="stylesheet" type="text/css" href="../css/pageration.css">
<script src="../js/jquery-1.js" type="text/javascript"></script>
<script src="../js/base64.js" type="text/javascript"></script>
<link id="skinlayercss" href="../css/layer.css" rel="stylesheet" type="text/css"><link href="../css/mask.css" rel="stylesheet" type="text/css"><script src="../js/share.js"></script><link id="rightCommonCss" rel="stylesheet" type="text/css" href="../css/right_common.css"><link href="../css/share_style0_16.css" rel="stylesheet"></head>
<body>
<script type="text/javascript" src="../js/in-min.js"></script><script type="text/javascript" src="../js/header_v2.js"></script><script type="text/javascript" src="../js/getDegree.js"></script><script type="text/javascript" src="../js/screen_size.js"></script><link rel="stylesheet" href="../css/index_nav_menu.css"><link rel="stylesheet" type="text/css" href="../css/TN_date.css"><script type="text/javascript" src="../js/search_ajax.js"></script><link href="../css/head_nav_new.css" rel="stylesheet" type="text/css"><script type="text/javascript">function selectTag(showContent,selfObj){ var tag = document.getElementById("tags").getElementsByTagName("li"); var taglength = tag.length; for(i=0; i<taglength; i++){ tag[i].className = ""; } selfObj.parentNode.className = "selectTag"; for(i=1; j=document.getElementById("tagContent"+i); i++){ j.style.display = "none"; } document.getElementById(showContent).style.display = "block";}var startCity = document.getElementById("startCity");if(startCity){ startCity.onmouseover = function(){ startCity.className = "head_start_city change_tab"; }; startCity.onmouseout = function(){ startCity.className = "head_start_city"; };}function getCookie(objName){ var arrStr = document.cookie.split("; "); for(var i = 0;i < arrStr.length;i ++){ var temp = arrStr[i].split("="); if(temp[0] == objName) return unescape(temp[1]); } return false;}var tuniuPPhoneDiv = document.getElementById("tuniu_400_num_phone");var tuniuPPhoneNumber = getCookie("p_phone_400");if (tuniuPPhoneDiv) { if (tuniuPPhoneNumber) { tuniuPPhoneDiv.innerHTML = tuniuPPhoneNumber; } else { tuniuPPhoneDiv.innerHTML = "4007-999-999"; }}$(function($) { var sub = $("#keyword-input-sub").val(); if(sub && sub != ''){ $("#keyword-input").val(sub); }});</script><!-- 页面类型 -->
<input name="page_type" id="page_type" value="130000" type="hidden">

@include('includes.rankLogin')
    <!--start 面包屑和目的地导航 -->
        <div class="top_area">
            <div class="wrap clearfix" style="background:#fff;">
                <div class="f_youji fr">
                    <a class="report" href="{{URL('home/publishs')}}">发表游记</a>
                                    </div>
            </div>
        </div>

<div class="wrapmain">
		<div class="nav-ind">
			<div class="navbar">
				<div class="indlogo"></div>
				<a href="{{URL('home/siterecommend')}}" class="indsep" id="shouye"><div class="shouye">首页</div></a>

                <a href="{{URL('home/ranking')}}" class="indsep" id="list"><div class="list">排行榜</div></a>
                                
				
				<a href="{{URL('home/themes')}}" class="indsep  selected" id="theme"><div class="theme">主题推荐</div></a>
				<a href="" class="indsep" id="intour">
                    <p class="inactive"></p>
                    <div class="intour">人在旅途</div></a>
			</div>
		</div>


    
    
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/gonglue_channel.css">
        <link rel="stylesheet" type="text/css" href="../css/jquery.css">
        <title>
            旅游胜地排行榜_旅游排行榜_途牛风向标
        </title>
        <meta content="旅游胜地排行榜, 旅游排行榜, 途牛风向标" name="keywords">
        <meta content="途牛旅游排行榜撷取当季最热旅游目的地,更有途牛首席旅游体验师宇哥为你推荐当季国内、出境目的地最热门TOP排行榜,让您在准备旅行时了解旅游风向,有备而行." name="description">
        <link href="../css/reset.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../css/trip.css">
        <link rel="stylesheet" type="text/css" href="../css/share.css">
        <script type="text/javascript" src="../js/repair-trips.js"></script>


        <script type="text/javascript" src="../js/indicator.js"></script>
        <script src="../js/base64.js" type="text/javascript">
        </script>
        
        <script type="text/javascript" src="../js/jquery-powerFloat-min.js"></script>
        <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.1.12.js"></script>
    <script type="text/javascript">
			$(function(){
				$("#lick").click(function(){
					var num = $('.likeNum').html()
					var tt_id = $('#tt_id').val()
					$.ajax({
						url:"{{URL('home/praise')}}",
						type:"get",
						dataType:"json",
						data:{
							num:num,
							tt_id:tt_id
						},
						success:function(jpg){
							if(jpg == 1)
							{
								location.href="{{URL('blo')}}"
							}
							else if(jpg == 2)
							{
								alert("已经赞过")
							}
							else
							{
								$("#sib").html(jpg);
							}							
						}
					})
				})
			})
		</script>
    
        <input name="page_type" id="page_type" value="140000" type="hidden">

        <div class="wrap">
            <div class="content clearfix">
				@foreach($data['host'] as $error)
                <div class="listtit clearfix">
                    <div class="fl" id="J_listtit_fl">
                        
                        {{$error -> t_title}}                                               
                                                
                    </div>
                    <div class="fr">
                        <div class="blog-control01">
                            <div class="readers item">
							
                                <a rel="nofollow" href="javascript:;" id="lick" title="赞一个" >&nbsp;&nbsp;
								<img width="13" height="13" src="../image/zan.jpg">
                                    喜欢 <span id="sib"><label  class="likeNum">{{$error -> t_zambia}}</label></span>
                                </a> 
								
                                <a style="left: 316px;" rel="nofollow" href="javascript:;" class="link_share_new link_share" data-share-title="" data-share-url="" data-sharecategory="0" data-shareid="10024515" data-share-pic="http://m.tuniucdn.com/filebroker/cdn/snc/c6/38/c6380aaeaa65b26f2cc79483e7a33eb9_w240_h135_c1_t0.jpeg">
                                    <span class="share share-pos"></span>
                                </a> 
                                <a rel="nofollow" href="#commentPos"> 
                                    <span class="comment link-comment"></span> 评论 <em id="repliesCount">{{$error -> t_commentint}}</em>
                                </a> 
                            </div>
                            <div class="bottom-line"></div>
                        </div>
                    </div>
                   
                </div>
		
                

               
                <div class="listcont lh21 gray1 f14">
                    <p>{{$error -> s_desc}}</p>
                    <p class="title mt10 f18 fb ff-mic">制作人：{{$error -> name}}</p>
                </div>
				@endforeach
                <div id="container" class="lay_col2 clearfix">
                    <div class="col2-main">
                        <div class="list-col2" id="list-col2">
                            
                            
           					   
           					@foreach($data['form'] as $error1)              
                            <div class="item">
                                <div class="pic">
                                <a href=" ">
                                <img src="{{$error1 -> t_img}}">
                                </a> 
								</div>
                                <div style="overflow: hidden; height: 48px; padding-top: 0px;" class="infor">
                                    <div class="linear clearfix">
                                        <div class="title fl f18 ff-mic">
                                            <a href="http://www.tuniu.com/g1806841/guide-0-0" >                                              {{$error1 -> t_title}}</a> 
										</div>
									</div>
                                    <p>
                             <a href="http://www.tuniu.com/g1806841/guide-0-0" >
{{$error1 -> s_desc}}</a>
					                                                   </p>
                                </div>
                            </div>
                            @endforeach   
           					              
                            
                               
           					              
                           
                               
           					              
                            
                               
           					              
                            
                                                                        
                                                                        
                     
                        </div>
						
 
         
						<!--发表评论-->
						<div class="ask-reply" id="commentPos">
						<div class="commentary clearfix" id="pinglun">
							<h2>发表评论</h2>
							
							<form action="{{URL('home/dcomment')}}" method="post">
								<div class="commentary-co clearfix">
									<div class="commentary-auth auth-pho">
										<a class="author-pic" href="javascript:void(0);"><img style="" height="63" width="63"></a>
										<input type="hidden" name="_token" value="{{csrf_token()}}">
										<input name="idf" id="tt_id" value="{{Request::get('id')}}" type="hidden">
										@foreach($data['host'] as $error)
										<input name="t_comment" value="{{$error -> t_commentint}}" type="hidden">
										@endforeach
											
									</div>
			
									<div class="commentary-main clearfix">
										<textarea name="content" maxlength="1000" id="r_comment" placeholder="评论一下"></textarea>
										<p>
											<input value="提交"   type="submit"> 
											<span>
											你还可以输入
											<i id="r_limitNum">1000</i>个字符												
											</span>
										</p>
									</div>
								</div>
							</form>
						</div>   
									
						<!--网友评论-->
		<div class="commentary clearfix" id="commentary">
							<h2>网友评论</h2>
					<!-- new style -->
							<div class="commentary-co clearfix">
							@if($data['commect'] == "")
							@else
							@foreach($data['commect'] as $key => $val)
								<div class="commentary-con clearfix">
									<div class="commentary-auth">
										 <img src="{{$val['path']}}" height="63" width="63">
									</div>
									<div class="commentary-center clearfix">
										<p class="author-name">
											<a href="http://www.tuniu.com/person/6674561"  rel="nofollow">{{$val['name']}}</a>
										</p>
										<p>
											<em>发表于</em> <em>{{$val['c_time']}}</em>
										</p>
										<p class="author-op" style="word-wrap: break-word;">
											回复 作者<em><br>
												{{$val['c_base']}}											</em>
										</p>
										@if($val['reply'] === "")
										
										@else
											游客回复：
											@foreach($val['reply'] as $keys => $value)
											<p class="commentary-txt" style="word-wrap: break-word;">										
											<em>
											&nbsp{{$value['c_base']}}
											</em>
											<em>
											&nbsp于{{$value['c_time']}}
											</em>
											</p>
											@endforeach
										@endif
									</div>
									<div class="commentary-level">
										<span>{{$key+1}}</span> #
									</div>
								</div>
							
								<div class="author-opert clearfix"> 
									<a class="author-operation" href="javascript:void(0);" rel="nofollow" fid="{{$val['comment_id']}}">回复</a>										
								</div>
							@endforeach
							@endif
							</div>
							<!-- new style -->
																												
				
		</div>
				</div>                                                      
                                                                        
                 
                    </div>
                    
                                    
                    <div class="col2-side">

    
 <!-- 专题推荐start --> 
      <div class="block mt20">
      	<h3 class="f16 ff-mic fb">
                            相关榜单推荐
        </h3>
                 <div class="c ">
            <a class="pic imgbox" href="http://top.tuniu.com/topic/d19" > 
            <img src="%E6%B8%85%E8%BF%88%E5%B0%8F%E6%B8%85%E6%96%B0%E4%BA%BA%E6%B0%94%E5%8F%96%E6%99%AF%E5%9C%B0_2016%E6%B8%85%E8%BF%88%E6%99%AF%E7%82%B9%E6%8E%A8%E8%8D%90_%E9%80%94%E7%89%9B%E9%A3%8E%E5%90%91%E6%A0%87_files/ef8bba3089369dc4e01d799e5d49efcf_w180_h100_c1_t0.jpg">
            <p>
                湿身这片海 蜜月海岛推荐            </p>
            </a>
        </div>
                <div class="c ">
            <a class="pic imgbox" href="http://top.tuniu.com/topic/d56" > 
            <img src="%E6%B8%85%E8%BF%88%E5%B0%8F%E6%B8%85%E6%96%B0%E4%BA%BA%E6%B0%94%E5%8F%96%E6%99%AF%E5%9C%B0_2016%E6%B8%85%E8%BF%88%E6%99%AF%E7%82%B9%E6%8E%A8%E8%8D%90_%E9%80%94%E7%89%9B%E9%A3%8E%E5%90%91%E6%A0%87_files/59ac34f57b81d939a46971b6ad724904_w180_h100_c1_t0.jpg">
            <p>
                喵星人统治世界 十大猫奴必去地            </p>
            </a>
        </div>
                <div class="c ">
            <a class="pic imgbox" href="http://top.tuniu.com/topic/d85" > 
            <img src="%E6%B8%85%E8%BF%88%E5%B0%8F%E6%B8%85%E6%96%B0%E4%BA%BA%E6%B0%94%E5%8F%96%E6%99%AF%E5%9C%B0_2016%E6%B8%85%E8%BF%88%E6%99%AF%E7%82%B9%E6%8E%A8%E8%8D%90_%E9%80%94%E7%89%9B%E9%A3%8E%E5%90%91%E6%A0%87_files/bb64d4a4ff9cc775e88dc2161f3712e7_w180_h100_c1_t0.jpg">
            <p>
                台湾超小众文艺书店            </p>
            </a>
        </div>
              </div>
<!-- 专题推荐end -->    



<!-- 热卖线路排行start -->
	<div class="block hot_line mt20">
	    <h3 class="f16 fb ff-mic">
	    		    		清迈，	    		    	立刻出发
	    </h3>
	    <div class="repair-c">
	        <ul>
	        	           	            <li class="clearfix">
	            	                <div class="pic">
	                    <a href="http://www.tuniu.com/tours/210244901"  rel="nofollow"> 
	               <img style="display: inline;" src="%E6%B8%85%E8%BF%88%E5%B0%8F%E6%B8%85%E6%96%B0%E4%BA%BA%E6%B0%94%E5%8F%96%E6%99%AF%E5%9C%B0_2016%E6%B8%85%E8%BF%88%E6%99%AF%E7%82%B9%E6%8E%A8%E8%8D%90_%E9%80%94%E7%89%9B%E9%A3%8E%E5%90%91%E6%A0%87_files/32065791755673c74afaa63980c3b041_w320_h240_c1_t0.jpg" data-src="http://m.tuniucdn.com/filebroker/cdn/olb/32/06/32065791755673c74afaa63980c3b041_w320_h240_c1_t0.jpg">
	                    </a>
	                </div>
	                <div class="des">
	                    <p class="name"><a href="http://www.tuniu.com/tours/210244901"  rel="nofollow">[国庆]&lt;清迈4晚5或6日自助游&gt;人气热卖酒店集锦，选择更丰富，多城市出发</a></p>
	                    <p class="price"><em>¥999</em>起</p>
	                </div>
<!--	                <div class="hot_num " >1</div>-->
	            </li>
	            
	          	           	            <li class="clearfix">
	            	                <div class="pic">
	                    <a href="http://www.tuniu.com/tours/210239938"  rel="nofollow"> 
	               <img style="display: inline;" src="%E6%B8%85%E8%BF%88%E5%B0%8F%E6%B8%85%E6%96%B0%E4%BA%BA%E6%B0%94%E5%8F%96%E6%99%AF%E5%9C%B0_2016%E6%B8%85%E8%BF%88%E6%99%AF%E7%82%B9%E6%8E%A8%E8%8D%90_%E9%80%94%E7%89%9B%E9%A3%8E%E5%90%91%E6%A0%87_files/3bb50e52013d93ec45b0ab0f501bf459_w320_h240_c1_t0.jpg" data-src="http://m.tuniucdn.com/filebroker/cdn/prd/3b/b5/3bb50e52013d93ec45b0ab0f501bf459_w320_h240_c1_t0.jpg">
	                    </a>
	                </div>
	                <div class="des">
	                    <p class="name"><a href="http://www.tuniu.com/tours/210239938"  rel="nofollow">&lt;清迈4晚5日自助游&gt;全程入住热门酒店，泰北玫瑰，悠久历史，灿烂文明</a></p>
	                    <p class="price"><em>¥2009</em>起</p>
	                </div>
<!--	                <div class="hot_num " >2</div>-->
	            </li>
	            
	          	           	            <li class="clearfix">
	            	                <div class="pic">
	                    <a href="http://bj.tuniu.com/tours/210337963"  rel="nofollow"> 
	               <img style="display: inline;" src="%E6%B8%85%E8%BF%88%E5%B0%8F%E6%B8%85%E6%96%B0%E4%BA%BA%E6%B0%94%E5%8F%96%E6%99%AF%E5%9C%B0_2016%E6%B8%85%E8%BF%88%E6%99%AF%E7%82%B9%E6%8E%A8%E8%8D%90_%E9%80%94%E7%89%9B%E9%A3%8E%E5%90%91%E6%A0%87_files/Cii9EFd2DrWIb67kACYGyS9VPBcAAG2sQONmSIAJgbh603_w450_h300_c1_.jpg" data-src="http://m.tuniucdn.com/fb2/t1/G1/M00/3C/6E/Cii9EFd2DrWIb67kACYGyS9VPBcAAG2sQONmSIAJgbh603_w450_h300_c1_t0_w320_h240_c1_t0.jpg">
	                    </a>
	                </div>
	                <div class="des">
	                    <p class="name"><a href="http://bj.tuniu.com/tours/210337963"  rel="nofollow">&lt;清迈-清莱双飞5晚6日游&gt;清迈漫生活，小城故事，给心放个假，含签证费，含一晚回程机场附近酒店住宿</a></p>
	                    <p class="price"><em>¥2617</em>起</p>
	                </div>
<!--	                <div class="hot_num hot_num_grey" >3</div>-->
	            </li>
	            
	          	           	            <li class="clearfix">
	            	                <div class="pic">
	                    <a href="http://bj.tuniu.com/tours/210124517"  rel="nofollow"> 
	               <img style="display: inline;" src="%E6%B8%85%E8%BF%88%E5%B0%8F%E6%B8%85%E6%96%B0%E4%BA%BA%E6%B0%94%E5%8F%96%E6%99%AF%E5%9C%B0_2016%E6%B8%85%E8%BF%88%E6%99%AF%E7%82%B9%E6%8E%A8%E8%8D%90_%E9%80%94%E7%89%9B%E9%A3%8E%E5%90%91%E6%A0%87_files/Cii9EFZ7sSuIKV4AACYmc1urx_4AABJJwGKAUsAJiaL808_w450_h300_c1_.jpg" data-src="http://m.tuniucdn.com/fb2/t1/G1/M00/7F/38/Cii9EFZ7sSuIKV4AACYmc1urx_4AABJJwGKAUsAJiaL808_w450_h300_c1_t0_w320_h240_c1_t0.jpg">
	                    </a>
	                </div>
	                <div class="des">
	                    <p class="name"><a href="http://bj.tuniu.com/tours/210124517"  rel="nofollow">[国庆]&lt;清迈-清莱4晚5日游&gt;东航白天正班机直飞 看萌萌哒大象  黑白庙 嘟嘟车游览古城 清莱艾美自助餐 报名9月赠送夜间动物园</a></p>
	                    <p class="price"><em>¥3501</em>起</p>
	                </div>
<!--	                <div class="hot_num hot_num_grey" >4</div>-->
	            </li>
	            
	          	           	            <li class="clearfix last">
	           	                <div class="pic">
	                    <a href="http://www.tuniu.com/tours/210239935"  rel="nofollow"> 
	               <img style="display: inline;" src="%E6%B8%85%E8%BF%88%E5%B0%8F%E6%B8%85%E6%96%B0%E4%BA%BA%E6%B0%94%E5%8F%96%E6%99%AF%E5%9C%B0_2016%E6%B8%85%E8%BF%88%E6%99%AF%E7%82%B9%E6%8E%A8%E8%8D%90_%E9%80%94%E7%89%9B%E9%A3%8E%E5%90%91%E6%A0%87_files/3bb50e52013d93ec45b0ab0f501bf459_w320_h240_c1_t0.jpg" data-src="http://m.tuniucdn.com/filebroker/cdn/prd/3b/b5/3bb50e52013d93ec45b0ab0f501bf459_w320_h240_c1_t0.jpg">
	                    </a>
	                </div>
	                <div class="des">
	                    <p class="name"><a href="http://www.tuniu.com/tours/210239935"  rel="nofollow">&lt;清迈4晚5日自助游&gt;人气热卖产品，多酒店可选</a></p>
	                    <p class="price"><em>¥2291</em>起</p>
	                </div>
<!--	                <div class="hot_num hot_num_grey" >5</div>-->
	            </li>
	            
	          	        </ul>
	        <script type="text/javascript" src="../js/ranklist.js"></script>
	    </div>
	</div>
 <!-- 热卖线路排行end -->  
        
</div>


                 
                    

                </div>
            </div>
        </div>
    

<script type="text/javascript">
    $(".author-operation").click(function(){
        $("#replyBox").find("#fid").val($(this).attr('fid'));        
    });
</script>   
<!--弹框新增 start-->
<div id="popBoxPanel">
	<!--发表评论-->
	<div id="reviewBox" class="pop_box hide">
		<a href="javascript:void(0);" class="close"></a>
		<div class=""></div>
		<h3>发表评论</h3>
		<div class="comment_box">
			<p>
				引用@<span id="commentName"></span>的照片
			</p>
			<input id="imgUrl" type="hidden">
			<textarea id="w_comment" class="w_comment" maxlength="990"></textarea>
		</div>
		<div class="msg">
			你还可以输入<span id="limitNum" class="limitNum">990</span>个字符
		</div>
		<div class="comment_btn">
			<input value="取消" class="comment_cancle" type="button"> 
			<input value="提交" class="comment_suc" type="button">				
		</div>
	</div>

	<!--回复-->
	<div id="replyBox" class="pop_box reply_box hide">
		<form action="{{URL('home/dcomment')}}" method="post" >
			<div>
				<a href="javascript:void(0);" class="close"></a>
				<div class=""></div>
				<h3>发表回复</h3>
				<div class="comment_box">
					<input id="fid" name="fid" value="0" type="hidden">
					<input name="idf" value="{{Request::get('id')}}" type="hidden">					
					<input type="hidden" name="_token" value="{{csrf_token()}}">										
					<textarea name="content" id="reply_w_comment" class="w_comment" maxlength="990"></textarea>						
				</div>
				<div class="msg">
					你还可以输入<span id="limitNum" class="reply_limitNum">990</span>个字符
				</div>
				<div class="comment_btn">
					<input value="取消" class="comment_cancle" type="button"> 
					<input value="提交" class="comment_suc" type="submit">						
				</div>
			</div>
		</form>
	</div>
</div>
<div id="dialog-overlay"></div>
<!--弹框新增 end-->
<script type="text/javascript" src="../js/indicator_note.js"></script> 


<!-- <script type="text/javascript">-->
<!--    $(function(){-->
<!--    $(".J_addlike").click(function(){-->
<!--        var _tid = parseInt($(this).attr('data-likeid'));
<!--        var _obj = $(this).find("span");-->
<!--        var _this = $(this);
<!--        var likeNum = $("#likeNum");
<!--        $.ajax({-->
<!--                type: "post",-->
<!--                url: "http://top.tuniu.com/api/liketheme/",-->
<!--                data: {'tid':_tid},-->
<!--                dataType: "json",-->
<!--                success: function (data) {-->
<!--                   if(data.rel){-->
<!--                        _obj.removeClass("no_like").addClass("like");-->
<!--                        likeNum.html(data.num);-->
<!--                        //alert(data.message);-->
<!--                   }else{-->
<!--                        alert(data.message);-->
<!--                   }-->
<!--                },-->
<!--                error: function (XMLHttpRequest, textStatus, errorThrown) {-->
<!--                    alert(errorThrown);-->
<!--                }-->
<!--         });-->
<!--            return false;-->
<!--        })-->
<!--})-->
<!--</script>-->

</div><div class="blog-control"></div>
<!--start foot-->
<!-- siteMap S -->
<link rel="stylesheet" type="text/css" href="../css/common_foot_v3.css"> 
<!-- three sun S -->
<div class="three_trav">
    <div class="thr_trav">
        <a href="http://www.tuniu.com/static/sunshine_ensure/"  style="display:block;width:100%;height:100%;">
            <em class="tn_text" id="service_phone_head_text">客户服务电话（免长途费）</em>
            <em class="tn_phone" id="service_phone_head_phone">4007-999-999</em>
        </a>
    </div>
</div>


<div id="AutocompleteContainter_a48fd" style="position: absolute; z-index: 9999; top: 93px; left: 523.5px;"><div class="autocomplete-w1"><div class="autocomplete" id="Autocomplete_a48fd" style="display: none; max-height: 476px;"></div></div></div>
</body></html>