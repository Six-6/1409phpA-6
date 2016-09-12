<?php
/**
 * @前台用户管理
 * 
 * @韦森编写
 **/
namespace App\Http\Controllers\home;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use App\Footprint;
use Session,DB,Input,Redirect;


session_start();
class FootprintController extends BaseController{
    /**
     * 我的足迹*
     * @return [type] [description]
     */
    public function footprint(){
        //调用model层
        $model = new Footprint();
        //调用查询方法
        $flights = $model->getViewHistory();
        //展示给用户
        echo json_encode($flights);
    }
    /**
     * 用户退出*
     * @return [type] [description]
     */
    public function personDel(Request $request){
        $flush = $request->session()->flush();
        if ($flush) {
            echo "<script>alert('退出失败');location.href='personAdd'</script>";
        }else{
            echo "<script>location.href='".{{URL('/')}}."'</script>";
        }
    }

    /**
     * @用户收藏
     *1
     * @return   [description]
     */
    public function yhCollect(){
        //调用model
        $model = new Footprint();
        //调用查询方法
        $collectSql = $model->userCollect();
        return $collectSql;
    }
}