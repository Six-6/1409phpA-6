<?php
/*
* 搜索查询
*
* @韦森编写 
 */
namespace App\Http\Controllers\home;

use Redirect,Session,DB,Input;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

session_start();//开启session
class RecursionController extends BaseController{
    /*
     * 递归展示首页侧边栏
     */
    public function recursion(){
        $tables = DB::table('region')->get();
        $ast = $this->Cate($tables,0,0);
        return view('home.home',['arr1' => $ast]);
    }

    public function Cate(&$info, $child, $pid)  
    {  
        $child = array();  
        if(!empty($info)){
            foreach ($info as $k => &$v) {  
                if($v->p_id == $pid){
                    $v->child = $this->Cate($info, $child, $v->r_id);
                    $child[] = $v;
                    unset($info[$k]); 
                }  
            }  
        }  
        return $child;//返回生成的树形数组  
    }

    /*
     *首页全文检索
     */
    public function searchs(Request $request){
        $sou = $request->input('sous'); 
        $sqlSel = DB::select("SELECT * FROM scenic_spot WHERE match(s_name,s_traffic) against('$sou')");
        $nums = count($sqlSel);
        if ($sqlSel) {
            return view('home.search',['souarr'=>$sqlSel,'count'=>$nums,'sou'=>$sou]);
        }else{
            echo "<script>alert('抱歉，没有您输入的信息，请联系网站管理员');location.href='recursion'</script>";
        }
    }

    /*
     *行程天数
     */
    public function searchDay(){
        $traffic = Input::get('ss'); 
        $days = Input::get('dayid'); 
        $sqlSel = DB::table('scenic_spot')
            ->where(['s_day'=>$days,'s_name'=>$traffic])
            ->orwhere(['s_day'=>$days,'s_traffic'=>$traffic])
            ->get();
        $nums = count($sqlSel);
        echo json_encode($sqlSel);
    }

    /*
     *行程资金
     */
    public function searchMoney(){
        $traffic = Input::get('ss'); 
        $price = Input::get('price'); 
        $begin = $price[0];
        $ends = $price[1];
        $sqlSel = DB::table('scenic_spot')
            ->where('s_name',$traffic)
            ->whereBetween('s_sprice', [$begin,$ends])
            ->get();
        $nums = count($sqlSel);
        echo json_encode($sqlSel);
    }

}