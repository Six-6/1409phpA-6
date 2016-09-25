<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><script src="%E5%A1%AB%E5%86%99%E8%AE%A2%E5%8D%95_files/crmqq.php" async="" charset="utf-8" type="text/javascript"></script><script src="../js/contains.js" async="" charset="utf-8" type="text/javascript"></script><script src="../js/localStorage.js" async="" charset="utf-8" type="text/javascript"></script><script src="../js/Panel.js" async="" charset="utf-8" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link href="../css/style_003.css" rel="stylesheet" media="screen" type="text/css">
<link href="../css/order.css" rel="stylesheet" media="screen" type="text/css">

<title>在线预订-惠玩旅行社科技有限公司官网</title>

<script src="../js/global.js" type="text/javascript"></script>
<link href="../css/style_002.css" id="TQCSS0.559407954122853" type="text/css" rel="stylesheet"><link href="../css/style.css" id="TQCSS0.021831985253831787" type="text/css" rel="stylesheet"><script src="../js/float.js" id="TQJS0.6607777828844587"></script><script src="../js/invite.js" id="TQJS0.9040961182942016"></script><script id="_da" src="../js/i.js" async="" charset="utf-8"></script><script src="../js/scriptonline.js" id="TQJS0.1056513587403235"></script><script src="%E5%A1%AB%E5%86%99%E8%AE%A2%E5%8D%95_files/sendmain.txt" id="TQJS0.36502843787457273"></script><script src="../js/getrequesttype.js" id="TQJS0.9438418681445945"></script></head>

<body>

<link href="../css/site.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
$(document).ready(function(){
	$(".select_box input").click(function(){
		var thisinput=$(this);
		var thisul=$(this).parent().find("ul");
		if(thisul.css("display")=="none"){
			if(thisul.height()>200){thisul.css({height:"200"+"px","overflow-y":"scroll" })};
			thisul.fadeIn("100");
			thisul.hover(function(){},function(){thisul.fadeOut("100");})
			thisul.find("li a").click(function(){
				thisinput.val($(this).text());thisul.fadeOut("100");
			
			}).hover(function(){$(this).addClass("curr");},function(){$(this).removeClass("curr");
			
			});
			}
		else{
			thisul.fadeOut("fast");
			}
	})
	$("#submit").click(function(){
		var endinfo="";
		$(".select_box input:text").each(function(i){
			endinfo=endinfo+(i+1)+":"+$(this).val()+";\n";							 
		})							
		alert(endinfo);						
	})
	
	$(function(){
	$("#SouDesignContent").keyup(function() {
        var valB=$("#SouDesignContent").val();
	if(valB==""){
		$(".select_empty").css("background-color","#FFF")}
	else{
		$(".select_empty").css("background-color","transparent")
	}
    });
	
	})
});


</script>

<!--TOP部分-->
<script language="javascript" type="text/javascript" src="../js/ajax188.js"></script>
<script language="javascript" type="text/javascript">

function Check_head_Login(){
      
	  var taget_obj = document.getElementById('_Check_head_Login');	  
	  myajax = new ajaxx188(taget_obj,false,false,'','','');
	  myajax.SendGet2("http://www.byts.com.cn/users/ajax_head.php");
	  A188XHTTP = null;
}

function  myAddPanel(title,url,desc) {
  	if((typeof   window.sidebar   ==   'object')   &&   (typeof   window.sidebar.addPanel   ==   'function')) {
  		window.sidebar.addPanel(title,url,desc);  
	}else  {
  		window.external.AddFavorite(url,title);  
	}  
}


</script>
<script language="javascript"> 
<!-- 
window.onerror=function(){return true;} 
// --> 
</script>

@include('includes.searchtop')
<div class="dh">
	<div class="conter">
   	  <div class="a1"><a href="#">所有目的地分类</a></div>
        @include('includes.dao')
        <div class="clear"></div>
        
  </div>
</div>

 <div id="page">
        <div class="order top10">
            <!--订单步骤 START-->
            <div class="orderStep">
                <ul class="step1">
                    <li class="li1 on">填写订单</li>
                    <li class="li2 ">填写游客信息</li>
                    <li class="li3 ">核对订单</li>
                    <li class="li4 ">付款</li>
                    <li class="li5 ">预订成功</li>
                </ul>
            </div>
            <!--订单步骤 END-->
            <form id="one_form" name="one_form" action="188_order_2.php" method="post">
            <div class="orderWrap">
                <div class="userInfo">
                    <h2>
                        在线预订：<a class="a1" href="http://www.byts.com.cn/line/sanyaziyouren002/4556.htm" target="_blank"> 2016年4-5月三亚自由行计划</a> &lt;北京 出发&gt;</h2>
                    <div class="checkOrderInfo">
                        <div class="hd">
                            线路信息</div>
                        <div class="bd">
                            <table cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                    <tr>
                                        <th class="lt" width="15%">
                                            线路编号
                                        </th>
                                      
                                        <th style=" text-align: left;" width="40%">
                                            出发时间与价格(点击更改)
                                        </th>
                                        <th width="18%">
                                            出游成人数
                                        </th>
                                         <th width="18%">
                                            出游儿童数
                                        </th>
                                        
                                        
                                    </tr>
                                    <tr>
                                        <td class="lt">
                                            CHN{{$arr->s_id}}                                        </td>
                                       
                                       
                                        <td>
