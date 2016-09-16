<?php

namespace App;

use DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Travels extends Model{
    /**
     * ??ȡ????????????
     */
	/*protected $table = 'travels';
	
	protected $primaryKey = 't_id';
	
	public $timestamps = false;
	
	//protected $dateFormat = 'U';
	*/

	/*???۲?ѯ*/
	public function falset($page)
	{
		$xia=($page-1)*15;					 //??ҳ???ĸ??±꿪ʼ
		$count = DB::table('travels')->where('t_unwilling',1)->get();
		$num = count($count);
		$mexpage = ceil($num/15);			 //????ȡ??
		$num = 15;							 //ÿҳ????
		//????
		$arr['data']=DB::table('travels')
            ->Join('login', 'travels.u_id', '=', 'login.u_id')
            ->Join('order', 'login.u_id', '=', 'order.u_id')
			->where('t_unwilling',1)
			->where('t_state',1)
			->skip($xia)
			->take(15)
			->get();
		
		$arr['page'] = $page;				 //??ǰҳ
		$arr['mexpage'] = $mexpage;			 //??Ҳҳ??
		return	$arr;
	}
	
	

	/*???˲?ѯ*/
	public function audits($page)
	{
		$xia=($page-1)*15;					//??ҳ???ĸ??±꿪ʼ
		$count = DB::table('travels')->where('t_state',0)->get();//??ѯ?ж???????
		$num = count($count);
		$mexpage = ceil($num/15);			//????ȡ??
		$num = 15;
		$arr['data']=DB::table('travels')
				->Join('login', 'travels.u_id', '=', 'login.u_id')
				->where('t_state',0)
				->skip($xia)
				->take(15)
				->get();
		$arr['page'] = $page;
		$arr['mexpage'] = $mexpage;
		return	$arr;
	}
	

	/*?????ع˲?ѯ*/
	public function classic($page)
	{
		$date = date('Y-m-d H:i:s',time());
		$xia=($page-1)*15;					//??ҳ???ĸ??±꿪ʼ
		$count = DB::table('travels')->where('t_state',1)->get();//??ѯ?ж???????
		$num = count($count);			
		$mexpage = ceil($num/15);			//????ȡ??
		$num = 15;
		$arr['data']=DB::table('travels')
				->join('login', 'travels.u_id', '=', 'login.u_id')
				->where('t_state',1)
				->where('t_times','<',$date)
                ->orderBy('t_hot','desc')
				->skip($xia)
				->take(15)
				->get();
		
		$arr['page'] = $page;
		$arr['mexpage'] = $mexpage;
		return	$arr;
	}
	

	
	public function del($id)
	{
		//ִ??ɾ??
		return DB::table('travels')->where('t_id',$id)->delete();
	}
	
	public function updata($id)
	{
		//ִ???޸?
		return DB::table('travels')
            ->where('t_id',$id)
            ->update(['t_state' => 1]);
	}
	
	/**
    *?μ? ?Ӿ?
    * @return 
    */
	public function essence($id)
	{
		//ִ???޸?
		return DB::table('travels')
            ->where('t_id',$id)
            ->update(['t_essence' => 1]);
	}
	
	/**
	*@?????Ƽ?
	*/
	public function season()
	{
		return DB::table('inseason')->get();
	}
}



