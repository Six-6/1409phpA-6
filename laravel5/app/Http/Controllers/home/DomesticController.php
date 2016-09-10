<?php
/**
 * @国内游
 * @李来恩编写
 **/
namespace App\Http\Controllers\home;

use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Domestic;
use Session,DB,Input,Redirect;
class DomesticController extends BaseController{

    /****/
	/**
	* @国内游首页展示
	* @return Request $request 接收值
	**/
    public function index(Request $request){

    	$rid=$request->rid;

    	//调用model层

		$model = new Domestic();

    	$regionArr=$model->regionSelect(1);

        $scenicArr=$model->scenicSelect($regionArr);

        return view('home/domestic/domestic_list',['arr'=>$regionArr,'scenicArrs'=>$scenicArr]);
    }
    /****/
    /**
    * @景点对比
    * @return Request $request 接收值
    **/
    public function contrast(Request $request)
    {
        $ids=$request->sid;

        $sid=explode(',',$ids);

        $scenidArr=DB::table('scenic_spot')->wherein('s_id',$sid)->get();
        
        echo json_encode($scenidArr);
    }
 
}