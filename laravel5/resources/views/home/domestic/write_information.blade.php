<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><script src="%E5%A1%AB%E5%86%99%E6%B8%B8%E5%AE%A2%E4%BF%A1%E6%81%AF_files/crmqq.php" async="" charset="utf-8" type="text/javascript"></script><script src="../js/contains.js" async="" charset="utf-8" type="text/javascript"></script><script src="../js/localStorage.js" async="" charset="utf-8" type="text/javascript"></script><script src="../js/Panel.js" async="" charset="utf-8" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="../css/style_003.css" rel="stylesheet" media="screen" type="text/css">
<link href="../css/order.css" rel="stylesheet" media="screen" type="text/css">

<title>在线预订-北京青年旅行社股份有限公司官网</title>
<script src="../js/global.js" type="text/javascript"></script>

<link href="../css/style_002.css" id="TQCSS0.30921357753698453" type="text/css" rel="stylesheet"><link href="../css/style.css" id="TQCSS0.19383385603179237" type="text/css" rel="stylesheet"><script src="../js/float.js" id="TQJS0.9856293001810783"></script><script src="../js/invite.js" id="TQJS0.2958690237119006"></script><script id="_da" src="../js/i.js" async="" charset="utf-8"></script><script src="../js/scriptonline.js" id="TQJS0.37274784381344483"></script><script src="%E5%A1%AB%E5%86%99%E6%B8%B8%E5%AE%A2%E4%BF%A1%E6%81%AF_files/sendmain.txt" id="TQJS0.4907975858015996"></script></head>
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
  <span id="_Check_head_Login"><a href="http://www.byts.com.cn/users/">欢迎您，lle123</a> <a href="http://www.byts.com.cn/users/order.php?po=all"> [订单]</a> <a href="http://www.byts.com.cn/users/index.php?do=edt"> [资料]</a><a href="http://www.byts.com.cn/users/index.php?do=money"> [积分]</a> <a href="http://www.byts.com.cn/users/index_do.php?fmdo=login&amp;dopost=exit"> [退出]</a>
</span><script language="javascript">Check_head_Login();</script>
     <div class="hour"><img src="../home/homepage/pic1.jpg" height="19" width="46"></div>
     <div class="iph">旅游预订电话 <strong>400-926-5166</strong></div>
  </div>
</div>
<div class="top2">
	<div class="conter">
    	<div class="logo"><img src="../home/homepage/logo.png" height="54" width="329"><img src="../home/homepage/tage.png" height="50" width="116"></div>
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
      <div class="a3"><div style="position: absolute; left: 24px; top: 1px;"><img src="%E5%A1%AB%E5%86%99%E6%B8%B8%E5%AE%A2%E4%BF%A1%E6%81%AF_files/HOT.png"></div>
       <a href="http://www.byts.com.cn/add/tejia.php">特价</a>
        <a href="http://www.byts.com.cn/visa/">签证</a>   
        <a href="http://www.byts.com.cn/zuche/bj/">租车</a>
        <a href="http://www.byts.com.cn/add/dingzhi.php">定制</a> 
      </div>
        <div class="clear"></div>
        
  </div>
