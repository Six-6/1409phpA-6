<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><script src="../home/user/crmqq.php" async="" charset="utf-8" type="text/javascript"></script><script src="../js/contains.js" async="" charset="utf-8" type="text/javascript"></script><script src="../js/localStorage.js" async="" charset="utf-8" type="text/javascript"></script><script src="../js/Panel.js" async="" charset="utf-8" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> 惠玩旅行社官网</title>
<meta name="keywords" content="">
<meta name="description" content="">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/linelist.css">
<link rel="stylesheet" href="../css/duibi_list.css">


<script type="text/javascript" src="../js/jquery.js"></script>
<script id="_da" src="../js/i.js" async="" charset="utf-8"></script><link href="../css/style_004.css" id="TQCSS0.6870497701914909" type="text/css" rel="stylesheet"><link href="../css/style_003.css" id="TQCSS0.5932322831763385" type="text/css" rel="stylesheet"><script src="../js/float.js" id="TQJS0.3235155537972685"></script><script src="../js/invite.js" id="TQJS0.3006250340084008"></script><script src="../js/minimess_core.js" id="TQJS0.8474348364562695"></script><link href="../css/style_002.css" id="TQCSS0.7101878651700586" type="text/css" rel="stylesheet"><script src="../js/scriptonline.js" id="TQJS0.8494349238075574"></script><script src="../js/sendmain" id="TQJS0.2533479272200322"></script></head>

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
<div class="body1">
<div id="phpurl" pid="http://www.byts.com.cn">

