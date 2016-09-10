<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" >
@include('includes.top')
<script type="text/javascript">
	function hover(n){
		for(var i=1;i<100;i++){
			$("#show"+n).css("display","none");
		}
	
		$("#show"+n).css("display","block");
	
	}
	function mousout(n){
		$("#show"+n).css("display","none");
	}

</script>
       
      <div class="dhnew">
      	<div class="dha">
      	<!--左边-->
        	<ul>
      			@foreach($arr1 as $v)
            	<li class="a" onmouseover="hover({{ $v->r_id }})" onmouseout="mousout({{ $v->r_id }})"><div>
	            	<strong id="">{{$v->r_region }}</strong>
	                <div class="noe"> 
						@foreach($v->child as $v=>$z)
						<a href="http://www.byts.com.cn/line/haidao001" id="{{ $z->r_id }}">{{ $z->r_region }}</a>
						@endforeach
					</div>
					</div>
				</li>   
          	  @endforeach
            </ul>
            <!--左边-->
         	<div class="clear"></div>
        </div>
      </div>
      
      <!--右边-->
      	@foreach($arr1 as $q)
      <div class="nowhover" id="show{{ $q->r_id }}" onmouseout="mousout({{ $q->r_id }})" onmouseover="hover({{ $q->r_id }})" style="display: none;">
      	<ul>
		<li>
			@foreach($q->child as $w)
			 <div class="a"> 
			 <a href="http://www.byts.com.cn/line/haidao001">{{$w->r_region }}</a>
			 </div>
			 <div class="b">
			  @foreach($w->child as $t)
			  <a href="http://www.byts.com.cn/line/bincheng002">{{$t->r_region }} &nbsp;|</a>
			  @endforeach
			 </div>
			  @endforeach
	    </li>
		</ul>
      </div>
	    @endforeach
        <!--右边-->

        
  </div>
</div>



<div id="full-screen-slider" style="">
	<ul id="slides">
		<li style="z-index: 900; display: none; background: url(../home/images/1463390341.jpg) 50% 0% no-repeat;"><a href="http://www.byts.com.cn/line/ouzhou001/" target="_blank"></a></li>
		<li style="z-index: 900; display: none; background: url(../home/images/1463134575.jpg) 50% 0% no-repeat;"><a href="http://www.byts.com.cn/line/beijiaerhu002/" target="_blank"></a></li>
        <li style="z-index: 800; display: block; background: url(http://www.byts.com.cn/uploads/userup/0/1463390318.jpg) 50% 0% no-repeat;"><a href="http://www.byts.com.cn/line/ouzhou001/" target="_blank"></a></li>
        <li style="z-index: 900; display: none; background: url(http://www.byts.com.cn/uploads/userup/0/1463134488.jpg) 50% 0% no-repeat;"><a href="http://www.byts.com.cn/line/xizang001/" target="_blank"></a></li>
	</ul><ul id="pagination" style="margin-left: 330px;"><li class=""><a>1</a></li><li class=""><a>2</a></li><li class="current"><a>3</a></li><li class=""><a>4</a></li></ul>
</div>
</div>
<!--第一部分END-->

<!--第二部分开始-->
<div class="cont clearfix">

<!--出境旅游开始-->
<div class="newChannel clearfix">
  <h2 class="travel-Hd">
     <span class="travel-Hd-type travel-zb-type">出境旅游2</span><span class="travel-Hd-msg"></span>
        <p class="newChannel-more"><a href="http://www.byts.com.cn/out/" target="_blank" title="更多出境旅游">更多出境旅游线路&gt;&gt;</a></p>
  </h2>
  <div class="newChannel-Bd cfix">
    <div class="newHotel-left">
     <div class="dest_classif_name">
        <ul class="dcn_name clearfix">
        
           <li><a href="http://www.byts.com.cn/line/maerdaifu001" target="_blank" rel="nofollow">马尔代夫</a></li>
         
           <li><a href="http://www.byts.com.cn/line/gangaotai001" target="_blank" rel="nofollow">港澳台</a></li>
                                                               
        </ul>
             </div>
              <div class="leftBanner">
              	<a target="_blank" href="http://www.byts.com.cn/line/taiguo002/">
              	<img alt="畅游泰国" src="../home/images/1399530929.jpg"></a>
              </div>
         	<div class="leftBanner">
         		<a target="_blank" href="http://www.byts.com.cn/line/rihanchao001/">
         		<img alt="畅游韩国" src="../home/images/1399530990.jpg"></a>
         	</div>
          
      </div>
                    
                    <div class="newHotel-right J-newChannel-right">
                        <ul class="newChannel-tab J-newChannel-tab">
                        
                         
                           <li class="cur">海岛12</li>
                           
                      
                           <li>东南亚</li>
                           
                      
                           <li>澳洲</li>
                           
                      
                           <li>日韩朝</li>
                           
                      
                           <li>欧洲</li>
                           
                       
                           
                        </ul>
                        
                        
                         <div class="newChannel-list J-newChannel-list visible">
                      <ul class="clearfix">
                              <li class="lineitem ">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/tours/4376.htm" target="_blank" title="普吉岛5晚7天**当地5星酒店5晚**">
                                            <img width="118px" height="67px" data-original="../home/images/1410319228_2586.jpg" src="../home/images/1410319228_2586.jpg" alt="" style="display: inline;">
                                        </a>
                                        <div class="prd-num">产品编号：4376</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/tours/4376.htm" target="_blank" title="普吉岛5晚7天**当地5星酒店5晚**">普吉岛5晚7天**当地5星酒店5晚**</a><img src="image/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 东航大型客机 ，入住5晚普吉岛 当地 精选 5星 酒店 ◆ 尽享美食 金鲨酒楼泰式...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期二,星期四,星期日</span></span>
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥3680</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
                         <li class="lists"><span><em>¥</em>起</span>
                           <a href="http://www.byts.com.cn/tours/5465.htm" class="title" target="_blank">5月12日新航【沙巴半自助】</a>...
                        </li>
<li class="lists"><span><em>¥4480</em>起</span>
                           <a href="http://www.byts.com.cn/line/bincheng002/5369.htm" class="title" target="_blank">越南芽庄自由行4晚5天**赠送市区游の出海一日游**</a> 越捷航空，北京直飞芽庄4.5小时（不经停不转机），入住四~五星酒店（米奢利...
                        </li>
<li class="lists"><span><em>¥6890</em>起</span>
                           <a href="http://www.byts.com.cn/tours/5379.htm" class="title" target="_blank">巴厘岛、蓝梦岛4晚6天**2晚独栋泳池别墅の2晚国际5星海滩酒店**</a> 搭乘印尼鹰航A330宽体客机往返直飞，蜜月首选《独栋泳池别墅+海滩酒店》，...
                        </li>
<li class="lists"><span><em>¥6990</em>起</span>
                           <a href="http://www.byts.com.cn/tours/5288.htm" class="title" target="_blank">普吉岛至美普吉*传世凯悦KA5晚6天</a>全程国际五星 绝无自费 高端蜜月行程 国航直飞 自由活动一天 ★保证入住2晚普...
                        </li>
<li class="lists"><span><em>¥4880</em>起</span>
                           <a href="http://www.byts.com.cn/line/bincheng002/5348.htm" class="title" target="_blank">越南芽庄自由行5晚6天**赠送市区游の出海一日游**</a> 越捷航空，北京直飞芽庄4.5小时（不经停不转机），入住四~五星酒店（米奢利...
                        </li>
<li class="lists"><span><em>¥3900</em>起</span>
                           <a href="http://www.byts.com.cn/line/changtandao002/5185.htm" class="title" target="_blank">长滩岛自由行4晚6日&lt;含领队&gt;风帆出海看日落</a> 搭乘宿雾太平洋航空公司航班，马尼拉转机，赠全亚洲最美夕阳**风帆出海看日...
                        </li>
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/haidao001" target="_blank" title="更多出境游">更多海岛线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
                      <ul class="clearfix">
                              <li class="lineitem ">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/tours/1687.htm" target="_blank" title="曼谷、芭提雅(金沙岛.珊瑚岛)5晚6天~6晚7天">
                                            <img width="118px" height="67px" data-original="../home/images/1418016561_5569.jpg" src="image/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1687</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/tours/1687.htm" target="_blank" title="曼谷、芭提雅(金沙岛.珊瑚岛)5晚6天~6晚7天">曼谷、芭提雅(金沙岛.珊瑚岛)5晚6天~6晚7天</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 搭乘春秋航空天津直飞曼谷，入住全程泰国当地5星酒店，包含北京、唐山、廊...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期二,星期四,星期五</span></span>
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥999</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                                
                         <li class="lists"><span><em>¥</em>起</span>
                           <a href="http://www.byts.com.cn/line/xinma002/5467.htm" class="title" target="_blank">兰卡威 槟城5晚7天半自助游</a>...
                        </li>
<li class="lists"><span><em>¥3499起</em>起</span>
                           <a href="http://www.byts.com.cn/line/xinma002/5464.htm" class="title" target="_blank">（含马签）吉隆坡 波德申 云顶5晚7天</a>...
                        </li>
<li class="lists"><span><em>¥</em>起</span>
                           <a href="http://www.byts.com.cn/line/xinma002/5463.htm" class="title" target="_blank">吉隆坡 波德申 云顶5晚7天</a>...
                        </li>
<li class="lists"><span><em>¥</em>起</span>
                           <a href="http://www.byts.com.cn/line/xinma002/5462.htm" class="title" target="_blank">吉隆坡 波德申 马六甲 云顶6天/7天</a>...
                        </li>
<li class="lists"><span><em>¥5090</em>起</span>
                           <a href="http://www.byts.com.cn/line/jianpuzai002/5038.htm" class="title" target="_blank">柬埔寨吴哥、金边5晚6天**不走回头路**1晚国际5星</a> 甄选港龙国泰豪华客机，不走回头路（金边进吴哥返回），入住4星+升级1晚国...
                        </li>
<li class="lists"><span><em>¥2399</em>起</span>
                           <a href="http://www.byts.com.cn/line/xinma002/5023.htm" class="title" target="_blank">新加坡、马来西亚、波德申4晚7日**云顶1晚の国际5星酒店1晚**</a> 甄选香港国泰航空（全球五星航空公司之一），入住新加坡3星1晚、吉隆坡国际...
                        </li>

                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/dongnanya001" target="_blank" title="更多出境游">更多东南亚线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
                      <ul class="clearfix">
                              <li class="lineitem ">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/kaiensi002/5003.htm" target="_blank" title="黄金海岸、凯恩斯9日**含2天自由行**【纯玩】">
                                            <img width="118px" height="67px" data-original="../home/images/1457001993.jpg" src="image/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5003</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/kaiensi002/5003.htm" target="_blank" title="黄金海岸、凯恩斯9日**含2天自由行**【纯玩】">黄金海岸、凯恩斯9日**含2天自由行**【纯玩】</a>
                                        </dt>
							            <dd class="desc"> 搭乘香港航空大型客机，纯玩无购物，16人小团，入住全程市区海边4星级酒店...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期六</span></span>
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥9999</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                                
                         <li class="lists"><span><em>¥9999</em>起</span>
                           <a href="http://www.byts.com.cn/line/kaiensi002/5003.htm" class="title" target="_blank">黄金海岸、凯恩斯9日**含2天自由行**【纯玩】</a> 搭乘香港航空大型客机，纯玩无购物，16人小团，入住全程市区海边4星级酒店...
                        </li>
<li class="lists"><span><em>¥22800</em>起</span>
                           <a href="http://www.byts.com.cn/tours/4660.htm" class="title" target="_blank">新西兰南北岛自驾游10天</a> 专业团队 携手穿越国际自驾游俱乐部联合发团，踏实放心。 尽享美景 纵贯新...
                        </li>
<li class="lists"><span><em>¥28800</em>起</span>
                           <a href="http://www.byts.com.cn/tours/4586.htm" class="title" target="_blank">澳一地9日**大堡礁心脏汉密尔顿岛の电影世界の天堂农庄のSHOWBOAT晚餐游船**</a> ★隆重推出前往具有“心形大堡礁”美誉的【汉密尔顿岛】! ★赠送乘坐Cruis...
                        </li>
<li class="lists"><span><em>¥23500</em>起</span>
                           <a href="http://www.byts.com.cn/line/aoxinkai002/4537.htm" class="title" target="_blank"><font color="#CC0000">春节抢先团：澳新凯墨12日〉纯玩〉全程4星〉独立成团</font></a> 【独一无二】乘坐直升飞机：国内首家推出直升飞机观光，您可在蓝天上俯瞰...
                        </li>
<li class="lists"><span><em>¥20400</em>起</span>
                           <a href="http://www.byts.com.cn/tours/4511.htm" class="title" target="_blank">新西兰南北岛8日游（跟随《爸爸去哪儿》的脚步）**全程当地4星</a>★艾格顿农场-体验新西兰地道的牧场生活。 ★库瑞公园-亲身领略奇特的后火山...
                        </li>
<li class="lists"><span><em>¥21500</em>起</span>
                           <a href="http://www.byts.com.cn/line/aoxinkai002/4500.htm" class="title" target="_blank">澳新凯12天全景游（新西兰南北岛）**4星酒店</a> 上海往返，各地联程，全程4星酒店。 特别安排：豪华游船午餐，体验上层社会...
                        </li>

                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/aozhou001" target="_blank" title="更多出境游">更多澳洲线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
                      <ul class="clearfix">
                              <li class="lineitem ">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/shouer002/2645.htm" target="_blank" title="首尔一地5日">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/jz/1426768405_260.png" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2645</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/shouer002/2645.htm" target="_blank" title="首尔一地5日">首尔一地5日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 北京飞韩国包机，周二四六飞大邱、周三五日飞清州，入住韩式四花级酒店 赠...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期二,星期三</span></span>
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1680</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                                
                         <li class="lists"><span><em>¥3680</em>起</span>
                           <a href="http://www.byts.com.cn/line/chaoxian002/5289.htm" class="title" target="_blank"> 北京直飞平壤、开城板门店、三八线、妙香山双飞4日游</a> 百闻不如一见，这就出发，让我们走近这个神秘的国度，走进这三千里锦绣江...
                        </li>