<div class="fastCalender2" id="fastCalender2">
<div class="p10"><span class="s10 pTimeSpan">
  <input class="pTime" value="2016-09-22 (星期四) 出发,2950元/成人, 元/儿童" style="color:#666666" id="pTime" type="text"></span>
  
                     <div class="clearfix"></div>
                            <div class="s10Trim1 pDropCalender" style="z-index:999;">
                                <div style="display: none;" class="calenderPart" id="calenderPart">
                                    <div class="calenderPartM"><ul><li id="2016-09-12" v="2016-09-12" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-12 (星期一) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-13" v="2016-09-13" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-13 (星期二) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-14" v="2016-09-14" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-14 (星期三) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-15" v="2016-09-15" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-15 (星期四) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-16" v="2016-09-16" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-16 (星期五) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-17" v="2016-09-17" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-17 (星期六) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-18" v="2016-09-18" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-18 (星期日) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-19" v="2016-09-19" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-19 (星期一) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-20" v="2016-09-20" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-20 (星期二) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-21" v="2016-09-21" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-21 (星期三) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-22" v="2016-09-22" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-22 (星期四) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-23" v="2016-09-23" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-23 (星期五) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-24" v="2016-09-24" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-24 (星期六) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-25" v="2016-09-25" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-25 (星期日) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-26" v="2016-09-26" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-26 (星期一) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-27" v="2016-09-27" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-27 (星期二) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-28" v="2016-09-28" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-28 (星期三) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-29" v="2016-09-29" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-29 (星期四) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-09-30" v="2016-09-30" son="" title="2950" onclick="changeGoDate(this)"> 2016-09-30 (星期五) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-01" v="2016-10-01" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-01 (星期六) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-02" v="2016-10-02" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-02 (星期日) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-03" v="2016-10-03" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-03 (星期一) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-04" v="2016-10-04" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-04 (星期二) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-05" v="2016-10-05" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-05 (星期三) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-06" v="2016-10-06" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-06 (星期四) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-07" v="2016-10-07" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-07 (星期五) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-08" v="2016-10-08" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-08 (星期六) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-09" v="2016-10-09" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-09 (星期日) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-10" v="2016-10-10" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-10 (星期一) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-11" v="2016-10-11" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-11 (星期二) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-12" v="2016-10-12" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-12 (星期三) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-13" v="2016-10-13" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-13 (星期四) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-14" v="2016-10-14" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-14 (星期五) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-15" v="2016-10-15" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-15 (星期六) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-16" v="2016-10-16" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-16 (星期日) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-17" v="2016-10-17" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-17 (星期一) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-18" v="2016-10-18" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-18 (星期二) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-19" v="2016-10-19" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-19 (星期三) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-20" v="2016-10-20" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-20 (星期四) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-21" v="2016-10-21" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-21 (星期五) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-22" v="2016-10-22" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-22 (星期六) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-23" v="2016-10-23" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-23 (星期日) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-24" v="2016-10-24" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-24 (星期一) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-25" v="2016-10-25" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-25 (星期二) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-26" v="2016-10-26" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-26 (星期三) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-27" v="2016-10-27" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-27 (星期四) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-28" v="2016-10-28" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-28 (星期五) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-29" v="2016-10-29" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-29 (星期六) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-30" v="2016-10-30" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-30 (星期日) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-10-31" v="2016-10-31" son="" title="2950" onclick="changeGoDate(this)"> 2016-10-31 (星期一) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-01" v="2016-11-01" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-01 (星期二) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-02" v="2016-11-02" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-02 (星期三) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-03" v="2016-11-03" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-03 (星期四) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-04" v="2016-11-04" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-04 (星期五) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-05" v="2016-11-05" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-05 (星期六) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-06" v="2016-11-06" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-06 (星期日) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-07" v="2016-11-07" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-07 (星期一) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-08" v="2016-11-08" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-08 (星期二) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-09" v="2016-11-09" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-09 (星期三) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-10" v="2016-11-10" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-10 (星期四) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-11" v="2016-11-11" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-11 (星期五) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-12" v="2016-11-12" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-12 (星期六) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-13" v="2016-11-13" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-13 (星期日) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-14" v="2016-11-14" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-14 (星期一) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-15" v="2016-11-15" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-15 (星期二) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-16" v="2016-11-16" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-16 (星期三) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-17" v="2016-11-17" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-17 (星期四) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-18" v="2016-11-18" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-18 (星期五) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-19" v="2016-11-19" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-19 (星期六) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-20" v="2016-11-20" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-20 (星期日) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-21" v="2016-11-21" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-21 (星期一) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-22" v="2016-11-22" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-22 (星期二) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-23" v="2016-11-23" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-23 (星期三) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-24" v="2016-11-24" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-24 (星期四) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-25" v="2016-11-25" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-25 (星期五) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-26" v="2016-11-26" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-26 (星期六) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-27" v="2016-11-27" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-27 (星期日) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-28" v="2016-11-28" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-28 (星期一) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-29" v="2016-11-29" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-29 (星期二) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-11-30" v="2016-11-30" son="" title="2950" onclick="changeGoDate(this)"> 2016-11-30 (星期三) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-12-01" v="2016-12-01" son="" title="2950" onclick="changeGoDate(this)"> 2016-12-01 (星期四) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-12-02" v="2016-12-02" son="" title="2950" onclick="changeGoDate(this)"> 2016-12-02 (星期五) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-12-03" v="2016-12-03" son="" title="2950" onclick="changeGoDate(this)"> 2016-12-03 (星期六) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-12-04" v="2016-12-04" son="" title="2950" onclick="changeGoDate(this)"> 2016-12-04 (星期日) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-12-05" v="2016-12-05" son="" title="2950" onclick="changeGoDate(this)"> 2016-12-05 (星期一) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-12-06" v="2016-12-06" son="" title="2950" onclick="changeGoDate(this)"> 2016-12-06 (星期二) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-12-07" v="2016-12-07" son="" title="2950" onclick="changeGoDate(this)"> 2016-12-07 (星期三) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-12-08" v="2016-12-08" son="" title="2950" onclick="changeGoDate(this)"> 2016-12-08 (星期四) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-12-09" v="2016-12-09" son="" title="2950" onclick="changeGoDate(this)"> 2016-12-09 (星期五) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-12-10" v="2016-12-10" son="" title="2950" onclick="changeGoDate(this)"> 2016-12-10 (星期六) 出发,<b>2950</b>元/成人, 元/儿童</li><li id="2016-12-11" v="2016-12-11" son="" title="2950" onclick="changeGoDate(this)"> 2016-12-11 (星期日) 出发,<b>2950</b>元/成人, 元/儿童</li></ul></div>
                                    <div class="calenderPartF"></div>
                                </div>
                               
                            </div>