<div class="compares" style="margin-top:10px;">
  <div class="compares_tit clearfix">
     <h1 class="fl">产品比较结果</h1>
     <!--
     <div class="compares_search fr">
       <input type="text" class="compares_bianhao"  value="请直接输入产品编号"/>
       <a class="compares_btn com_yellow join_btn">加入对比</a>
     </div>
     
     <div class="compares_notice">
     </div>-->
  </div>
   <div class="paramHandle tagsFix" id="scroll">
    <input value="抱歉，您输入的线路编号不正确！" id="notice" type="hidden">
    <input value="2" id="compare_num" type="hidden">
    <table class="compares_tab1" border="0" cellpadding="0" cellspacing="0" width="100%">
     <tbody><tr class="head_btn"> 
    	<td width="19%">操作栏</td>
	    	    <td id="cancel_0" width="27%">
                
                <div class="direction">
			        <span class="direction_move move_left" style="display: none; ">
			         	<a href="javascript:goL(1)" title="向右移"></a>
       				</span>
			        <a class="compares_btn com_grey cancel_btn">取消对比</a><span class="direction_move move_right">
			          <a href="javascript:goR(1)" title="向右移"></a>
			        </span>
		       </div>
               
					</td>
	   	    <td id="cancel_1" width="27%">
            
            <div class="direction">
			        <span class="direction_move move_left">
			         	<a href="javascript:goL(2)" title="向右移"></a>
       				</span>
			        <a class="compares_btn com_grey cancel_btn">取消对比</a><span class="direction_move move_right" style="display: none; ">
			          <a href="javascript:goR(2)" title="向右移"></a>
			        </span>
		       </div>
               
					</td>
	   	    <td id="cancel_2" width="27%">您还可以继续添加产品！</td>
	   	  </tr>
	  
	  <tr class="pro_list">
	     <td class="left_tit"><h2>产品基本信息</h2></td>
	     	     <td id="name_0" class="pro1">
	      	<input value="0" class="952" type="hidden">
	     	<div class="pro_des" id="route_name_952_num_1" style="height: 36px; ">
		    	 <a title="蜈支洲.南山.呀诺达雨林の1天自由行双飞5日**2分58秒漫步到海边**" target="_blank" href="http://www.byts.com.cn/line/sanyayidi002/952.htm">
		    		 蜈支洲.南山.呀诺达雨林の1天自由行双飞5日**2分58秒漫步到海边**</a>	    	 </div>
	     
	    
    	<div id="plan_date_0">
        
          <div class="select_date">
             	 <div class="s_date s_datenodown">
             	 	<p class="s_con" title="2016-09-10">2016-09-10(星期六)</p>
             	 </div>
             	 <input value="952" class="routeId" type="hidden">
             	 <ul class="s_list">
	             	 		  
                              
                           
                             
			                  <li title="2016-09-10(星期六)">2016-09-10(星期六)</li><li title="2016-09-11(星期日)">2016-09-11(星期日)</li><li title="2016-09-12(星期一)">2016-09-12(星期一)</li><li title="2016-09-13(星期二)">2016-09-13(星期二)</li><li title="2016-09-14(星期三)">2016-09-14(星期三)</li><li title="2016-09-15(星期四)">2016-09-15(星期四)</li><li title="2016-09-16(星期五)">2016-09-16(星期五)</li><li title="2016-09-17(星期六)">2016-09-17(星期六)</li><li title="2016-09-18(星期日)">2016-09-18(星期日)</li><li title="2016-09-19(星期一)">2016-09-19(星期一)</li><li title="2016-09-20(星期二)">2016-09-20(星期二)</li><li title="2016-09-21(星期三)">2016-09-21(星期三)</li><li title="2016-09-22(星期四)">2016-09-22(星期四)</li><li title="2016-09-23(星期五)">2016-09-23(星期五)</li><li title="2016-09-24(星期六)">2016-09-24(星期六)</li><li title="2016-09-25(星期日)">2016-09-25(星期日)</li><li title="2016-09-26(星期一)">2016-09-26(星期一)</li><li title="2016-09-27(星期二)">2016-09-27(星期二)</li><li title="2016-09-28(星期三)">2016-09-28(星期三)</li><li title="2016-09-29(星期四)">2016-09-29(星期四)</li><li title="2016-09-30(星期五)">2016-09-30(星期五)</li><li title="2016-10-01(星期六)">2016-10-01(星期六)</li><li title="2016-10-02(星期日)">2016-10-02(星期日)</li><li title="2016-10-03(星期一)">2016-10-03(星期一)</li><li title="2016-10-04(星期二)">2016-10-04(星期二)</li><li title="2016-10-05(星期三)">2016-10-05(星期三)</li><li title="2016-10-06(星期四)">2016-10-06(星期四)</li><li title="2016-10-07(星期五)">2016-10-07(星期五)</li><li title="2016-10-08(星期六)">2016-10-08(星期六)</li><li title="2016-10-09(星期日)">2016-10-09(星期日)</li><li title="2016-10-10(星期一)">2016-10-10(星期一)</li><li title="2016-10-11(星期二)">2016-10-11(星期二)</li><li title="2016-10-12(星期三)">2016-10-12(星期三)</li><li title="2016-10-13(星期四)">2016-10-13(星期四)</li><li title="2016-10-14(星期五)">2016-10-14(星期五)</li><li title="2016-10-15(星期六)">2016-10-15(星期六)</li><li title="2016-10-16(星期日)">2016-10-16(星期日)</li><li title="2016-10-17(星期一)">2016-10-17(星期一)</li><li title="2016-10-18(星期二)">2016-10-18(星期二)</li><li title="2016-10-19(星期三)">2016-10-19(星期三)</li><li title="2016-10-20(星期四)">2016-10-20(星期四)</li><li title="2016-10-21(星期五)">2016-10-21(星期五)</li><li title="2016-10-22(星期六)">2016-10-22(星期六)</li><li title="2016-10-23(星期日)">2016-10-23(星期日)</li><li title="2016-10-24(星期一)">2016-10-24(星期一)</li><li title="2016-10-25(星期二)">2016-10-25(星期二)</li><li title="2016-10-26(星期三)">2016-10-26(星期三)</li><li title="2016-10-27(星期四)">2016-10-27(星期四)</li><li title="2016-10-28(星期五)">2016-10-28(星期五)</li><li title="2016-10-29(星期六)">2016-10-29(星期六)</li><li title="2016-10-30(星期日)">2016-10-30(星期日)</li><li title="2016-10-31(星期一)">2016-10-31(星期一)</li><li title="2016-11-01(星期二)">2016-11-01(星期二)</li><li title="2016-11-02(星期三)">2016-11-02(星期三)</li><li title="2016-11-03(星期四)">2016-11-03(星期四)</li><li title="2016-11-04(星期五)">2016-11-04(星期五)</li><li title="2016-11-05(星期六)">2016-11-05(星期六)</li><li title="2016-11-06(星期日)">2016-11-06(星期日)</li><li title="2016-11-07(星期一)">2016-11-07(星期一)</li><li title="2016-11-08(星期二)">2016-11-08(星期二)</li><li title="2016-11-09(星期三)">2016-11-09(星期三)</li><li title="2016-11-10(星期四)">2016-11-10(星期四)</li><li title="2016-11-11(星期五)">2016-11-11(星期五)</li><li title="2016-11-12(星期六)">2016-11-12(星期六)</li><li title="2016-11-13(星期日)">2016-11-13(星期日)</li><li title="2016-11-14(星期一)">2016-11-14(星期一)</li><li title="2016-11-15(星期二)">2016-11-15(星期二)</li><li title="2016-11-16(星期三)">2016-11-16(星期三)</li><li title="2016-11-17(星期四)">2016-11-17(星期四)</li><li title="2016-11-18(星期五)">2016-11-18(星期五)</li><li title="2016-11-19(星期六)">2016-11-19(星期六)</li><li title="2016-11-20(星期日)">2016-11-20(星期日)</li><li title="2016-11-21(星期一)">2016-11-21(星期一)</li><li title="2016-11-22(星期二)">2016-11-22(星期二)</li><li title="2016-11-23(星期三)">2016-11-23(星期三)</li><li title="2016-11-24(星期四)">2016-11-24(星期四)</li><li title="2016-11-25(星期五)">2016-11-25(星期五)</li><li title="2016-11-26(星期六)">2016-11-26(星期六)</li><li title="2016-11-27(星期日)">2016-11-27(星期日)</li><li title="2016-11-28(星期一)">2016-11-28(星期一)</li><li title="2016-11-29(星期二)">2016-11-29(星期二)</li><li title="2016-11-30(星期三)">2016-11-30(星期三)</li><li title="2016-12-01(星期四)">2016-12-01(星期四)</li><li title="2016-12-02(星期五)">2016-12-02(星期五)</li><li title="2016-12-03(星期六)">2016-12-03(星期六)</li><li title="2016-12-04(星期日)">2016-12-04(星期日)</li><li title="2016-12-05(星期一)">2016-12-05(星期一)</li><li title="2016-12-06(星期二)">2016-12-06(星期二)</li><li title="2016-12-07(星期三)">2016-12-07(星期三)</li><li title="2016-12-08(星期四)">2016-12-08(星期四)</li><li title="2016-12-09(星期五)">2016-12-09(星期五)</li>
			                
		                
                        
		                 	                                  </ul>
                 
	        </div>


    	        </div>
       
	    <div id="order_0">
	       <div class="order_notice" style="display:none;"><br>很抱歉，当前产品正在更新维护中，暂无团期且无法预订，仅供浏览。</div>
	       <div class="select_show">
		       <div class="select_adult_child clearfix">
	                    <!--start select_people-->
	                    <div class="select_adult">
	                      <div class="s_anum">
	                        <p class="s_acon" title="2" id="p_num">2</p>
	                      </div>
	                      <span class="fl">成人</span>
	                      <ul class="s_alist">
	                        <li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li><li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li><li>19</li><li>20</li>
	                        <li>21</li><li>22</li><li>23</li><li>24</li><li>25</li><li>26</li><li>27</li><li>28</li><li>29</li><li>30</li><li>31</li><li>32</li><li>33</li><li>34</li><li>35</li><li>36</li><li>37</li><li>38</li><li>39</li><li>40</li>
	                        <li>41</li><li>42</li><li>43</li><li>44</li><li>45</li><li>46</li><li>47</li><li>48</li><li>49</li><li>50</li>
	                      </ul>
	                    </div>
	                    <!--end select_people-->
	                    <!--start select_child-->
	                    <div class="select_child">
	                      <div class="s_cnum">
	                        <p class="s_ccon" title="1" id="c_num">0</p>
	                      </div>
	                      <span class="fl">儿童</span>
	                      <ul class="s_clist">
	                        <li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li><li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li><li>19</li><li>20</li>
	                        <li>21</li><li>22</li><li>23</li><li>24</li><li>25</li><li>26</li><li>27</li><li>28</li><li>29</li><li>30</li><li>31</li><li>32</li><li>33</li><li>34</li><li>35</li><li>36</li><li>37</li><li>38</li><li>39</li><li>40</li>
	                        <li>41</li><li>42</li><li>43</li><li>44</li><li>45</li><li>46</li><li>47</li><li>48</li><li>49</li><li>50</li>
	                      </ul>
	                    </div>
	             </div>
		        <div class="clearfix mb_10">
		          <div class="order_btn">立刻预订</div>
		          <input class="btn_num" value="0" type="hidden">
		          <input class="route_id" value="952" type="hidden">
		        </div>
	        </div>
	    </div>
	    
	    </td>
       	     <td id="name_1" class="pro2">
	      	<input value="1" class="939" type="hidden">
	     	<div class="pro_des" id="route_name_939_num_1" style="height: 36px; ">
		    	 <a title="蜈支洲.西岛.呀诺达雨林.大小洞天.夜游三亚湾双飞5日**4晚海景房**" target="_blank" href="http://www.byts.com.cn/line/sanyayidi002/939.htm">
		    		 蜈支洲.西岛.呀诺达雨林.大小洞天.夜游三亚湾双飞5日**4晚海景房**</a>	    	 </div>
	    
    	<div id="plan_date_1">
        
          <div class="select_date">
             	 <div class="s_date s_datenodown">
             	 	<p class="s_con" title="2016-09-10">2016-09-10(星期六)</p>
             	 </div>
             	 <input value="939" class="routeId" type="hidden">
             	 <ul class="s_list">
	             	 		  
                              
                           
                             
			                  <li title="2016-09-10(星期六)">2016-09-10(星期六)</li><li title="2016-09-11(星期日)">2016-09-11(星期日)</li><li title="2016-09-12(星期一)">2016-09-12(星期一)</li><li title="2016-09-13(星期二)">2016-09-13(星期二)</li><li title="2016-09-14(星期三)">2016-09-14(星期三)</li><li title="2016-09-15(星期四)">2016-09-15(星期四)</li><li title="2016-09-16(星期五)">2016-09-16(星期五)</li><li title="2016-09-17(星期六)">2016-09-17(星期六)</li><li title="2016-09-18(星期日)">2016-09-18(星期日)</li><li title="2016-09-19(星期一)">2016-09-19(星期一)</li><li title="2016-09-20(星期二)">2016-09-20(星期二)</li><li title="2016-09-21(星期三)">2016-09-21(星期三)</li><li title="2016-09-22(星期四)">2016-09-22(星期四)</li><li title="2016-09-23(星期五)">2016-09-23(星期五)</li><li title="2016-09-24(星期六)">2016-09-24(星期六)</li><li title="2016-09-25(星期日)">2016-09-25(星期日)</li><li title="2016-09-26(星期一)">2016-09-26(星期一)</li><li title="2016-09-27(星期二)">2016-09-27(星期二)</li><li title="2016-09-28(星期三)">2016-09-28(星期三)</li><li title="2016-09-29(星期四)">2016-09-29(星期四)</li><li title="2016-09-30(星期五)">2016-09-30(星期五)</li><li title="2016-10-01(星期六)">2016-10-01(星期六)</li><li title="2016-10-02(星期日)">2016-10-02(星期日)</li><li title="2016-10-03(星期一)">2016-10-03(星期一)</li><li title="2016-10-04(星期二)">2016-10-04(星期二)</li><li title="2016-10-05(星期三)">2016-10-05(星期三)</li><li title="2016-10-06(星期四)">2016-10-06(星期四)</li><li title="2016-10-07(星期五)">2016-10-07(星期五)</li><li title="2016-10-08(星期六)">2016-10-08(星期六)</li><li title="2016-10-09(星期日)">2016-10-09(星期日)</li><li title="2016-10-10(星期一)">2016-10-10(星期一)</li><li title="2016-10-11(星期二)">2016-10-11(星期二)</li><li title="2016-10-12(星期三)">2016-10-12(星期三)</li><li title="2016-10-13(星期四)">2016-10-13(星期四)</li><li title="2016-10-14(星期五)">2016-10-14(星期五)</li><li title="2016-10-15(星期六)">2016-10-15(星期六)</li><li title="2016-10-16(星期日)">2016-10-16(星期日)</li><li title="2016-10-17(星期一)">2016-10-17(星期一)</li><li title="2016-10-18(星期二)">2016-10-18(星期二)</li><li title="2016-10-19(星期三)">2016-10-19(星期三)</li><li title="2016-10-20(星期四)">2016-10-20(星期四)</li><li title="2016-10-21(星期五)">2016-10-21(星期五)</li><li title="2016-10-22(星期六)">2016-10-22(星期六)</li><li title="2016-10-23(星期日)">2016-10-23(星期日)</li><li title="2016-10-24(星期一)">2016-10-24(星期一)</li><li title="2016-10-25(星期二)">2016-10-25(星期二)</li><li title="2016-10-26(星期三)">2016-10-26(星期三)</li><li title="2016-10-27(星期四)">2016-10-27(星期四)</li><li title="2016-10-28(星期五)">2016-10-28(星期五)</li><li title="2016-10-29(星期六)">2016-10-29(星期六)</li><li title="2016-10-30(星期日)">2016-10-30(星期日)</li><li title="2016-10-31(星期一)">2016-10-31(星期一)</li><li title="2016-11-01(星期二)">2016-11-01(星期二)</li><li title="2016-11-02(星期三)">2016-11-02(星期三)</li><li title="2016-11-03(星期四)">2016-11-03(星期四)</li><li title="2016-11-04(星期五)">2016-11-04(星期五)</li><li title="2016-11-05(星期六)">2016-11-05(星期六)</li><li title="2016-11-06(星期日)">2016-11-06(星期日)</li><li title="2016-11-07(星期一)">2016-11-07(星期一)</li><li title="2016-11-08(星期二)">2016-11-08(星期二)</li><li title="2016-11-09(星期三)">2016-11-09(星期三)</li><li title="2016-11-10(星期四)">2016-11-10(星期四)</li><li title="2016-11-11(星期五)">2016-11-11(星期五)</li><li title="2016-11-12(星期六)">2016-11-12(星期六)</li><li title="2016-11-13(星期日)">2016-11-13(星期日)</li><li title="2016-11-14(星期一)">2016-11-14(星期一)</li><li title="2016-11-15(星期二)">2016-11-15(星期二)</li><li title="2016-11-16(星期三)">2016-11-16(星期三)</li><li title="2016-11-17(星期四)">2016-11-17(星期四)</li><li title="2016-11-18(星期五)">2016-11-18(星期五)</li><li title="2016-11-19(星期六)">2016-11-19(星期六)</li><li title="2016-11-20(星期日)">2016-11-20(星期日)</li><li title="2016-11-21(星期一)">2016-11-21(星期一)</li><li title="2016-11-22(星期二)">2016-11-22(星期二)</li><li title="2016-11-23(星期三)">2016-11-23(星期三)</li><li title="2016-11-24(星期四)">2016-11-24(星期四)</li><li title="2016-11-25(星期五)">2016-11-25(星期五)</li><li title="2016-11-26(星期六)">2016-11-26(星期六)</li><li title="2016-11-27(星期日)">2016-11-27(星期日)</li><li title="2016-11-28(星期一)">2016-11-28(星期一)</li><li title="2016-11-29(星期二)">2016-11-29(星期二)</li><li title="2016-11-30(星期三)">2016-11-30(星期三)</li><li title="2016-12-01(星期四)">2016-12-01(星期四)</li><li title="2016-12-02(星期五)">2016-12-02(星期五)</li><li title="2016-12-03(星期六)">2016-12-03(星期六)</li><li title="2016-12-04(星期日)">2016-12-04(星期日)</li><li title="2016-12-05(星期一)">2016-12-05(星期一)</li><li title="2016-12-06(星期二)">2016-12-06(星期二)</li><li title="2016-12-07(星期三)">2016-12-07(星期三)</li><li title="2016-12-08(星期四)">2016-12-08(星期四)</li><li title="2016-12-09(星期五)">2016-12-09(星期五)</li>
			                
		                
                        
		                 	                                  </ul>
                 
	        </div>
            
    	        </div>
       
	    <div id="order_1">
	       <div class="order_notice" style="display:none;"><br>很抱歉，当前产品正在更新维护中，暂无团期且无法预订，仅供浏览。</div>
	       <div class="select_show">
		       <div class="select_adult_child clearfix">
	                    <!--start select_people-->
	                    <div class="select_adult">
	                      <div class="s_anum">
	                        <p class="s_acon" title="2" id="p_num">2</p>
	                      </div>
	                      <span class="fl">成人</span>
	                      <ul class="s_alist">
	                        <li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li><li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li><li>19</li><li>20</li>
	                        <li>21</li><li>22</li><li>23</li><li>24</li><li>25</li><li>26</li><li>27</li><li>28</li><li>29</li><li>30</li><li>31</li><li>32</li><li>33</li><li>34</li><li>35</li><li>36</li><li>37</li><li>38</li><li>39</li><li>40</li>
	                        <li>41</li><li>42</li><li>43</li><li>44</li><li>45</li><li>46</li><li>47</li><li>48</li><li>49</li><li>50</li>
	                      </ul>
	                    </div>
	                    <!--end select_people-->
	                    <!--start select_child-->
	                    <div class="select_child">
	                      <div class="s_cnum">
	                        <p class="s_ccon" title="1" id="c_num">0</p>
	                      </div>
	                      <span class="fl">儿童</span>
	                      <ul class="s_clist">
	                        <li>0</li><li>1</li><li>2</li><li>3</li><li>4</li><li>5</li><li>6</li><li>7</li><li>8</li><li>9</li><li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li><li>19</li><li>20</li>
	                        <li>21</li><li>22</li><li>23</li><li>24</li><li>25</li><li>26</li><li>27</li><li>28</li><li>29</li><li>30</li><li>31</li><li>32</li><li>33</li><li>34</li><li>35</li><li>36</li><li>37</li><li>38</li><li>39</li><li>40</li>
	                        <li>41</li><li>42</li><li>43</li><li>44</li><li>45</li><li>46</li><li>47</li><li>48</li><li>49</li><li>50</li>
	                      </ul>
	                    </div>
	             </div>
		        <div class="clearfix mb_10">
		          <div class="order_btn">立刻预订</div>
		          <input class="btn_num" value="1" type="hidden">
		          <input class="route_id" value="939" type="hidden">
		        </div>
	        </div>
	    </div>
	    
	    </td>
       	     <td id="name_2" class="pro3"></td>
        
  	  </tr>
  	</tbody></table>
  </div>  
  <table class="compares_tab" border="0" cellpadding="0" cellspacing="0" width="100%">
	  <tbody><tr>
		<td class="left_tit" width="18%">成人价</td>
				<td id="plan_budget_0" class="pro1" width="27%">
								<span class="f_f60 f16" id="plan_budget_0_" title="2480">2480</span>元起
					</td>
	   		<td id="plan_budget_1" class="pro2" width="27%">
								<span class="f_f60 f16" id="plan_budget_1_" title="2580">2580</span>元起
					</td>
	   		<td id="plan_budget_2" class="pro3" width="27%"></td>
	   	  </tr>


	    <tr><td class="left_tit">儿童价</td>
	    			<td id="plan_child_0" class="pro1">
											<span class="f_f60 f16" id="plan_child_0_" title=""></span>元起
								</td>
		   			<td id="plan_child_1" class="pro2">
											<span class="f_f60 f16" id="plan_child_1_" title=""></span>元起
								</td>
		   			<td id="plan_child_2" class="pro3"></td>
		   	  </tr>
	  <tr class="c_manyi">
	    <td class="left_tit">满意度</td>
	    	    <td id="a_s_0" class="pro1">
				<span class="f_f60"> 100%</span>
						</td>
	    	    <td id="a_s_1" class="pro2">
				<span class="f_f60"> 100%</span>
						</td>
	    	    <td id="a_s_2" class="pro3"></td>
	    	  </tr>
	  <tr>
	    <td class="left_tit">出发地点</td>
	    	    	<td id="begin_city_0" class="pro1">北京</td>
	    	    	<td id="begin_city_1" class="pro2">北京</td>
	    	    	<td id="begin_city_2" class="pro3"></td>
	    	  </tr>
	  <tr>
	    <td class="left_tit">行程天数</td>
	    	    <td id="traffic_0" class="pro1">
	    		    	5 天
	    	 
	    </td>
	    	    <td id="traffic_1" class="pro2">
	    		    	5 天
	    	 
	    </td>
	    	    <td id="traffic_2" class="pro3"></td>
	    	  </tr>

	  <tr class="left schedule">
	    <td class="left_tit">行程</td> 
	     		     	   <td id="schedule_1" class="pro1">
								     				  			  	  <div style="height: 256px;" id="schedule_952_day_1">
				    				<b>第1天&nbsp;北京-三亚&nbsp;飞机&nbsp;</b><br>    				  
				                <p>
								早餐：敬请自理&nbsp;&nbsp;中餐：敬请自理&nbsp;&nbsp;晚餐：敬请自理
								