<li class="lists"><span><em>¥2680</em>起</span>
                           <a href="http://www.byts.com.cn/line/chongsheng002/5286.htm" class="title" target="_blank">冲绳一地自由行4~5日**机票の签证**</a> 搭乘中国国际航空客机，天津起止，直飞冲绳，赠送单次日本签证（+300元/人多...
                        </li>
<li class="lists"><span><em>¥5300</em>起</span>
                           <a href="http://www.byts.com.cn/line/chaoxian002/5281.htm" class="title" target="_blank">北京直飞平壤、开城板门店、元山、金刚山双飞6日游</a> 朝鲜名金刚山，号称“山中之最”雄峻奇伟，飞瀑万千，是三千里锦绣河山的...
                        </li>
<li class="lists"><span><em>¥4480</em>起</span>
                           <a href="http://www.byts.com.cn/line/chaoxian002/5280.htm" class="title" target="_blank">北京直飞平壤、开城板门店、三八线、妙香山、南浦双飞5日游</a> 百闻不如一见，这就出发，让我们走近这个神秘的国度，走进这三千里锦绣江...
                        </li>
<li class="lists"><span><em>¥4060</em>起</span>
                           <a href="http://www.byts.com.cn/line/chaoxian002/5279.htm" class="title" target="_blank">北京直飞平壤、开城板门店、三八线、妙香山双飞4日游</a> 百闻不如一见，这就出发，让我们走近这个神秘的国度，走进这三千里锦绣江...
                        </li>
<li class="lists"><span><em>¥11980</em>起</span>
                           <a href="http://www.byts.com.cn/line/dongjingbeihaidao002/5231.htm" class="title" target="_blank">绝美花海.温泉.函馆百万夜景.本州全景8天精华游</a> 神の画作风靡全球 爱上梦幻七彩花海,畅游富良野花田,给你尽情拍照 梦幻组合...
                        </li>

                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/rihanchao001" target="_blank" title="更多出境游">更多日韩朝线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
                      <ul class="clearfix">
                              <li class="lineitem ">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/sanguo002/5047.htm" target="_blank" title="法意瑞11天">
                                            <img width="118px" height="67px" data-original="../home/images/1452064885.jpg" src="image/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5047</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/sanguo002/5047.htm" target="_blank" title="法意瑞11天">法意瑞11天</a>
                                        </dt>
							            <dd class="desc"> 搭乘波兰航空公司国际航班，入 住3-4星级酒店， 欧洲酒店早餐，午晚餐为中式...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期五</span></span>
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥6999</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                                
                         <li class="lists"><span><em>¥13600</em>起</span>
                           <a href="http://www.byts.com.cn/line/beijiaerhu002//5563.htm" class="title" target="_blank"><font color="#006600">HU贝加尔湖连线11天 圣莫含谢镇线路</font></a> 【国际交通】 国际航班，快速便捷。不走回头路。 【签证手续】 俄罗斯旅游...
                        </li>
<li class="lists"><span><em>¥4150</em>起</span>
                           <a href="http://www.byts.com.cn/tours/5543.htm" class="title" target="_blank"><font color="#0000FF">自由行：上海直飞俄罗斯-海参崴、水晶虎宫殿、自由行双飞4日</font></a> ★走进俄罗斯最大赌场＂水晶虎宫殿＂，在这里展现身手 ★游览俄中朝三国交...
                        </li>
<li class="lists"><span><em>¥4580</em>起</span>
                           <a href="http://www.byts.com.cn/tours/5541.htm" class="title" target="_blank"><font color="#0000FF">上海直飞俄罗斯-海参崴、学生乐园、亲子双飞4日</font></a> ★轻松出境：只需护照，提前5天报名，说走就走 ★特色体验：北郊俱乐部内与...
                        </li>
<li class="lists"><span><em>¥4380</em>起</span>
                           <a href="http://www.byts.com.cn/tours/5540.htm" class="title" target="_blank"><font color="#0000FF">品质：上海直飞俄罗斯—海参崴、水晶虎宫殿娱乐城、双飞4日</font></a> ★便捷之旅：上海直飞俄罗斯海参崴，全程领队陪伴，一站抵达 ★轻松出境：...
                        </li>
<li class="lists"><span><em>¥3680</em>起</span>
                           <a href="http://www.byts.com.cn/tours/5539.htm" class="title" target="_blank"><font color="#0000FF">常规：上海、俄罗斯—海参崴、水晶虎宫殿娱乐城、双飞4日</font></a> ★视觉享受：感受欧洲风情，轻松出境，体验美女如云的国度 ★便捷之旅：上...
                        </li>
<li class="lists"><span><em>¥4800</em>起</span>
                           <a href="http://www.byts.com.cn/tours/5538.htm" class="title" target="_blank"><font color="#0000FF">【住水晶虎宫殿】北京直飞俄罗斯—海参崴、东方夜巴黎、水晶虎宫殿自由行双</font></a> ★走进俄罗斯最大赌场＂水晶虎宫殿＂，在这里展现身手 ★游览俄中朝三国交...
                        </li>

                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/ouzhou001" target="_blank" title="更多出境游">更多欧洲线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
                      <ul class="clearfix">
                              <li class="lineitem ">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/sililanka002/4433.htm" target="_blank" title="斯里兰卡自由行8日-机票の1晚国际5星希尔顿酒店">
                                            <img width="118px" height="67px" data-original="../home/images/1412743364_7098.jpg" src="../home/images/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4433</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/sililanka002/4433.htm" target="_blank" title="斯里兰卡自由行8日-机票の1晚国际5星希尔顿酒店">斯里兰卡自由行8日-机票の1晚国际5星希尔顿酒店</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tejia.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 自由行产品=北京直飞往返机票+首晚国际五星希尔顿酒店住宿+英文司机接机服...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期三,星期六</span></span>
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥4399</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                                
                         <li class="lists"><span><em>¥6480</em>起</span>
                           <a href="http://www.byts.com.cn/line/sililanka002/5326.htm" class="title" target="_blank">斯里兰卡4晚6天**4晚滨海酒店海景房**</a> 入住全程海景房(2晚尼甘布度假酒店、2晚南部海滨度假酒店)，中国国际航空公...
                        </li>
<li class="lists"><span><em>¥10300</em>起</span>
                           <a href="http://www.byts.com.cn/tours/4751.htm" class="title" target="_blank">印度金三角、 瓦拉纳西深度9日</a> 文化遗产 参观联合国世界文化遗产泰姬陵、阿格拉红堡、克久拉霍的“东西庙...
                        </li>
<li class="lists"><span><em>¥8800</em>起</span>
                           <a href="http://www.byts.com.cn/line/niboer002/4750.htm" class="title" target="_blank">尼泊尔9日</a> 艺术欣赏 艺术之城--巴克坦布尔 寻访古迹 中世纪的古都--加德满都 放眼眺望...
                        </li>
<li class="lists"><span><em>¥11200</em>起</span>
                           <a href="http://www.byts.com.cn/tours/4756.htm" class="title" target="_blank">印度、尼泊尔文明双国9日</a> 文化寻踪 参观联合国世界文化遗产泰姬陵、阿格拉红堡；联合国定名的亚洲十...
                        </li>
<li class="lists"><span><em>¥4399</em>起</span>
                           <a href="http://www.byts.com.cn/line/sililanka002/4434.htm" class="title" target="_blank">斯里兰卡自由行7日**机票の1晚国际5星希尔顿酒店**</a> 自由行产品=北京直飞往返机票+首晚国际五星希尔顿酒店住宿+英文司机接机服...
                        </li>
<li class="lists"><span><em>¥17299</em>起</span>
                           <a href="http://www.byts.com.cn/line/niboer002/4144.htm" class="title" target="_blank">不丹、尼泊尔9日</a>亚洲最幸福的国家——不丹、尼泊尔首都-加德满都旅游精华尽在其中； 行程包...
                        </li>

                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/nanya001" target="_blank" title="更多出境游">更多南亚线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
                      <ul class="clearfix">
                              <li class="lineitem ">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/meiguoxihaian002/4126.htm" target="_blank" title="美国洛杉矶、拉斯维加斯、加州小镇7晚9日">
                                            <img width="118px" height="67px" data-original="../home/images/1454657438.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4126</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/meiguoxihaian002/4126.htm" target="_blank" title="美国洛杉矶、拉斯维加斯、加州小镇7晚9日">美国洛杉矶、拉斯维加斯、加州小镇7晚9日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 搭乘海南航空公司航班，北京直飞圣何塞（可配各地联运），免费托运两件行...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥6699</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                                
                         <li class="lists"><span><em>¥13599</em>起</span>
                           <a href="http://www.byts.com.cn/line/meiguoxihaian002/5625.htm" class="title" target="_blank">日丽风轻：美国西海岸 夏威夷12天</a> ★ 国航直飞 ，中文航空服务，更安全，让您和您的家人更舒适，免去转机的繁...
                        </li>
<li class="lists"><span><em>¥29099</em>起</span>
                           <a href="http://www.byts.com.cn/line/huangsigongyuan002/5593.htm" class="title" target="_blank">美国本土大全五大名城、黄石、五大常春藤名校 、环球影城、迪斯尼14日游</a>★ 国航直飞，中文航空服务，更安全，让您和您的孩子更舒适，免去转机的繁...
                        </li>
<li class="lists"><span><em>¥18999</em>起</span>
                           <a href="http://www.byts.com.cn/line/meiguoxihaian002/5592.htm" class="title" target="_blank">随心飞扬：美西暑期欢乐家庭10日游</a> ★ 国航直飞 ，中文航空服务，更安全，让您和您的孩子更舒适，免去转机的繁...
                        </li>
<li class="lists"><span><em>¥26399</em>起</span>
                           <a href="http://www.byts.com.cn/line/huangsigongyuan002/%E7%BE%8E%E5%9B%BD%E6%9C%AC%E5%9C%9F%E5%85%A8%E4%BA%94%E5%A4%A7%E5%90%8D%E5%9F%8E%E4%BA%94%E5%A4%A7%E5%B8%B8%E6%98%A5%E8%97%A4%E5%90%8D%E6%A0%A1%20%E9%BB%84%E7%9F%B314%E6%97%A5%E6%B8%B8.htm" class="title" target="_blank">美国本土全五大名城五大常春藤名校 黄石14日游</a> ★ 国航直飞 ，中文航空服务，更安全，让您和您的孩子更舒适，免去转机的繁...
                        </li>
<li class="lists"><span><em>¥11899</em>起</span>
                           <a href="http://www.byts.com.cn/line/meiguoxihaian002/5590.htm" class="title" target="_blank">“随心飞扬”——美西三城8天</a>★ 国航直飞，中文航空服务，更安全，让您和您的孩子更舒适，免去转机的繁...
                        </li>
<li class="lists"><span><em>¥26199</em>起</span>
                           <a href="http://www.byts.com.cn/line/meiguojianada002/5589.htm" class="title" target="_blank">“加”深印象——加东深度 美东西 大瀑布 夏威夷16天</a> ★ 国航直飞 ，中文航空服务，更安全，让您和您的家人更舒适，免去转机的繁...
                        </li>

                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/meizhou001" target="_blank" title="更多出境游">更多美洲线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">

                      <ul class="clearfix">
                              <li class="lineitem ">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/tours/1875.htm" target="_blank" title="南极 巴西 阿根廷22日">
                                            <img width="118px" height="67px" data-original="../home/images/1875.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1875</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/tours/1875.htm" target="_blank" title="南极 巴西 阿根廷22日">南极 巴西 阿根廷22日</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> ●特别赠送——巴西特色烤肉餐； ●特别赠送——阿根廷国粹探戈舞表演及阿...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥126800</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                                
                         <li class="lists"><span><em>¥</em>起</span>
                           <a href="http://www.byts.com.cn/line/nanjizhou002/1038.htm" class="title" target="_blank">白色南极一地16日</a>南极半岛是最容易抵达而且也是南极洲最让人心醉神迷的一片圣地。崎岖不平的...
                        </li>

                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/nanbeiji001" target="_blank" title="更多出境游">更多南北极线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
                     
                      <ul class="clearfix">
                              <li class="lineitem ">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/aijiyidi002/3904.htm" target="_blank" title="埃及8日**红海3天自由行**">
                                            <img width="118px" height="67px" data-original="../home/uploads/1450259910.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：3904</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/aijiyidi002/3904.htm" target="_blank" title="埃及8日**红海3天自由行**">埃及8日**红海3天自由行**</a>
                                        </dt>
							            <dd class="desc"> 搭乘埃及休闲航空， 北京直飞红海， 入住全程4-5星酒店， 红海酒店升级自助...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期四</span></span>
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥4999</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                                
                         <li class="lists"><span><em>¥14899</em>起</span>
                           <a href="http://www.byts.com.cn/line/aisaierbiya002/5372.htm" class="title" target="_blank"><font color="#FF0000">南非克鲁格新春10日&lt;国航直飞，升级直升飞机，2晚克鲁格园区酒店，赠送桌山</font></a>赠送WIFI漫游宝（2-4人/台） 全世界仅有的360度旋转缆车登顶桌山 直升机鸟瞰开...
                        </li>
