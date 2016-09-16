<?php namespace App;

use Illuminate\Database\Eloquent\Model;
header('content-type:text/html;charset=utf-8');
use DB;
class Domestic extends Model
{
	public function regionSelect($rid)
	{
		$regionArr=DB::table('region')->get();
		$regionArr=$this->cate($regionArr,0,$rid);
		return $regionArr;
	}
	public function cate(&$info, $child, $pid)  
	{  
	    $child = array();  
	    if(!empty($info)){//当$info中的子类还没有被移光的时候  
	        foreach ($info as $k => &$v) {  
	            if($v->p_id == $pid){//判断是否存在子类pid和返回的父类id相等的  
	                $v->child= $this->cate($info, $child, $v->r_id);//每次递归参数为当前的父类的id  
	                $child[] = $v;//将$info中的键值移动到$child当中  
	                unset($info[$k]);//每次移动过去之后删除$info中当前的值  
	            }  
	        }  
	    }

	     return $child;//返回生成的树形数组  
	}

	public static function scenicSelect(){

    $domArr=DB::table('region')->where('p_id',1)->get();

    foreach($domArr as $k => $val){

    	$scenicArr[]=DB::table('scenic_spot')

    	->join('region',"region.r_id","=","scenic_spot.r_id")

    	->where('scenic_spot.r_id',$val->r_id)
    	    
    	->get();
    };
    return $scenicArr;
}
public function scenicSels($sid)
	{

		$scenicArr=DB::table('scenic_spot')->where('s_id',$sid)->first();
		
		return $scenicArr;
	}

}