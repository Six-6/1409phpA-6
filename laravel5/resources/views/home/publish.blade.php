<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html class="ie8"><![endif]-->
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><script src="%E6%B8%B8%E8%AE%B0-%E5%8F%91%E8%A1%A8%E6%B8%B8%E8%AE%B0_files/v.htm" charset="utf-8"></script><script src="../js/hm.js"></script>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/foot.css">
	<link rel="stylesheet" type="text/css" href="../css/jquery.css">
    @include('includes.publishLogin')
	<title>游记-发表游记</title>
        <meta content="游记-发表游记" name="keywords">
            <meta content="游记-发表游记" name="description">
    	<script src="../js/ga.js" async="" type="text/javascript"></script><script type="text/javascript">var analyTuniuBeginTime=(new Date()).getTime();</script>
	<style type="text/css">
		.logo span { float:left; width:163px; height:55px; margin:5px 0 0 0;}
	</style>
	<link type="text/css" rel="stylesheet" href="../css/WdatePicker.css"><link id="skinlayercss" href="../css/layer.css" rel="stylesheet" type="text/css"><script defer="defer" type="text/javascript" src="../js/zh-cn.js"></script><script defer="defer" type="text/javascript" src="../js/link.js"></script><script defer="defer" type="text/javascript" src="../js/image.js"></script><script defer="defer" type="text/javascript" src="../js/video.js"></script><script defer="defer" type="text/javascript" src="../js/map.js"></script><script defer="defer" type="text/javascript" src="../js/formula.js"></script><script defer="defer" type="text/javascript" src="../js/emotion.js"></script><link href="../css/mask.css" rel="stylesheet" type="text/css"></head>
<body spellcheck="false">
	<!-- Tuniu Header Start -->
	        <script type="text/javascript" src="../js/in-min.js"></script>
<script type="text/javascript" src="../js/header_v2.js"></script>
<script type="text/javascript" src="../js/getDegree.js"></script>
<script type="text/javascript" src="../js/screen_size.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>

<script type="text/javascript" charset="utf-8" src="./utf8-php/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" charset="utf-8" src="./utf8-php/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="./utf8-php/ueditor.all.min.js"> </script>

<link rel="stylesheet" href="../css/index_nav_menu.css">
<link rel="stylesheet" type="text/css" href="../css/TN_date.css">
<script type="text/javascript" src="../js/search_ajax.js"></script>
<link href="../css/head_nav_new.css" rel="stylesheet" type="text/css">


		<link rel="stylesheet" type="text/css" href="../css/publish.css">
<link rel="stylesheet" type="text/css" href="../css/umeditor.css">
<link rel="stylesheet" type="text/css" href="../css/umeditor-ex.css">
<link rel="stylesheet" type="text/css" href="../css/travelnotes.css">
<link rel="stylesheet" type="text/css" href="../css/common_foot_v3_002.css">

<!--main content START-->
<div class="bodybg-gray">
	<div class="wrap clearfix">
		<!--顶部导航栏 start-->
		<div class="nav-bar">
			<div class="crumbs">
				<a href="http://trips.tuniu.com/" >游记</a>
				&gt;
				<span>
					<h1>发表游记</h1>
				</span>
			</div>
            <a href="{{URL('home/publishs')}}" class="traveltip fl" >
                <span class="sprite fl"></span>
                <span class="fr">写游记，赢大奖</span>
            </a>
		</div>
		<!--顶部导航栏 end-->
        <script src="../js/jquery.1.12.js"></script>
		<style type="text/css">
			.button {
				display: inline-block;
				outline: none;
				cursor: pointer;
				text-align: center;
				text-decoration: none;
				font: 14px/100% Arial, Helvetica, sans-serif;
				padding: .5em 2em .55em;
				text-shadow: 0 1px 1px rgba(0,0,0,.3);
				-webkit-border-radius: .5em; 
				-moz-border-radius: .5em;
				border-radius: .5em;
				-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
				-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
				box-shadow: 0 1px 2px rgba(0,0,0,.2);
			}
			.button:hover {
				text-decoration: none;				
			}
			/*.button:active{background-color:yellow;}*/
			.button:active {
				position: relative;
				top: 1px;
			}
		</style>
		<script>
			$(document).on("click",".button",function(){
				var val = $(this).val()
				$(this).style.backgroundColor="yellow";
				$("#xuan").val(val)
			})
		</script>	
		<div class="publish-left clearfix">

			<div >
			<button class="button" value="1">快门</button>&nbsp&nbsp
			<button class="button" value="2">美食</button>&nbsp&nbsp
			<button class="button" value="3">购物</button>&nbsp&nbsp
			<button class="button" value="4">文艺</button>
			</div>
			&nbsp&nbsp
			<!-- 游记标题 -->
            <form method="post" action="{{URL('home/collect')}}" enctype="multipart/form-data" class="postForm">
			<div class="publish-title">
				<input type="hidden" id="xuan" name="t_type" value="">
				<textarea class="placeholder" name="p-title" id="p-title" maxlength="30" rows="1" onblur="getTripsTitle(this.value)">给游记取个好标题，为自己代言~</textarea>
				<span class="input-limit">0/30</span>
			</div>
			<div style="height:20px"></div>
            
			<div class="publish-main" id="haotamanan" index='0' style="background-color:#EEEEDD;">                              
                <textarea class="placeholder"  style="font-size:15px; background-color:#EEEEDD; border: 10px solid ;" name="II[]" rows="20" cols="93">给自己本次游记一个总结吧</textarea>
                <input type='hidden' name='_token' value='{{csrf_token()}}'>
                <input type='hidden' name='path[]' value='' class='cls0'>
                        <p>文件:<input type="file" name="photo[]" >
                        <em><input type="button"  value=" 提 交 " class="photo" ></em></p> 
                        

                <div class="img0"></div>        
                <div style="height:20px"></div>                           
            </div>
            <input type="submit"  value=" 提 交 ">
            </form>
		</div>
		
		
