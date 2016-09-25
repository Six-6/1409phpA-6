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
			->orderBy('s_degree', 'desc')
			->limit(5,0)
			->get();


		/**欧洲文艺都市榜**/
		$data['literature'] = DB::table('scenic_spot')
			->Join('region', 'scenic_spot.r_id', '=', 'region.r_id')
			->where('c_id',2)
			->where('p_id',2)
			->orderBy('s_degree', 'desc')
			->limit(5,0)
			->get();
			
		
		/**热血之旅**/
		$data['Blood'] = DB::table('scenic_spot')
			->where('c_id',3)
			->orderBy('s_degree', 'desc')
			->limit(5,0)
			->get();

		
		
		/**全国之旅**/
		$region = DB::table('region')->where('p_id',1)->get();
		//转化成数组
		$datas = json_decode(json_encode($region),true);
		//取出二级的id
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

		//将多维转化维二维
		foreach($nubsr as $key => $val)
		{
			foreach($val as $vale)
			{
				for($i=0;$i<5;$i++)
				{
					$helt[$i] = $vale;
				}
			}
		}
		//print_r($helt);die;
		//转成数组
		$data['nationwide'] = json_decode(json_encode($helt),true);
		//array_multisort排序
		foreach($data['nationwide'] as $keys => $vael)
		{
			$edse[$keys] = $vael['s_degree'];
		}
		array_multisort($edse,SORT_DESC,$data['nationwide']);
		
		
		
		
		/**全国最美古镇**/
		foreach($r_id as $key => $values)
		{
			$ones[] = DB::table('scenic_spot')
				->Join('region', 'scenic_spot.r_id', '=', 'region.r_id')
				->where('c_id',4)
				->where('p_id',$values)
				->get();
		}
		//将多维转化维二维
		foreach($ones as $key => $val)
		{
			foreach($val as $vale)
			{
				for($i=0;$i<5;$i++)
				{
					$bule[$i] = $vale;
				}
			}
		}		
		//转成数组
		$data['Town'] = json_decode(json_encode($bule),true);
		//array_multisort排序
		foreach($data['Town'] as $keys => $vael)
		{
			$butd[$keys] = $vael['s_degree'];
		}
		array_multisort($butd,SORT_DESC,$data['Town']);

		
		
		/**文化之旅**/
		$data['culture'] = DB::table('scenic_spot')
			->Join('region', 'scenic_spot.r_id', '=', 'region.r_id')
			->where('c_id',5)
			->orderBy('s_degree', 'desc')
			->limit(5,0)
			->get();
				
		//获取此次登陆地点，此接口能获取当前ip的位置(并不具体)
		$urls="http://api.k780.com:88/?app=ip.get&appkey=19496&sign=3bcfe1b0d4fefae92b12139d33bf1828&format=json";
	    $files=file_get_contents($urls);
	    $jsons=json_decode($files,true);
//		var_dump($jsons);die;
		//接取需要的ip位置
		
		$ip=$jsons['result']['att'];
		$ipname=substr($ip, strrpos($ip, ",")+1);

		//获取地区id
		$c_id = DB::table('region')
			->where('r_region',$ipname)
			->get();

		$crd = json_decode(json_encode($c_id),true);
		
		/**一日游**/
		$data['oneday'] = DB::table('scenic_spot')
			->Join('region', 'scenic_spot.r_id', '=', 'region.r_id')
			->where('p_id',$crd[0]['r_id'])
			->where('s_day',1)
			->orderBy('s_degree', 'desc')
			->limit(5,0)
			->get();

		/**两日游**/
		$data['twoday'] = DB::table('scenic_spot')
			->Join('region', 'scenic_spot.r_id', '=', 'region.r_id')
			->where('p_id',$crd[0]['r_id'])
			->where('s_day',2)
			->orderBy('s_degree','desc')
			->limit(5,0)
			->get();
			
		/**三日游**/
		$data['threeday'] = DB::table('scenic_spot')
			->Join('region', 'scenic_spot.r_id', '=', 'region.r_id')
			->where('p_id',$crd[0]['r_id'])
			->where('s_day',3)
			->orderBy('s_degree','desc')
			->limit(5,0)
			->get();
			
		return $data;
		
	}
}