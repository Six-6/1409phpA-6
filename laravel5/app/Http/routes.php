<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::get('/', 'WelcomeController@index');
Route::get('/', 'home\RecursionController@recursion');/**前台首页**/
Route::any('abroad', 'AbroadController@index');//出境
Route::any('users', 'UserController@index');//会员中心
Route::any('domestic', 'DomesticController@index');//国内


/**前台**/
Route::get('home/recursion', 'home\RecursionController@recursion');/**首页无限极**/
Route::post('home/searchs', 'home\RecursionController@searchs');/**首页全文检索搜索**/
Route::get('home/sous', 'home\RecursionController@searchDay');/**根据旅游天数搜索**/
Route::get('home/footprint', 'home\FootprintController@footprint');/**用户--我的足迹**/
Route::get('home/personDel', 'home\FootprintController@personDel');/**用户--退出*/

/**
 * 前台国内游
 */
Route::get('home/domestic','home\DomesticController@index');/**国内游展示**/
Route::get('home/contrast','home\DomesticController@contrast');/**经典对比**/
Route::get('home/contrasts','home\DomesticController@contrasts');/**景点对比**/
Route::get('home/scenicDetails','home\DomesticController@scenicDetails');/**景点详情**/
Route::get('home/fill','home\DomesticController@fill');/**填写订单**/
Route::get('home/write_information','home\DomesticController@write_information');/**填写游客信息**/
Route::post('home/tourist','home\DomesticController@tourist_information');/**填写游客信息**/
Route::get('home/check','home\DomesticController@check_order');/**核对订单**/
Route::get('home/payment','home\DomesticController@payment');/**下单付款**/

/**前台用户管理**/
Route::get('home/personAdd',"home\UserController@add");//个人信息展示
Route::post('home/personUpd',"home\UserController@upd");//个人信息修改
Route::post('home/personVer',"home\UserController@ver");//个人信息验证
Route::any('home/imageAdd',"home\UserController@image");//头像上传
Route::post('home/pswUpd',"home\UserController@ate");//密码修改
Route::get('home/ordersAdd',"home\OrderController@line");//线路订单
Route::get('home/integralAdd',"home\OrderController@integral");//积分显示
Route::get('home/viewAdd',"home\OrderController@view");//我的评论
Route::get('home/common',"home\OrderController@show");/**主页面显示**/
Route::get('home/pswAdd',"home\UserController@psw");//密码查看

Route::post('home/checkPwd',"home\UserController@pwd");//密码验证
Route::get('home/orderAdd',"home\OrderController@add");/**订单列表**/
/**前台兑换管理**/
Route::get('home/exchangeShow',"home\ExchangeController@show");/**兑换页面显示**/
Route::post('home/detailsShow',"home\ExchangeController@id");/**兑换商品详情**/
Route::get('home/detailsSel',"home\ExchangeController@details");/**兑换商品详情**/
Route::post('home/detailsOrder',"home\ExchangeController@order");/**兑换商品订单**/
Route::post('home/orderAdd',"home\ExchangeController@orderAdd");/**确认兑换**/

/**前台志同道合**/
Route::post('home/funExchange',"home\FunController@exchange");/**更换页面**/
Route::get('home/funShow',"home\FunController@show");/**志同道合显示**/
Route::get('home/funWrite',"home\FunController@lists");/**志同道合详细页面展示**/
Route::get('home/funReplay',"home\FunController@replay");/**志同道合列表展示**/
Route::get('home/funPost',"home\FunController@post");/**志同道合发起页面**/
Route::post('home/funAdd',"home\FunController@adds");/**志同道合添加页面**/
Route::post('home/funUser',"home\FunController@user");/**志同道合关联好友**/
/***前台 风向标***/
Route::get('home/siterecommend', 'season\IndicatorController@siterecommend');//风向标首页
Route::get('home/month', 'season\IndicatorController@month');//季节推荐
Route::get('home/ranking', 'season\RankingController@index');//排行榜
Route::get('home/note', 'season\NoteController@index');//前台游记首页
Route::get('home/lnews', 'season\NoteController@lnews');//前台最新发布