</div>
 <div id="page">

        <div class="order top10">
            <!--订单步骤 START-->
            <div class="orderStep">
                <ul class="step2">
                    <li class="li1">填写订单</li>
                    <li class="li2 on">填写游客信息</li>
                    <li class="li3 ">核对订单</li>
                    <li class="li4 ">付款</li>
                    <li class="li5 ">预订成功</li>
                </ul>
            </div>
            <!--订单步骤 END-->
            <form id="two_form" action="tourist" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <div class="orderWrap">
                <div class="userInfo">
                    
                    <div class="notice"><b id="closeNotice"></b>按照旅游局最新规定，请您配合提供所有出行客人姓名，证件号码，联系电话，感谢您的配合！</div>
                    
                    <h2>
                        订单信息确认 <span>请准确填写游客信息，以免在办理相关手续时发生问题。 </span><a id="userInfo"></a>
                    </h2>
                    <!--成人游客 START-->
                    
					
					    <div class="userType userTypeAdault" id="div_ch_person_1">
                        <div class="hd">
                            <label>
                                <input checked="checked" id="chk_ch_person_1" type="checkbox">保存到常用姓名</label>成人游客 (1)：
                            <div class="tip">
                                填写说明
                                <div style="display: none;">
                                    <p class="smname">
                                        填写说明:</p>
                                    <p>
                                        1、乘客姓名必须与登机所持证件一致。<br>
                                        2、持护照登机，如使用中文姓名，请确保护照上有相应的中文姓名。<br>
                                        3、持护照登机的外宾，请以姓在前名在后的方式填写，例：Zhang（姓）/Sam（名），不区分大小写。<br>
                                        4、英文名字长度不超过29个字符，过长请使用缩写。<br>
                                        5、名字中含生僻字可直接输入拼音代替。例：“王麙”可输入为“王yan”或者“王-yan”。<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="bd" id="divs">
                           <!--  <table class="tb1" cellpadding="0" cellspacing="0" width="100%">
                                <tbody><tr>
                                    <td class="td1">
                                         真实姓名：
                                    </td>
                                    <td>
                                        <div class="floatDiv guestInputList">
                                            <input class="input1" maxlength="10" name="a_name" id="txt_ch_person_RealName_1">
                                            <ul style="display: none;" id="ul_ch_person_1">
                                                
                                            <li style="border-bottom: solid 1px #98bc86; color: #ccc;">常用游客信息</li>
                                              
											 
											  
                                            </ul>
                                            <span style="color: Red;"></span>
                                            <input value="" id="txt_ch_person_UserId_1" type="hidden">
                                        </div>
                                    </td>
                                    <td class="td1">
                                         手机：
                                    </td>
                                    <td>
                                        <div class="floatDiv">
                                            <input class="input1" maxlength="11" name="a_phone" id="txt_ch_person_Phone_1">
                                            <span style="color: Red;"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                       证件类别：
                                    </td>
                                    <td>
                                        <select style="width: 162px;" name="id_type" id="ddl_ch_person_CodeType_1">
                                            <option selected="selected" value="0">身份证</option>
                                            <option value="1">学生证</option>
                                            <option value="2">军官证</option>
                                            <option value="3">退休证</option>
                                            <option value="4">护照</option>
                                            <option value="-1">其他</option>
                                            
                                        </select>
                                    </td>
                                    <td class="td1" id="td_ch_person_CodeTitle_1">
                                         证件号码：
                                    </td>
                                    <td id="td_ch_person_CodeInput_1">
                                        <input class="input1" name="id_phone" maxlength="20" id="txt_ch_person_Code_1">
                                        <span style="color: Red;"></span>
                                    </td>
                                </tr>
                            </tbody></table> -->
                        </div>
                    </div>
                                        <!--成人游客 END-->
                    <!--儿童游客 START-->
                    
					
						
					
                    <!--儿童游客 END-->
                    <h2>
                        填写联系人信息 <span>请准确填写联系人信息（手机号码、E-mail），以便我们与您联系。</span></h2>
                    <div class="userType userTypeContact">
                        <div class="bd">
                            <table class="tb1" cellpadding="0" cellspacing="0" width="100%">
                                <tbody><tr>
                                    <td class="td1">
                                        <i>*</i> 联系人姓名：
                                    </td>
                                    <td>
                                        <div class="floatDiv">
                                            <input class="input2" onblur="names()"  id="txt_ch_person_RealName" maxlength="15">
                                            <span id="name_sp"></span>
                                            <span style="color: Red;"></span>
                                        </div>
                                    </td>
                                    <td class="td1">
                                        <i>*</i> 手机号码：
                                    </td>
                                    <td>
                                        <div class="floatDiv">
                                            <input class="input1" onblur="phones()"  maxlength="11" id="txt_ch_person_Phone">
                                            <span id="phone_sp"></span>
                                            <span style="color: Red;"></span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td1">
                                        <i>*</i> 电子邮箱：
                                    </td>
                                    <td>
                                        <div class="floatDiv">
                                            <input class="input2" onblur="emails()" id="email_s" maxlength="20">
                                            <span id="email_sp"></span>
                                            <span style="color: Red;"></span>
                                        </div>
                                    </td>
                                    <td class="td1">
                                        固定电话：
                                    </td>
                                    <td>
                                        <div class="floatDiv">
                                            <input class="input3" id="txt_start_phone" name="txt_start_phone" maxlength="4">
                                            -
                                            <input class="input4" id="txt_end_phone" name="txt_end_phone" maxlength="8">
                                            <span style="color: Red;" id="span_phone"></span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody></table>
                        </div>
                        <p class="pT">
                            订单备注</p>
                        <div class="p1">
                            <div class="textArea">
                                <textarea id="txtDes" name="remarks"></textarea>
                            </div>
        <!--                     <p class="p2">
                                （<label id="lbCode">还可以输入</label><em id="eCodeLeft" class="enable">200</em>个字符）</p> -->
                        </div>
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
                                     <b>￥<s>{{$s_sprice}}</s></b>{{$adult}}成人×￥{{$s_sprice}}</p>
                                <p>
                                    <b>￥<s>0</s></b>{{$children}}儿童×￥</p>
                            </li>
                            
                            <li class="li2" id="AddPList">
                                <p class="p1">
                                    附加产品</p>
                                <p>
                                     <b>￥<s>0</s></b>旅行社责任保险15万元/人×￥0</p>
                        </li></ul>
                        <div class="li4">
                            <p>
                                <strong>应付总额：</strong><label>￥<i id="offerPrice">{{$sprice}}</i></label>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                </div>
                <div class="userInfoBtn" id="gl_submit" style="display: block;">
                    <input id="btn_Pre" onclick="javascript:history.go(-1)" style="background: url(http://www.byts.com.cn/ORG7188_templets/002/images/order15.gif);
                        border-width: 0px; cursor: pointer; width: 139px; height: 44px;" type="button">
                    <input id="btn_Next" style="background: url(http://www.byts.com.cn/ORG7188_templets/002/images/order19.gif);
                        border-width: 0px; cursor: pointer; width: 139px; height: 44px;" type="button">
                </div>
                <div class="clearfix">
                </div>
            </div>
            
            <input id="txtHiddenPId" name="txtHiddenPId" value="4556" type="hidden">
            <input id="txtHiddenDays" name="txtHiddenDays" value="2" type="hidden">
			<input id="pid" name="pid" value="4556" type="hidden">
            <input id="txtHiddenGoDate" name="txtHiddenGoDate" value="2016-09-12" type="hidden">
            <input id="txtHiddenUzaiPrice" name="txtHiddenUzaiPrice" value="{{$s_sprice}}" type="hidden">
            <input id="txtHiddenChildPrice" name="txtHiddenChildPrice" value="" type="hidden">
            <input id="txtHiddenPersonNum" name="txtHiddenPersonNum" value="1" type="hidden">
            <input id="txtHiddenChildNum" name="txtHiddenChildNum" value="0" type="hidden">
            <input id="txtHiddenProcessType" name="txtHiddenProcessType" value="1" type="hidden">
            <input id="txtHiddenMType" name="txtHiddenMType" value="3" type="hidden">
            
            <input id="txtSubmitHiddenAdd" name="txtSubmitHiddenAdd" value="77935^4556^0^0^2.0000^1900-01-01^0^0^3^人^^^^旅行社责任保险15万元/人$77936^4556^0^^2.0000^1900-01-01^1^^3^人^^^^单房差$0" type="hidden">
            <input id="txtSubmitHiddenUb" name="txtSubmitHiddenUb" value="1,0,score" type="hidden">
            <input id="txtSubmitHiddenUpTrain" name="txtSubmitHiddenUpTrain" value="" type="hidden">
            
            <input id="txtHiddenUList" name="txtHiddenUList" value="" type="hidden">
            <input id="txtHiddenDes" name="txtHiddenDes" value="" type="hidden">
            <input id="txt_current_date_hz" value="2012-11-20" type="hidden">
			
			<input id="allp" name="allp" value="{{$s_sprice}}" type="hidden">
			<input id="ddl_nums_person" name="ddl_nums_person" value="0" type="hidden">
				
            </form>
        </div>