</p>
<p>住宿：三亚</p>
<hr>
<p>北京机场乘机赴三亚（机场有送机），飞行时间约<span>4</span>小时，降临美丽的鹿城—“国际旅游岛”三亚市，接机员已提前在此恭候您的到来，沿途欣赏鹿城美景，准备明天丰富的旅程。
</p>
<p>
</p>
<br><br>	
				           	  </div>
<div style="height: 388px;" id="schedule_952_day_2">
				    				<b>第2天&nbsp;三亚一地&nbsp;汽车&nbsp;</b><br>    				  
				                <p>
								早餐：包含&nbsp;&nbsp;中餐：包含&nbsp;&nbsp;晚餐：包含
								
</p>
<p>住宿：三亚</p>
<hr>
<p>负氧离子集聚地、海南热带香巴拉—5A级景区<strong>【呀诺达雨林文化旅游区】</strong>（游览不少于120分钟），亲临由杨幂、刘恺威领衔主演的电影《hold住爱》拍摄地。走进祖国最南端民风淳朴的苗族部落<strong>【椰田古寨】</strong>（游览不少于60分钟），感受千年传统手工艺，体验天涯民族银器文化。游览4A级景区<strong>【大东海国家海滨旅游区】</strong>（游览不少于120分钟）珊瑚自然保护区，最佳潜水基地，这里沙滩、阳光、碧水，绿树构成一幅美丽的滨海风光。当天行程结束，自由活动感受让您意犹未尽的魅力三亚。
</p>
<p>
</p>
<br><br>	
				           	  </div>