</div>
</div>

                              </td>
                                        <td>
                                        
                                           
<input value="-" name="ccc" id="ccc" class="put" title="减少成人数" type="button">
     <input id="txtHiddenPersonNum" name="txtHiddenPersonNum" value="{{$adult}}" class="txtHiddenPersonNum" type="text">
           
<input value="+" onclick="javascript:this.form.txtHiddenPersonNum.value++;" name="bbb" id="bbb" class="put" title="增加成人数" type="button">
                                        </td>
                                        <td> <input value="-" name="eee" id="eee" class="put" title="减少儿童数" type="button">
 <input id="txtHiddenChildNum" name="txtHiddenChildNum" value="{{$children}}" class="txtHiddenChildNum" type="text">
 <input value="+" name="ddd" id="ddd" class="put" title="增加儿童数" type="button"></td>
                                        
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--线路信息 END-->
                    </div>
                    
                    
                    <h2 id="h2_proadd">
                        附加产品</h2>
                    
                    
                    <div class="checkOrderInfo">
                        <!--附加产品 START-->
                        
                           <div class="hd">
                            保险产品
                            
                        </div>
                        <div class="bd" id="dd_travel_0">
                            <table id="table_0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                    <tr>
                                        <th class="lt" width="25%">
                                            名称
                                        </th>
                                        <th width="20%">
                                            使用日期
                                        </th>
                                        <th width="10%">
                                            价格
                                        </th>
                                        <th width="15%">
                                            单位
                                        </th>
                                        <th width="15%">
                                            份数
                                        </th>
                                        <th width="15%">
                                            小计
                                        </th>
                                    </tr>
                                    
                                    <tr id="tr_77935">
                                        <td class="lt">
                                            
                                          <span id="a_77935">旅行社责任保险15万元/人</span>
                                            
                                        </td>
                                        <td>
                                            <input id="txtHiddenIsFreeBaoxian_77935" value="0" type="hidden">
                                            <input id="txtHiddenIsUserPersonType_77935" value="0" type="hidden">
                                            <input id="txtHiddenValuationType_77935" value="1" type="hidden">
                                            <input id="txtHiddenDefaultNums_77935" value="1" type="hidden">
                                            <input id="txtHiddenDefaultOrderNums_77935" value="0" type="hidden">
                                            <input id="txtHiddenAddProductId_77935" value="17858" type="hidden">
                                            <input id="txtHiddenDateRange_77935" value="0" type="hidden">
                                            --
                                            
                                            
                                        </td>
                                        <td>
                                            
                                            <input id="txtHiddenAddProductPdateEnable_77935" value="18022" type="hidden">
                                            <input id="txtHiddenAddProductProfit_77935" value="0" name="txtHiddenAddProductProfit_77935" type="hidden">
                                            <b>￥</b><b id="td_price_77935">
                                               0                                            </b>
                                            
                                        </td>
                                        <td>
                                            <input id="hdunits_77935" value="人" type="hidden">
                                            人
                                        </td>
                                        <td>
                                            <input id="txtHiddenAddProductTypeId_77935" value="13" type="hidden">
                                            <input id="txtHiddenAddProductIncludeEnable_77935" value="0" type="hidden">
                                            <input id="txtHiddenAddProductSHAddtionPriceId_77935" value="" type="hidden">
                                            <input id="txtHiddenAddProductSHAddtionCountId_77935" value="" type="hidden">
                                            <input id="txtHiddenAddProductSupplierNO_77935" value="" type="hidden">
                                            <input id="txtHiddenAddProductName_77935" value="旅行社责任保险15万元/人" name="txtHiddenAddProductName_77935" type="hidden">
                                            <span id="spans">{{$nums}}</span>
                                        </td>
                                        <td>
                                            <b>￥</b><b id="td_total_77935">0</b>
                                        </td>
                                    </tr>
                                    <tr class="trhide">
                                        <td colspan="6" style="text-align: left; color: #666; line-height: 22px;">
                                          
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        
                        

                       
                        <!--优惠抵扣 START-->
                        <div class="hd hdTrim1" style="">
                            优惠抵扣</div>
                        <div class="bd" style="">
                            <table class="tb2" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                    <tr>
                                    </tr><tr>
                                        <th class="lt" width="42%">
                                            名称
                                        </th>
                                        <th width="15%">
                                            积分账户余额
                                        </th>
                                        <th width="15%">
                                            人均使用积分
                                        </th>
                                        <th width="13%">
                                            抵扣积分
                                        </th>
                                        <th width="15%">
                                            小计(四舍五入)
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="lt">
                                            积分抵扣（本次预订可抵用积分限额：<span class="s1"> 0积分</span>）
                                        </td>
                                        <td>
                                            <span class="s1" id="span_allScore">
                                                0</span>积分
                                        </td>
                                        <td>
                                            <span class="s1" id="span_canCutScore">
                                                0</span>积分/人
                                        </td>
                                        <td>
                                            <input value="0" class="input1" id="ddl_nums_person" maxlength="5" name="ddl_nums_person">
											
                                        </td>
                                        <td>
                                            <b>￥-</b><b id="span_cutScore">0</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="lt">&nbsp;
                                            
                                        </td>
                                        <td colspan="3" style="text-align: right">
                                            <div class="floatDiv">
                                                <input class="input2" id="txtActiveCode" maxlength="15" value="请输入抵扣券编号" style="color: #ccc;">
                                                <input style="color: rgb(0, 0, 0);" id="btnActionCode" value="抵扣" type="button">
                                                <input id="txtHiddenActiveCode" type="hidden">
                                            </div>
                                        </td>
                                        <td>
                                            <b>￥-</b><b id="span_ActiveCode">0</b>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--优惠抵扣 END-->
                    </div>
                </div>
                <div style="top: 0px;" class="orderList">
                    <div class="hd">
                        <span></span>预订清单</div>
                    <div class="bd">
                        <ul>
                            <li class="li1">
                                <p class="p1">
                                    旅游团费</p>
                                <p>
                                    <b>￥<s id="getjiage">{{$arr->s_sprice}}</s></b> <font id="getcr">{{$adult}}</font> 成人×￥<font id="gethidChenRen">{{$arr->s_sprice}}</font>
                                </p>
                                <p>
                                    <b>￥<s id="getrtjiage">0</s></b><font id="getrt">{{$children}}</font> 儿童×￥<font id="gethidErTong"></font></p>
                            </li>
                             <li class="li1">
                                <p class="p1">
                                    附加产品</p>
                                <p>
                                    <b><s id="getjiage"><span id="sps">{{$nums}}</span></s>×0￥</b> <font id="getcr">旅行社责任保险15万/人</font><font id="gethidChenRen"></font>
                                </p>
                            </li>
                            <li style="display: none;" class="li2" id="AddPList"></li>
                            <li style="display: none;" class="li3" id="DeKouList"></li>
                        </ul>
                        <div class="li4">
                            <p>
                                 <strong>应付总额：</strong><label>￥<i id="offerPrice"></i></label>
								<input value="{{$arr->s_sprice}}" id="allp" name="allp" type="hidden">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                </div>
                <div class="userInfoBtn" id="gl_return" style="display: block;">
                    <input onclick="javascript:history.go(-1) " style="background: url(http://www.byts.com.cn/ORG7188_templets/002/images/order15.gif); border-width: 0px;
                        cursor: pointer; width: 139px; height: 44px;" type="button">
                    <input id="btn_Next" onclick="writes()"
                     style="background: url(http://www.byts.com.cn/ORG7188_templets/002/images/order19.gif);
                    border-width: 0px; cursor: pointer; width: 139px; height: 44px;" type="button">
                </div>
                <div class="clearfix">
                </div>
            </div>
            
            <input id="txtHiddenPId" name="txtHiddenPId" value="4556" type="hidden">
			
            <input id="txtHiddenProductTotal" name="txtHiddenProductTotal" value="4556" type="hidden">
            <input id="txtHiddenNums" name="txtHiddenNums" value="1" type="hidden">
            <input id="txtHiddenGoDate" name="txtHiddenGoDate" value="2016-09-22" type="hidden">
            <input id="txtHiddenUzaiPrice" name="txtHiddenUzaiPrice" value="{{$arr->s_sprice}}" type="hidden">
            <input id="txtHiddenChildPrice" name="txtHiddenChildPrice" value="" type="hidden">
            
            <input id="txtHiddenProcessType" name="txtHiddenProcessType" value="1" type="hidden">
            <input id="txtHiddenMType" name="txtHiddenMType" value="3" type="hidden">
            
            <input id="txtHiddenYesOrNo" name="txtHiddenYesOrNo" value="no" type="hidden">
            
            <input id="txtSubmitHiddenAdd" name="txtSubmitHiddenAdd" value="" type="hidden">
            <input id="txtSubmitHiddenUb" name="txtSubmitHiddenUb" value="" type="hidden">
            <input id="txtSubmitHiddenUpTrain" name="txtSubmitHiddenUpTrain" value="" type="hidden">
            
                  
            <input id="txtHiddenUList" name="txtHiddenUList" value="" type="hidden">
            <input id="txtHiddenDes" name="txtHiddenDes" value="" type="hidden">
            
            <input id="txtHiddenUseScore" name="txtHiddenUseScore" value="0" type="hidden">
            <input id="txtHiddenAllScore" name="txtHiddenAllScore" value="0" type="hidden">
            </form>
        </div>

