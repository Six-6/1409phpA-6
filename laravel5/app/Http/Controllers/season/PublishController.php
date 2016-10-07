<?php 
namespace App\Http\Controllers\season;
use DB,Input,Session,Illuminate;
use Request;
use App\Http\Controllers\Controller;
use App\Publish;
header("content-type:text/html;charset=utf-8");
class PublishController extends Controller 
{

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
	*@游记
	*/
	public function publish()
	{
		$model = new Publish();					//调用model层
		
		$region = $model->area();			//调用查询方法

		return view('home/publish',['region' => $region]);
	}
	
	/**
	 * 图片上传
	 * @return [type] [description]
	 */
	public function yfile()
	{
		//获取数据
		$data=Request::all();

		$model = new Publish();					//调用model层
		
		$data = $model->lish($data);			//调用查询方法
	
		echo json_encode($data);
	}

	/**
	 * 填写游记
	 * @return [type] [description]
	 */
	public function collect()
	{		
		$u_id = Session::get('u_id');
		if(empty($u_id))
		{	
			return redirect('blo?url = home/publishs');			
		}

		$data=Request::all();
		
		$model = new Publish();					//调用model层
		
		$data = $model->addday($data,$u_id);	//调用查询方法

		if($data == 1)
		{
			return redirect('home/mysit');
		}
		else
		{
			return redirect('home/publishs');		
		}

	}

	/**
	 * 我的游记 
	 * @return [type] [description]
	 */
	public function mysit()
	{
		$u_id = Session::get('u_id');
		if(empty($u_id))
		{
			return redirect('blo?url = home/mysit');			
		}

		$data=Request::all();

		$model = new Publish();					//调用model层
		
		$data = $model->mycomment($u_id);	//调用查询方法

		return view("home.mytitle",['data' => $data]);
	}
}