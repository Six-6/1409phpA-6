<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0029)http://www.byts.com.cn/china/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>国内旅游 惠玩旅行社官网</title>
<meta name="keywords" content="国内旅游,中国旅游,华夏旅游">
<meta name="description" content="北青旅国内部专业提供各种国内自由行，包团，跟团旅游">
<link rel="stylesheet" href="http://www.byts.com.cn/ORG7188_templets/002/style/style.css">
<link rel="stylesheet" href="http://www.byts.com.cn/ORG7188_templets/002/style/duibi.css">
<link rel="stylesheet" href="http://www.byts.com.cn/ORG7188_templets/002/style/linelist.css">
<link rel="stylesheet" href="../css/a_rili.css" type="text/css" media="screen" charset="utf-8">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/duibi.js"></script>

<script type="text/javascript" src="../js/duibi1.js"></script>
<script src="../js/a_list.js" type="text/javascript"></script>
<script src="../js/bsStatic.js" type="text/javascript" charset="utf-8"></script></head>


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
      <div class="a1"><a href="">所有目的地分类</a></div>
        @include('includes.dao')
        <div class="clear"></div>
        
  </div>
</div>
<div class="body1">


<div class="search_nav">
    <p class="crumbs"><a href="{{URL('/')}}">网站首页   &gt; </a><a href="{{URL('home/domestic')}}}">国内旅游  &gt; </a> </p>
    
    
    
     <!-- Button BEGIN -->
    <div class="bshare-custom"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="./国内旅游 北京青旅_北青旅总社官网北京旅行社_files/buttonLite.js"></script><script type="text/javascript" charset="utf-8" src="../js/bshareC0.js"></script>
    
    <!-- Button END -->
</div>
<!--end crumb-->
<!--start left-->
    <div class="w190 fl">
    <!--start why-->
    <div class="tn_pro tn_pro_y mb_10">
        <div class="thead_pro">
            <h3>国内旅游 </h3>
        </div>
        <div class="cate_list">
        
        
            <dl class="cart_wrap">
            
            
    <dt>
        @foreach ($arr as $val)
        <a class="sub_h f_4e9700 fb" href="javascript:void(0)"  id="{{ $val->r_id }}">{{ $val->r_region }}</a></dt>
                <dd>
                @foreach($val->child as $va)
                    <span>
                        <a href="javascript:void(0)" target="_blank" id="{{ $val->r_id }}" title="{{ $va->r_region }}">{{ $va->r_region }}</a>
                    </span>  
                @endforeach
                </dd>
                @endforeach                         
            </dl>
        </div>
     </div>
    <!--end why-->
 
                            <!--start hot_spot-->                <div class="tn_pro mb_10">
                    <div class="thead_pro">
                    <h3>国内旅游热门景点</h3>
                    </div>
                <div class="hot_spot">
                    <dl class="hot_spot_wrap">
                        <dd>
                                                            
                                                            
                                                            <a href="http://www.byts.com.cn/guide/domestic/hainan/658.htm" target="_blank">印象海南岛</a>
<a href="http://www.byts.com.cn/guide/domestic/hainan/657.htm" target="_blank">呀诺达雨林</a>
<a href="http://www.byts.com.cn/guide/domestic/hainan/656.htm" target="_blank">天涯海角</a>
<a href="http://www.byts.com.cn/guide/domestic/bj/2014/0208/655.html" target="_blank">南宫地热博览园</a>
<a href="http://www.byts.com.cn/guide/domestic/bj/2014/0208/654.html" target="_blank">郁金香摩锐水世界</a>
<a href="http://www.byts.com.cn/guide/domestic/bj/2014/0208/653.html" target="_blank">八达岭野生动物园</a>
<a href="http://www.byts.com.cn/guide/domestic/bj/2014/0208/652.html" target="_blank">北京欢乐谷</a>
<a href="http://www.byts.com.cn/guide/domestic/bj/2014/0208/651.html" target="_blank">北京世界花卉大观园</a>
<a href="http://www.byts.com.cn/guide/domestic/bj/2013/1209/646.html" target="_blank">长城</a>

                                   
                                                        </dd>
                    </dl>
                </div>
                </div>
            <div class="tn_pro mb_10">
            <div class="like_it_too">
                <div class="thead_pro">
                    <h3>浏览本页面用户最终购买</h3>
                </div>
                <ul class="slt_rout">
                                               
                                              <li>
                                <div class="rout_wrap">
                                    <a href="http://www.byts.com.cn/line/guizhou001/5041.htm" target="_blank" title="黄果树、天河潭、青岩古镇、千户苗寨、神龙洞">
                                        <img src="./国内旅游 北京青旅_北青旅总社官网北京旅行社_files/1431835672.jpg" alt="黄果树、天河潭、青岩古镇、千户苗寨、神龙洞">
                                    </a>
                                </div>
                                <p class="rout_title">
                                    <a href="http://www.byts.com.cn/line/guizhou001/5041.htm" target="_blank">
                                      黄果树、天河潭、青岩古镇、千户苗寨、神龙洞</a>
                                </p>
                                <p class="rout_price">￥<em>2850</em>起</p>
                            </li>