<script src="../js/two_order.js" type="text/javascript"></script>
    <script src="../js/jquery.js" type="text/javascript"></script>
	<script src="%E5%A1%AB%E5%86%99%E6%B8%B8%E5%AE%A2%E4%BF%A1%E6%81%AF_files/tooltip.html" type="text/javascript"></script>
	    <script src="../js/order.js" type="text/javascript"></script>
 <script type="text/javascript">
        $(function() {

            $('.tip').hover(function() {
                $(this).parents('.userType').find('select').hide();
            }, function() {
                $(this).parents('.userType').find('select').show();
            });
        });
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
<span>优质带宽由<a href="http://www.62idc.com/">中睿科技</a>提供 <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5896591'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "v1.cnzz.com/stat.php%3Fid%3D5896591' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_5896591"><a href="http://www.cnzz.com/stat/website.php?web_id=5896591" target="_blank" title="站长统计">站长统计</a></span><script src="%E5%A1%AB%E5%86%99%E6%B8%B8%E5%AE%A2%E4%BF%A1%E6%81%AF_files/stat.php" type="text/javascript"></script><script src="%E5%A1%AB%E5%86%99%E6%B8%B8%E5%AE%A2%E4%BF%A1%E6%81%AF_files/core.php" charset="utf-8" type="text/javascript"></script></span>
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
<iframe style="display: block; position: fixed; z-index: 2147483646 ! important; left: auto; right: 8px; margin-left: 0px; top: 50%; bottom: auto; margin-top: -138px;" src="%E5%A1%AB%E5%86%99%E6%B8%B8%E5%AE%A2%E4%BF%A1%E6%81%AF_files/a.html" allowtransparency="true" scrolling="no" frameborder="0" height="277" width="121"></iframe><script charset="utf-8" type="text/javascript" src="%E5%A1%AB%E5%86%99%E6%B8%B8%E5%AE%A2%E4%BF%A1%E6%81%AF_files/wpa.php"></script>
<!-- WPA Button End -->
<script language="JavaScript" src="../js/floatcard.js"></script><script src="../js/all_20100501.js"></script><script id="TQGetrequestUser_JS"></script>
<script id="TQGetIsNewMsg_JS"></script><script src="../js/as.js"></script><object id="tq_as" name="tq_as" style="position:absolute;left:0px;top:-5px;" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="1" width="1"><param name="movie" value="http://sysimages.tq.cn/js/vip/shareObject.swf"><param name="allowScriptAccess" value="always"><object id="tq_as2" name="tq_as2" style="position:absolute;left:0px;top:-5px;" type="application/x-shockwave-flash" data="%E5%A1%AB%E5%86%99%E6%B8%B8%E5%AE%A2%E4%BF%A1%E6%81%AF_files/shareObject.swf" height="1" width="1"><param name="allowScriptAccess" value="always"></object></object>