<script>
    $(document).ready(function() {   
        content=$("#haotamanan").html();
        num=0;
        $('#add').click(function(){
            num++;
            $('#haotamanan').append("<div style='height:30px; width:50px; background-color:#33FF33; text-align:center;font-size:20px;'><font class='"+num+"' style='height:120px; width:120px;'>DAY"+num+"</font></div><div index='"+num+"' class='"+num+"'><textarea class='placeholder'  style='font-size:15px; background-color:#EEEEDD; border: 10px solid ;' name='II[]' rows='20' cols='93'>给自己本次游记一个总结吧</textarea><input type='hidden' name='_token' value='{{csrf_token()}}'><input type='hidden' name='path[]' value='' class='cls"+num+"'><p>文件:<input type='file' name='photo[]' ><em><input type='button'  value=' 提 交 ' class='photo' ></em></p><div class='img"+num+"'></div><div style='height:20px'></div> </div>"); 
        })
        // $(".trip-fold").click(function(){
        //     // alert($(this).parent().html())
        //      $(this).parent().parent().remove();
        // })
        //公共底部上线测试阶段临时方案
        if ($(".offer_service").length == 0) {
            $(".three_trav").addClass("offer_service");
        }
    });

    $(document).on('click','.photo',function(){
        var indexs = $(this).parent().parent().parent().attr('index');
        var data = new FormData($( ".postForm" )[0]);      
        $.ajax({  
            url: "{{URL('home/yfile')}}?indexs="+indexs,  
            type: 'POST',
            dataType: 'JSON',   
            data: data,         
            async: false,  
            cache: false,  
            contentType: false,  
            processData: false,  
            success: function (returndata) {  
                console.log(returndata);
                $(".img"+num).html("<img width='100px' height='100px' src='../home/upload/"+returndata+"'>")
                $(".cls"+num).val("../home/upload/"+returndata)
            }
     });  
    })
                         