/**后台登录 权限控制**/
Route::get('admin/lo', 'admin\loginController@index');/**后台登录**/
Route::get('admin/loin', 'admin\loginController@loin');/**后台登录**/
Route::get('admin/unsession', 'admin\IndexController@unsession');/**退出**/
Route::group(['middleware' => ['common']], function () {
    Route::get('admin/in', 'admin\IndexController@index');/**后台主页**/
	Route::any('admin/userAdd',"admin\AdminController@add");/**管理员添加**/
	Route::get('admin/userInfo',"admin\AdminController@info");/**管理员信息完善查看**/
	Route::post('admin/infoAdd',"admin\AdminController@perfect");/**管理员信息完善**/
	Route::get('admin/userShow',"admin\AdminController@show");/**管理员查看**/
	Route::post('admin/checkUser',"admin\AdminController@check");/**管理员验证**/
	Route::get('admin/userDel',"admin\AdminController@del");/**管理员删除**/
    /**后台管理员管理**/
	Route::any('admin/userAdd',"admin\AdminController@add");/**管理员添加**/
	Route::get('admin/userInfo',"admin\AdminController@info");/**管理员信息完善查看**/
	Route::post('admin/infoAdd',"admin\AdminController@perfect");/**管理员信息完善**/
	Route::get('admin/userShow',"admin\AdminController@show");/**管理员查看**/
	Route::post('admin/checkUser',"admin\AdminController@check");/**管理员验证**/
	Route::get('admin/userDel',"admin\AdminController@del");/**管理员删除**/
	/**后台兑换管理**/
	Route::any('admin/exchangeAdd',"admin\ExchangeController@add");/**兑换添加**/
	Route::post('admin/checkName',"admin\ExchangeController@check");/**兑换验证**/
	Route::get('admin/exchangeShow',"admin\ExchangeController@show");/**兑换展示**/
	/**后台 游记管理**/
	Route::get('admins', 'admin\TravelnotesController@indexs');/**游记管理**/

	/**后台 游记管理**/
	Route::get('admins', 'admin\TravelnotesController@indexs');/**游记管理**/
	Route::get('admin/season', 'admin\TravelnotesController@season');/**当季推荐**/
	Route::post('admin/fileaddse', 'admin\TravelnotesController@fileadd');/**当季修改**/
	Route::get('admin/travelnotes', 'admin\TravelnotesController@index');/**游记管理2**/
	Route::get('admin/travelsupdata', 'admin\TravelnotesController@updata');/**审核2**/
	Route::get('admin/classics', 'admin\TravelnotesController@classics');/**经典回顾2**/
	Route::get('admin/travelsdelete', 'admin\TravelnotesController@deletes');/**游记删除**/
	Route::get('admin/travelsdelet', 'admin\TravelnotesController@delet');/**游记删除**/
	Route::get('admin/audit', 'admin\TravelnotesController@audit');/**展示待审核2**/
	Route::get('admin/essences', 'admin\TravelnotesController@essences');/**游记加精**/
	/**后台主页**/
	Route::get('admin/way', 'WayController@index');/**旅游方式2**/
	Route::get('admin/wayadd', 'WayController@wayadd');/**2**/
	Route::get('admin/addway', 'WayController@addway');/**旅游方式添加3**/
	Route::get('admin/waysel', 'WayController@waysel');/**旅游景点2**/
	Route::get('admin/jgaiWay', 'WayController@jgaiWay');/**旅游方式即点即改**/
	Route::get('admin/jgaitypes', 'WayController@jgaitypes');/**旅游类型即时修改**/
	Route::get('admin/types','WayController@types');
	Route::get('admin/typedel','WayController@typedel');/**删除大分类**/
	Route::get('admin/delsmall','WayController@delsmall');/**删除小分类**/
	Route::get('admin/delway','WayController@delway');/**删除景点**/
	Route::get('admin/waydetail','WayController@waydetail');/**景点详情**/
	/**图片上传**/
	Route::post('admin/uploas', 'WayController@uploas');/**旅游景点添加**/
	/**推荐管理**/
	
});
	
/**前台登录 退出 开始**/
Route::get('blo','LoginController@index');/**前台登录**/
Route::post('bloin','LoginController@bloin');/**前台登录**/
Route::get('register','LoginController@register');/**前台注册**/
Route::post('onregister','LoginController@onregister');/**前台注册**/

/***前台 风向标***/
Route::get('home/siterecommend', 'season\IndicatorController@siterecommend');//风向标首页
Route::get('home/month', 'season\IndicatorController@month');//季节推荐
Route::get('home/ranking', 'season\RankingController@index');//排行榜
Route::get('home/note', 'season\NoteController@index');//前台游记首页
Route::post('home/search', 'season\NoteController@search');//前台游记首页
Route::get('home/lnews', 'season\NoteController@lnews');//前台最新发布
/***前台 主题***/
Route::get('home/them', 'season\ThemeController@them');//前台风向标主题 首页
Route::get('home/themes', 'season\ThemeController@themes');//前台风向标主题 权威
Route::get('home/freshs', 'season\ThemeController@freshs');//前台风向标主题 尝鲜
Route::get('home/shutter', 'season\ThemeController@shutter');//前台风向标主题 快门
Route::get('home/cate', 'season\ThemeController@cate');//前台风向标主题 美食
Route::get('home/shopping', 'season\ThemeController@shopping');//前台风向标主题 购物
Route::get('home/literature', 'season\ThemeController@literature');//前台风向标主题 文艺
Route::get('home/details', 'season\ThemeController@details');//游记详情
Route::post('home/dcomment', 'season\ThemeController@dcomment');//游记详情评论





















































