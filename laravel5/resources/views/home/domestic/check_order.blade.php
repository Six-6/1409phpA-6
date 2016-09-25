<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><script src="%E6%A0%B8%E5%AF%B9%E8%AE%A2%E5%8D%95_files/crmqq.php" async="" charset="utf-8" type="text/javascript"></script><script src="../js/contains.js" async="" charset="utf-8" type="text/javascript"></script><script src="../js/localStorage.js" async="" charset="utf-8" type="text/javascript"></script><script src="../js/Panel.js" async="" charset="utf-8" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="../css/style.css" rel="stylesheet" media="screen" type="text/css">
<link href="../css/order.css" rel="stylesheet" media="screen" type="text/css">

<title>惠玩旅行社官网--在线预订</title>
<script src="../js/global.js" type="text/javascript"></script>

<link href="../css/style_003.css" id="TQCSS0.641963438594864" type="text/css" rel="stylesheet">
<link href="../css/style_002.css" id="TQCSS0.49868192109034437" type="text/css" rel="stylesheet">
<script src="../js/float.js" id="TQJS0.726949197972213">
</script><script src="../js/invite.js" id="TQJS0.06252706238352035">
	
</script><script id="_da" src="../js/i.js" async="" charset="utf-8"></script>
<script src="../js/scriptonline.js" id="TQJS0.2655938225645754"></script>
<script src="%E6%A0%B8%E5%AF%B9%E8%AE%A2%E5%8D%95_files/sendmain.txt" id="TQJS0.6625869497385166"></script></head>
<body><link href="../css/site.css" rel="stylesheet" type="text/css">
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
        <div class="page top10">
        <div id="xs2" class="xs" style="text-align: center; display: none;">
            <img src="%E6%A0%B8%E5%AF%B9%E8%AE%A2%E5%8D%95_files/loading.gif">
            <br>
            正在提交，请稍后。。。
        </div>
        <div class="order">
            <!--订单步骤 START-->
            <div class="orderStep">
                <ul class="step3">
                    <li class="li1">填写订单</li>
                    <li class="li2">填写游客信息</li>
                    <li class="li3 on">核对订单</li>
                    <li class="li4 ">付款</li>
                    <li class="li5 ">预订成功</li>
                </ul>
            </div>
            <!--订单步骤 END-->
            <form id="three_form" method="post" action="">
            <div class="orderWrap">
                <div class="checkOrder">
                    <h2>
                        订单信息确认</h2>
                    <!--线路信息 START-->
                    <div class="checkOrderInfo">
                        <div class="hd">
                            线路信息</div>
                        <div class="bd">
                            <table cellpadding="0" cellspacing="0" width="100%">
                                <tbody><tr>
                                    <th class="lt" width="10%">
                                        订单编号
                                    </th>
                                    <th width="45%">
                                        线路名称
                                    </th>
                                    <th width="10%">
                                        出发城市
                                    </th>
                                    <th width="10%">
                                        出发时间
                                    </th>
                                    <th width="15%">
                                        出游人数
                                    </th>
                                    <th width="10%">
                                        小计
                                    </th>
                                </tr>
                                <tr>
                                    <td class="lt">
                                    	{{$arr->s_id}}  
                                    </td>
                                    <td class="lt" style="text-align: center;">
                                        <a class="a1" href="#" target="_blank">
                                            {{$sname[0]}}</a>
                                    </td>
                                    <td>
                                        北京 
                                    </td>
                                    <td>
                                        {{$date}} 
                                    </td>
                                    <td>
                                         {{$arr->adult}} 成人+
                                         {{$arr->children}}儿童
                                    </td>
                                    <td>
                                        <b>￥</b><b id="proTotal">{{$arr->c_sprice}}</b>
                                    </td>
                                </tr>
                            </tbody></table>
                        </div>
                        <!--线路信息 END-->
                        <!--附加产品信息 START-->
                        
                        <div class="hd">
                            附加产品信息</div>
                        <div class="bd">
						                                
                            
				
                        </div>
                        
                        <!--附加产品信息 END-->
                        <!--游客及联系人信息 START-->
                        <div class="hd">
                            游客及联系人信息</div>
                        <div class="bd">
                            
                            <table id="table_client_ch" cellpadding="0" cellspacing="0" width="100%">
                                <tbody><tr>
                                    <th class="lt" width="10%">
                                        游客类型
                                    </th>
                                    <th width="20%">
                                        真实姓名
                                    </th>
                                    <th width="15%">
                                        证件类型
                                    </th>
                                    <th width="30%">
                                        证件号码
                                    </th>
                                    <th width="5%">
                                        性别
                                    </th>
                                    <th width="10%">
                                        出生年月
                                    </th>
                                    <th width="10%">
                                        手机
                                    </th>
                                    <th style="display: none;">
                                        游客ID
                                    </th>
                                    <th style="display: none;">
                                        是否保存
                                    </th>
                                </tr>
                                @foreach($newarr as $val)
                            <tr>
                            	<td class="lt">成人</td>
                            	<td>{{$val['name']}}</td>
                            	<td>{{$val['type']}}</td>
                            	<td>{{$val['code']}}</td>
                            	<td>--</td>
                            	<td>--</td>
                            	<td>{{$val['phone']}}</td>
                            	<td style="display:none;"></td>
                            	<td style="display:none;">1</td>
                            </tr>
                            @endforeach
                        </tbody></table>
                            
                        </div>
                        <!--游客及联系人信息 END-->
                        <!--联系人信息 START-->
                        <div class="hd hdTrim1">
                            联系人信息</div>
                        <div class="bd ">
                            <table class="guestInfo" cellpadding="0" cellspacing="0" width="100%">
                                <tbody><tr>
                                    <td>
                                        <i>联系人姓名：</i><span id="link_name">{{$arr->a_name}}</span>
                                    </td>
                                    <td>
                                        <i>手机号码：</i><span id="link_mobile">{{$arr->a_phone}}</span>
                                    </td>
                                    <td>
                                        <i>电子邮箱：</i><span id="link_email">{{$arr->a_email}}</span>
                                    </td>
                                    <td>
                                        <i>固定电话：</i><span id="link_phone"></span>
                                    </td>
                                </tr>
                            </tbody></table>
                        </div>
                        <!--联系人信息 END-->
                    </div>
                    <div id="orderProtocol" class="orderProtocol">
                        <div class="hd">
                            <ul>
                                
                                <li class="on"><a href="#">费用包含 </a></li>
                                <li><a href="#">费用不包含 </a></li>
                                <li><a href="#">温馨提示 </a></li>
                                <li><a href="#">行程特色 </a></li>
                            </ul>
                        </div>
                        <div class="bd">
                            
                            <div style="display: block;" class="item">
                              1、北京至三亚往返机票及机场建设燃油附加税； &nbsp;&nbsp;<br>