<script src="../js/one_order.js" type="text/javascript"></script>
<script src="../js/jquery1.8.js" type="text/javascript"></script>

    <script src="../js/jquery.js" type="text/javascript"></script>

    <script src="%E5%A1%AB%E5%86%99%E8%AE%A2%E5%8D%95_files/tooltip.html" type="text/javascript"></script>

    <script src="../js/order.js" type="text/javascript"></script>
    <script>
      function writes()
      {
        var adult=$("#txtHiddenPersonNum").val();
        var children=$("#txtHiddenChildNum").val();
        var sprice=$("#offerPrice").html();
        var s_sprice={{$arr->s_sprice}};
        var s_id={{$arr->s_id}};
        location.href='write_information?adult='+adult+'&children='+children+'&sprice='+sprice+'&s_sprice='+s_sprice+'&s_id='+s_id;       
      }     
    </script>
    <script language="javascript1.2">
	
	
	$.ajax({
    type: "Get",
    url: "http://www.byts.com.cn/add/ajax_select.php?aid=4556&time=" + Math.random(),
    data: "json",
    success: function(msg) {
		
        var jason = eval("(" + msg + ")");
		
        var sonprice = "";
		var txtHiddenGoDate=$("#txtHiddenGoDate").val();
        for (var i = 0; i < jason.length; i++) {
			
                 sonprice = "" + jason[i].ChildPrice + "元/儿童";
		
	             if(txtHiddenGoDate==jason[i].Date)
				 {
					$("#pTime").val("" + jason[i].Month + "" + jason[i].Week + "出发," + jason[i].PersonPrice + "元/成人, " + sonprice + ""); 
				 }
           
                $(".p10 ul").append("<li id='" + jason[i].Month + "' v='" + jason[i].Date + "' son='" + jason[i].ChildPrice + "' title='" + jason[i].PersonPrice + "' onclick='changeGoDate(this)' > " + jason[i].Month + "" + jason[i].Week + "出发,<b>" + jason[i].PersonPrice + "</b>元/成人, " + sonprice + "</li>");
                }

      
		
		 
		  
        $("#_hidChenRen").val(ul.find("li").eq(0).attr("title"));
        $("#_hidErTong").val(ul.find("li").eq(0).attr("son"));
        $("#_hidDate").val(ul.find("li").eq(0).attr("v"));
    }

});



	$(function() {
		
		do71org88ShowCalender("fastCalender2");
});   //$(function()
	
	function  do71org88ShowCalender(obj) {
    var tg = $('#' + obj).find('div.p10').find('.calenderPart');
	

    var arrow = tg.next('.cArrow');
 
 
    tg.next(".cArrow").click(function() {
									 
  
			
            tg.show();
			
            arrow.attr("class", "cArrow cup");
       
    });


    tg.parents('div.p10').find('span.pTimeSpan').click(function() {
																
        tg.show();
        arrow.attr("class", "cArrow cup");
    });



      tg.parents('div.p10').find('span.pTimeSpan').click(function() {
																
        tg.show();
        arrow.attr("class", "cArrow cup");
    });




    //点击Li日期下拉选项
    tg.find('li').live("click", function() {

        var o = $(this);
		
        tg.parents('div.p10').find('input.pTime').val(o.text());
        tg.hide();
        arrow.attr("class", "cArrow cdown");
        $("#txtHiddenUzaiPrice").val(o.attr("title")); //成人价
		$("#gethidChenRen").text(o.attr("title")); //预定清单成人价
		 var getjiage=$("#txtHiddenUzaiPrice").val()*$("#txtHiddenPersonNum").val(); //计算价格
		 $("#getjiage").text(getjiage);
		
        $("#txtHiddenChildPrice").val(o.attr("son")); //儿童价
		$("#gethidErTong").text(o.attr("son")); //预定清单儿童价
		var getrtjiage=$("#txtHiddenChildPrice").val()*$("#txtHiddenChildNum").val();
					   $("#getrtjiage").text(getrtjiage);
		
        $("#txtHiddenGoDate").val(o.attr("v")); // 日期
		
		
		sumAll();
       // $("#_hidPersonNum").val($("#person2").val());
        //$("#_hidChildNum").val($("#child2").val());

    });

  
  

    $(document).click(function(e) {
							   
        var t = $(e.target);
        var v1 = "#" + obj + " .pTime" + ",#" + obj + " .pDropCalender" + ",#" + obj + " .pDropCalender *,#submit_a,#btnFastCalender,#submit_a";
		
		
        if (!t.is(v1)) {
			
            tg.hide();
            arrow.attr("class", "cArrow cdown");
        }
    });
	}
	</script>
	</div>
