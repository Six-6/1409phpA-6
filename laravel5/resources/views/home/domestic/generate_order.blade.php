<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><script src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/crmqq.php" async="" charset="utf-8" type="text/javascript"></script><script src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/contains.js" async="" charset="utf-8" type="text/javascript"></script><script src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/localStorage.js" async="" charset="utf-8" type="text/javascript"></script><script src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/Panel.js" async="" charset="utf-8" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="../css/style_003.css" rel="stylesheet" media="screen" type="text/css">
<link href="../css/order.css" rel="stylesheet" media="screen" type="text/css">
<link rel="stylesheet" type="text/css" href="../css/popwin.css">
<script type="text/javascript" src="../js/188_min.js"> </script>
<script type="text/javascript" src="../js/popwin.js"></script>

<title>在线预订-北京青年旅行社股份有限公司官网</title>

<script>
function tenpay()
{
document.formpay.action="http://www.byts.com.cn/order/pay/tenpay/index_1.php"; 
}

function alipay()
{
document.formpay.action="http://www.byts.com.cn/order/pay/alipay/jishi/alipayto.php"; 
}
function alipay1()
{
document.formpay.action="http://www.byts.com.cn/order/pay/alipay/jishi/alipayto.php"; 
}
function paypal()
{
document.formpay.action="http://www.byts.com.cn/order/pay/paypal/index.php"; 
}
</script>
<link href="../css/style_002.css" id="TQCSS0.4184754265385765" type="text/css" rel="stylesheet">
<link href="../css/style.css" id="TQCSS0.6017227022293992" type="text/css" rel="stylesheet">
<script src="../js/float.js" id="TQJS0.6439371023284393">
</script><script src="../js/invite.js" id="TQJS0.3180435247002038"></script>
<script id="_da" src="../js/i.js" async="" charset="utf-8"></script>
<script src="../js/scriptonline.js" id="TQJS0.5744180173231762"></script>
<script src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/sendmain.txt" id="TQJS0.031600068692028804"></script></head>
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

<div class="top1">
  <div class="conter"><span>欢迎访问 <a href="http://www.byts.com.cn/">北京青年旅行社官网</a></span>　请
  <span id="_Check_head_Login">
    <span><a href="http://www.byts.com.cn/users/" target="_blank">登 录</a></span>
<span>|</span>
<span><a href="http://www.byts.com.cn/users/reg.php" target="_blank">注 册</a></span>



</span><script language="javascript">Check_head_Login();</script>
     <div class="hour"><img src="../home/homepage/pic1.jpg" height="19" width="46"></div>
     <div class="iph">旅游预订电话 <strong>400-926-5166</strong></div>
  </div>
</div>
<div class="top2">
	<div class="conter">
    	<div class="logo"><img src="../home/homepage/logo.png" height="54" width="329"><img src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/tage.png" height="50" width="116"></div>
    <div class="sourchNew"> 
    <form action="http://www.byts.com.cn/tags.php" method="post" name="indexsearchform" class="cfix" id="indexsearchform">
    <input value="0" name="travelClassHeader" id="srhInput" type="hidden">
        <div class="select_box"><input id="myselect" value="全部" readonly="readonly" type="text">
        <ul class="select_ul" tyle="z-index: 10000; display: none;">
        <li> <a href="javascript:void(0)">全部</a></li>
            <li><a val="4" href="javascript:void(0)">旅游线路</a></li>
            <li><a val="5" href="javascript:void(0)">酒店预定</a></li>
            <li> <a val="8" href="javascript:void(0)">签证办理</a></li>
            <li><a val="9" href="javascript:void(0)">旅游租车</a></li>
            <li><a val="10" href="javascript:void(0)">旅游门票</a></li>
      
		</ul>
   <div class="select_text"><input id="search" autocomplete="off" maxlength="18" value="请输入关键字" onclick="javascript:document.getElementById('search').value='';" name="searchkey" type="text"></div>
   <input class="select_seach" name="" type="submit"> 
  </div>
  </form>
  </div>  
  
    </div>
</div>
<div class="dh">
	<div class="conter">
   	  <div class="a1"><a href="#">所有目的地分类</a></div>
      <div class="a2">
        	<a href="http://www.byts.com.cn/index.html">首页</a>
            <a href="http://www.byts.com.cn/out/">出境游</a>
            <a href="http://www.byts.com.cn/china/">国内游</a>
            <a href="http://www.byts.com.cn/beijing/">北京游</a>
            <a href="http://www.byts.com.cn/zhoubian/">周边游</a>
            <a href="http://www.byts.com.cn/youlun/">邮轮游</a>
            <a href="http://www.byts.com.cn/line/maerdaifu001/">马尔代夫</a>
            <a href="http://www.byts.com.cn/jipiao/">机票</a> 
        </div>
      <div class="a3"><div style="position: absolute; left: 24px; top: 1px;">
      	<img src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/HOT.png"></div>
       <a href="http://www.byts.com.cn/add/tejia.php">特价</a>
        <a href="http://www.byts.com.cn/visa/">签证</a>   
        <a href="http://www.byts.com.cn/zuche/bj/">租车</a>
        <a href="http://www.byts.com.cn/add/dingzhi.php">定制</a> 
      </div>
        <div class="clear"></div>
        
  </div>