<li>
                                <div class="rout_wrap">
                                    <a href="http://www.byts.com.cn/line/guizhou001/5040.htm" target="_blank" title="黄果树、天星桥、陡坡塘、天河潭、西江千户苗">
                                        <img src="./国内旅游 北京青旅_北青旅总社官网北京旅行社_files/1431590812.jpg" alt="黄果树、天星桥、陡坡塘、天河潭、西江千户苗">
                                    </a>
                                </div>
                                <p class="rout_title">
                                    <a href="http://www.byts.com.cn/line/guizhou001/5040.htm" target="_blank">
                                      黄果树、天星桥、陡坡塘、天河潭、西江千户苗</a>
                                </p>
                                <p class="rout_price">￥<em>2550</em>起</p>
                            </li>
<li>
                                <div class="rout_wrap">
                                    <a href="http://www.byts.com.cn/line/sanyaziyouren002/4556.htm" target="_blank" title="2016年4-5月三亚自由行计划">
                                        <img src="./国内旅游 北京青旅_北青旅总社官网北京旅行社_files/1433222734.jpg" alt="2016年4-5月三亚自由行计划">
                                    </a>
                                </div>
                                <p class="rout_title">
                                    <a href="http://www.byts.com.cn/line/sanyaziyouren002/4556.htm" target="_blank">
                                      2016年4-5月三亚自由行计划</a>
                                </p>
                                <p class="rout_price">￥<em>2950</em>起</p>
                            </li>
<li>
                                <div class="rout_wrap">
                                    <a href="http://www.byts.com.cn/line/hunan001/1184.htm" target="_blank" title="长沙、韶山、凤凰古城、张家界、黄果树瀑布、">
                                        <img src="./国内旅游 北京青旅_北青旅总社官网北京旅行社_files/1428125247_3472.png" alt="长沙、韶山、凤凰古城、张家界、黄果树瀑布、">
                                    </a>
                                </div>
                                <p class="rout_title">
                                    <a href="http://www.byts.com.cn/line/hunan001/1184.htm" target="_blank">
                                      长沙、韶山、凤凰古城、张家界、黄果树瀑布、</a>
                                </p>
                                <p class="rout_price">￥<em>2980</em>起</p>
                            </li>

                                                
                                                
                                        </ul>
            </div>
        </div>
        <!-- end boughtRoute -->

      </div>
      
    <!--end left-->
    
   