<div style="clear:both;"></div>
<div class="ufooter">
    <div class="footer01">
        <div class="newWarp">
            <div class="foot_faq">
            
            <div class="faq_container01">
                    <span class="faq_class"><strong>预订常见问题</strong></span>
                    <ul>
                    
                    
 <li><a href="http://www.byts.com.cn/help/1/chunwan.htm" title="纯玩是什么意思？" target="_blank">纯玩是什么意思？</a></li>
<li><a href="http://www.byts.com.cn/help/1/help538.html" title="单房差是什么？" target="_blank">单房差是什么？</a></li>
<li><a href="http://www.byts.com.cn/help/1/help537.html" title="双飞、双卧都是什么意思？" target="_blank">双飞、双卧都是什么意思？</a></li>
<li><a href="http://www.byts.com.cn/help/1/help536.html" title="满意度是怎么计算的？" target="_blank">满意度是怎么计算的？</a></li>
 
                       
                       
                    </ul>
                </div><div class="faq_container01">
                    <span class="faq_class"><strong>付款和发票</strong></span>
                    <ul>
                    
                    
 <li><a href="http://www.byts.com.cn/help/2/help543.html" title="签约可以刷卡吗？" target="_blank">签约可以刷卡吗？</a></li>
<li><a href="http://www.byts.com.cn/help/2/help542.html" title="付款方式有哪些？" target="_blank">付款方式有哪些？</a></li>
<li><a href="http://www.byts.com.cn/help/2/help541.html" title="怎么网上支付？" target="_blank">怎么网上支付？</a></li>
<li><a href="http://www.byts.com.cn/help/2/help540.html" title="如何获取发票？" target="_blank">如何获取发票？</a></li>
 
                       
                       
                    </ul>
                </div><div class="faq_container01">
                    <span class="faq_class"><strong>签署旅游合同</strong></span>
                    <ul>
                    
                    
 <li><a href="http://www.byts.com.cn/help/3/help547.html" title="有旅游合同范本下载吗？" target="_blank">有旅游合同范本下载吗？</a></li>