/***前台 风向标***/
Route::get('home/siterecommend', 'season\IndicatorController@siterecommend');//风向标首页
Route::get('home/month', 'season\IndicatorController@month');//季节推荐
Route::get('home/ranking', 'season\RankingController@index');//排行榜
Route::get('home/note', 'season\NoteController@index');//前台游记首页
Route::post('home/search', 'season\NoteController@search');//前台游记首页
Route::get('home/lnews', 'season\NoteController@lnews');//前台最新发布

/***前台 主题***/
Route::get('home/them', 'season\ThemeController@them');//前台风向标主题 首页
Route::get('home/themes', 'season\ThemeController@themes');//前台风向标主题 权威
Route::get('home/freshs', 'season\ThemeController@freshs');//前台风向标主题 尝鲜
Route::get('home/shutter', 'season\ThemeController@shutter');//前台风向标主题 快门
Route::get('home/cate', 'season\ThemeController@cate');//前台风向标主题 美食
Route::get('home/shopping', 'season\ThemeController@shopping');//前台风向标主题 购物
Route::get('home/literature', 'season\ThemeController@literature');//前台风向标主题 文艺
Route::get('home/details', 'season\ThemeController@details');//游记详情
Route::post('home/dcomment', 'season\ThemeController@dcomment');//游记详情评论
Route::get('home/praise', 'season\ThemeController@praise');//游记点赞
Route::get('home/publishs', 'season\PublishController@publish');//写游记
Route::any('home/yfile', 'season\PublishController@yfile');//图片上传
Route::post('home/collect', 'season\PublishController@collect');//游记添加
Route::get('home/mysit', 'season\PublishController@mysit');//我的游记































































































































































































































































































































































Route::get('home/domestic','home\DomesticController@index');/**国内游展示**/
Route::get('home/contrast','home\DomesticController@contrast');/**经典对比**/
Route::get('home/contrasts','home\DomesticController@contrasts');/**景点对比**/
Route::get('home/scenicDetails','home\DomesticController@scenicDetails');/**景点详情**/
Route::get('home/fill','home\DomesticController@fill');/**填写订单**/ 















































































































/**前台**/
Route::get('home/recursion', 'home\RecursionController@recursion');/**首页无限极**/
Route::post('home/searchs', 'home\RecursionController@searchs');/**首页全文检索搜索**/
Route::get('home/moneys', 'home\RecursionController@searchMoney');/**根据旅游资金搜索**/
Route::get('home/destination', 'home\RecursionController@destination');/**根据旅游目的地搜索**/
Route::get('home/footprint', 'home\FootprintController@footprint');/**用户--我的足迹**/
Route::get('home/personDel', 'home\FootprintController@personDel');/**用户--退出*/
Route::get('home/collect', 'home\FootprintController@yhCollect');/**用户--收藏*/
Route::get('home/cancel', 'home\FootprintController@cancel');/**用户--取消收藏*/
Route::get('home/evaluate', 'home\FootprintController@evaluate');/**用户--评价*/
Route::get('home/record', 'home\FootprintController@record');/**用户--评价记录*/
Route::get('home/integralDetails', 'home\FootprintController@integralDetails');/**用户--积分详情*/



Route::get('home/scenic', 'home\RecursionController@scenic');/**前台地区下的景点**/

Route::get('home/pages', 'home\FootprintController@pages');/**用户--收藏分页*/
Route::get('home/userhome', 'home\FootprintController@userhome');/**用户--收藏分页*/
Route::get('home/regionid', 'home\RecursionController@regionid');/**首页--根据地区查景点*/
Route::get('home/pushClass', 'home\RecursionController@pushClass');/**多项搜索--根据地区查景点*/
Route::get('home/contentChange', 'home\RecursionController@contentChange');/**多项搜索--根据地区查景点*/



Route::get('/', 'home\RecursionController@recursion');/**前台首页**/
Route::get('home/scenic', 'home\RecursionController@scenic');/**前台地区下的景点**/

Route::get('admin/useradmin', 'WayController@useradmin');/**后台用户管理**/
Route::get('admin/toExamine', 'WayController@toExamine');/**后台用户评论审核**/
Route::get('admin/examine', 'WayController@examine');/**后台用户管理**/
Route::get('admin/jgaiExamine', 'WayController@jgaiExamine');/**后台用户管理**/