<li class="lists"><span><em>¥7599</em>起</span>
                           <a href="http://www.byts.com.cn/line/feizhouzhongdong001/line/dibaiyidi002/5358.htm" class="title" target="_blank">黄金-迪拜 阿布扎比6天4晚</a>阿联酋航空公司（EK）-北京直飞迪拜,去程乘坐空中巨无霸机型—空客A380 全程...
                        </li>
<li class="lists"><span><em>¥5999</em>起</span>
                           <a href="http://www.byts.com.cn/line/feizhouzhongdong001/line/dibaiyidi002/5347.htm" class="title" target="_blank">迪拜、阿布扎比3晚6日**含1天自由活动**</a> 阿提哈德航空公司宽体客机（北京直飞阿布扎比）早去晚回，入住3晚四星酒店...
                        </li>
<li class="lists"><span><em>¥10999</em>起</span>
                           <a href="http://www.byts.com.cn/line/aisaierbiya002/5340.htm" class="title" target="_blank">南非10日**DIY露天BBQ烧烤**</a> 国航直飞南非（全国联运）不经停、不转机， 入住当地4星酒店、1晚法国小镇...
                        </li>
<li class="lists"><span><em>¥10999</em>起</span>
                           <a href="http://www.byts.com.cn/line/tuerqiyidi002/5328.htm" class="title" target="_blank"><font color="#FF0000">黄金-星月神话土耳其全线10天（全程车载WIFI 2晚特色洞穴酒店  1晚温泉酒店 1晚</font></a>选用星空联盟成员—土耳其航空公司（TK），北京直飞伊斯坦布尔。 全景土耳其...
                        </li>
<li class="lists"><span><em>¥9699</em>起</span>
                           <a href="http://www.byts.com.cn/line/feizhouzhongdong001/line/dibaiyidi002/5312.htm" class="title" target="_blank"><font color="#FF0000">铂金-迪拜 阿布扎比海陆空6天（赠送直飞机 迪拜游艇出海 迪拜沙漠冲沙）</font></a>阿联酋航空公司（EK）-乘坐空中巨无霸机型—空客A380 全程5星级酒店 提供阿联...
                        </li>

                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/feizhouzhongdong001" target="_blank" title="更多出境游">更多非洲中东线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
                      <ul class="clearfix">
                              <li class="lineitem ">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/tours/2655.htm" target="_blank" title="美佳机票の酒店计划表《7月》">
                                            <img width="118px" height="67px" data-original="../home/uploads/litimg/2655.jpg" src="../home/images/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2655</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/tours/2655.htm" target="_blank" title="美佳机票の酒店计划表《7月》">美佳机票の酒店计划表《7月》</a><img src="image/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 美佳航空（北京直飞） 周三四六日发4晚6天 周一发5晚7天（以下4晚价格基础上...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥9900</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                                
                         <li class="lists"><span><em>¥10500</em>起</span>
                           <a href="http://www.byts.com.cn/tours/2620.htm" class="title" target="_blank">海航机票の酒店计划表</a> 海南航空（直飞）经济舱 北京--马累HU7951 06:50--12:30 马累--北京HU7952 13:50--01:0...
                        </li>
<li class="lists"><span><em>¥9800</em>起</span>
                           <a href="http://www.byts.com.cn/tours/2618.htm" class="title" target="_blank">斯航机票の酒店计划表</a> 斯里兰卡航空（科伦坡转机）经济舱 北京--科伦坡UL849 00:50-05:50 科伦坡--马累...
                        </li>
<li class="lists"><span><em>¥8000</em>起</span>
                           <a href="http://www.byts.com.cn/line/4xing002/2607.htm" class="title" target="_blank">马尔代夫--波莉珊瑚岛 Bolifushi island resort【 四星级岛屿 】</a> 酒店星级： 交通工具：快艇 岛屿位置：拉薇雅尼环礁 浮潜等级：B级 ...
                        </li>
<li class="lists"><span><em>¥8000</em>起</span>
                           <a href="http://www.byts.com.cn/line/4xing002/2606.htm" class="title" target="_blank">马尔代夫--艾布度岛 Embudu Village【 四星级岛屿 】</a> 酒店星级： 交通工具：快艇 岛屿位置：马累南环礁 浮潜等级：A级 ...
                        </li>
<li class="lists"><span><em>¥8000</em>起</span>
                           <a href="http://www.byts.com.cn/line/4xing002/2605.htm" class="title" target="_blank">马尔代夫--哈林吉利岛海尔格蓝湾半岛 Helengeli Island Resort【 四星级岛屿 】</a> 酒店星级： 交通工具：水上飞机 岛屿位置：马累北环礁 浮潜等级：A级 ...
                        </li>
<li class="lists"><span><em>¥6000</em>起</span>
                           <a href="http://www.byts.com.cn/line/4xing002/2603.htm" class="title" target="_blank">马尔代夫--菲哈后岛 Fihalhohi Island Resort【 四星级岛屿 】</a> 酒店星级： 交通工具：快艇 岛屿位置：马累南环礁 浮潜等级：B级 ...
                        </li>

                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/maerdaifu001" target="_blank" title="更多出境游">更多马尔代夫线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">

                      <ul class="clearfix">
                              <li class="lineitem ">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/dongbei001/5487.htm" target="_blank" title="&lt;font color=&#39;#0000FF&#39;&gt;【品质纯玩】哈尔滨太阳岛、俄罗斯风情小镇、&lt;/font&gt;">
                                            <img width="118px" height="67px" data-original="../home/images/1463391701.jpg" src="../home/images/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5487</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/dongbei001/5487.htm" target="_blank" title="&lt;font color=&#39;#0000FF&#39;&gt;【品质纯玩】哈尔滨太阳岛、俄罗斯风情小镇、&lt;/font&gt;"><font color="#0000FF">【品质纯玩】哈尔滨太阳岛、俄罗斯风情小镇、</font></a><img src="image/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 1、 体验学习：太阳岛公园亲子互动游戏，提高孩子户外活动乐趣增进亲子感情...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2380</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                                
                         <li class="lists"><span><em>¥1330</em>起</span>
                           <a href="http://www.byts.com.cn/line/qinzhizhuanxiang002/5345.htm" class="title" target="_blank">【纯香港】港澳四晚五天五星高端团</a>...
                        </li>
<li class="lists"><span><em>¥2590元</em>起</span>
                           <a href="http://www.byts.com.cn/line/gangaopinzhituan002/5291.htm" class="title" target="_blank">逸、香港E1-香港直飞-香港澳门四晚五日四星尊贵品质团（海洋公园）</a>舒适航班：搭乘国际航班直飞香港，感受国际航班的温馨服务。 舒适体验：体...
                        </li>
<li class="lists"><span><em>¥3290元</em>起</span>
                           <a href="http://www.byts.com.cn/line/gangaopinzhituan002/5349.htm" class="title" target="_blank">香港、澳门双飞5日**五星如心海景酒店**</a> 甄选中国国际航空公司航班直飞香港，入住香港3晚五星如心海景酒店+澳门四星...
                        </li>
<li class="lists"><span><em>¥3680</em>起</span>
                           <a href="http://www.byts.com.cn/line/gangaochunwantuan002/4626.htm" class="title" target="_blank">香港、澳门、香港1日自由行双飞5日**4星纯玩**</a> 入住香港3晚+澳门1晚4星酒店，保证海龙明珠游船并用船上特色晚餐（金紫荆广...
                        </li>
<li class="lists"><span><em>¥2680</em>起</span>
                           <a href="http://www.byts.com.cn/line/xiangganyidi002/4625.htm" class="title" target="_blank">香港一地双飞4天**2天游览の2天自由活动**1晚当地5星酒店</a> 入住香港2晚4星+升级1晚当地5星酒店， 赠送维港夜游、香港本地电话卡通话时...
                        </li>
<li class="lists"><span><em>¥2880</em>起</span>
                           <a href="http://www.byts.com.cn/line/xiangganyidi002/4624.htm" class="title" target="_blank">香港一地双飞4天**2天游览の2天自由活动**</a> 入住香港3晚4星酒店，保证海龙明珠游船并用船上特色晚餐（金紫荆广场上船）...
                        </li>

                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/gangaotai001" target="_blank" title="更多出境游">更多港澳台线路&gt;&gt;</a></p>
                        </div>   
           
                    </div>
                </div>   
                
         </div>
<!--出境旅游结束-->