</script>
		
		
		
		
		
		
		
		
        <!-- 意见反馈 begin -->
        <div class="fixed" style="margin-left: 550px;">
            <div class="mod-connect">
                <div class="hlist">
                    <p class="sprite"></p>
                    <p class="item">意见反馈</p>
                </div>
            </div>
        </div>
        <div class="tnote-suggest layer_pageContent" style="display: none;">
            <div class="hlist hlist-a">
                <form class="form">
                    <ul class="mod-type">
                        <li class="clearfix">
                            <label><span>详细描述：</span>
                                <textarea class="textarea checkinfor" id="J_FeedbackCon"></textarea>
                                <p class="simulate">感谢您提宝贵的意见和建议，我们会认真阅读并安排解决，您的支持是对我们最大的鼓励和帮助！</p>
                                <i class="typetips01 fea">请填写详细描述</i>
                            </label>
                        </li>
                        <li class="clearfix"><label><span><i class="icotip">* </i>手机号：</span><input class="checkinfor" id="J_FeedbackMobile" type="text"><i class="typetips01" style="display: inline;">请输入手机号</i></label></li>
                        <li class="clearfix p-r"><label><span>邮箱：</span><input class="email" id="J_FeedbackEmail" type="text"></label></li>
                    </ul>
                </form>
                <p class="msg p-a">请填写完整信息</p>
            </div>
        </div>
        <!-- 意见反馈 end -->

		<div style="height: 210px;" class="pin-wrapper"><div style="width: 190px; left: 984.5px; top: 0px; position: fixed;" class="publish-right clearfix p-fix">
			<!-- 添加行程/添加地点/上传照片按钮 start -->
			<div class="publish-btn" id='add'>
				<ul>
					<li  style="width:171px; height:70px">
						<a href="javascript:void(0);">
							<div class="icon-trip-add">
                                <img width="171px" height="35px" src="../image/1.bmp">
                            </div>							
						</a>
					</li>								
				</ul>
			</div>
            
           
      
			<!-- 添加行程/添加地点/上传照片按钮 end -->
			<!-- 已上传照片列表 start -->

			<div class="publish-photo">
				<p class="p-label">
					已上传照片
					<a href="javascript:void(0);" class="manager-btn" onclick="showUploadImg(10108186);">管理</a>
				</p>
				<div class="photo-uploaded-list clearfix">
					
									<p class="no-photo">暂无照片哦</p>
									<div id="pagination">
										</div>
									</div>
			</div>
			<!-- 已上传照片列表 end -->
			<!-- 订单绑定 start-->
					</div></div>
	</div>
	<!-- 照片管理弹出层 -->

	<!--添加地点选择弹出层 start-->
	<div id="addrPopBox" class="addr-select-popbox" style="display:none;">
		<div class="pop-mask"></div>
		<div class="poi-popup">
			<a class="close" href="javascript:void(0);"></a>
			<h3>添加地点</h3>
			<div class="poi_address">
				<!-- 已添加地点列表添加 -->

				<div class="poi-add" id="addPoiAdd">
					<input id="btnAddPoi" name="btnAddPoi" type="text">
					<span>可添加多个拍摄地点</span>
				</div>
			</div>
			<div class="select_address" id="addSelectAddress" style="display:none;">
				<!-- 地点选择列表 -->
				<div class="select_address_inner" id="addSelectAddressInner">
				</div>
			</div>
			<input id="placeBelongTo" value="0" type="hidden">
			<div class="confirm-btn">
				<input id="addrConfirm" value="确定" data-addlocation="addr-list-outer" data-moreadd="0" type="button">
			</div>
		</div>
	</div>
	<!-- 添加地点选择弹出层 end -->
	
	<!-- 修改地点选择弹出层 start-->
	<div id="editAddrPopBox" class="addr-select-popbox" style="display:none;">
		<div class="pop-mask"></div>
		<div class="poi-popup">
			<a class="close" href="javascript:void(0);"></a>
			<h3>修改地点</h3>
			<div class="poi_address">
				<!-- 已添加地点列表添加 -->

				<div class="poi-add" id="editPoiAdd">
					<input id="btnEditPoi" name="btnEditPoi" type="text">
					<span>可添加一个拍摄地点</span>
				</div>
			</div>
			<div class="select_address" id="editSelectAddress" style="display:none;">
				<!-- 地点选择列表 -->
				<div class="select_address_inner" id="editSelectAddressInner">
				</div>
			</div>
			<input id="editPlaceBelongTo" value="0" type="hidden">
			<div class="confirm-btn">
				<input id="editAddrConfirm" value="确定" data-addlocation="addr-list-outer" type="button">
			</div>
		</div>
	</div>
	<!-- 修改地点选择弹出层 end -->

	<!-- 行程删除确认 -->
	<div id="tripDeleteConfirm" class="delete-confirm" style="display: none;">
		<div class="pop-mask"></div>
		<div class="delete-popup">
			<a href="javascript:void(0)" class="close"></a>
			<h3>是否删除这一天？</h3>
			<p>删除行程的同时，这一天内的照片也会被删除。</p>
			<div class="del_btn">
				<input value="取消" class="del_cancle" type="button">
				<input value="删除" class="del_sure" data-type="1" type="button">
				<input value="10126251" id="currentScheduleId" type="hidden">
				<input value="trip_day_10126251" id="scheduleRemoveObj" type="hidden">
				
			</div>
		</div>
	</div>
	<!-- 地点删除确认 -->
	<div id="addrDeleteConfirm" class="delete-confirm" style="display:none;">
		<div class="pop-mask"></div>
		<div class="delete-popup">
			<a href="javascript:void(0)" class="close"></a>
			<h3>是否删除该地点？</h3>
			<p>删除后，该地点内的照片也会被删除。</p>
			<div class="del_btn">
				<input value="取消" class="del_cancle" type="button">
				<input value="删除" class="del_sure" data-type="2" type="button">
				<input id="currentPlaceId" type="hidden">
				<input id="placeRemoveObj" type="hidden">
				
			</div>
		</div>
	</div>
	
	<!-- 订单绑定弹出层 start -->
