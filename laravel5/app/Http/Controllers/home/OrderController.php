<?php
/**
 * @订单管理
 * @褚玉密编写
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

session_start();

class OrderController extends BaseController{
    /**订单查看**/
    public function add(Request $request){
        $order=Order::selAll();
        //print_r($order);die;
        return view("home.order.add",["order"=>$order]);
    }

}