</div>

<div id="page">
<div style="float:left; margin-top:10px">
        <form name="formpay" id="formpay" method="post" action="" target="_blank">
        <div class="order">
            <!--订单步骤 START-->
            <div class="orderStep">
                <ul class="step4">
                    <li class="li1">填写订单</li>
                    <li class="li2">填写游客信息</li>
                    <li class="li3">核对订单</li>
                    <li class="li4 on">付款</li>
                    <li class="li5 ">预订成功</li>
                </ul>
            </div>
            <!--订单步骤 END-->
            <div class="orderWrap">
                <div class="orderPay">
                    
                        <p class="p1">
                        <em>恭喜，您的订单已经提交，请在本页提交付款，完成本次预定!						</em>
                     
                        
                        </p>
                        
                        <center>
                            @if($phone)
                             <b style="color:#F60">
                           您的会员账户：{{$phone}}<br>您的会员密码：{{$pwd}}<br><a href="http://www.byts.com.cn/users">请牢记，您可以点此登录进入用户中心</a>                        </b>
                            @endif
                       
                    </center>
                   <br>
                    <div class="orderPayInfo">
                        <div class="hd">
                            订单信息
                        </div>
                        <div class="bd">
                            <table width="100%">
                                <tbody><tr>
                                    <td>
                                        订单号： {{$number}}                                    </td>
                                    <td>
                                         名称：{{$s_name}}                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        人数：{{$nums}}人（{{$date->adult}}成人+{{$date->children}}儿童）
                                    </td>
                                    <td>
                                                                            在线支付：<i>￥</i><b id="bprice">{{$date->c_sprice}}</b>
                                                                            </td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
                    
                                                       <div class="orderPayTip">
                        <div class="d1">
                            <p class="pT">
                                温馨提示</p>
                            <p class="p2">
                                请您全额支付，以确保您的预订能得到最快安排<br>
                                您的支付记录会保存在本网站、第三方支付（支付宝、财付通、快钱、拉卡拉）、银行<br>
                                支付完成后，相关客服会尽快与您联系确定出游事宜<br>
                            </p>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
               
               
                <div class="orderPayBank">
                    <h2>
                        支付方式</h2>
                    <div class="zffs_sll">
                        <div class="zffsmain_sll">
                            <div class="zffsmaintitle_sll">
                                <div class="titleft_sll">
                                    <ul id="tags">
                                        <li class="nowa_sll"><a href="javascript:void(0);" onclick="selectTag('tagContent0',this)">
                                            在线支付(暂只支持手动汇款)</a></li>
                                        <li><a href="javascript:void(0);" onclick="selectTag('tagContent1',this)">对公汇款</a></li>
                                        <li><a href="javascript:void(0);" onclick="selectTag('tagContent2',this)">门市付款</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="tagContent0" class="zfffcontent_sll" style="display: block;">
                                
                                  
                                  
                                    
                                    <div style=" float:left;display:none">
                                                    <input value="alipay" name="pay_bank" id="third_party_radio_alipay" onclick="alipay();" type="radio">
                                             
                                                    <img alt="支付宝" src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/qyfk43_03.jpg" class="on" height="45" border="0" width="162"> 
                                              </div>          
                                                        
                                                        <div style=" float:left; margin-left:10px;display:none">                                               
                                                    <input value="CFT" name="pay_bank" id="third_party_radio_CFT" onclick="tenpay();" type="radio">
                                              
                                                    <img alt="财付通" src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/tenpay_buy.gif" height="45" border="0" width="162">  
                                                    </div>                                            
                                                
                                                   
                                                    <div style=" float:left;margin-left:10px;display:none">  <input value="KuaiQian" name="pay_bank" id="third_party_radio_KuaiQian" onclick="alipay1();" type="radio">
                                              
                                                    <img alt="银行卡" src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/KQ.gif" height="45" border="0" width="162">     
                                                    </div>
                                                    
                                                                                       <div style=" float:left;margin-left:10px;display:none">     <input value="KuaiQian" name="pay_bank" id="radio" onclick="paypal();" type="radio">
                                                <img alt="银行卡" src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/paypal_logo.gif" height="45" border="0" width="162"> 
                                                </div>
                                    
                                 
                                    
                              
								<div style="clear:both"></div>
                                
                                <div class="zfbut_sll">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tbody><tr>
                                            <td style="width: 80px;">
                                                
                                                <!--<a id="ImageButton1_Ali_ZFQR" style="cursor: pointer;" onclick="orderPaySubmit();">
                                                    <img src="http://www.byts.com.cn/ORG7188_templets/002//images/order6.gif" /></a>-->
                                                一、招行对公（此帐号3个工作日到帐）<br>