<div style="height: 410px;" id="schedule_952_day_3">
				    				<b>第3天&nbsp;三亚一地&nbsp;汽车&nbsp;</b><br>    				  
				                <p>
								早餐：包含&nbsp;&nbsp;中餐：包含&nbsp;&nbsp;晚餐：敬请自理
								
</p>
<p>住宿：三亚</p>
<hr>
<p>5A级景区<strong>【南山佛教文化苑】</strong>（含南山素斋，游览不少于180分钟）去拜谒临波于南海之上的108米的观音圣像，一路梵音相伴，仿若行止于梵天净土，身心俱感清灵空阔……<strong>【兰花大世界】（</strong>游览不少于60分钟）第八届中国（三亚）国际热带兰花博览会举办地，兰花寄寓了“澹泊以明志，宁静以致远”的胸襟！赴著名的4A级景区<strong>【天涯海角风景区】</strong>（游览不少于120分钟），是见证爱情、友谊的里程碑，这里滨临拍浪的蔚蓝海岸边，奇石林立，标志着“天涯”、“海角”、“南天一柱”等巨石雄峙海滨。当天行程结束，自由活动感受让您意犹未尽的魅力三亚。
</p>
<p>
</p>
<br><br>	
				           	  </div>
<div style="height: 366px;" id="schedule_952_day_4">
				    				<b>第4天&nbsp;三亚一地&nbsp;汽车&nbsp;</b><br>    				  
				                <p>
								早餐：包含&nbsp;&nbsp;中餐：包含&nbsp;&nbsp;晚餐：包含
								
</p>
<p>住宿：三亚</p>
<hr>
<p>前往冯小刚执导的喜剧电影《私人订制》外景拍摄地<strong>【蜈支洲岛】</strong>（游览不少于150分钟，含往返乘船时间）一面体味着蜈支洲不同风情，一面由衷的感叹蓝色诱惑。前往海南旅游新地标<strong>【奥特</strong>莱<strong>斯文化旅游区】</strong>（游览不少于120分钟）是首创置业倾力打造的海南全岛规模最大，业态最丰富，最具价格竞争优势的首家纯正奥特莱斯。前往全球最大的单体免税店<strong>【海棠湾免税店】</strong>（赠送游览不少于60分钟）汇聚国际顶级品牌最多、档次最高的大型免税购物主题中心。<br>
</p>
<p>
</p>
<br><br>	
				           	  </div>
<div style="height: 190px;" id="schedule_952_day_5">
				    				<b>第5天&nbsp;三亚--北京&nbsp;飞机&nbsp;</b><br>    				  
				                <p>
								早餐：包含&nbsp;&nbsp;中餐：敬请自理&nbsp;&nbsp;晚餐：敬请自理
								
</p>
<p>住宿：</p>
<hr>
<p><strong>全天</strong><b>自由活动</b>，根据航班时间安排送机，乘航班返回北京，返回温馨家园。
</p>
<p>
</p>
<br><br>	
				           	  </div>
  		  </td>
				     	   <td id="schedule_2" class="pro2"></td>
				     	   <td id="schedule_3" class="pro3">
								     				  			  			      </td>
			  
	  </tr>
	  <tr class="left">
	    <td class="left_tit">景点</td>
	    	    <td id="view_0" class="pro1">
	    	      
	    </td>
	    	    <td id="view_1" class="pro2">
	    	       
	    </td>
	    	    <td id="view_2" class="pro3"></td>
	    	  </tr>
	  <tr class="self_pay left">
	    <td class="left_tit">行程特色</td>
	    	    <td id="self_charge_0" class="pro1">
					      <span style="font-size:14px;">蜈之洲岛、南山文化旅游区、呀诺达雨林、天涯海角、椰田古寨、大东海风景区、三亚兰花大世界、海棠湾免税店</span><br>
<span style="font-size:14px;"><strong>行程特色</strong> &nbsp;入住<span style="color:#EE33EE;">三亚近海海边酒店--2分58秒即可漫步到海边（升级海景房+450元/人）</span>，纯玩不进购物店，<span style="color:#EE33EE;">正餐餐标30元/人餐</span></span><br>
<span style="font-size:14px;"><strong>特别赠送</strong> &nbsp;呀诺达景区观光车、政府调节基金、矿泉水2瓶/人天、南山素斋自助餐、雨林药膳餐</span><br>
<span style="font-size:14px;"><strong>品质承诺</strong> &nbsp;白天不增加任何自费景点（特色项目除外）不更换所含景点、不压缩游览时间；全程不增加任何购物点，违约赔付2000元/人</span><br>
		     		 </td>
			    <td id="self_charge_1" class="pro2">
					      <span style="font-size:14px;">蜈支洲岛、西岛、呀诺达热带雨林、大小洞天<span style="font-size:14px;line-height:21px;">、天涯海角</span>、玫瑰谷、美丽汇、椰田古寨、凤凰岭、海螺姑娘<span style="font-size:14px;line-height:21px;">、免税店</span></span><br>
