<?php

namespace App;

use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Pagination\Paginator;

class Publish extends Model{

	public function area()
	{
		$region = DB::table('region')->select('r_region','r_id')->whereIn('p_id',[1,2])->get();

		return $region;
	}

	public function lish($data)
	{
		//取出第几个上传的图片
		$day = $data['indexs'];

		$file =$data['photo'][$day];

		$imagesName=$file->getClientOriginalName();

		//保存的路径
        $filedir="home/upload/";

        //数据库添加路径
        $filename=$filedir.$imagesName;
      
        //添加到本地
        $file->move($filedir,$imagesName);

        return $imagesName;
	}

	public function addday($data,$u_id)
	{
		//生成随机数
		$arr=rand(10000,99999);

		//取一个区间 49995 - 50000
		if($arr > 49995 && $arr < 50000)
		{
			$time = date('Y-m-d H:i:s',time());
			$region = DB::table('activity')->where('a_id',1)->first();
			//转化数组
			$datas = json_decode(json_encode($region),true);
			if ($datas['overtime'] == "0000-00-00 00:00:00") 
			{
				//活动永久开放
				$aci['a_id'] = 1;
				$aci['u_id'] = $u_id;
				$aci['details'] = "写游记赢大奖";
				$ids = DB::table('prize')->insert($aci);	
			}
			else if($datas['overtime'] > $time)
			{
				$aci['a_id'] = 1;
				$aci['u_id'] = $u_id;
				$aci['details'] = "写游记赢大奖";
				$ids = DB::table('prize')->insert($aci);	
			}

		}

		$title = $data['p-title'];
		$s_desc = $data['II'];
		$t_img = $data['path'];
		$t_type = $data['t_type'];
		$region = $data['region'];
		$t_times = date('Y-m-d H:i:s',time());

		foreach ($s_desc as $key => $value) {
			$datas[$key]['s_desc'] = strip_tags($value);
			$datas[$key]['t_title'] = strip_tags($title);
			$datas[$key]['t_times'] = $t_times;
			$datas[$key]['t_type'] = $t_type;
			$datas[$key]['t_region'] = $region;
			$datas[$key]['u_id'] = $u_id;
			foreach ($t_img as $k => $v) {
				$datas[$k]['t_img'] = $v;
			}
		}

		foreach ($datas as $k => $v) {
			$ids = DB::table('travels')->insertGetId($v);
			$tt_id[]['tt_id']= $ids; 
		}

		$b_id = DB::table('bination')->insertGetId($tt_id[0]);

		unset($tt_id[0]);

		foreach ($tt_id as $key => $value) {
			$tt_id[$key]['f_id']=$b_id; 
		}
	
		$panduan = DB::table('bination')->insert($tt_id);
		
		if($panduan)
		{
			
		}
		return $panduan;		
	}

	public function mycomment($u_id)
	{
		$data = DB::table('travels')
			->join('bination', 'travels.tt_id', '=', 'bination.tt_id')
			->where('f_id',0)
			->where('u_id',$u_id)
			->get();

		$datas['myyou'] = json_decode(json_encode($data),true);

		return $datas;
	}
}