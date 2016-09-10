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
Route::any('/', 'HomeController@login');//网站首页
Route::any('abroad', 'AbroadController@index');//出境
Route::any('users', 'UserController@index');//会员中心
Route::any('domestic', 'DomesticController@index');//国内



/**管理员管理**/
Route::any('admin/userAdd',"admin\AdminController@add");/**管理员添加**/
Route::get('admin/userInfo',"admin\AdminController@info");/**管理员信息完善查看**/
Route::post('admin/infoAdd',"admin\AdminController@perfect");/**管理员信息完善**/
Route::get('admin/userShow',"admin\AdminController@show");/**管理员查看**/
Route::post('admin/checkUser',"admin\AdminController@check");/**管理员验证**/
Route::get('admin/userDel',"admin\AdminController@del");/**管理员删除**/
/**兑换管理**/
Route::any('admin/exchangeAdd',"admin\ExchangeController@add");/**兑换添加**/
Route::post('admin/checkName',"admin\ExchangeController@check");/**兑换验证**/
Route::get('admin/exchangeShow',"admin\ExchangeController@show");/**兑换展示**/

/**前台用户管理**/
Route::get('home/personAdd',"home\UserController@add");//个人信息展示
Route::post('home/personUpd',"home\UserController@upd");//个人信息修改
Route::post('home/personVer',"home\UserController@ver");//个人信息验证
Route::any('home/imageAdd',"home\UserController@image");//头像上传
Route::get('home/pswAdd',"home\UserController@psw");//密码改动












































Route::get('home/pswAdd',"home\UserController@psw");//密码查看
Route::post('home/pswUpd',"home\UserController@ate");//密码修改
Route::post('home/checkPwd',"home\UserController@pwd");//密码验证
Route::get('home/orderAdd',"home\OrderController@add");/**订单列表**/
Route::get('home/viewAdd',"home\ViewController@add");/**评论管理**/

/**积分管理**/
Route::get('home/integralAdd',"home\IntegralController@add");//页面显示
Route::get('home/exchangeAdd',"home\IntegralController@exchange");//积分详情页
Route::post('home/detailsAdd',"home\IntegralController@details");//积分兑换页
Route::get('home/detailsButton',"home\IntegralController@button");//积分兑换详情页
Route::post('home/detailsShow',"home\IntegralController@detailsShow");//积分兑换详情页
Route::post('home/address',"home\IntegralController@goodsDetails");//积分兑换收货地址
Route::any('admin/lo', 'admin/loginController@index');//后台登录













































































/**后台登录 权限控制**/
Route::get('admin/lo', 'admin\loginController@index');/**后台登录**/
Route::post('admin/loin', 'admin\loginController@loin');/**后台登录**/
Route::get('admin/unsession', 'admin\IndexController@unsession');/**退出**/                                                                                                           
Route::get('admin/in', 'admin\IndexController@index');/**后台主页**/

Route::group(['middleware' => ['common']], function () {
	
	Route::get('admin/userShow', 'admin\IndexController@i');/**后台管理员列表**/
	
	Route::any('admin/userAdd',"admin\AdminController@add");/**管理员添加**/
	
	Route::get('admin/userInfo',"admin\AdminController@info");/**管理员信息完善查看**/
	
	Route::post('admin/infoAdd',"admin\AdminController@perfect");/**管理员信息完善**/
	
	Route::get('admin/userShow',"admin\AdminController@show");/**管理员查看**/
	
	Route::post('admin/checkUser',"admin\AdminController@check");/**管理员验证**/
	
	Route::get('admin/userDel',"admin\AdminController@del");/**管理员删除**/

	Route::get('home/orderAdd',"home\OrderController@add");/**订单列表**/

	/**前台用户管理**/
	Route::get('home/personAdd',"home\UserController@add");/**个人信息展示**/
	Route::get('home/personUpd',"home\UserController@upd");/**个人信息修改**/
	Route::get('home/personVer',"home\UserController@ver");/**个人信息验证**/
	Route::any('home/imageAdd',"home\UserController@image");/**头像上传**/
	Route::get('home/pswAdd',"home\UserController@psw");/**密码改动**/

	/**后台 游记管理**/
	Route::get('admins', 'admin\TravelnotesController@indexs');/**游记管理**/
	Route::get('admin/travelnotes', 'admin\TravelnotesController@index');/**游记管理2**/
	Route::get('admin/travelsupdata', 'admin\TravelnotesController@updata');/**审核2**/
	Route::get('admin/classics', 'admin\TravelnotesController@classics');/**经典回顾2**/
	Route::get('admin/travelsdelete', 'admin\TravelnotesController@deletes');/**游记删除**/
	Route::get('admin/travelsdelet', 'admin\TravelnotesController@delet');/**游记删除**/
	Route::get('admin/audit', 'admin\TravelnotesController@audit');/**展示待审核2**/

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

});
/**前台登录 退出 开始**/
Route::get('blo','LoginController@index');/**前台登录**/
Route::post('bloin','LoginController@bloin');/**前台登录**/
Route::get('register','LoginController@register');/**前台注册**/
Route::post('onregister','LoginController@onregister');/**前台注册**/





















































/*****************************风 向 标*********************************/
Route::get('home/siterecommend', 'season\IndicatorController@siterecommend');//风向标首页
Route::get('home/month', 'season\IndicatorController@month');//季节推荐
Route::get('home/ranking', 'season\RankingController@index');//排行榜






























































































































































































































































































































































Route::get('home/domestic','home\DomesticController@index');/**国内游展示**/
Route::get('home/contrast','home\DomesticController@contrast');/**经典对比**/













































































































/**前台**/
Route::get('home/recursion', 'home\RecursionController@recursion');/**首页无限极**/
Route::post('home/searchs', 'home\RecursionController@searchs');/**首页全文检索搜索**/
Route::get('home/sous', 'home\RecursionController@searchDay');/**根据旅游天数搜索**/
Route::get('home/moneys', 'home\RecursionController@searchMoney');/**根据旅游资金搜索**/