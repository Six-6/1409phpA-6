<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;


class Theme extends Model
{
	public static function youse($page)
	{
		//首页
		$data = DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('t_state',1)->get();
		$num = 10;							 //分页从哪个下标开始
		$count = count($data);
		$mexpage = ceil($count/$num);		 //向上取整
		if (empty($page))
		{
			$page = 1;
		}
		if ($page<1) 
		{
			$page = 1;
		}
		if ($page>$mexpage) 
		{
			$page = $mexpage;
		}
		$reg="/^\d+$/";
		if (!preg_match($reg,$page)) {
			$page=1;
		}
		$xia=($page-1)*$num;

		$transmit['data']= DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)
		->where('t_state',1)->skip($xia)->take(12)->orderBy('t_times','desc')->get();
		
		//最大页 当前页 下一页 上一页	
		$transmit['mexpage'] = $mexpage;
		$transmit['page'] = $page;
		$transmit['next'] = $page+1;
		$transmit['last'] = $page-1;
		$transmit['url'] = "freshs";
		
		return $transmit;
	}

	/**
	*@主题推荐 
	*/
	public static function seldata($page)
	{
		//权威控
		$user = DB::table('login')->get();
		
		//转化数组
		$datas = json_decode(json_encode($user),true);
		
		//取出用户id
		foreach($datas as $key => $value)
		{
			$u_id[]=$datas[$key]['u_id'];
		}
		
		//查询出用户下过的订单个数
		foreach($u_id as $key =>$value)
		{
			$delsr = DB::table('order')->where('u_id',$value)->get();
			$num[$value] = count($delsr);
		}
		
		//查询下单数超过五个的用户
		foreach($num as $key => $value)
		{
			if($value > 5)
			{
				$new_id[]=$key;
			}
		}
		
		//查询对应的id 发表的评论
		$data= DB::table('travels')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->whereIn('u_id',$new_id)->where('t_state',1)->orderBy('t_times','desc')->get();
		
		$num = 10;							 //分页从哪个下标开始
		$count = count($data);
		$mexpage = ceil($count/$num);		 //向上取整
		if (empty($page))
		{
			$page = 1;
		}
		if ($page<1) 
		{
			$page = 1;
		}
		if ($page>$mexpage) 
		{
			$page = $mexpage;
		}
		$reg="/^\d+$/";
		if (!preg_match($reg,$page)) {
			$page=1;
		}
		$xia=($page-1)*$num;

		$transmit['data']= DB::table('travels')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->whereIn('u_id',$new_id)->where('t_state',1)->skip($xia)
			->take(12)->orderBy('t_times','desc')->get();
		//最大页 当前页 下一页 上一页	
		$transmit['mexpage'] = $mexpage;
		$transmit['page'] = $page;
		$transmit['next'] = $page+1;
		$transmit['last'] = $page-1;
		$transmit['url'] = "themes";

		return $transmit;
	}
	
	
	public static function frsh($page)
	{
		//尝鲜
		$data = DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('rank','>',5)->where('t_state',1)->get();
		$num = 10;							 //分页从哪个下标开始
		$count = count($data);
		$mexpage = ceil($count/$num);		 //向上取整
		if (empty($page))
		{
			$page = 1;
		}
		if ($page<1) 
		{
			$page = 1;
		}
		if ($page>$mexpage) 
		{
			$page = $mexpage;
		}
		$reg="/^\d+$/";
		if (!preg_match($reg,$page)) {
			$page=1;
		}
		$xia=($page-1)*$num;

		$transmit['data']= DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('rank','>',5)->where('t_state',1)->skip($xia)->take(12)->orderBy('t_times','desc')->get();
		
		//最大页 当前页 下一页 上一页	
		$transmit['mexpage'] = $mexpage;
		$transmit['page'] = $page;
		$transmit['next'] = $page+1;
		$transmit['last'] = $page-1;
		$transmit['url'] = "freshs";
		
		return $transmit;
	}
	
	
	public static function shutter($page)
	{
		//快门
		$data = DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('t_type',1)->where('t_state',1)->get();
		$num = 10;							 //分页从哪个下标开始
		$count = count($data);
		$mexpage = ceil($count/$num);		 //向上取整
		if (empty($page))
		{
			$page = 1;
		}
		if ($page<1) 
		{
			$page = 1;
		}
		if ($page>$mexpage) 
		{
			$page = $mexpage;
		}
		$reg="/^\d+$/";
		if (!preg_match($reg,$page)) {
			$page=1;
		}
		$xia=($page-1)*$num;

		$transmit['data']= DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('t_type',1)->where('t_state',1)->skip($xia)->take(12)->orderBy('t_times','desc')->get();
		
		//最大页 当前页 下一页 上一页	
		$transmit['mexpage'] = $mexpage;
		$transmit['page'] = $page;
		$transmit['next'] = $page+1;
		$transmit['last'] = $page-1;
		$transmit['url'] = "shutter";
		
		return $transmit;
	}
	                 
	
	public static function cate($page)
	{
		//美食
		$data = DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('t_type',2)->where('t_state',1)->get();
		$num = 10;							 //分页从哪个下标开始
		$count = count($data);
		$mexpage = ceil($count/$num);		 //向上取整
		if (empty($page))
		{
			$page = 1;
		}
		if ($page<1) 
		{
			$page = 1;
		}
		if ($page>$mexpage) 
		{
			$page = $mexpage;
		}
		$reg="/^\d+$/";
		if (!preg_match($reg,$page)) {
			$page=1;
		}
		$xia=($page-1)*$num;

		$transmit['data']= DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('t_type',2)->where('t_state',1)->skip($xia)->take(12)->orderBy('t_times','desc')->get();
		
		//最大页 当前页 下一页 上一页	
		$transmit['mexpage'] = $mexpage;
		$transmit['page'] = $page;
		$transmit['next'] = $page+1;
		$transmit['last'] = $page-1;
		$transmit['url'] = "cate";
		
		return $transmit;
	}
	
	public static function shopping($page)
	{
		//购物
		$data = DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('t_type',3)->where('t_state',1)->get();
		$num = 10;							 //分页从哪个下标开始
		$count = count($data);
		$mexpage = ceil($count/$num);		 //向上取整
		if (empty($page))
		{
			$page = 1;
		}
		if ($page<1) 
		{
			$page = 1;
		}
		if ($page>$mexpage) 
		{
			$page = $mexpage;
		}
		$reg="/^\d+$/";
		if (!preg_match($reg,$page)) {
			$page=1;
		}
		$xia=($page-1)*$num;

		$transmit['data']= DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('t_type',3)->where('t_state',1)->skip($xia)->take(12)->orderBy('t_times','desc')->get();
		
		//最大页 当前页 下一页 上一页	
		$transmit['mexpage'] = $mexpage;
		$transmit['page'] = $page;
		$transmit['next'] = $page+1;
		$transmit['last'] = $page-1;
		$transmit['url'] = "shopping";
		
		return $transmit;
	}
	
	public static function literature($page)
	{
		//文艺
		$data = DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('t_type',4)->where('t_state',1)->get();
		$num = 10;							 //分页从哪个下标开始
		$count = count($data);
		$mexpage = ceil($count/$num);		 //向上取整
		if (empty($page))
		{
			$page = 1;
		}
		if ($page<1) 
		{
			$page = 1;
		}
		if ($page>$mexpage) 
		{
			$page = $mexpage;
		}
		$reg="/^\d+$/";
		if (!preg_match($reg,$page)) {
			$page=1;
		}
		$xia=($page-1)*$num;

		$transmit['data']= DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('t_type',4)->where('t_state',1)->skip($xia)->take(12)->orderBy('t_times','desc')->get();
		
		//最大页 当前页 下一页 上一页	
		$transmit['mexpage'] = $mexpage;
		$transmit['page'] = $page;
		$transmit['next'] = $page+1;
		$transmit['last'] = $page-1;
		$transmit['url'] = "literature";
		
		return $transmit;
	}
	
	
	//游记详情
	public static function details($id)
	{
		$bination['host'] = DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->where('tt_id',$id)->get();
		$dat = json_decode(json_encode($bination['host']),true);

		$region_id = $dat[0]['t_region'];
		
		
		//每天的游记
		$data = DB::table('bination')->where('tt_id',$id)->get();
		$datas = json_decode(json_encode($data),true);
		$bination['form']= DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',$datas[0]['b_id'])->get();
		
		//评论内容
		$commect = DB::table('comments')->join('login', 'comments.u_id', '=', 'login.u_id')->where('tt_id',$id)->where('f_id',0)->orderBy('c_time','desc')->get();
		if(!empty($commect))
		{
			$commect1 = json_decode(json_encode($commect),true);
			foreach($commect1 as $key => $value)
			{
				$bination['commect'][$key] = $value;
				$commec = DB::table('comments')->where('tt_id',$id)->where('f_id',$value['comment_id'])->orderBy('c_time','desc')->get();
				$commect2 = json_decode(json_encode($commec),true);
				if(empty($commect2))
				{
					$bination['commect'][$key] = $value;
					$bination['commect'][$key]['reply'] = "";
				}
				else
				{
					foreach($commect2 as $keys => $val)
					{
						$bination['commect'][$key]['reply'][] = $val;
					}
				}			
			}
		}
		else
		{
			$bination['commect'] = "";
		}
		
		$bination['region_name'] = DB::table('region')->where('r_id',$region_id)->select('r_region')->first();

		$bination['correlation'] = DB::table('region')->join('scenic_spot', 'region.r_id', '=', 'scenic_spot.r_id')->where('p_id',$region_id) ->orderBy('s_degree', 'desc')->limit(5)->get();
		
		//推送
		$bination['meme'] = DB::table('scenic_spot')->select('s_id','s_name','s_img','s_sprice')->orderBy('s_degree', 'asc')->where('s_degree','<',50)->limit(5)->get();
	
		return $bination;
		
	}
	
	//游记详情评论
	public static function dsession($u_id,$data)
	{		
		$tt_id = $data['idf'];
		$c_base = $data['content'];

		$time = date('Y-m-d H:i:s',time());
		
		if(isset($data['fid']))
		{
			$f_id = $data['fid'];
		}
		else
		{
			$f_id = 0;
		}
	
		$fadd = DB::table('comments')->insert(['u_id' => $u_id, 'c_base' => $c_base , 'tt_id' => $tt_id ,'f_id' => $f_id, 'c_time'=> $time]); 
		if($fadd)
		{
			$ci= DB::table('travels')->select('t_commentint')->where('tt_id',$tt_id)->first();
		
			DB::table('travels')->where('tt_id',$tt_id)->update(['t_commentint' => $ci->t_commentint+1]);
		}
		else
		{
			return false;
		}
		
	}
	
	
}