<!--国内旅游开始-->
<div class="newChannel clearfix">
  <h2 class="travel-Hd">
     <span class="travel-Hd-type travel-gn-type">国内旅游</span><span class="travel-Hd-msg">机+酒、酒+门票、酒+当地跟团游，个性、时尚、一应俱全！</span>
        <p class="newChannel-more"><a href="http://www.byts.com.cn/china" target="_blank" title="更多国内旅游">更多国内旅游线路&gt;&gt;</a></p>
  </h2>
  <div class="newChannel-Bd cfix">
    <div class="newChannel-left">
                        
                        
                        
                        <dl>
                            <dt><a href="http://www.byts.com.cn/line/hainan001" target="_blank">海南</a></dt>
                            <dd class="cfix">
                           <a href="http://www.byts.com.cn/line/haikouwangfan002">海口往返</a><a href="http://www.byts.com.cn/line/sanyawanfang002">三亚往返</a><a href="http://www.byts.com.cn/line/sanyayidi002">三亚一地</a><a href="http://www.byts.com.cn/line/sanyaziyouren002">三亚自由人</a><a href="http://www.byts.com.cn/line/hainanxiyanghong002">夕阳红</a><a href="http://www.byts.com.cn/line/hainanmiyuetuan002">蜜月团</a><a href="http://www.byts.com.cn/line/tianjinwangfang002">天津往返</a><a href="http://www.byts.com.cn/line/xisaqundao002">西沙群岛</a>
                           </dd>
                        </dl>
                       
                        <dl>
                            <dt><a href="http://www.byts.com.cn/line/yunan001" target="_blank">云南</a></dt>
                            <dd class="cfix">
                           <a href="http://www.byts.com.cn/line/kundali002">昆大丽</a><a href="http://www.byts.com.cn/line/kudaliban002">昆大丽版</a><a href="http://www.byts.com.cn/line/kunban002">昆版</a><a href="http://www.byts.com.cn/line/zhifeilijiang002">直飞丽江</a><a href="http://www.byts.com.cn/line/ruilitengchong002">瑞丽腾冲</a><a href="http://www.byts.com.cn/line/xianggelila002">香格里拉</a><a href="http://www.byts.com.cn/line/yunnanquanxian002">昆大丽版香</a><a href="http://www.byts.com.cn/line/beijingchengtuan002">北京成团</a><a href="http://www.byts.com.cn/line/tesechangpin002">特色产品</a>
                           </dd>
                        </dl>
                       
                        <dl>
                            <dt><a href="http://www.byts.com.cn/line/fujian001" target="_blank">福建</a></dt>
                            <dd class="cfix">
                           <a href="http://www.byts.com.cn/line/wuyishan002">武厦</a><a href="http://www.byts.com.cn/line/wuxiatulou002">武厦土楼</a><a href="http://www.byts.com.cn/line/xiameng002">厦门一地</a><a href="http://www.byts.com.cn/line/fujianquanjing002">双卧系列</a><a href="http://www.byts.com.cn/line/dajinhu002">单飞系列</a><a href="http://www.byts.com.cn/line/fujianxiyanghong002">老年团</a><a href="http://www.byts.com.cn/line/fujianlianxian002">泰宁厦门</a>
                           </dd>
                        </dl>
                       
                        <dl>
                            <dt><a href="http://www.byts.com.cn/line/dongbei001" target="_blank">东北</a></dt>
                            <dd class="cfix">
                           <a href="http://www.byts.com.cn/line/haerbingxuexiang002">哈尔滨雪乡</a><a href="http://www.byts.com.cn/line/yabuli002">亚布力</a><a href="http://www.byts.com.cn/line/changbaishanjingbohu002">长白山+镜泊湖</a><a href="http://www.byts.com.cn/line/changbaishanxibeibo002">长白山西北坡</a><a href="http://www.byts.com.cn/line/heiliaolianxian002">黑吉辽连线</a><a href="http://www.byts.com.cn/line/dongbeineimeng002">东北+内蒙</a><a href="http://www.byts.com.cn/line/wudalianchizhalong002">五大连池</a><a href="http://www.byts.com.cn/line/mohebeijicun002">漠河北极村</a><a href="http://www.byts.com.cn/line/zhongerbianjing002">中俄边境</a><a href="http://www.byts.com.cn/line/chaoxianbianjing002">朝鲜边境</a><a href="http://www.byts.com.cn/line/changchunshenyang002">长春沈阳</a><a href="http://www.byts.com.cn/line/xingkaihu002">兴凯湖</a><a href="http://www.byts.com.cn/line/zhiqingniandai002">知青年代</a><a href="http://www.byts.com.cn/line/shuqizhuanglie002">暑期专列</a><a href="http://www.byts.com.cn/line/sixrenxiaobaotuan002">6人小包团</a><a href="http://www.byts.com.cn/line/changbaishanxuesong002">长白山雾凇</a><a href="http://www.byts.com.cn/line/heijilianxian002">黑吉连线</a><a href="http://www.byts.com.cn/line/lvyouchuangyue002">驴友穿越</a><a href="http://www.byts.com.cn/line/beijicun002">北极村</a>
                           </dd>
                        </dl>
                       
                        <dl>
                            <dt><a href="http://www.byts.com.cn/line/guangxi001" target="_blank">广西</a></dt>
                            <dd class="cfix">
                           <a href="http://www.byts.com.cn/line/guilinchunwantuan002">桂林纯玩团</a><a href="http://www.byts.com.cn/line/dalijiang002">大漓江</a><a href="http://www.byts.com.cn/line/guangxiquanjing002">广西全景</a><a href="http://www.byts.com.cn/line/guangxilianxian002">广西连线</a><a href="http://www.byts.com.cn/line/bama002">巴马</a><a href="http://www.byts.com.cn/line/xiyanghong002">夕阳红</a><a href="http://www.byts.com.cn/line/yuenanxialongwang">越南下龙湾</a><a href="http://www.byts.com.cn/line/detiantonglinbeihai002">德天通灵北海</a><a href="http://www.byts.com.cn/line/4-5xingchunwan002">4-5星纯玩</a><a href="http://www.byts.com.cn/line/beijingchengtuan0022">北京成团</a><a href="http://www.byts.com.cn/line/qinzhichunwantuan0022">亲子纯玩团</a>
                           </dd>
                        </dl>
                       
                        <dl>
                            <dt><a href="http://www.byts.com.cn/line/xizang001" target="_blank">西藏</a></dt>
                            <dd class="cfix">
                           <a href="http://www.byts.com.cn/line/qingzanglianxian002">青藏连线</a><a href="http://www.byts.com.cn/line/rikashi002">日喀则</a><a href="http://www.byts.com.cn/line/zangdonglinzhi002">藏东林芝</a><a href="http://www.byts.com.cn/line/tiaozhanzhufeng002">挑战珠峰</a><a href="http://www.byts.com.cn/line/xizangquanjing002">西藏全景</a><a href="http://www.byts.com.cn/line/bomiranwuhu002">波密然乌湖</a><a href="http://www.byts.com.cn/line/xizangzijiayou002">16人小包团</a><a href="http://www.byts.com.cn/line/yaluzangbudaxiagu002">雅鲁藏布大峡谷</a>
                           </dd>
                        </dl>
                        
                      
                        
                      
                    </div>
                    
                    <div class="newChannel-right J-newChannel-right">
                        <ul class="newChannel-tab J-newChannel-tab">
                        
                         
                           <li class="cur">海南</li>
                           
                      
                           <li>云南</li>
                           
                      
                           <li>福建</li>
                           
                      
                           <li>东北</li>
                           
                      
                           <li>广西</li>
                           
                       
                           
                        </ul>
                        
                        
                         <div class="newChannel-list J-newChannel-list visible">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/sanyaziyouren002/4556.htm" target="_blank" title="2016年4-5月三亚自由行计划">
                                            <img width="118px" height="67px" data-original="../home/images/1433222734.jpg" src="../home/images/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4556</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/sanyaziyouren002/4556.htm" target="_blank" title="2016年4-5月三亚自由行计划">2016年4-5月三亚自由行计划</a>
                                            <img src="../home/images/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 三亚自由行=北京--三亚--北京5天往返机票+入住4晚 三亚酒店 +三亚机场--酒店免...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2950</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/sanyayidi002/952.htm" target="_blank" title="蜈支洲.南山.呀诺达雨林の1天自由行双飞5日**2分">
                                            <img width="118px" height="67px" data-original="../home/images/1415940461_3632.jpg" src="../home/images/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：952</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/sanyayidi002/952.htm" target="_blank" title="蜈支洲.南山.呀诺达雨林の1天自由行双飞5日**2分">蜈支洲.南山.呀诺达雨林の1天自由行双飞5日**2分</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 蜈之洲岛、南山文化旅游区、呀诺达雨林、天涯海角、椰田古寨、大东海风景...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2480</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/sanyayidi002/939.htm" target="_blank" title="蜈支洲.西岛.呀诺达雨林.大小洞天.夜游三亚湾双">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/hn/1448271115.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：939</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/sanyayidi002/939.htm" target="_blank" title="蜈支洲.西岛.呀诺达雨林.大小洞天.夜游三亚湾双">蜈支洲.西岛.呀诺达雨林.大小洞天.夜游三亚湾双</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 蜈支洲岛、西岛、呀诺达热带雨林、大小洞天 、天涯海角 、玫瑰谷、美丽汇、...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2580</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/sanyayidi002/1715.htm" target="_blank" title="蜈支洲.西岛.呀诺达雨林.南山.南湾猴岛双飞5日">
                                            <img width="118px" height="67px" data-original="../home/images/1415955620_2145.jpg" src="../home/images/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1715</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/sanyayidi002/1715.htm" target="_blank" title="蜈支洲.西岛.呀诺达雨林.南山.南湾猴岛双飞5日">蜈支洲.西岛.呀诺达雨林.南山.南湾猴岛双飞5日</a>
                                        </dt>
							            <dd class="desc"> 蜈支洲岛、西岛、南山佛教文化苑、呀诺达热带雨林、南湾猴岛、天涯海角、...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2880</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/hainan001" target="_blank" title="更多出境游">更多海南线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/tours/1176.htm" target="_blank" title="昆明石林、大理、丽江古城、玉龙雪山、海口、">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140410/1404101J631.png" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1176</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/tours/1176.htm" target="_blank" title="昆明石林、大理、丽江古城、玉龙雪山、海口、">昆明石林、大理、丽江古城、玉龙雪山、海口、</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 此产品为全国散拼团，北京--昆明--海口--北京，适于接待26-56岁之间的游客，一...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1980</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/ruilitengchong002/1470.htm" target="_blank" title="昆明、腾冲、芒市、瑞丽三飞/四飞6日">
                                            <img width="118px" height="67px" data-original="../home/uploads/image/hujie/yunnan/1446629801.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1470</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/ruilitengchong002/1470.htm" target="_blank" title="昆明、腾冲、芒市、瑞丽三飞/四飞6日">昆明、腾冲、芒市、瑞丽三飞/四飞6日</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 此产品为全国散拼团，入住指定准五+温泉酒店，适于接待28-56岁之间的游客，...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥680</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/ruilitengchong002/771.htm" target="_blank" title="昆明、腾冲、芒市、瑞丽双飞6日 特价活动">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/yunnan/1418195270_8770.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：771</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/ruilitengchong002/771.htm" target="_blank" title="昆明、腾冲、芒市、瑞丽双飞6日 特价活动">昆明、腾冲、芒市、瑞丽双飞6日 特价活动</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tejia.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 此产品为全国散拼团， 入住预备4星酒店（腾冲2晚）充分享受休闲时光 ，适于...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥999</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/ruilitengchong002/4564.htm" target="_blank" title="大理、腾冲、芒市双飞6日">
                                            <img width="118px" height="67px" data-original="../home/uploads/image/hujie/yunnan/1447060622.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4564</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/ruilitengchong002/4564.htm" target="_blank" title="大理、腾冲、芒市双飞6日">大理、腾冲、芒市双飞6日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 此产品为全国散拼团，适于接待28-58岁之间的游客，一次单批报名限2-6人 ★亮...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1180</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/yunan001" target="_blank" title="更多出境游">更多云南线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/fujianquanjing002/2133.htm" target="_blank" title="武夷山一地双卧4日">
                                            <img width="118px" height="67px" data-original="../home/uploads/image/hujie/fujian/1409139460_10.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2133</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/fujianquanjing002/2133.htm" target="_blank" title="武夷山一地双卧4日">武夷山一地双卧4日</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 适于周末出行，去武夷山享受天然氧，住宿升级挂牌3星酒店+30元/人 ...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1550</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/fujianquanjing002/855.htm" target="_blank" title="武夷山天游峰、九曲溪、厦门鼓浪屿三卧7日">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/fujian/1409139460_3174.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：855</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/fujianquanjing002/855.htm" target="_blank" title="武夷山天游峰、九曲溪、厦门鼓浪屿三卧7日">武夷山天游峰、九曲溪、厦门鼓浪屿三卧7日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 武夷山享受天然氧、厦门海岛风光，住宿升级挂牌3星酒店+60元/人、准4星酒店...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1960</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/fujianquanjing002/859.htm" target="_blank" title="武夷山天游峰、九曲溪、厦门鼓浪屿、永定高北">
                                            <img width="118px" height="67px" data-original="../home/uploads/image/hujie/fujian/1409139460_7578.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：859</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/fujianquanjing002/859.htm" target="_blank" title="武夷山天游峰、九曲溪、厦门鼓浪屿、永定高北">武夷山天游峰、九曲溪、厦门鼓浪屿、永定高北</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 武夷山享受天然氧、厦门海岛风光、土楼山区民居建筑，住宿升级挂牌3星酒店...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2100</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/dongbei001/5634.htm" target="_blank" title="【红叶谷】哈尔滨太阳岛、牡丹江、璀璨镜泊湖">
                                            <img width="118px" height="67px" data-original="../home/uploads/image/0000007/all///1463391443.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5634</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/dongbei001/5634.htm" target="_blank" title="【红叶谷】哈尔滨太阳岛、牡丹江、璀璨镜泊湖">【红叶谷】哈尔滨太阳岛、牡丹江、璀璨镜泊湖</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> ◆住宿安排：温馨双人标准间（更可升级成五星酒店住宿） ◆品质之旅：5A太...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">9/30,10/01,10/02</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2180</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/fujian001" target="_blank" title="更多出境游">更多福建线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/dongbei001/5634.htm" target="_blank" title="【红叶谷】哈尔滨太阳岛、牡丹江、璀璨镜泊湖">
                                            <img width="118px" height="67px" data-original="../home/uploads/image/0000007/all///1463391443.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5634</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/dongbei001/5634.htm" target="_blank" title="【红叶谷】哈尔滨太阳岛、牡丹江、璀璨镜泊湖">【红叶谷】哈尔滨太阳岛、牡丹江、璀璨镜泊湖</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> ◆住宿安排：温馨双人标准间（更可升级成五星酒店住宿） ◆品质之旅：5A太...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">9/30,10/01,10/02</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2180</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/dongbei001/5624.htm" target="_blank" title="&lt;font color=&#39;#0000FF&#39;&gt;【豪华专列】山海关、北戴河、长白山西北连游&lt;/font&gt;">
                                            <img width="118px" height="67px" data-original="../home/images/nopic.jpg" src="../home/images/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5624</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/dongbei001/5624.htm" target="_blank" title="&lt;font color=&#39;#0000FF&#39;&gt;【豪华专列】山海关、北戴河、长白山西北连游&lt;/font&gt;"><font color="#0000FF">【豪华专列】山海关、北戴河、长白山西北连游</font></a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc">...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/neimeng001/5623.htm" target="_blank" title="&lt;font color=&#39;#0000FF&#39;&gt;【魔鬼沙漠】北京、通辽、魔鬼沙漠、大青沟、&lt;/font&gt;">
                                            <img width="118px" height="67px" data-original="../home/uploads/image/0000007/all///1463535388.jpg" src="../home/images/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5623</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/neimeng001/5623.htm" target="_blank" title="&lt;font color=&#39;#0000FF&#39;&gt;【魔鬼沙漠】北京、通辽、魔鬼沙漠、大青沟、&lt;/font&gt;"><font color="#0000FF">【魔鬼沙漠】北京、通辽、魔鬼沙漠、大青沟、</font></a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 1.科尔沁草原南部唯一的一个4A级景区，沙化后唯一留下来的一片绿色生态——...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2000</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/neimeng001/5622.htm" target="_blank" title="&lt;font color=&#39;#0000FF&#39;&gt;【随报随走】北京、通辽、魔鬼沙漠、大青沟、&lt;/font&gt;">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5622</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/neimeng001/5622.htm" target="_blank" title="&lt;font color=&#39;#0000FF&#39;&gt;【随报随走】北京、通辽、魔鬼沙漠、大青沟、&lt;/font&gt;"><font color="#0000FF">【随报随走】北京、通辽、魔鬼沙漠、大青沟、</font></a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc">...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/dongbei001" target="_blank" title="更多出境游">更多东北线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/xiyanghong002/4210.htm" target="_blank" title="桂林漓江阳朔、大榕树月亮山、刘三姐大观园、">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/140225/1409375238_6251.jpg" src="../home/images/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4210</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/xiyanghong002/4210.htm" target="_blank" title="桂林漓江阳朔、大榕树月亮山、刘三姐大观园、">桂林漓江阳朔、大榕树月亮山、刘三姐大观园、</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> ★北京独立成团、三星纯玩、往返中下铺、15人以上派全程陪同； ★巴马住2晚...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2680</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/guilinchunwantuan002/796.htm" target="_blank" title="桂林、漓江福利段、阳朔西街、刘三姐大观园双">
                                            <img width="118px" height="67px" data-original="../home/uploads/allimg/20140409/1404091A056.jpg" src="../home/images/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：796</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/guilinchunwantuan002/796.htm" target="_blank" title="桂林、漓江福利段、阳朔西街、刘三姐大观园双">桂林、漓江福利段、阳朔西街、刘三姐大观园双</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 最实惠的规范旅游线路，特别安排入住阳朔1晚，全程进4+1个店，2年以上带团经...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1090</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/guilinchunwantuan002/863.htm" target="_blank" title="桂林、兴坪漓江、阳朔西街、刘三姐大观园双卧">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140622/140622155936.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：863</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/guilinchunwantuan002/863.htm" target="_blank" title="桂林、兴坪漓江、阳朔西街、刘三姐大观园双卧">桂林、兴坪漓江、阳朔西街、刘三姐大观园双卧</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 特惠产品，入住桂林挂牌3星酒店，纯玩无购物，3年以上带团经验持证导游员微...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1280</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/guilinchunwantuan002/877.htm" target="_blank" title="桂林、兴坪漓江、阳朔西街、古东瀑布冠岩双卧">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140622/140622164332.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：877</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/guilinchunwantuan002/877.htm" target="_blank" title="桂林、兴坪漓江、阳朔西街、古东瀑布冠岩双卧">桂林、兴坪漓江、阳朔西街、古东瀑布冠岩双卧</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> HOT人气最高的桂林旅游线路 ，入住桂林挂牌3星酒店，纯玩无购物，5年以上带...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1530</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/guangxi001" target="_blank" title="更多出境游">更多广西线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/xizangquanjing002/812.htm" target="_blank" title="拉萨林芝日喀则、纳木错双卧13/单飞11/双飞9日">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140607/14060GK012.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：812</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/xizangquanjing002/812.htm" target="_blank" title="拉萨林芝日喀则、纳木错双卧13/单飞11/双飞9日">拉萨林芝日喀则、纳木错双卧13/单飞11/双飞9日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 北京成团、林芝2晚3天、全程陪同、一车一导、每天1瓶矿泉水、全程3次购物...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2080</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/zangdonglinzhi002/2454.htm" target="_blank" title="拉萨、林芝、鲁朗林海、羊卓雍湖双卧11/单飞9">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140615/140615210538.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2454</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/zangdonglinzhi002/2454.htm" target="_blank" title="拉萨、林芝、鲁朗林海、羊卓雍湖双卧11/单飞9">拉萨、林芝、鲁朗林海、羊卓雍湖双卧11/单飞9</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 北京成团、林芝2晚3天、全程陪同、一车一导、全程3次购物、每车配备氧气 ★...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1880</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/zangdonglinzhi002/1616.htm" target="_blank" title="拉萨、林芝、鲁朗林海、羊卓雍湖、纳木错双卧">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140608/14060R21403.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1616</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/zangdonglinzhi002/1616.htm" target="_blank" title="拉萨、林芝、鲁朗林海、羊卓雍湖、纳木错双卧">拉萨、林芝、鲁朗林海、羊卓雍湖、纳木错双卧</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 北京成团、林芝2晚3天、全程陪同、一车一导、全程3次购物、每车配备氧气 ★...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1980</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/xizangquanjing002/974.htm" target="_blank" title="拉萨林芝日喀则、纳木错、雅鲁藏布大峡谷双卧">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140608/14060P02T9.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：974</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/xizangquanjing002/974.htm" target="_blank" title="拉萨林芝日喀则、纳木错、雅鲁藏布大峡谷双卧">拉萨林芝日喀则、纳木错、雅鲁藏布大峡谷双卧</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 北京成团、林芝2晚3天（ 含雅鲁藏布大峡谷 ）、全程陪同、一车一导、全程...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥3380</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/xizang001" target="_blank" title="更多出境游">更多西藏线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/tours/1794.htm" target="_blank" title="夕阳红品质-昆明 楚雄 大理 丽江 版纳双卧13日">
                                            <img width="118px" height="67px" data-original="/uploads/litimg/1794.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1794</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/tours/1794.htm" target="_blank" title="夕阳红品质-昆明 楚雄 大理 丽江 版纳双卧13日">夕阳红品质-昆明 楚雄 大理 丽江 版纳双卧13日</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 无年龄限制、往返保证中下铺、无地域限制、无附加费 ...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2980</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/laonian001/2536.htm" target="_blank" title="B线-俄罗斯海参崴 长白山 镜泊湖 长春 山海关 旅">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140508/14050QA625.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2536</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/laonian001/2536.htm" target="_blank" title="B线-俄罗斯海参崴 长白山 镜泊湖 长春 山海关 旅">B线-俄罗斯海参崴 长白山 镜泊湖 长春 山海关 旅</a>
                                        </dt>
							            <dd class="desc"> 老人不增加任何费用，全程国语导游员；（每 30 人左右一个团，每团一名全陪...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/laonian001/2535.htm" target="_blank" title="A线-满洲里 海拉尔 呼伦贝尔草原 长白山 长春 哈">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140508/14050Q64412.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2535</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/laonian001/2535.htm" target="_blank" title="A线-满洲里 海拉尔 呼伦贝尔草原 长白山 长春 哈">A线-满洲里 海拉尔 呼伦贝尔草原 长白山 长春 哈</a>
                                        </dt>
							            <dd class="desc">...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/laonian001/2079.htm" target="_blank" title="新疆（乌鲁木齐、天山天池、喀纳斯）甘肃（敦">
                                            <img width="118px" height="67px" data-original="/uploads/litimg/2079.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2079</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/laonian001/2079.htm" target="_blank" title="新疆（乌鲁木齐、天山天池、喀纳斯）甘肃（敦">新疆（乌鲁木齐、天山天池、喀纳斯）甘肃（敦</a>
                                        </dt>
							            <dd class="desc"> 夕阳红老年旅游专列，中老年游客居多，行程节奏比较缓慢，全程陪同人员，...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum">0</em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/laonian001" target="_blank" title="更多出境游">更多老年旅游专列线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/wutaishan002/1271.htm" target="_blank" title="五台山祈福双汽2日">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140411/140411155U2.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1271</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/wutaishan002/1271.htm" target="_blank" title="五台山祈福双汽2日">五台山祈福双汽2日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 北京成团，当地不转团，不拼团，放心烧香，安心礼佛，赠送品尝五台山特色...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期二,星期四,星期六</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥338</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/shangxi001/5587.htm" target="_blank" title="绵山、王家大院、壶口瀑布、平遥古城、晋祠、">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5587</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/shangxi001/5587.htm" target="_blank" title="绵山、王家大院、壶口瀑布、平遥古城、晋祠、">绵山、王家大院、壶口瀑布、平遥古城、晋祠、</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 【特别赠送】——温泉SPA：温泉热浴不仅可使肌肉、关节松弛，消除疲劳；还...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2388</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/shangxi001/5586.htm" target="_blank" title="绵山、王家大院、壶口瀑布、平遥古城、晋祠、">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5586</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/shangxi001/5586.htm" target="_blank" title="绵山、王家大院、壶口瀑布、平遥古城、晋祠、">绵山、王家大院、壶口瀑布、平遥古城、晋祠、</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 山西暖冬好地方：绵山、壶口、平遥古城。 冬季旅游小卫士：6大保障——吃、...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2088</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/shangxi001/5582.htm" target="_blank" title="晋祠、云冈石窟、悬空寺、九龙壁、恒山、平遥">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5582</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/shangxi001/5582.htm" target="_blank" title="晋祠、云冈石窟、悬空寺、九龙壁、恒山、平遥">晋祠、云冈石窟、悬空寺、九龙壁、恒山、平遥</a>
                                        </dt>
							            <dd class="desc"> 【100%发团】——放心报名100%发团一人也成团。 【说走就走】——高铁往返，...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期五</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1698</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/shangxi001" target="_blank" title="更多出境游">更多山西线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/guizhou001/5041.htm" target="_blank" title="黄果树、天河潭、青岩古镇、千户苗寨、神龙洞">
                                            <img width="118px" height="67px" data-original="/uploads/image/0000007/xxfy/1431835672.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5041</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/guizhou001/5041.htm" target="_blank" title="黄果树、天河潭、青岩古镇、千户苗寨、神龙洞">黄果树、天河潭、青岩古镇、千户苗寨、神龙洞</a>
                                        </dt>
							            <dd class="desc">尊贵之旅承诺全程不换导游、不换车， 荔波——地球腰带上的绿宝石，喀斯特...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期五</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2850</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/guizhou001/5040.htm" target="_blank" title="黄果树、天星桥、陡坡塘、天河潭、西江千户苗">
                                            <img width="118px" height="67px" data-original="/uploads/image/0000007/xxfy/1431590812.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5040</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/guizhou001/5040.htm" target="_blank" title="黄果树、天星桥、陡坡塘、天河潭、西江千户苗">黄果树、天星桥、陡坡塘、天河潭、西江千户苗</a>
                                        </dt>
							            <dd class="desc">尊贵之旅承诺全程不换导游、不换车， 荔波——地球腰带上的绿宝石，喀斯特...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期五</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2550</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/libodaxiaoqikong002/2755.htm" target="_blank" title="【挂3星】黄果树大瀑布、西江千户苗寨、荔波大">
                                            <img width="118px" height="67px" data-original="/uploads/1-140404100416221.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2755</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/libodaxiaoqikong002/2755.htm" target="_blank" title="【挂3星】黄果树大瀑布、西江千户苗寨、荔波大">【挂3星】黄果树大瀑布、西江千户苗寨、荔波大</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> ◆ 住宿满意：全程挂三星酒店 ◆ 不加点、无自费、全程无购物、省心省力更...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期二,星期四</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥3150</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/guizhouquanxian002/2766.htm" target="_blank" title="&lt;font color=&#39;#FF0000&#39;&gt;黄果树大瀑布、镇远古镇舞阳河、西江千户苗寨&lt;/font&gt;">
                                            <img width="118px" height="67px" data-original="/uploads/litimg/2766.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2766</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/guizhouquanxian002/2766.htm" target="_blank" title="&lt;font color=&#39;#FF0000&#39;&gt;黄果树大瀑布、镇远古镇舞阳河、西江千户苗寨&lt;/font&gt;"><font color="#FF0000">黄果树大瀑布、镇远古镇舞阳河、西江千户苗寨</font></a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> ★ 不留遗憾的游贵州全景， 远离都市的雾霾、喧嚣，到神秘生态净土贵州洗心...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥3980</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/guizhou001" target="_blank" title="更多出境游">更多贵州线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/aershanmanzhouli002/3963.htm" target="_blank" title="阿尔山国家森林公园、七仙湖草原双卧5日">
                                            <img width="118px" height="67px" data-original="/uploads/image/db/1404991530_5675.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：3963</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/aershanmanzhouli002/3963.htm" target="_blank" title="阿尔山国家森林公园、七仙湖草原双卧5日">阿尔山国家森林公园、七仙湖草原双卧5日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 阿尔山国家森林公园 位于内蒙古大兴安岭西南麓，公园内有大兴安岭第一峰...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2050</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/aershanmanzhouli002/3957.htm" target="_blank" title="阿尔山、呼伦贝尔草原双卧5日">
                                            <img width="118px" height="67px" data-original="/uploads/image/db/1404996368_9924.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：3957</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/aershanmanzhouli002/3957.htm" target="_blank" title="阿尔山、呼伦贝尔草原双卧5日">阿尔山、呼伦贝尔草原双卧5日</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> ★ 醉美草原——呼伦贝尔大草原，感受她的宽广与辽阔，特安排一晚入住蒙古...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2280</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/aershanmanzhouli002/3933.htm" target="_blank" title="阿尔山、呼伦贝尔、满洲里双卧6日">
                                            <img width="118px" height="67px" data-original="/uploads/image/db/1404991530_3040.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：3933</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/aershanmanzhouli002/3933.htm" target="_blank" title="阿尔山、呼伦贝尔、满洲里双卧6日">阿尔山、呼伦贝尔、满洲里双卧6日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 人气最高的旅游线路 ， 乌兰浩特进海拉尔出 ，不走回头路 呼伦贝尔草原 大兴...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥3080</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/aershanmanzhouli002/2731.htm" target="_blank" title="阿尔山、满洲里、呼伦贝尔草原双卧6日【空调专">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140626/140626191358.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2731</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/aershanmanzhouli002/2731.htm" target="_blank" title="阿尔山、满洲里、呼伦贝尔草原双卧6日【空调专">阿尔山、满洲里、呼伦贝尔草原双卧6日【空调专</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 四人包厢空调专列火车硬卧，一站式直达“瑞士小城”之称的阿尔山市，入住...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2980</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/neimeng001" target="_blank" title="更多出境游">更多内蒙线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/beijiangkanasi002/5056.htm" target="_blank" title="乌鲁木齐、天山天池、吐鲁番、喀纳斯1日游双卧">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/zb/xinjiang/1439524070.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5056</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/beijiangkanasi002/5056.htm" target="_blank" title="乌鲁木齐、天山天池、吐鲁番、喀纳斯1日游双卧">乌鲁木齐、天山天池、吐鲁番、喀纳斯1日游双卧</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 北京成团，全程一车一导游，统一出行，行程中不散拼，适于接待20--60岁之间...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期日</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥3080</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/beijiangkanasi002/5138.htm" target="_blank" title="乌鲁木齐、天山天池、吐鲁番、喀纳斯2日游双卧">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/zb/xinjiang/1439541872.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5138</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/beijiangkanasi002/5138.htm" target="_blank" title="乌鲁木齐、天山天池、吐鲁番、喀纳斯2日游双卧">乌鲁木齐、天山天池、吐鲁番、喀纳斯2日游双卧</a>
                                        </dt>
							            <dd class="desc"> 北京成团，全程一车一导游，统一出行，行程中不散拼，适于接待65岁以下游客...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期四,星期日</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥3280</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/xingjiang001/5633.htm" target="_blank" title="专列：畅游西北五省-新疆，甘肃，青海，宁夏，">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5633</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/xingjiang001/5633.htm" target="_blank" title="专列：畅游西北五省-新疆，甘肃，青海，宁夏，">专列：畅游西北五省-新疆，甘肃，青海，宁夏，</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 1、空调硬卧四人包厢，乘坐舒适 2、乘专列旅游具有一线多游、路上可观景、...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">9/04</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥4780</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/siluqinghai002/5531.htm" target="_blank" title="1">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5531</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/siluqinghai002/5531.htm" target="_blank" title="1">1</a>
                                        </dt>
							            <dd class="desc">...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/xingjiang001" target="_blank" title="更多出境游">更多新疆线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/qinghainingxia002/2401.htm" target="_blank" title="俏夕阳-老年团（青海 宁夏3卧8日）">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140506/140506101449.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2401</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/qinghainingxia002/2401.htm" target="_blank" title="俏夕阳-老年团（青海 宁夏3卧8日）">俏夕阳-老年团（青海 宁夏3卧8日）</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc">1、北京成团，专人全程随团，贴心服务，感受尊贵体验！ 2、专属中老年定制线...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2680</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/qinghainingxia002/2399.htm" target="_blank" title="青海 宁夏双飞5（北京成团，包机）">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140506/140506095552.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2399</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/qinghainingxia002/2399.htm" target="_blank" title="青海 宁夏双飞5（北京成团，包机）">青海 宁夏双飞5（北京成团，包机）</a>
                                        </dt>
							            <dd class="desc">1、青海、宁夏最精华的代表线路，自然景观与当地文化最完美结合。省去中卫...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期二,星期四,星期六</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2880</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/qinghai002/2374.htm" target="_blank" title="&lt;strong&gt;青海经典游双卧5日/单飞4日&lt;/strong&gt;">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140505/140505110440.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2374</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/qinghai002/2374.htm" target="_blank" title="&lt;strong&gt;青海经典游双卧5日/单飞4日&lt;/strong&gt;"><strong>青海经典游双卧5日/单飞4日</strong></a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc">单飞4日游：2520元/人起...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1920</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/qinghainingxia002/2369.htm" target="_blank" title="&lt;strong&gt;&lt;font color=&#39;#FF0000&#39;&gt;宁夏 青海三卧7日/单飞6日&lt;/font&gt;&lt;/strong&gt;">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140505/140505101009.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2369</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/qinghainingxia002/2369.htm" target="_blank" title="&lt;strong&gt;&lt;font color=&#39;#FF0000&#39;&gt;宁夏 青海三卧7日/单飞6日&lt;/font&gt;&lt;/strong&gt;"><strong><font color="#FF0000">宁夏 青海三卧7日/单飞6日</font></strong></a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif"><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc">单飞价格为3250元/人起...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2650</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/qingganning001" target="_blank" title="更多出境游">更多青甘宁线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/guangdong001/1501.htm" target="_blank" title="广州深圳珠海加海南三飞8日游">
                                            <img width="118px" height="67px" data-original="/uploads/litimg/1501.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1501</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/guangdong001/1501.htm" target="_blank" title="广州深圳珠海加海南三飞8日游">广州深圳珠海加海南三飞8日游</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 特价超值连线带您玩遍南方经典景点，为您选择当地成熟线路，您可随意搭配...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期三,星期日</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥5160</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/guangdong001/1493.htm" target="_blank" title="广州深圳珠海加港澳双飞8日游">
                                            <img width="118px" height="67px" data-original="/uploads/litimg/1493.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1493</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/guangdong001/1493.htm" target="_blank" title="广州深圳珠海加港澳双飞8日游">广州深圳珠海加港澳双飞8日游</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 特价超值连线带您玩遍南方经典景点，为您选择当地成熟线路，您可随意搭配...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期三,星期日</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥4980</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/guangdong001/1482.htm" target="_blank" title="广州深圳珠海加港澳双卧9日游">
                                            <img width="118px" height="67px" data-original="/uploads/litimg/1482.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1482</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/guangdong001/1482.htm" target="_blank" title="广州深圳珠海加港澳双卧9日游">广州深圳珠海加港澳双卧9日游</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 特价超值连线带您玩遍南方经典景点，为您选择当地成熟线路，您可随意搭配...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期三,星期日</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥3380</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/guangdong001/1217.htm" target="_blank" title="南岭森林公园、赤壁单崖 ——丹霞山养生休闲豪">
                                            <img width="118px" height="67px" data-original="/uploads/litimg/1217.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1217</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/guangdong001/1217.htm" target="_blank" title="南岭森林公园、赤壁单崖 ——丹霞山养生休闲豪">南岭森林公园、赤壁单崖 ——丹霞山养生休闲豪</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 住韶关五星避暑林庄温泉酒店，自由浸泡酒店温泉。南岭的清新空气、山水草...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥3180</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/guangdong001" target="_blank" title="更多出境游">更多广东线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/qingdao002/4880.htm" target="_blank" title="老年团：青岛、海上乘船、八大关、崂山（含环">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4880</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/qingdao002/4880.htm" target="_blank" title="老年团：青岛、海上乘船、八大关、崂山（含环">老年团：青岛、海上乘船、八大关、崂山（含环</a>
                                        </dt>
							            <dd class="desc">...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/taishanqubu002/4877.htm" target="_blank" title="A2线：泰山一地  观封禅大典、啤酒生肖乐园   ">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4877</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/taishanqubu002/4877.htm" target="_blank" title="A2线：泰山一地  观封禅大典、啤酒生肖乐园   ">A2线：泰山一地  观封禅大典、啤酒生肖乐园   </a>
                                        </dt>
							            <dd class="desc">泰山一地深度游，体验高铁动车新快感，赠送观赏价值168元/位起《中华泰山•...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1050</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/taishanqubu002/4876.htm" target="_blank" title="S3线：济南趵突泉、曲阜三孔、泰山     双高三日">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4876</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/taishanqubu002/4876.htm" target="_blank" title="S3线：济南趵突泉、曲阜三孔、泰山     双高三日">S3线：济南趵突泉、曲阜三孔、泰山     双高三日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tejia.gif">
                                        </dt>
							            <dd class="desc">仅用三天时间，畅游山水圣人之旅，还原简单本色的旅游行程！...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1100</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/taishanqubu002/4875.htm" target="_blank" title="S2线：泰山、曲阜三孔、济南趵突泉    卧高四日">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4875</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/taishanqubu002/4875.htm" target="_blank" title="S2线：泰山、曲阜三孔、济南趵突泉    卧高四日">S2线：泰山、曲阜三孔、济南趵突泉    卧高四日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tejia.gif">
                                        </dt>
							            <dd class="desc">包含泰山大门票、趵突泉门票，享受悠闲的假期！...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥990</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/shandong001" target="_blank" title="更多出境游">更多山东线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/hubeiquanxian002/4226.htm" target="_blank" title="神话恩施 土司城、恩施大峡谷，云龙河地缝、七">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/hubei/1409628051_1450.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4226</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/hubeiquanxian002/4226.htm" target="_blank" title="神话恩施 土司城、恩施大峡谷，云龙河地缝、七">神话恩施 土司城、恩施大峡谷，云龙河地缝、七</a>
                                        </dt>
							            <dd class="desc"> 鄂西南明珠之旅，让您体验不同寻常的湖北 ...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1680</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/hubeiquanxian002/4225.htm" target="_blank" title="宜昌、车溪民俗风景区、白帝城、九畹溪 神农架">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/hubei/1409628050_9830.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4225</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/hubeiquanxian002/4225.htm" target="_blank" title="宜昌、车溪民俗风景区、白帝城、九畹溪 神农架">宜昌、车溪民俗风景区、白帝城、九畹溪 神农架</a>
                                        </dt>
							            <dd class="desc"> 以素有世界四大谜之一的野人之谜而闻名，野生植物遍布幽谷峻峰之中，优美...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2480</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/hubeiquanxian002/4224.htm" target="_blank" title="宜昌、 神农架、神农祭坛 三峡大瀑布 武当山 紫">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/hubei/1409628051_3176.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4224</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/hubeiquanxian002/4224.htm" target="_blank" title="宜昌、 神农架、神农祭坛 三峡大瀑布 武当山 紫">宜昌、 神农架、神农祭坛 三峡大瀑布 武当山 紫</a>
                                        </dt>
							            <dd class="desc"> 以素有世界四大谜之一的野人之谜而闻名，野生植物遍布幽谷峻峰之中，优美...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2180</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/hubeiquanxian002/4223.htm" target="_blank" title="宜昌、神农架自然保护区 神农祭坛 三峡大瀑布">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/hubei/1409628050_1280.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4223</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/hubeiquanxian002/4223.htm" target="_blank" title="宜昌、神农架自然保护区 神农祭坛 三峡大瀑布">宜昌、神农架自然保护区 神农祭坛 三峡大瀑布</a>
                                        </dt>
							            <dd class="desc"> 以素有世界四大谜之一的野人之谜而闻名，野生植物遍布幽谷峻峰之中，优美...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1680</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/hubei001" target="_blank" title="更多出境游">更多湖北线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/huangshanqiandaohu002/5269.htm" target="_blank" title="【十一主推】寻源千岛湖送黄山 双卧五日游">
                                            <img width="118px" height="67px" data-original="/uploads/image/yu/yzl/1438062790.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5269</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/huangshanqiandaohu002/5269.htm" target="_blank" title="【十一主推】寻源千岛湖送黄山 双卧五日游">【十一主推】寻源千岛湖送黄山 双卧五日游</a>
                                        </dt>
							            <dd class="desc">1、中国第一秀水---千岛湖，千岛湖源头水系---新安江，赠黄山一日游；奇山、...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2599</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/anwei001/5262.htm" target="_blank" title="双高五天 赠送当地一日游：西递古民居 木坑竹海">
                                            <img width="118px" height="67px" data-original="/uploads/image/yu/yzl/1438062790.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5262</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/anwei001/5262.htm" target="_blank" title="双高五天 赠送当地一日游：西递古民居 木坑竹海">双高五天 赠送当地一日游：西递古民居 木坑竹海</a>
                                        </dt>
							            <dd class="desc">1、全程安排国际知名品牌度假酒店，尽享精致睡眠； 2、含黄山北站至酒店接送...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期二,星期三,星期四</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2099</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/huangqianhang002/5260.htm" target="_blank" title="华东三市 黄山 千岛湖 水乡">
                                            <img width="118px" height="67px" data-original="/uploads/image/yu/yzl/1438594139.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5260</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/huangqianhang002/5260.htm" target="_blank" title="华东三市 黄山 千岛湖 水乡">华东三市 黄山 千岛湖 水乡</a>
                                        </dt>
							            <dd class="desc">...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期二,星期四,星期五</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1720</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/huangshanjiuhuashan002/5258.htm" target="_blank" title="黄山观日出、九华山双卧六日">
                                            <img width="118px" height="67px" data-original="/uploads/image/yu/yzl/1438062805.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5258</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/huangshanjiuhuashan002/5258.htm" target="_blank" title="黄山观日出、九华山双卧六日">黄山观日出、九华山双卧六日</a>
                                        </dt>
							            <dd class="desc">1、特别安排佛教圣地--九华山（祈福、夜宿）； 2、入住黄山山顶，观黄山日出...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2099</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/anwei001" target="_blank" title="更多出境游">更多安徽线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/jiuzaihuanglong002/1111.htm" target="_blank" title="成都、九寨沟、黄龙双卧7日**纯玩**">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/sc/1405599683_4832.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1111</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/jiuzaihuanglong002/1111.htm" target="_blank" title="成都、九寨沟、黄龙双卧7日**纯玩**">成都、九寨沟、黄龙双卧7日**纯玩**</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 特价线路，纯玩无购物，享特色美食（羌山宴、农家菜） ❶吃：用餐全部指定...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1980</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/jiuzaihuanglong002/1281.htm" target="_blank" title="成都、九寨沟、黄龙双飞5日**纯玩**">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/sc/1406385047_9709.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1281</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/jiuzaihuanglong002/1281.htm" target="_blank" title="成都、九寨沟、黄龙双飞5日**纯玩**">成都、九寨沟、黄龙双飞5日**纯玩**</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 特价线路，纯玩无购物，享特色美食（羌山宴、农家菜） ❶ 吃：用餐全部指定...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2980</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/jiuzaihuanglong002/2119.htm" target="_blank" title="成都、九寨沟、黄龙双卧7天**4星纯玩无自费**">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/sc/1405599683_2498.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2119</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/jiuzaihuanglong002/2119.htm" target="_blank" title="成都、九寨沟、黄龙双卧7天**4星纯玩无自费**">成都、九寨沟、黄龙双卧7天**4星纯玩无自费**</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 入住九寨一线4星酒店，纯玩无购物，无自费（含走进藏家 烤羊、 藏羌风情晚...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2480</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/jiuzaihuanglong002/1779.htm" target="_blank" title="成都、九寨沟、黄龙双飞5天**4星纯玩无自费**">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140416/140416150310.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1779</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/jiuzaihuanglong002/1779.htm" target="_blank" title="成都、九寨沟、黄龙双飞5天**4星纯玩无自费**">成都、九寨沟、黄龙双飞5天**4星纯玩无自费**</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 入住九寨一线4星酒店，纯玩无购物，无自费（含走进藏家烤羊、藏羌风情晚会...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥3480</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/sichun002" target="_blank" title="更多出境游">更多四川线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/yuntaishan001/705.htm" target="_blank" title="云台山一地双卧4日">
                                            <img width="118px" height="67px" data-original="/uploads/image/henan/2011-01-05jd800x600.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：705</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/yuntaishan001/705.htm" target="_blank" title="云台山一地双卧4日">云台山一地双卧4日</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc">云台山深度游 短途游周末游...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">8/31,9/01,9/02</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥860</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/yuntaishan001/696.htm" target="_blank" title="云台山一地卧高3日">
                                            <img width="118px" height="67px" data-original="/uploads/image/henan/1433212974.png" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：696</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/yuntaishan001/696.htm" target="_blank" title="云台山一地卧高3日">云台山一地卧高3日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc">景点深度游、回程体验急速高铁、3小时抵达北京...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">8/31,9/01,9/02</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥930</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/yuntaishan001/739.htm" target="_blank" title="云台山 龙门石窟 少林寺双卧4日">
                                            <img width="118px" height="67px" data-original="/uploads/image/henan/1433213219.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：739</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/yuntaishan001/739.htm" target="_blank" title="云台山 龙门石窟 少林寺双卧4日">云台山 龙门石窟 少林寺双卧4日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 中国佛教三大艺术宝库之一龙门石窟、禅宗祖庭武术圣地少林寺、峡谷盆景美...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">8/31,9/01,9/02</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1200</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/henanlvyouzhuanlie002/5572.htm" target="_blank" title="精品-21：太行山大峡谷、王莽岭、锡崖沟（挂壁">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：5572</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/henanlvyouzhuanlie002/5572.htm" target="_blank" title="精品-21：太行山大峡谷、王莽岭、锡崖沟（挂壁">精品-21：太行山大峡谷、王莽岭、锡崖沟（挂壁</a>
                                        </dt>
							            <dd class="desc"> 【 一脚跨两省、晋豫新玩法 】——山西 + 河南两省三天搞定。 【景点门票】...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期五</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥668</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/henan001" target="_blank" title="更多出境游">更多河南线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/hunan001/1184.htm" target="_blank" title="长沙、韶山、凤凰古城、张家界、黄果树瀑布、">
                                            <img width="118px" height="67px" data-original="/uploads/image/0000007/xxfy/1428125247_3472.png" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1184</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/hunan001/1184.htm" target="_blank" title="长沙、韶山、凤凰古城、张家界、黄果树瀑布、">长沙、韶山、凤凰古城、张家界、黄果树瀑布、</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 北京独立成团，全程陪同1名，保证中下铺，赠送每人每天1瓶水，共6瓶，赠送...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2980</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/zhangjiajiefenghuang002/722.htm" target="_blank" title="张家界、凤凰古城双卧5日">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/zjj/1443155014.png" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：722</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/zhangjiajiefenghuang002/722.htm" target="_blank" title="张家界、凤凰古城双卧5日">张家界、凤凰古城双卧5日</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 北京成团，纯玩无购物，入住三星酒店，赠送每人每天1瓶水、50克古丈毛尖1筒...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期三,星期五</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1580</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/zhangjiajiefenghuang002/726.htm" target="_blank" title="张家界、凤凰古城双卧6日">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/zjj/1443157385.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：726</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/zhangjiajiefenghuang002/726.htm" target="_blank" title="张家界、凤凰古城双卧6日">张家界、凤凰古城双卧6日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 北京成团，纯玩无购物，入住三星酒店，赠送每人每天1瓶水、50克古丈毛尖1筒...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期三,星期五</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1580</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/zhangjiajiefenghuang002/3096.htm" target="_blank" title="张家界、凤凰古城双卧6日**赠苗家长拢宴**">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140620/140620195640.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：3096</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/zhangjiajiefenghuang002/3096.htm" target="_blank" title="张家界、凤凰古城双卧6日**赠苗家长拢宴**">张家界、凤凰古城双卧6日**赠苗家长拢宴**</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 北京独立成团，纯玩无购物，入住预备3星酒店，赠送苗家长拢宴、土家特产姜...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期二,星期三,星期四</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1580</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/hunan001" target="_blank" title="更多出境游">更多湖南线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/shanxi001/2989.htm" target="_blank" title="【纯玩无自费】西安兵马俑、华清池、明城墙双">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140528/14052QG227.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2989</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/shanxi001/2989.htm" target="_blank" title="【纯玩无自费】西安兵马俑、华清池、明城墙双">【纯玩无自费】西安兵马俑、华清池、明城墙双</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc">行程特色1：西安当地成团,纯玩品质,散客天天接。 行程特色2：如果你有故事，...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1260</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/yananyikou002/4879.htm" target="_blank" title="西安、兵马俑、华清池、袁家村、乾陵、法门寺">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4879</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/yananyikou002/4879.htm" target="_blank" title="西安、兵马俑、华清池、袁家村、乾陵、法门寺">西安、兵马俑、华清池、袁家村、乾陵、法门寺</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 红色之旅， 西安当地成团，纯玩无购物， 追溯延安精神，红色潮流， 热情周...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥2080</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/shanxi001/4873.htm" target="_blank" title="西安、秦始皇兵马俑、华清池、华山、明城墙、">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4873</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/shanxi001/4873.htm" target="_blank" title="西安、秦始皇兵马俑、华清池、华山、明城墙、">西安、秦始皇兵马俑、华清池、华山、明城墙、</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif">
                                        </dt>
							            <dd class="desc">五千年的历史看西安”可不是虚妄之言，许多外国元首都把西安作为访华的必游...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1538</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/shanxi001/4871.htm" target="_blank" title="西安、秦始皇兵马俑、华清池、 华山、明城墙、">
                                            <img width="118px" height="67px" data-original="/images/nopic.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4871</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/shanxi001/4871.htm" target="_blank" title="西安、秦始皇兵马俑、华清池、 华山、明城墙、">西安、秦始皇兵马俑、华清池、 华山、明城墙、</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/remai.gif">
                                        </dt>
							            <dd class="desc">体验舌尖上的陕西美食品-黄河九福面（biangbiang面）、老潼关肉夹馍。 古都唐装...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥1588</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/shanxi001" target="_blank" title="更多出境游">更多陕西线路&gt;&gt;</a></p>
                        </div>   
           
                    </div>
                </div>
                
                
                
         </div>
