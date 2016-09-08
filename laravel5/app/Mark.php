<?php
/**
 * @风向标
 * @田浩编写
 **/ 

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;


class Mark extends Model{

	public function seldata($month)
	{
		/**当季推荐**/
		$mark['season'] = DB::table('inseason')->get();

		/**权威控**/	//根据下过订单大于5的人都算是有权威的人 真正下单数100
		$user = DB::table('users')->get();
		//转化成数组
		$datas = json_decode(json_encode($user),true);
		//取出用户id
		foreach ($datas as $key => $value) {
			$u_id[]=$datas[$key]['u_id'];
		}
		//查询出用户下过订单个数
		foreach ($u_id as $key => $value) {
			$delsr = DB::table('order')->where('u_id',$value)->get();
			$num[$value] = count($delsr);

		}
		//查询下单数超过5的
		foreach ($num as $key => $value) {
			if ($value > 5) {				
				$new_id[]=$key; 										
			}
		}
		//查询对应id 发表的评论
		$mark['authority'] = DB::table('travels')
		    ->whereIn('u_id',$new_id)
		    ->orderBy('t_times', 'desc')
		    ->limit(5)
		    ->get();

		
		/**尝鲜人**/	//在新增的经典开始一个月你进行购票旅行的客户累计5星评论就能进尝鲜人
		$mark['fresh'] = DB::table('travels')
            ->Join('login', 'travels.u_id', '=', 'login.u_id')
			->where('rank','>' ,4)
			->orderBy('t_times', 'desc')
		    ->limit(5)
			->get();

		/**快门控**/
		$mark['picture'] = DB::table('travels')
			->where('t_type','=',1)
			->orderBy('t_times', 'desc')
		    ->limit(5)
			->get();
		/**美食家**/
		$mark['cate'] = DB::table('travels')
			->where('t_type','=',2)
			->orderBy('t_times', 'desc')
		    ->limit(5)
			->get();
		/**购物狂**/
		$mark['shop'] = DB::table('travels')
			->where('t_type','=',3)
			->orderBy('t_times', 'desc')
		    ->limit(5)
			->get();
		/**文艺咖**/
		$mark['literature'] = DB::table('travels')
			->where('t_type','=',4)
			->orderBy('t_times', 'desc')
		    ->limit(5)
			->get();
		
	
		//月份推荐
		$mark['month'] = DB::table('monthly')
			->where('m_monthly','=',$month)
			->get();
			
		return $mark;

		
	}
	
}



