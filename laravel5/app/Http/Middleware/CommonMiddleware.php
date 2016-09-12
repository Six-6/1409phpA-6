<?php
/**
 * @权限完善
 * @褚玉密
 */
namespace App\Http\Middleware;
use Closure;
use Session;
use Route;
use DB;
use Illuminate\Http\Request;
class CommonMiddleware{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     */
    public function handle($request, Closure $next){
        $u_id=Session::get('u_id');
        $res=DB::table('users')->where('u_id',$u_id)->lists('rid');
        $arr=DB::table('r_p')
            ->join('power','r_p.pid','=','power.pid')
            ->where('r_p.rid',$res[0])
            ->lists("p_url");
        $path=$request->path();
        if(in_array($path,$arr)){
            $name=Session::get("name");
            $arr=DB::table('power')->get();
            $ar=$this->Cate($arr,0,0);
            view()->share("name",$name);
            view()->share('ar',$ar);
            return $next($request);
        }else{
            echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
            header("refresh:1;url=indexs");
            die("您没有权限");
        }
    }

    /**
     * @param $info
     * @param $child
     * @param $pid
     * @return array
     * @多级联动
     */
    public function Cate(&$info, $child, $parent_id)
    {
        $child = array();
        if(!empty($info)){//当$info中的子类还没有被移光的时候
            foreach ($info as $k => &$v) {
                if($v->parent_id == $parent_id){//判断是否存在子类pid和返回的父类id相等的
                    $v->child = $this->Cate($info, $child, $v->pid);//每次递归参数为当前的父类的id
                    $child[] = $v;//将$info中的键值移动到$child当中
                    unset($info[$k]);//每次移动过去之后删除$info中当前的值
                }
            }
        }
        return $child;//返回生成的树形数组
    }
}