2、三亚机场至酒店免费接送机（周边区域不含，可以乘坐酒店免费穿梭巴士，详情联系酒店礼宾部）；<br>
3、四晚酒店住宿及每日自助早餐；<br>
4、小孩只含机票及车位费，不含住宿及早餐，具体差额请电询相关计调人员；<br>                            </div>
                            <div class="item">
                                
单房差、游客因私消费、海南酒店政府基金税（五星级酒店11元/人/晚，四星级酒店9元/人/晚，三星级酒店3元/人/晚）此费用由客人自行在前台支付。
                            </div>
                            <div class="item">
                              1、此价格为单人价格，2人起订，单人需要补房差；<br>
2、免费接送机每间房仅限2大1小（1米以下），超出车费另付（我司提供的免费接送机服务为拼车统一发车的旅游巴士，需要等待其他客人，如客人不需要此项服务视为自动放弃）；<br>
3、以上价格包含的赠送项目，如客人不使用视为自动放弃，费用不退，敬请谅解；<br>
<span style="color:#4C33E5;line-height:26px;font-family:Arial, 宋体;font-size:18px;vertical-align:baseline;"><span style="color:#FF6600;vertical-align:baseline;">北京-三亚往返航班参考</span></span><span style="color:#333333;line-height:21px;font-family:Arial, 宋体;font-size:14px;vertical-align:baseline;"></span><span style="color:#333333;line-height:26px;font-family:Arial, 宋体;font-size:14px;"></span> 
<table class="MsoTableGrid" style="margin:0px;padding:0px;border:currentColor;width:651.45pt;color:#333333;font-family:Arial, 宋体;font-size:14px;" border="1" cellpadding="0" cellspacing="0" width="869">
	<tbody>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;background-color:#DAEEF3;" valign="top" width="148">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-weight:700;vertical-align:baseline;"><span style="font-family:宋体;font-size:12pt;vertical-align:baseline;"><span style="font-size:14px;vertical-align:baseline;">航空公司</span><span style="vertical-align:baseline;"></span></span></span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;background-color:#DAEEF3;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-weight:700;vertical-align:baseline;"><span style="font-family:宋体;font-size:12pt;vertical-align:baseline;"><span style="font-size:14px;vertical-align:baseline;">北京</span><span style="font-size:14px;vertical-align:baseline;">—</span><span style="font-size:14px;vertical-align:baseline;">三亚航班时间</span><span style="vertical-align:baseline;"></span></span></span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;background-color:#DAEEF3;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-weight:700;vertical-align:baseline;"><span style="font-family:宋体;font-size:12pt;vertical-align:baseline;"><span style="font-size:14px;vertical-align:baseline;">三亚</span><span style="font-size:14px;vertical-align:baseline;">—</span><span style="font-size:14px;vertical-align:baseline;">北京航班时间</span><span style="vertical-align:baseline;"></span></span></span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" rowspan="5" valign="top" width="148">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;font-size:12pt;vertical-align:baseline;"><span style="font-size:14px;vertical-align:baseline;">南方</span><span style="vertical-align:baseline;"></span></span> 
				</p>
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;font-size:12pt;vertical-align:baseline;"><span style="font-size:14px;vertical-align:baseline;">航空公司</span><span style="vertical-align:baseline;"></span></span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CZ6759/07:10--11:00</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CZ6711/08:00--11:55</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CZ6718/09:00--12:50</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CZ6760/12:00--15:45</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CZ6712/13:05--17:05</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CZ6715/14:30--18:20</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CZ6714/14:20--18:25</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CZ6717/18:20--22:20</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CZ6716/19:15--23:15</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CZ6713/19:40--23:30</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" rowspan="4" valign="top" width="148">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;font-size:12pt;vertical-align:baseline;"><span style="font-size:14px;vertical-align:baseline;">海南</span><span style="vertical-align:baseline;"></span></span> 
				</p>
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;font-size:12pt;vertical-align:baseline;"><span style="font-size:14px;vertical-align:baseline;">航空公司</span><span style="vertical-align:baseline;"></span></span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">HU7079/08:15--12:15</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">HU7080/13:15--17:05</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">HU7279/11:30--15:25</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">HU7280/16:30--20:15</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">HU7179/15:05--19:05</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">HU7180/20:15--00:15</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">HU7779/21:05--01:00</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">HU7780/21:15--01:00</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" rowspan="6" valign="top" width="148">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;font-size:12pt;vertical-align:baseline;"><span style="font-size:14px;vertical-align:baseline;">中国国际</span><span style="vertical-align:baseline;"></span></span> 
				</p>
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;font-size:12pt;vertical-align:baseline;"><span style="font-size:14px;vertical-align:baseline;">航空公司</span><span style="vertical-align:baseline;"></span></span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CA1353/07:00--10:50</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CA1354/12:20--15:55</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CA1369/07:45—11:45</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CA1370/12:55--16:45</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;text-indent:2.65pt;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CA1803/09:45--13:50</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CA1804/14:55--18:45</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;text-indent:2.65pt;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CA1377/12:50--16:55</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CA1378/18:00--21:50</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CA1345/14:55--19:00</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CA1346/20:15--00:15</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CA1891/18:10--22:05</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">CA1892/06:45--10:25</span> 
				</p>
			</td>
		</tr>
		<tr>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="148">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;font-size:12pt;vertical-align:baseline;"><span style="font-size:14px;vertical-align:baseline;">首都</span><span style="vertical-align:baseline;"></span></span> 
				</p>
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;font-size:12pt;vertical-align:baseline;"><span style="font-size:14px;vertical-align:baseline;">航空公司</span><span style="vertical-align:baseline;"></span></span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="359">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">JD5371/08:25—14:10</span> 
				</p>
			</td>
			<td style="border:1pt dotted windowtext;font-size:14px;vertical-align:baseline;" valign="top" width="361">
				<p class="MsoNormal" style="text-align:center;vertical-align:baseline;" align="center">
					<span style="font-family:宋体;vertical-align:baseline;">JD5372/17:35--23:10<br>