<!-- 订单绑定弹出层 end -->
<!-- 引导 start -->
<div class="guide-popup">
    <div class="pop-mask"></div>
    <div class="ydmain">
        <div class="ydfirst">
            <a href="javascript:void(0);" class="close close1"></a>
            <a href="javascript:void(0);" class="next next1"></a>
        </div>
        <div class="ydsecond hide">
            <a href="javascript:void(0);" class="close close2"></a>
            <a href="javascript:void(0);" class="next next2"></a>
        </div>
        <div class="ydthird hide">
            <a href="javascript:void(0);" class="close close3"></a>
            <a href="javascript:void(0);" class="next next3"></a>
        </div>
        <div class="ydforth hide">
            <a href="javascript:void(0);" class="close close4"></a>
            <a href="javascript:void(0);" class="finish"></a>
        </div>
    </div>
</div>
<!-- 引导 end -->

	<script type="text/javascript">
		var apiParams = {
			'tid' : 10108186,
			'tourTime':"0",
			'sessionId': "1mth5rq8ghn0rqqfbvdejlccb7",
			'updateTrips' : '/tripsajax/updatetrips',
			'actSchedule' : '/tripsajax/manageschedule',
			'delSchedule' : '/tripsajax/deleteschedule',
			'actPlace' : '/tripsajax/manageplace',
			'delPlace' : '/tripsajax/deleteplace',
			'releaseTrips' : '/tripsajax/releasetrips',
			'changeDate' : '/tripsajax/managedate',
			'moreSchedule' : '/tripsajax/moreschedule',
			'moveSchedule' : '/tripsajax/moveschedule',
			'morePlace' : '/tripsajax/moreplace',
			'movePlace' : '/tripsajax/movePlace'
		};

	</script>
</div>

<!-- config需单独引入 -->
<script type="text/javascript" src="../js/umeditor_002.js"></script>
<script type="text/javascript" src="../js/umeditor.js"></script>
<script type="text/javascript" src="../js/jquery_002.js"></script>
<script type="text/javascript" src="../js/swfupload.js"></script>
<script type="text/javascript" src="../js/WdatePicker.js"></script>

<script type="text/javascript" src="../js/handlers.js"></script>

<script type="text/javascript" src="../js/OblogPublish_v2.js"></script><!-- /js/trips/OblogPublish.js -->
<script type="text/javascript" src="../js/trips_ajax_v2.js"></script>
<!-- main content end -->


<script type="text/javascript" src="../js/guide_search.js"></script>
<script type="text/javascript" src="../js/lazyloadnew.js"></script>

<!-- 意见反馈js -->
<script src="../js/layer.js"></script>
<!--<script type="text/javascript" src="http://img4.tuniucdn.com/j/20150209/blogs/data.js"></script>-->
<script>
    var interaction ={
        // 游记反馈交互
        checkMobile:function(sentData,callback) {
            var feedBackUrl = "/yii.php?r=trips/notesAjax/addFeedback";
            $.post(feedBackUrl,{key:sentData},function(data) {
                if (data) {
                    callback(data);
                }
            },'json');
        }
    }
</script>
<script type="text/javascript" src="../js/domlist.js"></script>
<script type="text/javascript" src="../js/travelnote.js"></script>

<script type="text/javascript">

	$(document).ready(function(){
		if( !$(".wx_pop").length ){
			$(document.body).append('<div class=\"wx_pop\"><img src=\"http://img.tuniucdn.com/js/white.gif\" data-src=\"http://img1.tuniucdn.com/img/201510151103/common/erweima_v2.gif\" width=\"299\" height=\"209\" /></div>');
			jQuery(".top_wx").powerFloat({
				eventType: "hover",
				position: "3-2",
				reverseSharp:true,
				target: $(".wx_pop"),
				showCall:function(){
					$(".wx_pop img").each(function() {
						var imgAttr = $(this).attr("data-src");
						$(this).attr("src",imgAttr).fadeIn(300);
					});
				}
			});
		}
	});

	var catLoaded = false;
	$(document).mousemove(function(){
		if (!catLoaded){
			catLoaded = true;
			$.getScript("http://www.tuniu.com/headermenu/1602");
		}
	});
	
</script>
<script>
	var __login_redirect = function() {
		if(confirm('该功能需要登录，去登录？')) {
			location.href = 'http://www.tuniu.com/u/login?origin='+location.href;
		}
	}
</script> 	
<!-- main content end -->

<script type="text/javascript">
	$(function(){
			var guideFlag = 0;
			if(guideFlag){
				$(".publish-guide a").click();
			}
	});
</script>
		<!-- common footer start -->
        <!-- siteMap S -->
</body>
@include('includes.foot'))
</html>