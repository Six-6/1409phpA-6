<?php
/**
 * @国内游
 * @李来恩编写
 **/
namespace App\Http\Controllers\home;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Redirect;
use App\Order;
use Session;
use DB;
use Input;
class DomesticController extends BaseController{

    /****/
	/**
	* @国内游景点展示
	* @return Request $request 接收值
	**/
    public function index(Request $request){
        return view('');
    }

}