<span style="font-size:14px;"><strong>行程特色 </strong>&nbsp;连住4晚三亚海边酒店海景房（不挪窝），纯玩不进购物店</span><br>
<span style="font-size:14px;"><strong>特别赠送</strong> &nbsp;价值180元“<span style="color:#EE33EE;">东南亚红艺人表演”</span>、价值165元“<span style="color:#EE33EE;">游艇游三亚湾</span>”、正宗海南本帮菜之黎家捞叶宴</span><br>
<span style="font-size:14px;"><strong>品质承诺 &nbsp;</strong>一价全包，绝无自费景点，<span style="color:#EE33EE;">0自费=白天、晚上不增加任何自费景点</span>；绝对不更换减少景点；绝对不压缩行程游览时间；</span><br>
		     		 </td>
			    <td id="self_charge_2" class="pro3"></td>
			  </tr>
	 

	  <tr class="left">
	    <td class="left_tit">费用包含</td>
	    	    <td id="budget_include_0" class="pro1">
                 交通：北京--三亚往返团队机票（含机建及燃油）&nbsp;<br>
住宿：指定酒店双人标准间（一晚温泉酒店）不提供自然单间，产生单房差或加床费用自理<br>
用餐：含5正4早；早餐围桌五点一粥（不用不退费）；正餐30元/人十菜一汤（十人一桌）自愿放弃 费用不退<br>
用车：海南地接指定委派GPS安全监控系统旅游车配置空调旅游车（实行滚动发班，确保每人一个正座），接送机由公司派专职人员负责机场接送<br>
景点：行程中注明含的景点第一道门票，赠送景点因时间或天气原因不能前往，按“不退费用”和“不更换景点”处理<br>
导游：持有导游资格证书的专业导游全程优质服务<br>
保险：海南旅行社责任险（最高保额10万元/人），强烈建议游客自行购买旅游意外险<br>
儿童：2岁以上1.2米以下儿童只含半价餐+车位<br>
<strong>三亚参考酒店</strong><br>
海边酒店：豪都花园酒店、凤凰豪生海岸酒店、正扬国际度假酒店、臻澜海景度假酒店、美成滨海度假酒店、海虹酒店、龙兴海景酒店、星海源酒店<br>
&nbsp;~海景房：武警碧海楼度假酒店、海域中央度假酒店、馨雅国际度假酒店、明申高尔夫酒店、天福源度假酒店、仙居府大酒店、玉海国际大酒店、三亚君锦滨海酒店、大卫传奇度假酒店、海立方度假酒店、万润海景酒店、力合度假酒店、海湾维景国际大酒店<br>
	    	    </td>
	    	    <td id="budget_include_1" class="pro2">
                交通：北京--三亚--北京往返团队机票（含机建及燃油）&nbsp;<br>
住宿：三亚连住4晚高性价比海边经济型酒店海景房（不挪窝），不提供自然单间，产生单房差或加床费用自理<br>
用餐：含4正4早；早餐围桌五点一粥（不用不退费），正餐20元/人餐，自愿放弃 费用不退<br>
用车：海南地接指定委派GPS安全监控系统旅游车配置空调旅游车（实行滚动发班，确保每人一个正座），接送机由公司派专职人员负责机场接送<br>
景点：行程中注明含的景点第一道门票，赠送景点因时间或天气原因不能前往，按“不退费用”和“不更换景点”处理<br>
导游：持有导游资格证书的专业导游全程优质服务<br>
保险：海南旅行社责任险（最高保额10万元/人），强烈建议游客自行购买旅游意外险<br>
儿童：2岁以上1.2米以下儿童只含半价餐+车位<br>
<strong>三亚参考酒店</strong><br>
银苑、铂金、芒果、嘉悦莱登、京韵海景、蓝海银滩、海悦湾；<br>
	    	    </td>
	    	    <td id="budget_include_2" class="pro3"></td>
	    	  </tr>
	  <tr class="left">
	    <td class="left_tit">费用不包含</td>
	    		    <td id="not_include_0" class="pro1">
                    单房差、游客因私消费
		    		    </td>
		    		    <td id="not_include_1" class="pro2">
                          <span>单房差、游客因私消费</span>
		    		    </td>
		    		    <td id="not_include_2" class="pro3"></td>
		    	  </tr>

  <tr class="left">
    <td class="left_tit">出发日期</td>
        <td id="group_0" class="pro1">
      		        			    	 星期一,星期二,星期三,星期四,星期五,星期六,星期日
		        		 
				    </td>
        <td id="group_1" class="pro2">
      		        			    	星期一,星期二,星期三,星期四,星期五,星期六,星期日
		        		 
				    </td>
        <td id="group_2" class="pro3"></td>
      </tr>

</tbody></table>

</div></div></div>
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
<span>优质带宽由<a href="http://www.62idc.com/">中睿科技</a>提供 <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5896591'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "v1.cnzz.com/stat.php%3Fid%3D5896591' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_5896591"><a href="http://www.cnzz.com/stat/website.php?web_id=5896591" target="_blank" title="站长统计">站长统计</a></span><script src="../home/user/stat.php" type="text/javascript"></script><script src="../home/user/core.php" charset="utf-8" type="text/javascript"></script></span>
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
<script charset="utf-8" type="text/javascript" src="../home/user/wpa.php"></script>
<!-- WPA Button End -->
<script language="JavaScript" src="../js/floatcard.js"></script><script src="../js/all_20100501.js"></script><script id="TQGetrequestUser_JS"></script>
<script id="TQGetIsNewMsg_JS"></script><script src="../js/as.js"></script><object id="tq_as" name="tq_as" style="position:absolute;left:0px;top:-5px;" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" height="1" width="1"><param name="movie" value="http://sysimages.tq.cn/js/vip/shareObject.swf"><param name="allowScriptAccess" value="always"><object id="tq_as2" name="tq_as2" style="position:absolute;left:0px;top:-5px;" type="application/x-shockwave-flash" data="../home/images/shareObject.swf" height="1" width="1"><param name="allowScriptAccess" value="always"></object></object>