<!--start right-->
    <div class="w800 fr" id="niuren_list">
      <!--start top_tour-->
      {{--<div class="top_tour mb_20 clearfix">--}}
                {{--<div class="top_pro">--}}
                  {{--<ul class="clearfix">--}}
                    {{--@foreach($domestic as $k=>$v)--}}
                    {{--<li class="t_item">--}}
                      {{--<div class="t_wrap">--}}
                        {{--<span class="cu_icon">强烈推荐</span>--}}
                        {{--<a href="{{URL('home/scenicDetails')}}?sid={{ $v->s_id }}" target="_blank">--}}
                          {{--<img src="../home/images/{{ $v->s_img }}" width="178" height="134" alt="{{ $v->s_name }}">--}}
                        {{--</a>--}}
                      {{--</div>--}}
                      {{--<p class="t_title">--}}
                        {{--<a class="f_4e9700" href="{{URL('home/scenicDetails')}}?sid={{ $v->s_id }}" target="_blank">--}}
                          {{--<span class="f_0053aa"></span>{{ $v->s_name }}--}}
                        {{--</a>--}}
                      {{--</p>--}}
                      {{--<div class="t_price">--}}
                        {{--<span class="fl"><em class="f18">{{ $v->s_sprice }}</em>元起</span>--}}
                        {{--<div class="tour_sale pt_8"><span class="dm"><em></em></span><span class="dj"><em></em></span></div>--}}
                      {{--</div>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}
                  {{--</ul>--}}
                {{--</div>        <!--start nr_special-->--}}
        <div class="nr_special">
          <div class="satisf">
            <dl>
              <dt>综合满意度：<a class="f_4e9700" href="http://www.byts.com.cn/china/#" rel="nofollow" target="_blank">[?]</a></dt>
              <dd>98%</dd>
            </dl>
          </div>
          <div class="tour_stat_infor">
            <table>
              <tbody>
                <tr>
                  <td align="right" width="90px">已服务出游：</td>
                  <td><em class="f_f60">&nbsp;2767&nbsp;</em>人次</td>
                </tr>
                <tr>
                  <td align="right" width="90px">已有点评数：</td>
                  <td><em class="f_f60">98</em> 条</td>
                </tr>
              </tbody>
            </table>
            <div class="fromto">
            <a class="infor" href="http://www.byts.com.cn/add/dingzhi.php" target="_blank">独立成团 个性定制</a>
          </div>
          </div>
        
          
        </div>
        <!--end nr_special-->
      {{--</div>--}}
      <!--end top_tour-->
      <!--start filter_head-->
        <div class="filter_head">
        <a name="des" rel="nofollow"></a>
          <div class="filterHb clearfix">
            <div class="nw_tab">
              <ul class="nw_title">
                <li class="nw_name cur"><h1><a title="国内旅游" href="http://www.byts.com.cn/china" target="_blank">国内旅游</a></h1></li>
              </ul>
            </div>
            <span class="filter_reset"><a href="http://www.byts.com.cn/china">重置筛选条件</a></span>
          </div>
        </div>
        <!--end filter_head-->
      <!--start cate_nav-->
      <div class="cate_nav">
              <!--start prop_list-->
        <div class="prop_list">
            <div class="prop_item">
            <dl>
              <dt>出发地：</dt>
              <dd>
                <ul class="content0"><li>    <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="id_0">不限</a>
    <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="id_1000">北京</a>
          </li>                </ul>
              </dd>
            </dl>
            </div>
                        <div class="prop_item">
                <dl>
                    <dt>目的地：</dt>
                    <dd>
                        <ul class="content1">                                                        <li><a href="javascript:void(0)" id="mdd_0" onclick="ListUrl(this.id);return false;">不限</a></li>
      
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_442">海南</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_30">云南</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_126">福建</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_534">东北</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_118">广西</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_547">西藏</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_665">老年旅游专列</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_618">山西</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_496">贵州</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_527">内蒙</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_556">新疆</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_568">青甘宁</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_647">广东</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_656">山东</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_476">湖北</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_518">安徽</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_485">四川</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_606">河南</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_469">湖南</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_462">陕西</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_507">江西</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_613">辽宁</a></li>
           
         <li> <a href="javascript:void(0)" onclick="ListUrl(this.id);return false;" id="mdd_451">华东</a></li>
           
                                                        </ul>
                    </dd>
                </dl>
            </div>
                           
                    <div class="prop_item">
            <dl>
              <dt>行程天数：</dt>
              <dd>
                <ul class="content2">                 <li> <a href="javascript:void(0)" id="day_0" onclick="ListUrl(this.id);return false;">不限</a> </li>
      <li><a href="javascript:void(0)" id="day_1" onclick="ListUrl(this.id);return false;">1天</a> </li>
      <li> <a href="javascript:void(0)" id="day_2" onclick="ListUrl(this.id);return false;">2天</a> </li>
      <li>   <a href="javascript:void(0)" id="day_3" onclick="ListUrl(this.id);return false;">3天</a> </li>
       <li>   <a href="javascript:void(0)" id="day_4" onclick="ListUrl(this.id);return false;">4天</a> </li>
         <li> <a href="javascript:void(0)" id="day_5" onclick="ListUrl(this.id);return false;">5天</a></li>
         <li> <a href="javascript:void(0)" id="day_6" onclick="ListUrl(this.id);return false;">6天</a></li>
         <li> <a href="javascript:void(0)" id="day_7" onclick="ListUrl(this.id);return false;">7天</a></li>
         <li> <a href="javascript:void(0)" id="day_8" onclick="ListUrl(this.id);return false;">8天</a></li>
          <li><a href="javascript:void(0)" id="day_9" onclick="ListUrl(this.id);return false;">9天</a></li>
       <li>   <a href="javascript:void(0)" id="day_10" onclick="ListUrl(this.id);return false;">10天以上</a></li>
                                    </ul>
              </dd>
            </dl>
          </div>
                   
                      <div class="prop_item">
            <dl>
              <dt>出现预算：</dt>
              <dd>
                <ul class="content3">                 <li><a href="javascript:void(0)" id="p1_0_p2_0" onclick="ListUrl(this.id);return false;">不限</a></li>
      <li><a href="javascript:void(0)" id="p1_101_p2_200" onclick="ListUrl(this.id);return false;">¥101-200</a></li>
      <li><a href="javascript:void(0)" id="p1_201_p2_500" onclick="ListUrl(this.id);return false;">¥201-500</a></li>
      <li><a href="javascript:void(0)" id="p1_501_p2_1000" onclick="ListUrl(this.id);return false;">¥501-1000</a></li>
     <li> <a href="javascript:void(0)" id="p1_1001_p2_2000" onclick="ListUrl(this.id);return false;">¥1001-2000</a></li>
     <li> <a href="javascript:void(0)" id="p1_2001_p2_20000" onclick="ListUrl(this.id);return false;">¥2000以上</a></li>
                                    </ul>
              </dd>
            </dl>
          </div>
          
                   
                   
      </div>
</div>
      <!--end filter-->
      <!--start pro_list-->
      <div class="content_wrap">
            <!--start zihuyou-->
      <div class="diytour">

            <div class="item_lists">

      <div class="place">
      
      @foreach($scenicArrs as $val)
      
      <h3 class="list_title"><span>{{$val[0]->r_region}}</span> <a href="http://www.byts.com.cn/line/hainan001">更多&gt;&gt;&gt;</a></h3>
          <div class="list_cont">
                                         

                <ul class="list_view">
                
                    @foreach($val as $v)
                 <li class="list_item">
              <div class="photo">
                <a href="">
                  <img data-original="/uploads/image/hujie/hn/1433222734.jpg" src="../home/images/{{$v->s_img}}" alt="2016年4-5月三亚自由行计划">
                </a>
              </div>
              <h3><a href="scenicDetails?sid={{$v->s_id}}" target="" title="2016年4-5月三亚自由行计划"><span class="f_f00">{{$v->s_discount}}</span>{{$v->s_name}}</a></h3>
              <p class="short_infor">特色： {{$v->s_characteristic}}</p>
                          <p class="user_tinfor">
                                                    <span class="tours_num">编号：<em>{{$v->s_id}}</em></span>
                                <span class="user_satisfy">满意度：<em>100%</em></span><a id="recall_button_4556" rel="nofollow" href="javascript:void(0);" title="查看回访记录" class="user_num" onclick="show_recall(4556,4556)">&nbsp;0&nbsp;单点评▼</a>
                                    </p>
<!--                        <div class="tuan_date"><p class="day_date">团期：--><!--</p><a href="--><!--/tours/--><!--" target="_blank" rel="nofollow">更多</a></div>-->
                          <div id="site_plandate_4556" class="clearfix" style="display:none">
                            <div id="plan_date_4556" class="m-180"></div>
                          </div>
                          <div id="site_recall_4556" class="fl_calendar" style="display: none;">
                             <div id="recall_4556" class="m-180"></div>
                          </div>
                                          <div class="ljyh"><span class="icon_ilyh">早多优惠</span></div>              <div class="attri_price"><p class="price"><span><em>{{$v->s_sprice}}</em>元起</span></p></div>
              <div class="pro_icon">
                <div class="comm_money"><span class="dp_fx">点评返现</span><span class="fx_num">元</span></div>
              </div>
                <div class="addto_comparison">
                <a class="comparison_bg select">
                <label name="label_general_route_compare">
                <input class="cc" type="checkbox" name="general_route_compare" value="{{$v->s_id}}" onclick="label_click(this)">加入对比
                </label>
                </a>
                </div>
             </li>
             @endforeach
             </ul>
              
          </div>
          
          @endforeach
          <div id="divs"><div id="overlay"></div><button id="bu">对比</button></div>
            
</div></div></div></div></div></div></body></html>
<script src='../js/jquery.8.js'></script>
<style>
  #divs{
    position: fixed;
    top:85%;
    left:50%;
    background:white;
    display:none;
}
</style>
<script>
  function label_click(ts)
  {
      $("#divs").show();
      var check=document.getElementsByName('general_route_compare');
      var id='';
      var num=0;
      for(var i=0;i<check.length;i++)
      {
        if(check[i].checked==true)
        {
            id+=','+check[i].value;
            num++;
        }
      }
      if(num>=3)
      {
        alert('每次只能选两个对比噢!');
        return false;
      }
      
    var ids=id.substr(1);
    $.get('contrast',{'sid':ids},function(msg){
     
        var str='';
        for (var i = 0;i<msg.length; i++) {             
          str+='<li>';
          str+='<div class="prod_line" id="item-empty1">';
          str+='<a href="http://www.byts.com.cn/line/==-/952.htm" target="_blank" title="最美三亚">'+msg[i]['s_name']+'</a><span class="c_price">¥'+msg[i]['s_sprice']+'</span>起</div><a class="delete hover" rel="nofollow" href="javascript:del_comp_item(1,952)" id="del_compare1">x</a>';
          str+='</li>';
        };
        $("#overlay").html(str)
    },'json')
  }
  $("#bu").click(function(){
     // var sid=$("#hid").val();
     alert(ids)
  })
</script>