户  名：北京青年旅行社股份有限公司<br>
帐  号：862 781 247 510001<br>
开户行：招商银行北京崇文门支行<br>
<br>
<font color="red">二、支付宝（建议使用以下帐号，即时到帐）<br>
户 名：潘太亮<br>
帐 号：13901249207<br></font>
<br>
三、工商银行（建议使用以下帐号，即时到帐）<br>
户  名：潘太亮<br>
帐  号：622 2080 20000 220 5337<br>
开户行：方庄支行东铁匠营分理处<br>
<br>
四、农业银行（建议使用以下帐号，即时到帐）<br>
户  名：潘太亮<br>
帐  号：622 848 001 041 014 4611<br>
开户行：农行潘家园支行<br>
<br>
五、建设银行（建议使用以下帐号，即时到帐）<br>
户名：潘太亮<br>
帐号：110 432 998 0130 103 480<br>
开户行：中国建设银行北京分行营业部<br>
<br>
特别说明：<br>
汇款后，请联系在线客服进行核对，并保留汇款底单。<br>								   
								    <a href="http://www.byts.com.cn/users">
                                                    <img src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/order12.gif"></a>

                                            </td>
                                            <!--<td>
                                              
                                                完成支付后，您可以<a target="_blank" href="/users" class="colorblue_sll">查看订单状态</a>
                                            </td>-->
                                        </tr>
                                    </tbody></table>   
                                </div>
								
                                <div class="orderPayTip orderPayTipTrim1">
                                    <div class="d1">
									                                        <p class="pT">
                                            付款提示</p>
									<p class="p2">订单支付成功后，请务必将：订单编号+付款截图发送到byts1@163.com邮箱，商家收到邮件后
1-2个工作日内发送电子合同至您邮箱，如遇周末及节假日顺延至节假日后第一个工作日。如果您不方便发邮件，也可将订单编号+付款截图发微信到
15810334180（建议采用邮件方式）</p>
                                        <p class="pT">
                                            温馨提示</p>
                                        <p class="p2">
                                            如果付款页面没有打开，请设置您的浏览器为允许弹出；<br>
                                            如果您多次点击产生多个支付页面，请在一个页面完成支付，其他页面请直接关闭。<br>
                                            如果您的银行卡或账户已被扣款，但支付没有成功，这可能是网络传输问题造成，不必担心，北京青年旅行社股份有限公司官网将尽快为您确认付款。<br>
                                        </p>
                                        <p class="p3">
                                            客服电话：<b>400-926-5166</b>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                            <!--对公汇款-->
                            <div id="tagContent1" class="zfffcontent_sll" style="display: none;">
                                <p class="colorhe_sll">
                                   一、招行对公（此帐号3个工作日到帐）<br>
户  名：北京青年旅行社股份有限公司<br>
帐  号：862 781 247 510001<br>
开户行：招商银行北京崇文门支行<br>
<br>
<font color="red">二、支付宝（建议使用以下帐号，即时到帐）<br>
户 名：潘太亮<br>
帐 号：13901249207<br></font>
<br>
三、工商银行（建议使用以下帐号，即时到帐）<br>
户  名：潘太亮<br>
帐  号：622 2080 20000 220 5337<br>
开户行：方庄支行东铁匠营分理处<br>
<br>
四、农业银行（建议使用以下帐号，即时到帐）<br>
户  名：潘太亮<br>
帐  号：622 848 001 041 014 4611<br>
开户行：农行潘家园支行<br>
<br>
五、建设银行（建议使用以下帐号，即时到帐）<br>
户名：潘太亮<br>
帐号：110 432 998 0130 103 480<br>
开户行：中国建设银行北京分行营业部<br>
<br>
特别说明：<br>
汇款后，请联系在线客服进行核对，并保留汇款底单。<br>								   
								    <a href="http://www.byts.com.cn/users">
                                                    <img src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/order12.gif"></a>

                                </p></div>
                            </div>
                            <div id="tagContent2" class="zfffcontent_sll" style="display: none;">
                                
                                <div class="zhxx_sll zhxx_sllTrim1">
                                  门市签约付款<br><br>地址：北京市朝阳区潘家园南里12号潘家园大厦三层北区 <br>电话：400-926-5166								  <a href="http://www.byts.com.cn/users">
                                                    <img src="%E7%94%9F%E6%88%90%E8%AE%A2%E5%8D%95_files/order12.gif"></a>
                                </div>
                            </div>
                        </div>
                        
                          <!--在线付款-->
        
                    </div>
                    
                </div>
                
                
            </div>
            
        </form></div>
        
      
        <input id="out_trade_no" name="out_trade_no" value="CHN-9391473662126" type="hidden">
        <input id="subject" name="subject" value="蜈支洲.西岛.呀诺达雨林.大小洞天.夜游三亚湾双飞5日**4晚海景房**" type="hidden">
		 <input id="total_fee" name="total_fee" value="2580" type="hidden">
		 
	
		 
		  <input id="show_url" name="show_url" value="www.byts.com.cn" type="hidden">
  



</body></html>