<!--start foot-->
<script type="text/javascript">
	$(function(){
		//ajax获取升级方案和满意度
		 //getSchemeAndAs(0);
		 //getSchemeAndAs(1);
		// getSchemeAndAs(2);

		 //=====================================//
		
         $('.child_price').each(function(){
				var child_price=$(this).find('.f_f60').text();
				if(child_price=='0'){
					$('.child_price').html('--');
				}
		 })
		 
		  //=====================================//
		  
		 var compare_num=$("#compare_num").val();
		 if(compare_num==2){
			$("#cancel_2").html('您还可以继续添加产品！') ;
			
			clear_html(2);
			
			if_btn_show(0);
			if_btn_show(1);  
			check_cont(2,'ticketsInfo_','table tbody');
			check_cont(2,"live_");
			check_cont(2,"visa_");
			check_cont(2,"depart_");
			check_cont(2,'plan_child_');
			check_cont(2,"scheme_");
		 }
		 else if(compare_num==1){
			if_btn_show(0);
			$("#cancel_1").html('您还可以继续添加产品！') ;
			$("#cancel_2").html('您还可以继续添加产品！') ;
			clear_html(1);
			clear_html(2);
			check_cont(1,'ticketsInfo_','table tbody');
			check_cont(1,"live_");
			check_cont(1,"visa_");
			check_cont(1,"depart_");
			check_cont(1,'plan_child_');
			check_cont(1,"scheme_");
		 }
		 else if(compare_num==0){
			$("#cancel_0").html('您还可以继续添加产品！') ;
			$("#cancel_1").html('您还可以继续添加产品！') ;
			$("#cancel_2").html('您还可以继续添加产品！') ;
			
			clear_html(0);
			clear_html(1);
			clear_html(2);
		 }
		 else if(compare_num==3){
			 if_btn_show(0);
		     if_btn_show(1);
		     if_btn_show(2);
			 check_cont(3,'ticketsInfo_','table tbody');
			 check_cont(3,"visa_");
			 check_cont(3,"depart_");
			 check_cont(3,"live_");
			 check_cont(3,'plan_child_');
			 check_cont(3,"scheme_");
		 }

		 //=====================================//

		
		//=====================================//

	     //点击'取消对比'按钮时执行
		 $('.cancel_btn').click(function(){
			
			var key=$(this).parents('td').attr('id');
			
			key=key.substring(key.length-1,key.length);
			var routeId=$('#name_'+key).children('input').attr('class');
			
			
			var route_0=$('#name_0').children('input').attr('class');
			var route_1=$('#name_1').children('input').attr('class');
			
			var route_2=$('#name_2').children('input').attr('class');
		
			
			
			var url='/add/duibi.php?aid='+route_0+','+route_1+','+route_2+'&noid='+routeId;
		    window.location.href=url; 
			
		 })
		 
		 //=====================================//

		 //点击'加入对比'按钮时执行
		 $('.join_btn').click(function(){
			 var num=$('#compare_num').val();
			 var routeId = $(this).siblings('.compares_bianhao').val();
			 var route_0=$('#name_0').children('input').attr('class');
			 var route_1=$('#name_1').children('input').attr('class');
			 var route_2=$('#name_2').children('input').attr('class');
			 var url='/yii.php?r=routesContrast/compare';
			 var notice=$('#notice').val(); 
			 if(routeId.length>7){
				 routeId=routeId.substring(routeId.length-7,routeId.length);
			 }
			 if(num==3){
				$('.compares_notice').text('对不起，您最多只可以添加3个产品，请先删除对比栏中的一些产品后再添加！');
				$('.compares_notice').animate({'filter': 'alpha(opacity=0)','-moz-opacity':'0','opacity': '0'},8000);
				return false;
			 }
			 if($.trim(routeId) == '' || $.trim(routeId) == '请直接输入产品编号'){
				$('.compares_notice').text('请先输入产品编号');
				$('.compares_notice').animate({'filter': 'alpha(opacity=0)','-moz-opacity':'0','opacity': '0'},8000);
				return false;
			 }
			 post_data="routeId="+routeId+"&route_0="+route_0+"&route_1="+route_1+"&route_2="+route_2+"&action=join";
			 $.ajax({
		            url: url,
		            type:'POST',
		            dataType:'json',
		            data:post_data,
		            success: function(data){
			            if(data==1){
			            	alert('抱歉，此产品对比目前只支持跟团游产品，请重新输入！');
					    }else if(data==2 || data==4){
					    	alert('抱歉，您输入的线路编号不正确，请重新输入！');
						}else if(data==3){
							alert('您输入的线路编号已经在此产品对比页中！');
						}else{
				            window.location.href="/routecompare/"+data;  
						}
			              
		            }
		      });
		 })
		 
		 //=====================================//
		 
		 //若错误提示信息不为空，则显示
		 var notice=$('#notice').val();
         if(notice.length!=0){
			  $('.compares_notice').text(notice);
         }

		//=====================================//
         
		
		 //=====================================//
		 
		 //点击'立即预订'按钮时执行
		 $('.order_btn').click(function(){
			 
			var num=$(this).siblings('.btn_num').val();
		var _hidErTong='0';
			var user_num=$('#order_'+num+' '+'.s_acon').text();
			var children_num=$('#order_'+num+' '+'.s_ccon').text();
			var route_id=$(this).siblings('.route_id').val();
			var plan_date=$('#plan_date_'+num+' '+'.s_con').attr('title'); 
			
			
				var phpurl=  $("#phpurl").attr("pid"); //URL
			
				var _hidChenRen=$('#plan_budget_'+num+'_').attr('title'); 
			var _hidErTong=$('#plan_child_'+num+'_').attr('title'); 
		
			
			user_num=$.trim(user_num);
			children_num=$.trim(children_num);
			route_id=$.trim(route_id);
			plan_date=$.trim(plan_date);
	
			plan_date=plan_date.substring(0,10);
			
			$('#form_plan_date').val(plan_date);
			$('#form_route_id').val(route_id);
			$('#form_user_num').val(user_num);
			$('#form_children_count').val(children_num);
	
			 editWidget(phpurl+"/order/order_login.php?pid="+route_id+"&U7188Date="+plan_date+"&person="+user_num+"&son="+children_num+"&_hidChenRen="+_hidChenRen+"&_hidErTong="+_hidErTong+"&yuding=line");
		 })
		 

         //=====================================//
         
		 $('.compares_bianhao').focus(function() {
			this.style.color = "#404040"
			if (this.value == this.defaultValue) {
				this.value = '';
			}
		}).blur(function() {
			this.style.color = "#636363"
			if (this.value == '') {
				this.value = this.defaultValue;
			}else{
	              
			}
		})
		
		 //=====================================//
		 
		 //下拉框模拟（选择日期）
		 $('.s_date').mouseover(function(){
		
			  $(this).siblings('.s_list').addClass('s_list_hover');
			  $(this).siblings('.s_list').find('li').each(function(j,m){
				  $(m).bind({
					  click:function(){
						var sListValue = $(m).html();
						var sDate = $(m).attr('title');
						sListValue = $.trim(sListValue);
						sDate = $.trim(sDate);
						//日期为下拉框赋值
						$(this).parent().siblings('.s_date').find('.s_con').text(sListValue);
						//为隐藏的input赋值
						$('#plan_date').val(sDate.substr(0, 10));
						$('#begindate_page').val(sDate.substr(0, 10));
						$(this).parent().siblings('.s_date').find('.s_con').attr('title', sListValue );
						//日期闭合下拉框
						$(this).parent().removeClass('s_list_hover');
						//途牛价、儿童价、单房差、促销价、升级方案价格等随着日期变动
						var date_all=$(this).text();
						var url="/yii.php?r=routesContrast/price";
						var routeId=$(this).parent().siblings('.routeId').val();
						var key=$(this).parents('td').attr('id');
						key=$.trim(key);
						key=key.substring(key.length-1,key.legth);
						date_all=$.trim(date_all);
						date=date_all.substring(0,10);
						var a=$('#plan_promotion_'+key).find('.f_f60').text();
					 	$.ajax({
				            url: url,
				            type:'POST',
				            data:'routeId='+routeId+'&date='+date,
				            dataType:'json',
				            success: function(data){
				                intro=$.trim(data.intro);
				            	html=$.trim(data.html);
				            	budget=$.trim(data.budget);
				            	room_add_budget=$.trim(data.room_add_budget);
				            	low_price=$.trim(data.low_price);
				            	budget_child=$.trim(data.budget_child);
				            	scheme_budget_child=$.trim(data.scheme_budget_child);
				            	scheme_budget=$.trim(data.scheme_budget);
					            if(budget!='' && budget!=0){
									$('#plan_budget_'+key).find('.f_f60:first').text(budget);
							    }
					            if(room_add_budget!='' && room_add_budget!=0){
									$('#plan_budget_'+key).find('.f_f60:last').text(room_add_budget);
							    }
								if(budget_child!=''&& budget_child!=0){
									$('#plan_child_'+key).find('.f_f60').text(budget_child);
							    }
								if(low_price!=''&& low_price!=0){
								    $('#plan_promotion_0').parent().show();
									$('#plan_promotion_'+key).find('.show_price').html('<span class="f_f60 price_cuxiao">'+low_price+'</span>元');
									if( (intro!='' && intro!='null') || (html!=''&& html!='null')){
										 $('#plan_promotion_'+key).find('.price_cuxiao_con').html(intro+'<br/>'+html);
										 $(".price_cuxiao").each(function(i) {
											  $(".price_cuxiao").eq(i).powerFloat({
											      offsets: {
											      x: -98,
											      y:0
											  },
											  reverseSharp: true,
											  target: $(".price_cuxiao_con").eq(i)
											  });
								        });
									}
							    } 
								if(scheme_budget_child!=''&& scheme_budget_child!=0){
									$('#scheme_'+key).find('.scheme_budget_child').text("儿童价："+scheme_budget_child);
							    } 
								if(scheme_budget!=''&& scheme_budget!=0){
									$('#scheme_'+key).find('.scheme_budget').text("成人价："+scheme_budget+"元起");
							    } 
								var p_price= $('#plan_budget_'+key).find('.f_f60').text();
								var c_price= $('#plan_child_'+key).find('.f_f60').text();
								var date_all= $('#plan_date_'+key).find('.s_con').text();
							  	$('#order_'+key).find('.date').text(date_all);
								$('#order_'+key).find('.p_price').text(p_price+"元/人");
								$('#order_'+key).find('.c_price').text(c_price+"元/人");
								$('#order_'+key).find('.r_price').text(room_add_budget+"元/人");  
				            }
				        });
					  }
				  });
			  });
		 })
		 $('.select_date').mouseleave(function(){
			 $(this).find('.s_list').removeClass('s_list_hover'); 
		 })
		
		 //=====================================//
		 
		 $('.s_anum').mouseover(function(){
			  $(this).siblings('.s_alist').addClass('s_alist_hover');
			  $(this).siblings('.s_alist').find('li').each(function(j, m){
				  $(m).bind({
					  click:function(){
						var aListValue = $(this).html();
						//成人为下拉框赋值
						$(this).parent().siblings('.s_anum').find('.s_acon').text(aListValue);
						//为隐藏的input赋值
						$('#user_num_page').val(aListValue);
						$(this).parent().siblings('.s_anum').find('.s_acon').attr('title', aListValue );
						//成人闭合下拉框
						$(this).parent().removeClass('s_alist_hover');
					  }
				  });
			  });
		  })
		  $('.select_adult').mouseleave(function(){
			 $(this).find('.s_alist').removeClass('s_alist_hover'); 
		  })

		   //=====================================//
		   
		   $('.s_cnum').mouseover(function(){
			  $(this).siblings('.s_clist').addClass('s_clist_hover');
			  $(this).siblings('.s_clist').find('li').each(function(j, m){
				  $(m).bind({
					  click:function(){
						var cListValue = $(this).html();
						//儿童为下拉框赋值
						$(this).parent().siblings('.s_cnum').find('.s_ccon').text(cListValue);
						//为隐藏的input赋值
						$('#children_count_page').val(cListValue);
						$(this).parent().siblings('.s_cnum').find('.s_ccon').attr('title', cListValue );
						//儿童闭合下拉框
						$(this).parent().removeClass('s_clist_hover');
					  }
				  });
			  });
		  })
		  $('.select_child').mouseleave(function(){
			 $(this).find('.s_clist').removeClass('s_clist_hover'); 
		  })

		   //=====================================//

	       //行程按天对齐
	       dayLine("schedule_","_day_");  
	       dayLine("eat_","_day_");  
	       dayLine("live_","_day_");  
	       dayLine("self_charge_","_num_");  
	       dayLine("depart_","_num_");
	       dayLine("depart_title_","_num_");
	       dayLine("route_name_","_num_");
			 
		   //=====================================//

		   var li_num=$('#visite_route li').length;
		   if(li_num%2!=0 && li_num>0){
			  $('#visite_route').append("<li>&nbsp;</li>");
		   }

		   //=====================================//

		   $("#keyword-input").focus(function(){
		         if ($(this).val()==$("#q").val()) {
		    		 $(this).val("");
		        }
		     });
		     $("#keyword-input").blur(function(){
		         if ($(this).val()=='') {
		    		 $(this).val($("#q").val());
		         } else {
		        	 $("#q").val($(this).val());
		         }
		     });
		     $("#keyword-input").keyup(function(){
		         if ($(this).val()!='') {
		        	 $("#q").val($(this).val());
		         }
		     });

		   //=====================================//	   
	     
		 	$(".shrink").toggle(function(){
		 		$(".shrink").addClass("unfold").html("<b>▼</b>展开");
		 	  	$(".add_compares_con").hide();
		 	},function(){
		 		$(".shrink").removeClass("unfold").html("<b>▲</b>收起");
		 		$(".add_compares_con").show();
		 		})
		 	
		  //=====================================//	 

	})
	
	function dayLine(id,kind){
		 var route_0=$('#name_0').children('input').attr('class');
		 var route_1=$('#name_1').children('input').attr('class');
		 var route_2=$('#name_2').children('input').attr('class'); 
		 for(var j=1;j<30;j++){
			var a=$('#'+id+route_0+kind+j).height();
			var b=$('#'+id+route_1+kind+j).height();
			var c=$('#'+id+route_2+kind+j).height();
			var d;
			a=Number($.trim(a)); 
			b=Number($.trim(b)); 
			c=Number($.trim(c)); 
			if(a=='null' || a.length==0){
				a=0;
			}
			if(b=='null' || b.length==0){
				b=0;
			}
			if(c=='null' || c.length==0){
				c=0;
			}
			if(a==0 && b==0 && c==0){
				return false;
			}
			if(a>b || a==b){ 
			 	if(a>c || a==c){ 
					$('#'+id+route_0+kind+j).css('height',a+'px');
					$('#'+id+route_1+kind+j).css('height',a+'px');
					$('#'+id+route_2+kind+j).css('height',a+'px');
				}else{
					$('#'+id+route_0+kind+j).css('height',c+'px');
					$('#'+id+route_1+kind+j).css('height',c+'px');
					$('#'+id+route_2+kind+j).css('height',c+'px');
				}	 
			}else{
				 if(b<c || b==c){
					 $('#'+id+route_0+kind+j).css('height',c+'px');
					 $('#'+id+route_1+kind+j).css('height',c+'px');
					 $('#'+id+route_2+kind+j).css('height',c+'px');
				 }else{
					 $('#'+id+route_0+kind+j).css('height',b+'px');
					 $('#'+id+route_1+kind+j).css('height',b+'px');
					 $('#'+id+route_2+kind+j).css('height',b+'px');
				 }
			}
		 }
	}
	
	function getSchemeAndAs(id){
		
		var route_id=$('#name_'+id).children('input').attr('class');
		
		var date=$('#plan_date_'+id).find('.s_con').text();
		var num=id+1;
		date=$.trim(date);
		date=date.substring(0,10);
		$.ajax({
	          url:'/yii.php?r=routesContrast/RouteScheme',
	          type:'POST',
	          data:"route="+route_id+"&date="+date,
	          success: function(data){ 
			  
	        	  if($.trim(data)!=''){
		            	$('#scheme_'+id).html(data);
		            	$('#scheme_'+id).parent().show();
			      }
	          }
		});
		$.ajax({
            url: '/yii.php?r=routesContrast/planAndAs',
            type:'POST',
            data:"route="+route_id,
            success: function(data){
            	$('#a_s_'+id).children('.f_f60').text(data+"%");
            }
	     });
	 }
	 
    function check_cont(num,name,son){
		if(son){
			var val_0=$("#"+name+"0"+" "+son).html();
			var val_1=$("#"+name+"1"+" "+son).html();
			var val_2=$("#"+name+"2"+" "+son).html();
		}else{
			var val_0=$("#"+name+"0").html();
			var val_1=$("#"+name+"1").html();
			var val_2=$("#"+name+"2").html();
		}
		if(num==2){
			if( ( $.trim(val_0)=='null' || $.trim(val_0)=='--' || $.trim(val_0).length == 0) && ( $.trim(val_1)=='null' || $.trim(val_1)=='--' || $.trim(val_1).length == 0)){
				$("#"+name+"0").parent().hide();
			}
		}else if(num==3){
			if( ( $.trim(val_0)=='null' || $.trim(val_0)=='--' || $.trim(val_0).length == 0) && ( $.trim(val_1)=='null' || $.trim(val_1)=='--' || $.trim(val_1).length == 0) && ( $.trim(val_0)=='null' || $.trim(val_2)=='--' || $.trim(val_2).length == 0)){
				$("#"+name+"0").parent().hide();
			}
		}else if(num==1){
			if( ( $.trim(val_0)=='null' || $.trim(val_0)=='--' || $.trim(val_0).length == 0)){
				$("#"+name+"0").parent().hide();
			}
		}
	}

	function if_btn_show(num){
		
        var date = $("#plan_date_"+num).html(); 
	
		
		
        if($.trim(date)=='--' || $.trim(date)==''){
            $("#order_"+num+' '+'.order_notice').show();
            $("#order_"+num+' '+'.select_show').hide();
         }
	}
	
	function clear_html(num){
        $("#name_"+num).html('') ;
		$("#plan_date_"+num).html('') ;
		$("#plan_budget_"+num).html('') ;
		$("#plan_promotion_"+num).html('') ;
		$("#plan_child_"+num).html('') ;
		$("#a_s_"+num).html('') ;
		$("#begin_city_"+num).html('') ;
		$("#traffic_"+num).html('') ;
		$("#description_"+num).html('') ;
		$("#ticketsInfo_"+num).html('') ;
		$("#schedule_"+num).html('') ;
		$("#view_"+num).html('') ;
		$("#self_charge_"+num).html('') ;
		$("#shop_"+num).html('') ;
		$("#eat_"+num).html('') ;
		$("#live_"+num).html('') ;
		$("#scheme_"+num).html('') ;
		$("#budget_include_"+num).html('') ;
		$("#not_include_"+num).html('') ;
		$("#depart_"+num).html('') ;
		$("#group_"+num).html('') ;
		$("#visa_"+num).html('') ;
		$("#depart_"+num).html('') ;
		$("#order_"+num).html('') ;

    }

