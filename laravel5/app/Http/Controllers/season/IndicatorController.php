<?php 
namespace App\Http\Controllers\season;
use DB,Input,Session;
use Request;
use App\Http\Controllers\Controller;

use App\Siterecommend;
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
	 * @return void
	 */

	
	public function siterecommend()
	{
		$model = new Siterecommend();					//调用model层

		$data = $model->seldata();				//调用查询方法
		//print_r($data);die;
		return view('home.auth',['data' => $data]);
	}
}