<!--国内旅游结束-->

<!--周边旅游开始-->
<div class="newChannel clearfix">
  <h2 class="travel-Hd">
     <span class="travel-Hd-type travel-cj-type">周边旅游</span><span class="travel-Hd-msg"></span>
        <p class="newChannel-more"><a href="http://www.byts.com.cn/zhoubian" target="_blank" title="更多周边旅游">更多周边旅游线路&gt;&gt;</a></p>
  </h2>
  <div class="newChannel-Bd cfix">
    <div class="newChannel-left">
                        
                        
                        
                        <dl>
                            <dt><a href="http://www.byts.com.cn/line/hebei001" target="_blank">河北</a></dt>
                            <dd class="cfix">
                           <a href="http://www.byts.com.cn/line/chengde02">承德</a><a href="http://www.byts.com.cn/line/tianjin0002">天津</a><a href="http://www.byts.com.cn/line/beijingchengtuan022">坝上草原</a><a href="http://www.byts.com.cn/line/mulanweichang0002">木兰围场</a><a href="http://www.byts.com.cn/line/nanbeidaihe0002">南北戴河</a><a href="http://www.byts.com.cn/line/letingyuetuodao0002">乐亭月坨岛</a><a href="http://www.byts.com.cn/line/xingchenghuludao0002">兴城葫芦岛</a><a href="http://www.byts.com.cn/line/yeshanpo0002">野三坡</a><a href="http://www.byts.com.cn/line/baiyangding0002">白洋淀</a><a href="http://www.byts.com.cn/line/laiyuan0002">涞源</a><a href="http://www.byts.com.cn/line/xibaipo0002">西柏坡</a><a href="http://www.byts.com.cn/line/langyashan0002">狼牙山</a>
                           </dd>
                        </dl>
                       
                        <dl>
                            <dt><a href="http://www.byts.com.cn/line/jingjiaolvyou001" target="_blank">京郊旅游</a></dt>
                            <dd class="cfix">
                           <a href="http://www.byts.com.cn/line/huailou0002">怀柔</a><a href="http://www.byts.com.cn/line/miyun0002">密云</a><a href="http://www.byts.com.cn/line/pinggu0002">平谷</a><a href="http://www.byts.com.cn/line/yanqing0002">延庆</a><a href="http://www.byts.com.cn/line/fangshan0002">房山</a><a href="http://www.byts.com.cn/line/changping0002">昌平</a><a href="http://www.byts.com.cn/line/mentougou0002">门头沟</a><a href="http://www.byts.com.cn/line/panshan0002">盘山</a>
                           </dd>
                        </dl>
                        
                      
                        
                      
                    </div>
                    
                    <div class="newChannel-right J-newChannel-right">
                        <ul class="newChannel-tab J-newChannel-tab">
                        
                         
                           <li class="cur">河北</li>
                           
                      
                           <li>京郊旅游</li>
                           
                       
                           
                        </ul>
                        
                        
                         <div class="newChannel-list J-newChannel-list visible">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/nanbeidaihe0002/1136.htm" target="_blank" title="南北戴河、山海关老龙头、出海游船双汽2日">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/1404388605_2391.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：1136</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/nanbeidaihe0002/1136.htm" target="_blank" title="南北戴河、山海关老龙头、出海游船双汽2日">南北戴河、山海关老龙头、出海游船双汽2日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif"> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 天天发团，入住准3星酒店，包含老龙头门票，如需 接站 五环以内 +30元/人 、...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥300</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/mulanweichang0002/3835.htm" target="_blank" title="木兰围场、内蒙古乌兰布通草原2日">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/1404643089_7531.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：3835</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/mulanweichang0002/3835.htm" target="_blank" title="木兰围场、内蒙古乌兰布通草原2日">木兰围场、内蒙古乌兰布通草原2日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 散客周6发，团队可天天发（单团单议），包含乌兰布通草原 门票 ...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期六</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥480</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/chengde02/3756.htm" target="_blank" title="避暑山庄、普宁寺、普佑寺双座2日">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/1404383744_6802.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：3756</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/chengde02/3756.htm" target="_blank" title="避暑山庄、普宁寺、普佑寺双座2日">避暑山庄、普宁寺、普佑寺双座2日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 天天发团， 门票全含（避暑山庄、普宁寺、普佑寺），升级入住挂牌3星酒店...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥480</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/mulanweichang0002/3827.htm" target="_blank" title="木兰围场、内蒙古乌兰布通草原、蛤蟆坝3日">
                                            <img width="118px" height="67px" data-original="/uploads/image/hujie/1404618395_9762.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：3827</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/mulanweichang0002/3827.htm" target="_blank" title="木兰围场、内蒙古乌兰布通草原、蛤蟆坝3日">木兰围场、内蒙古乌兰布通草原、蛤蟆坝3日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> 散客周二五发，7-8月暑期天天发，团队根据人数（单团单议），包含乌兰布通...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥580</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/hebei001" target="_blank" title="更多出境游">更多河北线路&gt;&gt;</a></p>
                        </div><div class="newChannel-list J-newChannel-list ">
 


                            <ul class="clearfix">
                                
                                
                                <li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/pinggu0002/4055.htm" target="_blank" title="京东大峡谷、京东石林峡、寻香美味水库鱼2日">
                                            <img width="118px" height="67px" data-original="/uploads/image/jq/1406889537_5202.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：4055</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/pinggu0002/4055.htm" target="_blank" title="京东大峡谷、京东石林峡、寻香美味水库鱼2日">京东大峡谷、京东石林峡、寻香美味水库鱼2日</a><img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/tuijian.gif">
                                        </dt>
							            <dd class="desc"> * 适于集体出游，暂不接待散客，报价为30人以上团体价格，根据实际出游人数...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n"></span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥450元/人单团单议</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/miyun0002/3771.htm" target="_blank" title="古北水镇双汽1日">
                                            <img width="118px" height="67px" data-original="/uploads/image/jq/1404302008_3219.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：3771</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/miyun0002/3771.htm" target="_blank" title="古北水镇双汽1日">古北水镇双汽1日</a> <img src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/fast.gif">
                                        </dt>
							            <dd class="desc"> 古北水镇 位于北京市密云县古北口镇，背靠中国最美、最险的司马台长城，坐...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期六</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥200</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/pinggu0002/2561.htm" target="_blank" title="春游平谷桃花节 观景赏花桃花海、踏青探秘古火">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140508/14050R04159.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2561</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/pinggu0002/2561.htm" target="_blank" title="春游平谷桃花节 观景赏花桃花海、踏青探秘古火">春游平谷桃花节 观景赏花桃花海、踏青探秘古火</a>
                                        </dt>
							            <dd class="desc"> * 适于集体出游，暂不接待散客，报价为30人以上团体价格，根据实际出游人数...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        <p class="price"><span class="u"></span><span class="n">￥168</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