</body></html>

<script src="../js/jquery1.8.js"></script>
<script>
window.a=0;
$().ready(function(){
	var adult={{$adult}};
	var str='';
	for(var i=1;i<=adult;i++)
	{
        a++;
        $("#div_ch_person_1").append(
        '<table class="tb1" cellpadding="0" cellspacing="0" width="100%">'
        +'<tbody><tr>'
        +'<td class="td1">真实姓名：</td>'
        +'<td>'
        +'<div class="floatDiv guestInputList">'
        +'<input class="input1  maxlength="10" id="txt_ch_person_RealName_'+a+'">'
        +'<ul style="display: none;" id="ul_ch_person_1">'
        +'<li style="border-bottom: solid 1px #98bc86; color: #ccc;">常用游客信息</li>'
        +'</ul>'
        +'<span style="color: Red;"></span>'
        +'<input value="" id="txt_ch_person_UserId_1" type="hidden">'
        +'</div>'
        +' </td>'
        +'<td class="td1">手机：</td>'
        +'<td>'
        +'<div class="floatDiv">'
        +'<input class="input1" maxlength="11" id="txt_ch_person_Phone_'+a+'">'
        +'<span style="color: Red;"></span>'
        +'</div>'
        +'</td>'
        +'</tr>'
        +'<tr>'
        +'<td class="td1">证件类别：</td>'
        +'<td>'
        +'<select style="width: 162px;" id="ddl_ch_person_CodeType_'+a+'">'
        +'<option selected="selected" value="身份证">身份证</option>'
        +'<option value="学生证">学生证</option>'
        +'<option value="军官证">军官证</option>'
        +'<option value="退休证">退休证</option>'
        +'<option value="护照">护照</option>'
        +'<option value="其他">其他</option>'
        +'</select>'
        +'</td>'
        +'<td class="td1" id="td_ch_person_CodeTitle_1">证件号码：</td>'
        +'<td id="td_ch_person_CodeInput_1">'
        +'<input class="input1" maxlength="20" id="txt_ch_person_Code_'+a+'">'
        +'<span style="color: Red;"></span>'
        +'</td>'
        +'</tr>'
        +'</tbody></table>')
}
})
//验证名字
function names()
{
    var nameRegular=/^([\u4e00-\u9fa5]+|([a-z]+\s?)+)$/i;
    var name_contact=$("#txt_ch_person_RealName").val();
    if(name_contact=='')
    {
        $("#name_sp").html('<p style="color:red">用户名不能为空</p>');
        return false;
    }else{
        if(!nameRegular.test(name_contact))
        {
            $("#name_sp").html('<p style="color:red">用户名不正确 例如(李来恩 或 Michael)</p>');
            return false;
        }else
        {
            $("#name_sp").html(' ');
            return true;
        }
    } 
    
}
//验证手机号
function phones()
{
    var phoneRegular=/^1[34578]\d{9}$/;
    var phone_contact=$("#txt_ch_person_Phone").val();
    if(phone_contact=='')
    {
        $("#phone_sp").html('<p style="color:red">手机号不能为空</p>');
        return false;
    }else{
        if(!phoneRegular.test(phone_contact))
        {
            $("#phone_sp").html('<p style="color:red">手机号不正确 例如(18513975642)</p>');
            return false;
        }else
        {
            $("#phone_sp").html(' ');
            return true;
        }
    } 
    
}

