<?php 
namespace App\Http\Controllers\season;
use DB,Input,Session;
use Request;
use App\Http\Controllers\Controller;
use App\Theme;
use Memcache;
header("content-type:text/html;charset=utf-8");
class ThemeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 * 
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}
	
	//首页权威
	public function them()
	{
		//页数
		$page=Request::get('page');
		
		$data = Theme::youse($page);				//调用查询方法
		return view('home.theme',['data' => $data]);
	}
	
	//首页权威
	public function themes()
	{
		//页数
		$page=Request::get('page');
		
		$data = Theme::seldata($page);				//调用查询方法
		return view('home.theme',['data' => $data]);
	}
	
	//尝鲜
	public function freshs()
	{		
		//页数
		$page=Request::get('page');
	
		$data = Theme::frsh($page);					//调用查询方法
		return view('home.theme',['data' => $data]);		
	}
	
	//快门
	public function shutter()
	{
		$page=Request::get('page');
		
		$data = Theme::shutter($page);		//调用查询方法
		return view('home.theme',['data' => $data]);
	}
	
	//美食
	public function cate()
	{
		$page=Request::get('page');
		
		$data = Theme::cate($page);		//调用查询方法
		return view('home.theme',['data' => $data]);
	}
	
	//购物
	public function shopping()
	{
		$page=Request::get('page');
		
		$data = Theme::shopping($page);		//调用查询方法
		return view('home.theme',['data' => $data]);
	}
	
	//文艺
	public function literature()
	{
		$page=Request::get('page');
		
		$data = Theme::literature($page);		//调用查询方法
		return view('home.theme',['data' => $data]);
	}
	
	//详情
	public function details()
	{
		$id=Request::get('id');
	
		$data = Theme::details($id);		//调用查询方法

		return view('home.details',['data' => $data]);
	}
	
	//详情评论
	public function dcomment()
	{	
		$u_id = Session::get('u_id');
		$data=Request::all();
		
		if(empty($u_id))
		{
            $url = $_SERVER['HTTP_REFERER'];
            Session::put('url',$url);
			return redirect('blo');		
		}
		
		$url = $_SERVER['HTTP_REFERER'];
		Theme::dsession($u_id,$data);
		
						
		return redirect($url);				
	}
	
	//点赞
	public function praise()
	{
		//是否在线
		$u_id = Session::get('u_id');
		if(empty($u_id))
		{
			echo 1;die;
		}
		$data=Request::all();
		
		//实例化Memcache
		$mem = new Memcache();
		//连接memcache服务器 第一个参数是memcached服务器的地址，第二个是端口号，端口号默认是11211
		$mem -> connect("127.0.0.1",11211);
		//查询缓存中是否有$region的剑.
		if($mem -> get($u_id.$data['tt_id']))
		{
			echo 2;die;
		}
		else
		{
			$a = $mem -> set($u_id.$data['tt_id'],$data['tt_id'],0,64800);
			$user = DB::table('travels')->where('tt_id',$data['tt_id'])->update(['t_zambia' => $data['num']+1]);		
			$pei=DB::table('travels')->where('tt_id',$data['tt_id'])->lists('t_zambia');
			$isu="<label  class='likeNum'>".$pei[0]."</label>";
			echo json_encode($isu);
		}		
	}
	
	
	
}