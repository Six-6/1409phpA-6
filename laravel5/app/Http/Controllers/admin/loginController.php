<?php
 
namespace App\Http\Controllers\admin;
header('content-type:text/html;charset=utf-8');
use DB;
use Redirect; 
use Session;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
session_start();
class LoginController extends BaseController
{
    public function index()
    {
    	return view('admin/login/login');
    }
    public function loin(Request $request)
    {
    	//接受登录信息
    	$u_name=$request->name;
    	$u_pwd=$request->pwd;
		if (isset($u_name) && isset($u_pwd))
		{
			$name = trim($u_name);  //姓名清理空格
			$pwd = trim($u_pwd);  //密码清理空格
			$name = strip_tags($name);   //过滤姓名html标签
			$pwd = strip_tags($pwd);   //过滤密码html标签
			$name = htmlspecialchars($name);   //将字符内容转化为html实体
			$pwd = htmlspecialchars($pwd);   //将字符内容转化为html实体
			$name= addslashes($name);
			$pwd = addslashes($pwd);
			$res=DB::table("users")->where(['u_name'=>$name,'u_pwd'=>$pwd])->first();
			if($res){
				Session::put('u_id',$res->u_id);
				Session::put('name',$name);
				echo 1;
			}else {
				echo 0;
			}	
		}
    }
}