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
                                
				
				<a href="{{URL('home/themes')}}" class="indsep  selected" id="theme"><div class="theme">主题推荐</div></a>
				
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
										<input name="sid" id="tt_id" value="{{Request::get('sid')}}" type="hidden">
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
                            相关榜单推荐({{$data['region_name'] -> r_region}})
        </h3>
        @if($data['correlation'] != null)
			@foreach($data['correlation'] as $key => $val)
			<div class="c ">
				<a class="pic imgbox" href="{{URL('home/scenicDetails')}}?sid = {{$val -> s_id}}" > 
				<img src="../home/images/{{$val -> s_img}}">
				<p>{{$val -> s_name}}</p>
				</a>
			</div>
			@endforeach
        @else
			<span style="font-family: sans-serif;margin-left:10px;">暂无相似景点</span>
        @endif
       </div>
<!-- 专题推荐end -->    




	<div class="block hot_line mt20">
	    <h3 class="f16 fb ff-mic">
	    		    		立刻出发
	    </h3>
	    <div class="repair-c">
	        <ul>
	        @foreach($data['meme'] as $key => $val)
	        	<li class="clearfix">
	            	<div class="pic">
	                    <a href=""  rel="nofollow"> 
	                    <img style="display: inline;" src="../home/images/{{$val -> s_img}}">
	                    </a>
	                </div>
	                <div class="des">
	                    <p class="name"><a href=""  rel="nofollow">{{$val -> s_name}}</a></p>
	                    <p class="price"><em>¥{{$val -> s_sprice}}</em>起</p>
	                </div>
	            </li>
	        @endforeach
	        </ul>
	        <script type="text/javascript" src="../js/ranklist.js"></script>
	    </div>
	</div>

        
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
					<input name="idf" value="{{Request::get('sid')}}" type="hidden">					
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