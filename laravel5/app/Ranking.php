<?php
/**
 * @排行
 * @田浩编写
 **/ 

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;


class Ranking extends Model{

	public function seldata()
	{
		/**马尔代夫排行**/
		$data['Maldives'] = DB::table('scenic_spot')
			->Join('region', 'scenic_spot.r_id', '=', 'region.r_id')
			->where('c_id',1)
			->where('p_id',2)
			->get();
			
		
		/**欧洲文艺都市榜**/
		$data['literature'] = DB::table('scenic_spot')
			->Join('region', 'scenic_spot.r_id', '=', 'region.r_id')
			->where('c_id',2)
			->where('p_id',12)
			->orderBy('s_degree', 'desc')
			->get();
			
		
		/**热血之旅**/
		$data['Blood'] = DB::table('scenic_spot')
			->where('c_id',3)
			->orderBy('s_degree', 'desc')
			->get();

		
		/**全国之旅**/
		$region = DB::table('region')->where('p_id',1)->get();
		//转化成数组
		$datas = json_decode(json_encode($region),true);
		//去出二级的id
		foreach($datas as $key => $value)
		{
			$r_id[] = $datas[$key]['r_id'];
		}
		//查询国内的排行
		foreach($r_id as $key => $values)
		{
			$nubsr[] = DB::table('scenic_spot')
				->Join('region', 'scenic_spot.r_id', '=', 'region.r_id')
				->where('p_id',$values)
				->get();
		}
		$lehd = json_decode(json_encode($nubsr),true);
		//print_r($lehd);die;
		foreach($nubsr as $key => $val)
		{
			foreach($val as $vale)
			{
				$helt[] = $vale;
			}
		}
		$data['nationwide'] = json_decode(json_encode($helt),true);
		//排序
		foreach($data['nationwide'] as $keys => $vael)
		{
			$edse[$keys] = $vael['s_degree'];
		}
		array_multisort($edse,SORT_DESC,$data['nationwide']);
		
		print_r($data['nationwide']);die;
		
		/**全国最美古镇**/
		foreach($r_id as $key => $values)
		{
			$ones[] = DB::table('scenic_spot')
				->Join('region', 'scenic_spot.r_id', '=', 'region.r_id')
				->where('c_id',4)
				->where('p_id',$values)
				->orderBy('s_degree', 'desc')
				->get();
		}
		foreach($ones as $key => $val)
		{
			foreach($val as $vale)
			{
				$data['Town'][] = $vale;
			}
		}
		print_r($data['Town']);die;
		
		
		/**文化之旅**/
		foreach($r_id as $key => $values)
		{
			$data['culture'] = DB::table('scenic_spot')
			->Join('region', 'scenic_spot.r_id', '=', 'region.r_id')
			->where('c_id',5)
			->where('p_id',$values)
			->orderBy('s_degree', 'desc')
			->get();
		}
		
		print_r($data);die;
		return 1;
	}
}