// //验证证件号
// function id_code(b)
// {
//     var codeRegular=/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
//     var code_contact=$("#txt_ch_person_Code_"+b).val();
//     if(code_contact=='')
//     {
//         $("#code_sp_"+b).html('<p style="color:red">身份证不能为空</p>');
//         return false;
//     }else{
//         if(!codeRegular.test(code_contact))
//         {
//             $("#code_sp_"+b).html('<p style="color:red">身份证不正确 例如(410425199801166059)</p>');
//             return false;
//         }else
//         {
//             $("#code_sp_"+b).html(' ');
//             return true;
//         }
//     } 
    
// }

//验证邮箱
function emails()
{
    var emailRegular=/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/;
    var email=$("#email_s").val();
    if(email=='')
    {
        $("#email_sp").html('<p style="color:red">邮箱不能为空</p>');
        return false;
    }else{
        if(!emailRegular.test(email))
        {
            $("#email_sp").html('<p style="color:red">邮箱不正确 例如(li13021082314@sian.com)</p>');
            return false;
        }else
        {
            $("#email_sp").html(' ');
            return true;
        }
    } 
    
}

$("#btn_Next").click(function(){
    if(names() && phones() && emails())
    {
        var a_name='';
        var a_phone='';
        var id_code='';
        var id_type='';

        var name_contact=$("#txt_ch_person_RealName").val();
        var phone_contact=$("#txt_ch_person_Phone").val();
        var email=$("#email_s").val();
        var remarks=$("#txtDes").val();
        
        for(var i=1 ; i<=a ; i++)
        {
            a_name+= ',' + $("#txt_ch_person_RealName_"+i).val();
            a_phone+= ',' + $("#txt_ch_person_Phone_"+i).val();
            id_type+= ',' + $("#ddl_ch_person_CodeType_"+i).val();
            id_code+= ',' + $("#txt_ch_person_Code_"+i).val();
        }
        var name=a_name.substr(1);
        var phone=a_phone.substr(1);
        var type_id=id_type.substr(1);
        var id_phone=id_code.substr(1);
        var aArray={};
        aArray['a_name']=name_contact;
        aArray['a_phone']=phone_contact;
        aArray['a_email']=email;
        aArray['a_remarks']=remarks;
        aArray['member_name']=name;
        aArray['member_phone']=phone;
        aArray['member_type']=type_id;
        aArray['member_id']=id_phone;
        aArray['r_sprice']={{$s_sprice}};
        aArray['c_sprice']={{$sprice}};
        aArray['s_id']={{$s_id}};
        aArray['adult']={{$adult}};
        aArray['children']={{$children}};
        // 数组数组转换为字符串

        var arr=JSON.stringify(aArray);

        location.href='check?domArr='+arr;

    } 
 })
</script>




 












