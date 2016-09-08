<?php 
namespace App\Http\Controllers\season;
use DB,Input,Session;
use Request;
use App\Http\Controllers\Controller;

use App\Mark;
header("content-type:text/html;charset=utf-8");
class IndicatorController extends Controller {

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
	 * 田浩编写
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	
	/*******************************风 向 标**********************************/
	/*首页*/
	public function siterecommend()
	{
		$month = date('m');						//当月
		$model = new Mark();					//调用model层
		
		$data = $model->seldata($month);				//调用查询方法
		//print_r($data);die;
		return view('season.indicator',['data'=>$data]);
	}
	
	/*每月推荐*/
	public function month()
	{
		$data=Request::all('mouth');
		$mark = DB::table('monthly')
			->where('m_monthly','=',$data['mouth'])
			->get();		
		echo json_encode($mark);

		
	}
	
}

	