<li><a href="http://www.byts.com.cn/help/3/help546.html" title="门市地址在哪里？" target="_blank">门市地址在哪里？</a></li>
<li><a href="http://www.byts.com.cn/help/3/help545.html" title="能传真签合同吗？" target="_blank">能传真签合同吗？</a></li>
<li><a href="http://www.byts.com.cn/help/3/help544.html" title="可以不签合同吗？" target="_blank">可以不签合同吗？</a></li>
 
                       
                       
                    </ul>
                </div><div class="faq_container01">
                    <span class="faq_class"><strong>旅游预订优惠政策</strong></span>
                    <ul>
                    
                    
 <li><a href="http://www.byts.com.cn/help/4/help551.html" title="如何查看我的金币信息？" target="_blank">如何查看我的金币信息？</a></li>
<li><a href="http://www.byts.com.cn/help/4/help550.html" title="如何使用金币？" target="_blank">如何使用金币？</a></li>
<li><a href="http://www.byts.com.cn/help/4/help549.html" title="如何得到金币" target="_blank">如何得到金币</a></li>
<li><a href="http://www.byts.com.cn/help/4/help548.html" title="什么是金币？" target="_blank">什么是金币？</a></li>
 
                       
                       
                    </ul>
                </div><div class="faq_container01">
                    <span class="faq_class"><strong>其他事项</strong></span>
                    <ul>
                    
                    
 <li><a href="http://www.byts.com.cn/help/5/2016/0304/5402.html" title="&lt;font color='#FF6633'&gt;关于游客购物的重要提示&lt;/font&gt;" target="_blank"><font color="#FF6633">关于游客购物的重要提示</font></a></li>
