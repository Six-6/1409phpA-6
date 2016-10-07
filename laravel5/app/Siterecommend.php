<?php

namespace App;

use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Siterecommend extends Model{

	public function seldata()
	{
		//当季玩什么
		$data['carousel'] = DB::table('inseason')->get();

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
			if($value > 4)
			{
				$new_id[]=$key;
			}
			else
			{
				$new_id[]="";
			}
		}

		//查询对应的id 发表的评论
		$data['authority'] = DB::table('travels')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->whereIn('u_id',$new_id)->orderBy('t_browse','desc')->limit(5)->get();
		///print_r($data);die;
	
		/**
		*@尝鲜人 
		*/
		$data['fresh'] = DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('rank','>',5)->where('t_state',1)->limit(5)->get();

		/**
		*@快门控
		*/
		$data['shutter'] = DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('t_type',1)->where('t_state',1)->limit(5)->get();
		
		/**
		*@美食家
		*/
		$data['cate'] = DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('t_type',2)->where('t_state',1)->limit(5)->get();
				
		/**
		*@购物狂
		*/
		$data['shopping'] = DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('t_type',3)->where('t_state',1)->limit(5)->get();
		
		/**
		*@文艺咖
		*/
		$data['literature'] = DB::table('travels')->join('login', 'travels.u_id', '=', 'login.u_id')->join('bination','travels.tt_id','=','bination.tt_id')->where('f_id',0)->where('t_type',4)->where('t_state',1)->limit(5)->get();
		
		
		/**
		*@本月推荐
		*/
		$month = date('m');
	
		$data['month'] = DB::table('monthly')->where('m_monthly',$month)->get();
		
		return $data;
	}
	
}