<li class="lineitem cfix">
                                    <div class="img fn-left">
							            <a href="http://www.byts.com.cn/line/miyun0002/2559.htm" target="_blank" title="雾灵山、遥桥古堡、雾灵湖、度假村娱乐双汽2日">
                                            <img width="118px" height="67px" data-original="/uploads/allimg/20140508/14050R01Q0.jpg" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/bg.gif" alt="">
                                        </a>
                                        <div class="prd-num">产品编号：2559</div>
						            </div>
						            <dl class="info fn-left">
							            <dt class="t">
                                            <a href="http://www.byts.com.cn/line/miyun0002/2559.htm" target="_blank" title="雾灵山、遥桥古堡、雾灵湖、度假村娱乐双汽2日">雾灵山、遥桥古堡、雾灵湖、度假村娱乐双汽2日</a>
                                        </dt>
							            <dd class="desc"> 适于集体出游，暂不接待散客，报价为30人以上团体价格，根据实际出游人数单...</dd>
							            <dd class="moredesc">
                                            <span>满意度：<span class="n">100%</span></span>
                                            <span class="pin"><span class="n">&nbsp;0&nbsp;</span>人点评</span>
                                            <span>最近出发班期：<span class="n">星期一,星期二,星期三</span></span>
                                
                                        
                                        </dd>
						            </dl>
						            <div class="detail fn-right">
                                        
                                        <span class="sup">网订优惠</span>
                                        
                                        <p class="price"><span class="u"></span><span class="n">￥450</span>起</p>
                                        <span class="s m-5 J_powerFloat" rel="J_popDisong" data-song="200"><em class="dsnum"></em></span>
                                    </div>
					            </li>
 
                              
                                
                            </ul>
                        <p class="newChannel-more"><a href="http://www.byts.com.cn/line/jingjiaolvyou001" target="_blank" title="更多出境游">更多京郊旅游线路&gt;&gt;</a></p>
                        </div>   
           
                    </div>
                </div>
         </div>