<li><a href="http://www.byts.com.cn/help/5/2012/0524/555.html" title="退款问题解答" target="_blank">退款问题解答</a></li>
<li><a href="http://www.byts.com.cn/help/5/2012/0524/554.html" title="有旅游保险吗？保额多少？" target="_blank">有旅游保险吗？保额多少？</a></li>
<li><a href="http://www.byts.com.cn/help/5/2012/0524/553.html" title="签证相关问题解答" target="_blank">签证相关问题解答</a></li>
 
                       
                       
                    </ul>
                </div>

          
          
                <div class="faq_container06">
                    <span class="faq_class"><strong>关注我们的微博</strong></span>
                  <div class="interact_us">
                  
                    <ul class="interact_us clearfix">
                        <li><span class="tn_weibo"><a target="_blank" href="http://www.weibo.com/"></a></span>
                            <p><a target="_blank" rel="nofollow" href="http://www.weibo.com/">新浪微博</a></p>
                        </li>
                        <li><span class="tn_tencent"><a target="_blank" href="http://t.qq.com/ccsz8"></a></span>
                            <p><a target="_blank" rel="nofollow" href="http://t.qq.com/ccsz8">腾讯微博</a></p>
                        </li>
                        <li id="wxpop"><span class="tn_weixin"><a href="javascript:void(0);"></a></span>
                            <p><a href="javascript:void(0);" rel="nofollow">微信</a></p>
                        </li>
                    </ul>
                </div>

                </div>
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
    
<div class="foot-webtrust">
    <a href="http://www.byts.com.cn/news/lvyouxinwen/2183.htm" rel="nofollow" target="_blank" title="国家4A级旅行社" class="trust1"></a>
    <a href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202005060700533" rel="nofollow" target="_blank" title="经营性ICP备案" class="trust2"></a>
    <a href="https://ss.knet.cn/verifyseal.dll?sn=e14022111010546749hh13000000&amp;comefrom=trust&amp;trustKey=dn&amp;trustValue=www.byts.com.cn" target="_blank" rel="nofollow" title="可信网站认证" class="trust3"></a>
    <a href="http://si.trustutn.org/info?sn=354140414002398002760" target="_blank" rel="nofollow" title="认证联盟实名认证" class="trust4"></a>
    <a href="http://cats.org.cn/pinzhi/renzheng/1178" target="_blank" rel="nofollow" title="中国旅行社协会常务理事单位" class="trust5"></a>
    <a href="http://www.byts.com.cn/byts2015.jpg" target="_blank" rel="nofollow" title="北京工商行政管理" class="trust6"></a>
    <a href="http://www.anquan.org/authenticate/cert/?site=www.byts.com.cn&amp;at=realname" target="_blank" rel="nofollow" title="安全联盟实名认证" class="trust7"></a>
</div>

        <div class="foot-copyright">
            <span>Copyright 1984-2014 http://www.byts.com.cn</span>
            <span>京ICP证041363号</span>
            <span>联系电话：<font class="red">400-926-5166</font></span>
<span>优质带宽由<a href="http://www.62idc.com/">中睿科技</a>提供 <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5896591'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "v1.cnzz.com/stat.php%3Fid%3D5896591' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_5896591"><a href="http://www.cnzz.com/stat/website.php?web_id=5896591" target="_blank" title="站长统计">站长统计</a></span><script src="%E5%A1%AB%E5%86%99%E8%AE%A2%E5%8D%95_files/stat.php" type="text/javascript"></script><script src="%E5%A1%AB%E5%86%99%E8%AE%A2%E5%8D%95_files/core.php" charset="utf-8" type="text/javascript"></script></span>
        </div>


        <div class="foot-aboutlink">
            <span><a href="http://www.byts.com.cn/">网站首页</a></span>
            
             <span><a target="_blank" href="http://www.byts.com.cn/about/3236.html">关于网上有许多自称北青旅官网的说明</a></span>
