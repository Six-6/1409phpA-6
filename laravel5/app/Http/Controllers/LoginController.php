<?php 
namespace App\Http\Controllers;

header('content-type:text/html;charset=utf-8');

use DB,Input,Session;
use Validator;
use Response;
use Illuminate\Http\Request;
use Redirect;

class LoginController extends Controller {
    //前台登录
	public function index()
	{
        return view('login/login');
	}
	public function bloin(Request $request)
	{
        $u_name=$request->username;
        $u_pwd=$request->password;
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

            $res = DB::table('login')
            ->where('pwd',$pwd)
            ->Where('user',$name)
            ->orWhere('email',$name)
            ->orWhere('phone',$name)
            ->first();
            if($res)
            {
                Session::put('u_id',$res->u_id);
                Session::put('name',$name);
                return Redirect::to('/');
            }else {
                echo "<script>alert('用户名或密码错误,请从新登陆');location.href='lo'</script>";
            }   
        }
	}
    //注册
	public function register()
	{
		return view('login/register');
	}
    public function onregister(Request $request)
    {
        $name=$request->name;
        $pwd=MD5($request->pwd);
        $email=$request->email;
        $phone=$request->phone;
        $user=$request->user;
        $res=DB::table('login')->insertGetId(['name'=>$name,'pwd'=>$pwd,'user'=>$user,'email'=>$email,'phone'=>$phone]);
        if ($res) {
           Session::put('id',$res);
           Session::put('name',$name);
           echo "<script>alert('注册成功');location.href='blo'</script>";
        }else
        {
            echo "失败";
        }
    }
}

	