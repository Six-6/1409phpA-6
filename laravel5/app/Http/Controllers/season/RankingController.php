<?php 
namespace App\Http\Controllers\season;
use DB,Input,Session;
use Request;
use App\Http\Controllers\Controller;

use App\Ranking;
header("content-type:text/html;charset=utf-8");
class RankingController extends Controller {

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
	public function __construct()
	{
		$this->middleware('guest');
	}
	
	public function index()
	{
		$model = new Ranking();					//调用model层
		
		$data = $model->seldata();				//调用查询方法
		
		return view('ranking.Rank',['data'=>$data]);
	}
}