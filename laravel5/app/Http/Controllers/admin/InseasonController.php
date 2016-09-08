<?php 
namespace App\Http\Controllers\admin;

header('content-type:text/html;charset=utf-8');
use DB;
use Redirect;

use Illuminate\Http\Request;
use App\Season;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Pagination\Paginator;
use Session;
use Input;



class InseasonController extends BaseController {

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

    /************************** 当季 推荐  ******************************/
	
	public function index(){
		$season = new Season();
		$flights = $season->sleget();
		return view('admin/season',['season'=>$flights]);
	}
	
	/************************** 图片 上传  ******************************/
	
	public function seaadd(Request $request)
	{
		$s_id = $request->input('s_id');
		$s_name = $request->input('s_name');		
        $s_time = date('Y-m-d',time());		
        $file = $request->file('file');
        $clientName = $file->getClientOriginalName();//获得文件名字
        $entension = $file->getClientOriginalExtension(); //上传文件的后缀.
        $newName = md5(date('ymdhis') . $clientName) . "." . $entension;//改名字
        $path = $file->move('./home/upload', $newName);//将图片放到storage/uploads下
        $path1 = str_replace('\\', '/', $path);
        $paths = "." . $path1;
		
        DB::table("inseason")->where("s_id", $s_id)->update(['s_name' => $s_name, 's_time' => $s_time, 's_image' => $paths]);
		return redirect('admin/inseason');
	}
}