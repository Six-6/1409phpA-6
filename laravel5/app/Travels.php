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
     * ��ȡ������������
     */
	/*protected $table = 'travels';
	
	protected $primaryKey = 't_id';
	
	public $timestamps = false;
	
	//protected $dateFormat = 'U';
	/**
    *���� ��;
    * @return 
    */
	public function falset($page)
	{		
		$xia=($page-1)*15;					 //��ҳ���ĸ��±꿪ʼ
		$count = DB::table('travels')->where('t_unwilling',1)->get();
		$num = count($count);
		$mexpage = ceil($num/15);			 //����ȡ��
		$num = 15;							 //ÿҳ����
		//����
		$arr['data']=DB::table('travels')
            ->Join('login', 'travels.u_id', '=', 'login.u_id')
            ->Join('order', 'login.u_id', '=', 'order.u_id')
			->where('t_unwilling',1)
			->where('t_state',1)
			->skip($xia)
			->take(15)
			->get();
		print_r($arr['data']);die;
		$arr['page'] = $page;				 //��ǰҳ
		$arr['mexpage'] = $mexpage;			 //��Ҳҳ��
		return	$arr;
	}
	
	
	/**
    *������μ�
    * @return 
    */

	//��˲�ѯ
	public function audits($page)
	{
		$xia=($page-1)*15;					//��ҳ���ĸ��±꿪ʼ
		$count = DB::table('travels')->where('t_state',0)->get();//��ѯ�ж�������
		$num = count($count);
		$mexpage = ceil($num/15);			//����ȡ��
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
	
	/**
    *����ع�
    * @return 
    */
	public function classic($page)
	{
		$xia=($page-1)*15;					//��ҳ���ĸ��±꿪ʼ
		$count = DB::table('travels')->where('t_state',1)->get();//��ѯ�ж�������
		$num = count($count);			
		$mexpage = ceil($num/15);			//����ȡ��
		$num = 15;
		$arr['data']=DB::table('travels')
				->Join('login', 'travels.u_id', '=', 'login.u_id')
				->where('t_state',1)
                ->orderBy('t_hot','desc')
				->skip($xia)
				->take(15)
				->get();
		$arr['page'] = $page;
		$arr['mexpage'] = $mexpage;
		return	$arr;
	}
	
	
	/**
    *�μ�ɾ��
    * @return 
    */
	
	public function del($id)
	{
		//ִ��ɾ��
		return DB::table('travels')->where('t_id',$id)->delete();
	}
	
	/**
    *�μ� ���
    * @return 
    */
	public function updata($id)
	{		
		$auths = DB::table('travels')
            ->where('t_id',$id)
			->get();
		$datas = json_decode(json_encode($auths),true);

		$ubtle = DB::table('travels')->Join('order', 'travels.u_id', '=', 'order.u_id')->where('travels.u_id',$datas[0]['u_id'])->where('start_time','<',$datas[0]['t_times'])->get();
		if(!empty($ubtle))
		{
			DB::table('travels')
            ->where('t_id',$id)
            ->update(['t_unwilling' => 1]);
		}
		
		return DB::table('travels')
            ->where('t_id',$id)
            ->update(['t_state' => 1]);
		
	}
	
	/**
    *�μ� �Ӿ�
    * @return 
    */
	public function essence($id)
	{
		//ִ���޸�
		return DB::table('travels')
            ->where('t_id',$id)
            ->update(['t_essence' => 1]);
	}
}