<!--周边旅游结束-->

<!--其他模块-->
<div class="otherMode">
  <div class="outer clearfix">
	<div class="block">
		<h2 class="hd">
		<span><a href="http://www.byts.com.cn/visa" target="_blank">更多&gt;&gt;</a></span>
		<b>旅游签证</b>
		</h2>
	<div class="content">
		<ul class="hoverBlock clearfix">
        <li class="on">
	     <p><span><em>¥7500</em>起</span><a href="http://www.byts.com.cn/visa/babuyaxinjineiya002/2285.htm" target="_blank" title="巴布亚新几内亚商务签证">巴布亚新几内亚商务签证</a></p>
	     <dl class="thumb clearfix">								
	        <dt><a href="http://www.byts.com.cn/visa/babuyaxinjineiya002/2285.htm" target="_blank"><img style="display: inline;" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/149-1404292320440-L.jpg" alt="" height="62" width="90"></a></dt>					
	        <dd><a href="http://www.byts.com.cn/visa/babuyaxinjineiya002/2285.htm" target="_blank" title="巴布亚新几内亚商务签证">巴布亚新几内亚商务签证</a></dd>			
	        <dd><a href="http://www.byts.com.cn/visa/babuyaxinjineiya002/2285.htm" target="_blank" class="orderBtn" title="立即预订">&nbsp;</a><em class="price">¥7500</em>起</dd>
	      </dl>
        </li>