<span><a target="_blank" href="http://www.byts.com.cn/about/562.html">商务合作</a></span>
<span><a target="_blank" href="http://www.byts.com.cn/about/561.html">发展历程</a></span>
<span><a target="_blank" href="http://www.byts.com.cn/about/560.html">网站招聘</a></span>
<span><a target="_blank" href="http://www.byts.com.cn/about/559.html">用户协议</a></span>
<span><a target="_blank" href="http://www.byts.com.cn/about/558.html">免责声明</a></span>
<span><a target="_blank" href="http://www.byts.com.cn/about/557.html">联系我们</a></span>
<span><a target="_blank" href="http://www.byts.com.cn/about/556.html">关于我们</a></span>
 

        </div>

        <div class="foot-friendlink">
            
            <a class="label" href="http://www.byts.com.cn/add/link.php">友情链接：</a>
         <a href="http://www.lvmama.com/destroute/" target="_blank">驴妈妈国内旅游</a> <a href="http://beijing.cncn.com/" target="_blank">北京旅游</a> <a href="http://www.hbcct.com.cn/" target="_blank">湖北康辉旅游</a> <a href="http://www.hanyouwang.com/" target="_blank">韩国旅游</a> <a href="http://bj.uzai.com/" target="_blank">北京旅游</a> <a href="http://huoche.mafengwo.cn/" target="_blank">列车时刻表</a> <a href="http://beijing.tianqi.com/" target="_blank">北京天气</a> <a href="http://bjmap.8684.cn/" target="_blank">北京地图</a> <a href="http://you.ctrip.com/place/" target="_blank">携程旅游网</a> <a href="http://www.zhuna.cn/hotel/" target="_blank">住哪儿网</a> <a href="http://www.ganji.com/lvyou/" target="_blank">旅游</a> <a href="http://bj.ganji.com/lvyou" target="_blank">北京旅游</a> <a href="http://beijing.taoche.com/" target="_blank">北京二手车</a> <a href="http://beijing.liebiao.com/lvyou/" target="_blank">北京旅行社</a> <a href="http://visa.mafengwo.cn/" target="_blank">签证代办</a> <a href="http://www.tibetcn.com/" target="_blank">西藏旅游</a> <a href="http://www.wodingche.com/" target="_blank">租车</a> <a href="http://www.daoguo.com/" target="_blank">重庆旅行社</a> <a href="http://www.cncn.net/" target="_blank">欣旅通B2b</a> <a href="http://www.52udl.com/" target="_blank">大连旅行社</a> <a href="http://cn.konest.com/" target="_blank">韩国旅游</a> <a href="http://www.hehuamei.com/" target="_blank">龙王传说</a> <a href="http://www.youabc.cn/" target="_blank">自由行攻略</a> <a href="http://www.mayi.com/beijing/" target="_blank">北京日租房</a> <a href="http://www.99inn.cc/" target="_blank">北京旅馆预订</a> <a href="http://www.ytszg.com/" target="_blank">重庆青年旅行社</a> <a href="http://cn.toursforfun.com/" target="_blank">途风旅游网</a> <a href="http://www.517hiking.com/" target="_blank">我要去旅行</a> <a href="http://www.qiaomian.com/" target="_blank">跟团游</a> <a href="http://www.szqinglv.cn/" target="_blank">苏州青旅</a> <a href="http://huichang.qunar.com/" target="_blank">会议室出租</a> <a href="http://www.81873.com/" target="_blank">张家界自助游</a> <a href="http://www.161580.com/" target="_blank">机票查询预订</a> <a href="http://travel.qunar.com/p-cs299914-beijing" target="_blank">北京旅游攻略</a> <a href="http://travel.qunar.com/p-cs299914-beijing-jingdian" target="_blank">北京旅游景点大全</a> <a href="http://www.huiche.com/" target="_blank">汇车网</a> <a href="http://www.soucheke.com/" target="_blank">二手车</a> 
         
        </div>
        
    </div>



<!-- WPA Button Begin -->
<iframe style="display: block; position: fixed; z-index: 2147483646 ! important; left: auto; right: 8px; margin-left: 0px; top: 50%; bottom: auto; margin-top: -138px;" src="%E5%A1%AB%E5%86%99%E8%AE%A2%E5%8D%95_files/a.html" allowtransparency="true" scrolling="no" frameborder="0" height="277" width="121"></iframe><script charset="utf-8" type="text/javascript" src="%E5%A1%AB%E5%86%99%E8%AE%A2%E5%8D%95_files/wpa.php"></script>
<!-- WPA Button End -->
<script language="JavaScript" src="../js/floatcard.js"></script><script src="../js/all_20100501.js"></script><script id="TQGetrequestUser_JS"></script>
<script id="TQGetIsNewMsg_JS"></script><script src="../js/as.js"></script><object id="tq_as" name="tq_as" style="position:absolute;left:0px;top:-5px;" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="1" width="1"><param name="movie" value="http://sysimages.tq.cn/js/vip/shareObject.swf"><param name="allowScriptAccess" value="always"><object id="tq_as2" name="tq_as2" style="position:absolute;left:0px;top:-5px;" type="application/x-shockwave-flash" data="%E5%A1%AB%E5%86%99%E8%AE%A2%E5%8D%95_files/shareObject.swf" height="1" width="1"><param name="allowScriptAccess" value="always"></object></object>




</body></html>