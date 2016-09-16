<?php
/**
 * @国内游
 * @李来恩编写
 **/
namespace App\Http\Controllers\home;
header('content-type:text/html;charset=utf-8');
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Domestic;
use Session,DB,Input,Redirect;
class DomesticController extends BaseController{
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

    /**
    * @景点详情
    * @return Request $request 接收值
    **/
    public function scenicDetails(Request $request)
    {
        $sid=$request->sid;

        //调用model层

        $model = new Domestic();

        $scenicArr=$model->scenicSels($sid);

        return view('home/domestic/details_list',['arr'=>$scenicArr]);
    }
    /**
    * @填写订单
    * @return Request $request 接收值
    **/
    public function fill(Request $request)  
    {
        $adult=$request->adult;

        $children=$request->children;

        $sid=$request->sid;
          
        $scenicArr=DB::table('scenic_spot')->where('s_id',$sid)->first();
        return view('home/domestic/order_form',['arr'=>$scenicArr,'adult'=>$adult,'children'=>$children]);
    }

 
}