</span><span style="font-family:宋体;font-size:12pt;vertical-align:baseline;"><span style="font-size:14px;vertical-align:baseline;">（双号）</span><span style="font-size:14px;vertical-align:baseline;">15:20--23:10</span></span><span style="line-height:1.5;font-size:12px;"></span> 
				</p>
			</td>
		</tr>
	</tbody>
</table>                            </div>
                            <div class="item">
                              <span style="font-size:14px;">三亚自由行=北京--三亚--北京5天往返机票+入住4晚<span style="line-height:21px;font-size:14px;">三亚酒店</span>+三亚机场--酒店免费接送机场</span>                        </div>
                        <div class="clearfix">
                        </div>
                        </div>
                        <div class="checkOrderMoney">
                          <!--   <p>
                                旅游产品总价：<label>￥2950</label><br>
                            </p>
							
							<p>
                                积分抵扣：<label>￥-0</label><br>
                            </p> -->
                            
                            <p class="p0">
                                <b>应付总额：￥</b><label class="checkOrderMoneylb">{{$arr->c_sprice}}</label></p>
                        </div>
                        <div class="checkOrderBtn" id="gl_return" style="display: block;">
                            <input id="btn_Pre" onclick="javascript:history.go(-1)" style="background: url(http://www.byts.com.cn/ORG7188_templets/002//images/order15.gif);
                                border-width: 0px; cursor: pointer; width: 139px; height: 44px;" type="button">
                            
                            <input id="next" style="background: url(http://www.byts.com.cn/ORG7188_templets/002//images/order16.gif);
                                border-width: 0px; cursor: pointer; width: 139px; height: 44px;" type="button">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="login_pay_dh" id="dv_Repeat" style="display: none;">
                <div class="login_paybg_dh">
                    <div class="login_tit_dh">
                        <h1>
                            温馨提示</h1>
                        <img alt="关闭" src="%E6%A0%B8%E5%AF%B9%E8%AE%A2%E5%8D%95_files/login_closebtn_dh.jpg" onclick="close_repeat_div();" style="cursor: pointer;">
                    </div>
                    <div class="login_input_dh margin_right_dh">
                        <div class="P1_dh">
                            <p>
                                您已预订过该日期出发的订单，为避免重复预订产生损失，请确认是否继续预订？</p>
                        </div>
                        <div class="P2_dh">
                            <input name="btnGoOn" id="btnGoOn" value="确认继续预订" type="button">
                            <input name="btnCancel" id="btnCancel" onclick="javascript:window.location='/line/sanyaziyouren002/4556.htm#relatepros'" value="取  消" type="button">
                        </div>
                    </div>
                </div>
            </div>
            <input name="title" value="2016年4-5月三亚自由行计划" type="hidden">
            <input id="txtHiddenPId" name="txtHiddenPId" value="4556" type="hidden">
			<input id="allp" name="allp" value="2950" type="hidden">
            <input id="txtHiddenProductTotal" name="txtHiddenProductTotal" value="2950" type="hidden">
            <input id="txtHiddenNums" name="txtHiddenNums" value="1" type="hidden">
            <input id="txtHiddenDays" name="txtHiddenDays" value="3" type="hidden">
            <input id="txtHiddenGoDate" name="txtHiddenGoDate" value="2016-09-12" type="hidden">
            <input id="txtHiddenUzaiPrice" name="txtHiddenUzaiPrice" value="2950" type="hidden">
            <input id="txtHiddenChildPrice" name="txtHiddenChildPrice" value="" type="hidden">
            <input id="txtHiddenPersonNum" name="txtHiddenPersonNum" value="1" type="hidden">
            <input id="txtHiddenChildNum" name="txtHiddenChildNum" value="0" type="hidden">
            <input id="txtHiddenProcessType" name="txtHiddenProcessType" value="1" type="hidden">
            <input id="txtHiddenMType" name="txtHiddenMType" value="3" type="hidden">
            <input id="phpurl" name="phpurl" value="http://www.byts.com.cn" type="hidden">
            <input id="txtSubmitHiddenAdd" name="txtSubmitHiddenAdd" value="77935^4556^0^0^2.0000^1900-01-01^0^0^3^人^^^^旅行社责任保险15万元/人$77936^4556^0^^2.0000^1900-01-01^1^^3^人^^^^单房差$0" type="hidden">
            <input id="userName" name="userName" value="lle123" type="hidden">
			<input id="txt_mobile0" name="txt_mobile0" value="13021082313" type="hidden">
            <input id="dd" name="dd" value="1000" type="hidden">
            <input id="jbdk" name="jbdk" value="0" type="hidden">
            																				 
            <input id="txtHiddenUList" name="txtHiddenUList" value="{&quot;users&quot;:[{&quot;uname&quot;:&quot;lle123&quot;,&quot;umobile&quot;:&quot;13021082313&quot;,&quot;uemail&quot;:&quot;507338220@qq.com&quot;,&quot;uphone&quot;:&quot;&quot;}],&quot;client&quot;:[{&quot;name&quot;:&quot;任晨&quot;,&quot;type&quot;:&quot;0&quot;,&quot;no&quot;:&quot;330184198501184115&quot;,&quot;sex&quot;:&quot;1&quot;,&quot;birth&quot;:&quot;1985-01-18&quot;,&quot;mobile&quot;:&quot;13021082314&quot;,&quot;selectUser&quot;:&quot;&quot;,&quot;isUpOrAdd&quot;:&quot;1&quot;,&quot;ageType&quot;:&quot;0&quot;}]}" type="hidden">
            <input id="txtHiddenDes" name="txtHiddenDes" value="" type="hidden">
            <input id="txtHiddenLinker" name="txtHiddenLinker" type="hidden">
            <input id="txtHiddenClienter" name="txtHiddenClienter" type="hidden">
            <input id="txt_email" name="txt_email" value="507338220@qq.com" type="hidden">
            <input id="txtHiddenTotal" name="txtHiddenTotal" value="2950" type="hidden">
			<input id="txtSubmitHiddenUb" name="txtSubmitHiddenUb" value="1,0,score" type="hidden">
            </form>
        </div>
		    <script src="../js/jquery.js" type="text/javascript"></script>
		    <script src="../js/jquery_002.js" type="text/javascript"></script>
			<script src="../js/three_order.js" type="text/javascript"></script>
			<script src="%E6%A0%B8%E5%AF%B9%E8%AE%A2%E5%8D%95_files/tooltip.html" type="text/javascript"></script>
	    	<script src="../js/order.js" type="text/javascript"></script>
        
     </div>  </div>
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
<span>优质带宽由<a href="http://www.62idc.com/">中睿科技</a>提供 <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5896591'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "v1.cnzz.com/stat.php%3Fid%3D5896591' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_5896591"><a href="http://www.cnzz.com/stat/website.php?web_id=5896591" target="_blank" title="站长统计">站长统计</a></span><script src="%E6%A0%B8%E5%AF%B9%E8%AE%A2%E5%8D%95_files/stat.php" type="text/javascript"></script><script src="%E6%A0%B8%E5%AF%B9%E8%AE%A2%E5%8D%95_files/core.php" charset="utf-8" type="text/javascript"></script></span>
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
<iframe style="display: block; position: fixed; z-index: 2147483646 ! important; left: auto; right: 8px; margin-left: 0px; top: 50%; bottom: auto; margin-top: -138px;" src="%E6%A0%B8%E5%AF%B9%E8%AE%A2%E5%8D%95_files/a.html" allowtransparency="true" scrolling="no" frameborder="0" height="277" width="121"></iframe><script charset="utf-8" type="text/javascript" src="%E6%A0%B8%E5%AF%B9%E8%AE%A2%E5%8D%95_files/wpa.php"></script>
<!-- WPA Button End -->
<script language="JavaScript" src="../js/floatcard.js"></script><script src="%E6%A0%B8%E5%AF%B9%E8%AE%A2%E5%8D%95_files/all_20100501.js"></script><script id="TQGetrequestUser_JS"></script>
<script id="TQGetIsNewMsg_JS"></script><script src="../js/as.js"></script><object id="tq_as" name="tq_as" style="position:absolute;left:0px;top:-5px;" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="1" width="1"><param name="movie" value="http://sysimages.tq.cn/js/vip/shareObject.swf"><param name="allowScriptAccess" value="always"><object id="tq_as2" name="tq_as2" style="position:absolute;left:0px;top:-5px;" type="application/x-shockwave-flash" data="%E6%A0%B8%E5%AF%B9%E8%AE%A2%E5%8D%95_files/shareObject.swf" height="1" width="1"><param name="allowScriptAccess" value="always"></object></object>
<script src="../js/jquery1.8.js"></script>
<script>
   $("#next").click(function(){
        location.href='payment';
        // $.get('payment',{},function(msg){
        //     alert(msg)
        // });
   })
</script>


</body></html>