<li class="">
	     <p><span><em>¥1500</em>起</span><a href="http://www.byts.com.cn/visa/guba002/2279.htm" target="_blank" title="古巴商务签证">古巴商务签证</a></p>
	     <dl class="thumb clearfix">								
	        <dt><a href="http://www.byts.com.cn/visa/guba002/2279.htm" target="_blank"><img style="display: inline;" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/149-1404292311410-L.png" alt="" height="62" width="90"></a></dt>					
	        <dd><a href="http://www.byts.com.cn/visa/guba002/2279.htm" target="_blank" title="古巴商务签证">古巴商务签证</a></dd>			
	        <dd><a href="http://www.byts.com.cn/visa/guba002/2279.htm" target="_blank" class="orderBtn" title="立即预订">&nbsp;</a><em class="price">¥1500</em>起</dd>
	      </dl>
        </li>
<li class="">
	     <p><span><em>¥7500</em>起</span><a href="http://www.byts.com.cn/visa/babuyaxinjineiya002/2284.htm" target="_blank" title="巴布亚新几内亚旅游签证">巴布亚新几内亚旅游签证</a></p>
	     <dl class="thumb clearfix">								
	        <dt><a href="http://www.byts.com.cn/visa/babuyaxinjineiya002/2284.htm" target="_blank"><img style="display: inline;" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/149-1404292319520-L.jpg" alt="" height="62" width="90"></a></dt>					
	        <dd><a href="http://www.byts.com.cn/visa/babuyaxinjineiya002/2284.htm" target="_blank" title="巴布亚新几内亚旅游签证">巴布亚新几内亚旅游签证</a></dd>			
	        <dd><a href="http://www.byts.com.cn/visa/babuyaxinjineiya002/2284.htm" target="_blank" class="orderBtn" title="立即预订">&nbsp;</a><em class="price">¥7500</em>起</dd>
	      </dl>
        </li>
<li class="">
	     <p><span><em>¥1500</em>起</span><a href="http://www.byts.com.cn/visa/guba002/2278.htm" target="_blank" title="古巴旅游签证">古巴旅游签证</a></p>
	     <dl class="thumb clearfix">								
	        <dt><a href="http://www.byts.com.cn/visa/guba002/2278.htm" target="_blank"><img style="display: inline;" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/149-1404292310540-L.png" alt="" height="62" width="90"></a></dt>					
	        <dd><a href="http://www.byts.com.cn/visa/guba002/2278.htm" target="_blank" title="古巴旅游签证">古巴旅游签证</a></dd>			
	        <dd><a href="http://www.byts.com.cn/visa/guba002/2278.htm" target="_blank" class="orderBtn" title="立即预订">&nbsp;</a><em class="price">¥1500</em>起</dd>
	      </dl>
        </li>
<li class="">
	     <p><span><em>¥1599</em>起</span><a href="http://www.byts.com.cn/visa/xinxilan002/2283.htm" target="_blank" title="新西兰商务签证">新西兰商务签证</a></p>
	     <dl class="thumb clearfix">								
	        <dt><a href="http://www.byts.com.cn/visa/xinxilan002/2283.htm" target="_blank"><img style="display: inline;" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/149-140429231P80-L.png" alt="" height="62" width="90"></a></dt>					
	        <dd><a href="http://www.byts.com.cn/visa/xinxilan002/2283.htm" target="_blank" title="新西兰商务签证">新西兰商务签证</a></dd>			
	        <dd><a href="http://www.byts.com.cn/visa/xinxilan002/2283.htm" target="_blank" class="orderBtn" title="立即预订">&nbsp;</a><em class="price">¥1599</em>起</dd>
	      </dl>
        </li>
<li class="">
	     <p><span><em>¥2000</em>起</span><a href="http://www.byts.com.cn/visa/gelunbiya002/2277.htm" target="_blank" title="哥伦比亚商务签证">哥伦比亚商务签证</a></p>
	     <dl class="thumb clearfix">								
	        <dt><a href="http://www.byts.com.cn/visa/gelunbiya002/2277.htm" target="_blank"><img style="display: inline;" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/149-140429230Q20-L.jpg" alt="" height="62" width="90"></a></dt>					
	        <dd><a href="http://www.byts.com.cn/visa/gelunbiya002/2277.htm" target="_blank" title="哥伦比亚商务签证">哥伦比亚商务签证</a></dd>			
	        <dd><a href="http://www.byts.com.cn/visa/gelunbiya002/2277.htm" target="_blank" class="orderBtn" title="立即预订">&nbsp;</a><em class="price">¥2000</em>起</dd>
	      </dl>
        </li>
<li class="">
	     <p><span><em>¥1599</em>起</span><a href="http://www.byts.com.cn/visa/xinxilan002/2282.htm" target="_blank" title="新西兰旅游签证">新西兰旅游签证</a></p>
	     <dl class="thumb clearfix">								
	        <dt><a href="http://www.byts.com.cn/visa/xinxilan002/2282.htm" target="_blank"><img style="display: inline;" src="./北京青年旅行社股份有限公司官网 北京青旅_北青旅总社官网北京旅行社_files/149-140429231G20-L.png" alt="" height="62" width="90"></a></dt>					
	        <dd><a href="http://www.byts.com.cn/visa/xinxilan002/2282.htm" target="_blank" title="新西兰旅游签证">新西兰旅游签证</a></dd>			
	        <dd><a href="http://www.byts.com.cn/visa/xinxilan002/2282.htm" target="_blank" class="orderBtn" title="立即预订">&nbsp;</a><em class="price">¥1599</em>起</dd>
	      </dl>
        </li>
<li class="">
	     <p><span><em>¥1800</em>起</span><a href="http://www.byts.com.cn/visa/gelunbiya002/2276.htm" target="_blank" title="哥伦比亚旅游签证">哥伦比亚旅游签证</a></p>
	     <dl class="thumb clearfix">								
	        <dt><a href="http://www.byts.com.cn/visa/gelunbiya002/2276.htm" target="_blank"><img style="display: inline;" src="image/149-140429230H10-L.jpg" alt="" height="62" width="90"></a></dt>					
	        <dd><a href="http://www.byts.com.cn/visa/gelunbiya002/2276.htm" target="_blank" title="哥伦比亚旅游签证">哥伦比亚旅游签证</a></dd>			
	        <dd><a href="http://www.byts.com.cn/visa/gelunbiya002/2276.htm" target="_blank" class="orderBtn" title="立即预订">&nbsp;</a><em class="price">¥1800</em>起</dd>
	      </dl>
        </li>

    </ul>
  </div>
</div>
<div class="block">
		<h2 class="hd">
		<span><a href="http://www.byts.com.cn/tickets" target="_blank">更多&gt;&gt;</a></span>
		<b>旅游门票</b>
		</h2>
	<div class="content">
		<ul class="hoverBlock clearfix">
        
    </ul>
  </div>
</div>

<div class="block news">
	<h2 class="hd">
	<span><a href="http://www.byts.com.cn/news" target="_blank">更多&gt;&gt;</a></span>
	<b>旅游资讯</b>
	</h2>
	<div class="content">
		<ul class="nuesBlock clearfix">
        <li><span>2014-06-18</span><a href="http://www.byts.com.cn/news/lvyouxinwen/sczg.htm" target="_blank" title="&lt;font color=&#39;#FF6633&#39;&gt;诗词中国----国学暑期培训营&lt;/font&gt;"><font color="#FF6633">诗词中国----国学暑期培训营</font></a></li>
<li><span>2014-04-23</span><a href="http://www.byts.com.cn/news/lvyouxinwen/2184.htm" target="_blank" title="北京青年旅行社荣获中网可信网站认证">北京青年旅行社荣获中网可信网站认证</a></li>
<li><span>2014-04-23</span><a href="http://www.byts.com.cn/news/lvyouxinwen/2183.htm" target="_blank" title="北京青年旅行社荣获国家AAAA级旅行社">北京青年旅行社荣获国家AAAA级旅行社</a></li>
<li><span>2014-02-13</span><a href="http://www.byts.com.cn/news/lvyouxinwen/672.htm" target="_blank" title="2013全国旅游直接投资达5144亿元">2013全国旅游直接投资达5144亿元</a></li>
<li><span>2014-02-13</span><a href="http://www.byts.com.cn/news/lvyouxinwen/671.htm" target="_blank" title="张家界专家：旅游市场过度依赖公款消费受冲击">张家界专家：旅游市场过度依赖公款消费受冲击</a></li>
<li><span>2014-02-13</span><a href="http://www.byts.com.cn/news/lvyouxinwen/670.htm" target="_blank" title="发改委：推动出台促进旅游消费政策">发改委：推动出台促进旅游消费政策</a></li>
<li><span>2014-02-13</span><a href="http://www.byts.com.cn/news/1/669.htm" target="_blank" title="自驾出游需防“路怒” 出现烦躁情绪应到路边休">自驾出游需防“路怒” 出现烦躁情绪应到路边休</a></li>
<li><span>2014-02-13</span><a href="http://www.byts.com.cn/news/1/668.htm" target="_blank" title="美国自驾游终年火爆的精彩路线推荐">美国自驾游终年火爆的精彩路线推荐</a></li>
<li><span>2014-02-13</span><a href="http://www.byts.com.cn/news/1/667.htm" target="_blank" title="签自驾游合同出车祸 法院仍判旅行社该赔">签自驾游合同出车祸 法院仍判旅行社该赔</a></li>
<li><span>2014-02-13</span><a href="http://www.byts.com.cn/news/1/666.htm" target="_blank" title="自驾游半个月收到20张超速罚单 网友喊冤">自驾游半个月收到20张超速罚单 网友喊冤</a></li>

										
									</ul>
						</div>
					</div>
				</div>
			</div>
<!--其他模块 end-->

</div>      

<div style="clear:both;"></div>

@include('includes.foot')

<!-- WPA Button Begin -->
<script charset="utf-8" type="text/javascript" src="../css/wpa.php"></script>
<!-- WPA Button End -->
<script language="JavaScript" src="js/floatcard"></script>
<script src="../js/all_20100501.js"></script><script id="TQGetrequestUser_JS"></script>
<script id="TQGetIsNewMsg_JS"></script><script src="../js/as.js"></script><object id="tq_as" name="tq_as" style="position:absolute;left:0px;top:-5px;" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1" height="1"><param name="movie" value="http://sysimages.tq.cn/js/vip/shareObject.swf"><param name="allowScriptAccess" value="always"><object id="tq_as2" name="tq_as2" style="position:absolute;left:0px;top:-5px;" type="application/x-shockwave-flash" data="http://sysimages.tq.cn/js/vip/shareObject.swf" width="1" height="1"><param name="allowScriptAccess" value="always"></object></object>








        <script src="../js/jquery.lazyload.js" type="text/javascript"></script> 
        <script type="text/javascript" src="../js/ScrollText.js"></script>
         <script type="text/javascript">
		 
        $(function () {
		
            $(".travel-tj-list img").lazyload({
                effect: "fadeIn"
            });
			 $(".J-newChannel-list img,.hs_con img,.newAd img").lazyload({
                effect: "fadeIn"
            });

           
        });
		
		
		     topMsg();       //登陆下方滚动效果
			     function topMsg(){        var scrolldown = new ScrollText("cust_news");        scrolldown.LineHeight = 26;        scrolldown.Amount = 1;        scrolldown.Direction = "up";        scrolldown.Start();    }    //lazyload  
				 
				 
				 
				 
 $(".J-newChannel-right").each(function () {

            var that = $(this);

            that.find(".J-newChannel-tab li").click(function () {

                var index = $(this).index();

			

                $(this).addClass("cur").siblings().removeClass("cur");

                that.find(".J-newChannel-list").hide().eq(index).show();

                

            });

        });

		 
function setxlTab(name,cursel,n,cbs,cbsnums){
	if(cbs!=""){
		//document.getElementById(cbs).className="intab"+cbsnums;
		//document.getElementById("con_"+cbs).style.display="none";
	}
	for(i=1;i<=n;i++){
		var menu=document.getElementById(name+i);
		var con=document.getElementById("con_"+name+"_"+i);
		menu.className=i==cursel?"hover":"intab";
		con.style.display=i==cursel?"block":"none";
	}
}

			
		</script>
        
        
        <script type="text/javascript">
		    $(document).ready(function () {
		        $('img[data-original]').lazyload({ threshold: 100 });
		        
		        $('.hoverBlock li').hover( //酒店、景点推荐鼠标经过效果
				function () {
				    $(this).parent().find('li').removeClass('on');
				    $(this).addClass('on').find('img[data-original]').each(function () {
				        $(this).attr('src', $(this).attr('data-original')).removeAttr('data-original');
				    });
				}
			);
		        var navPos = 0;
		        $('#allClass li').each(function (i) { //首页快速导航右侧模块重新定位
		            $(this).find('.sub').css({ 'top': navPos });
		            navPos -= 46;
		        });
		    });
		</script>






</body></html>