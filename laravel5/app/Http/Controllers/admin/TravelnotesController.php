<?php 
namespace App\Http\Controllers\admin;

header('content-type:text/html;charset=utf-8');
use DB;
use Redirect;
use Request;
use App\Travels;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TravelnotesController extends BaseController {

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
	 *
	 * developer: 田浩
	 *
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

    /************************** 人在 旅途 ******************************/
	
	public function indexs(){
		return view('admin.index');
	}
	
	
	/**游记展示**/
	public function index()
	{
		//页数
		$page=Request::get('page');
		if(empty($page))
		{
			$page = 1;
		}

		//调用model层
		$model = new Travels();
		//调用查询方法
		$flights = $model->falset($page);
		//sprint_r($flights);die;
        return view('admin.travelnotes',['T_message' => $flights]);
	}
	
	/**游记删除**/
	public function delet()
	{
		//接取要删除id
		$id = Request::get('id');
		//调用model层
		$model = new Travels();
		//调用查询方法
		$flights = $model->del($id);
		
		return redirect('admin/travelnotes');
	}
	
	/************************** 游记 审核 ******************************/
	
	public function audit()
	{
		//页数
		$page=Request::get('page');
		if(empty($page))
		{
			$page = 1;
		}
		//调用model层
		$model = new Travels();
		//调用查询方法
		$flights = $model->audits($page);
		
		return view('admin.audit',['T_audit' => $flights]);
	}
	
	/**
	 * @审核*
	 * @return [type] [description]
	 */
	public function updata()
	{
		//接取审核id
		$id = Request::get('id');
		//调用model层
		$model = new Travels();
		//调用查询方法
		$flights = $model->updata($id);		
			
		return redirect('admin/travelnotes');
	}
	
	
	/************************** 经典 回顾 ******************************/
	
	/**
	 * @经典回顾*
	 * @return [type] [description]
	 */
	public function classics()
	{
		//页数
		$page=Request::get('page');
		if(empty($page))
		{
			$page = 1;
		}
		//调用model层
		$model = new Travels();
		//调用查询方法
		$flights = $model->classic($page);

        return view('admin.classics',['T_classics' => $flights]);
	}

	
	/**
	 * @经典回顾删除*
	 * @return [type] [description]
	 */
	public function deletes()
	{
		//接取要删除id
		$id = Request::get('id');
		//调用model层
		$model = new Travels();
		//调用查询方法
		$flights = $model->del($id);
		
		return redirect('admin/classics');
	}
	
	/**
	 * @游记加精
	 * @return [type] [description]
	 */
	public function essences()
	{
		//接取要删除id
		$id = Request::get('id');
		//调用model层
		$model = new Travels();
		//调用查询方法
		$flights = $model->essence($id);

		return redirect('admin/travelnotes');
	}
	
	/**
	 * @当季推荐
	 * @return [type] [description]
	 */
	public function season()
	{
		//调用model层
		$model = new Travels();
		//调用查询方法
		$flig = $model->season();
		return view('admin.season',['T_flig' => $flig]);
	}
	
	/**
	*@当季修改
	*/
	public function fileadd(Request $request)
	{
		$data=Request::all();

		$s_id = $data['s_id'];
		$s_name = $data['s_name'];
		$file = $data['file'];
		
	 	$file_name = $file->getClientOriginalName();//图片名
		$file_ex = $file->getClientOriginalExtension();    //上传文件的后缀	
		//判断文件格式
		if(!in_array($file_ex, array('jpg', 'gif', 'png'))){
			echo "<script>alert('文件格式错误,仅支持 jpg ,gif,png');location.href='admin/wayadd'</script>";
		}
		
		$savepath = base_path().'/public/image/one/shopphoto/';
		$fileadd = "../image/one/shopphoto/".$file_name;
		$filepath = $file->move($savepath, $file_name);
		
		$updata = DB::table('inseason')
            ->where('s_id', $s_id)
            ->update(['s_name' => $s_name ,'s_image' => $fileadd]);
       
		if($updata)
		{
			return redirect('admin/season');
		}
		else
		{
			echo "<script>alert('修改失败');location.href='admin/season'</script>";
		}
	}
}

	