</script>

<script type="text/javascript">
$(function(){
	$('.move_left:first').hide();
	$('.move_right:last').hide();
})
//左右移动产品
function move(name,i,m){
	var a1=[],a2=[],j=m?-1:1;
	$(name+i).each(function(i){ if(i>0) a1.push($(this).html());else a1.push($(this).children());})
	$(name+(+i+j)).each(function(i){ if(i>0) a2.push($(this).html());else a2.push($(this).children());})
	$(name+i).each(function(i){ if(i>0) {$(this).html(a2[i]);} else {$(this).children().detach();$(this).append(a2[i])}});
	$(name+(+i+j)).each(function(i){ if(i>0) {$(this).html(a1[i]);} else {$(this).children().detach();$(this).append(a1[i])}});	
	//促销信息说明的显示
	$(".price_cuxiao").each(function(i) {
		 $(".price_cuxiao").eq(i).powerFloat({
            offsets: {
                x: -98,
                y:0
            },
            reverseSharp: true,
            target: $(".price_cuxiao_con").eq(i)
        });
   });				
}
function goL(i){ move(".pro",i,1) }
function goR(i){ move(".pro",i) }

//顶部悬浮对比栏
$(window).scroll(function(){
var scrTop = $(this).scrollTop();
offTop = $(".compares_tit").offset().top+38;
scrTop>offTop ? $("#scroll").addClass("tagsFix") : $("#scroll").removeClass("tagsFix");
});
</script>

