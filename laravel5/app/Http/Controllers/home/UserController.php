<?php
/**
 * @前台用户管理
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
use App\Login;
use App\Type;
use Session;
use DB;
use Input;

session_start();

class UserController extends BaseController{
    /**个人资料展示**/
    public function Add(){
        $person=Login::selAll();
        //print_r($person);die;
        $type=Type::selAll();
        return view("home.user.person",["person"=>$person,"type"=>$type]);
    }
    /**个人资料修改**/
    public function upd(){

    }
    /**信息用户名验证**/
    public function ver(){

    }

    /**修改头像**/
    public function image(Request $request){
        if(empty($_POST)){
            $image=Login::selAll();
            return view("home.user.image",["image"=>$image]);
        }else{
            $file = $request->file("path");
            $clientName = $file->getClientOriginalName();//获得文件名字
            $entension = $file->getClientOriginalExtension(); //上传文件的后缀.
            $newName = md5(date('ymdhis') . $clientName) . "." . $entension;//改名字
            $path = $file->move('./home/upload', $newName);//将图片放到storage/uploads下
            $path1 = str_replace('\\', '/', $path);
            $paths = "." . $path1;
            DB::table("login")->where(["u_id"=> 1])->update(['path' => $paths]);
            return view("home/common/common");
        }

    }
    /**修改密码**/
    public function psw(){
        return view("home.user.psw");
    }
}