<script type="text/javascript">
 
 
	
    $(document).ready(function(){
    	$('#keyword-input').change(function(){
    		$('#st').val(1);			
    	});
    	autocomplete_options = { serviceUrl:base_url+'/suggest',onSelect:autocomplete_onselect,isOuter:true};
    	autocomplete_a = $('#keyword-input').autocomplete(autocomplete_options);
    	$("#keyword-input").focus(function() {
    		if (this.value == a) {
    			this.value = "";
    			this.style.color = "#000"
    		}
    	});
    	
    	$("#keyword-input").blur(function() {
    		if (this.value == "") {
    			this.value = a;
    			this.style.color = "#999"
    		}
    	});
    });

    function autocomplete_onselect(s, d, m){
    	$('#st').val(2);
    	do_route_search();
    }



    function resetPrice(){
        if($("#first_price").val()==""){
            var first_price = 0;
        }else{
            var first_price = parseInt($("#first_price").val());
        }
        if($("#second_price").val()==""){
            var second_price = 0;
        }else{
            var second_price = parseInt($("#second_price").val());
        }
        if(first_price>0&&second_price>0&&first_price>second_price){
            var temp = second_price;
            second_price = first_price;
            first_price = temp;
        }
        url ='/zhoubian/erriyou/p_0___0_0_0_0_0_'+first_price+'_'+second_price+'_0_0_0_0.html';
        window.location.href = url;
    }
    
    function showPlaces(flg){
        $("#showMorePlace").removeClass('cur_city');
        $("#hideMorePlace").removeClass('cur_city');
        if(flg=='more'){
            $("#showPlacesName").hide();
            $("#allPlacesName").show();
            document.cookie = "morePlaceFlag" + "=" + false;
        }else if(flg=='less'){
            $("#allPlacesName").hide();
            $("#showPlacesName").show();
            document.cookie = "morePlaceFlag" + "=" + true;
        }else{
            $("#allPlacesName").hide();
            $("#showPlacesName").show();
            document.cookie = "morePlaceFlag" + "=" + true;
        }
    }
    function  myAddPanel(title,url,desc) {
        if((typeof   window.sidebar   ==   'object')   &&   (typeof   window.sidebar.addPanel   ==   'function')) {
            window.sidebar.addPanel(title,url,desc);
        }else  {
            window.external.AddFavorite(url,title);
        }
    }
	
	
 function editWidget(targeturl)
{
	
  window.scrollTo(0, 0);
  var width = document.documentElement.clientWidth + document.documentElement.scrollLeft;
  var height = document.documentElement.clientHeight + document.documentElement.scrollTop;
  var layer = document.createElement('div');
  layer.style.zIndex = 2;
  layer.id = 'layer';
  layer.style.position = 'absolute';
  layer.style.top = '0px';
  layer.style.left = '0px';
  layer.style.height = document.documentElement.scrollHeight + 'px';
  layer.style.width = width + 'px';
  layer.style.backgroundColor = 'black';
  layer.style.opacity = '.3';
  layer.style.filter += ("progid:DXImageTransform.Microsoft.Alpha(opacity=30)");
  document.body.style.position = 'static';
  document.body.appendChild(layer);  
  
  var size = { 'height': 250, 'width': 640};
  var iframe = document.createElement('iframe');
  iframe.name = 'Widget Editor';
  iframe.id = 'WidgetEditor';
    iframe.scrolling="no";
	iframe.src = targeturl;
	iframe.style.height = size.height + 'px';
	iframe.style.width = size.width + 'px';
	iframe.style.position = 'absolute';
	iframe.style.zIndex = 9999;
	iframe.style.border = "2px";
	iframe.frameBorder="0px";
	iframe.marginwidth="0";
	iframe.marginheight="0";
	iframe.style.top = ((height + document.documentElement.scrollTop) / 2) - (size.height / 2) + 'px';
	iframe.style.left = (width / 2) - (size.width / 2) + 'px';
  document.body.appendChild(iframe);  
}

function closeEditor()
{
  var we=document.getElementById("WidgetEditor");
  var la=document.getElementById("layer");
  document.body.removeChild(we);
  document.body.removeChild(la);
  document.body.style.position = '';
}




</script> 





</body></html>