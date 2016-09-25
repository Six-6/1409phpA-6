<?php
/**
 * @志同道合
 * @褚玉密编写
 **/
namespace App\Http\Controllers\home;

use App\F_show;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Redirect;
use App\Fun;
use App\Users;
use App\Integral;
use App\Fun_user;
use App\F_type;
use Session;
use DB;
use Input;

session_start();

class FunController extends BaseController
{
    /**
     * 志同道和展示
     */
    public function show()
    {

        $re = Fun::selAll();
        //print_r($re);die;
        foreach ($re as $k => $v) {
            $re[$k]['count'] = $v['f_num'] - $v['p_num'];
        }
        return view("home/fun/show", ['re' => $re]);
    }

    /**
     * 志同道合详细页面
     */
    public function lists(Request $request)
    {
        $u_id = Session::get('u_id');
        if(empty($u_id))
        {
            $url = $_SERVER['HTTP_REFERER'];
            Session::put('url',$url);
            return redirect('blo');
        }
        //$uid = 1;
        $u_id=Session::get("u_id");
       // $name = "23454";
        $name=Session::get("name");
        //$u_id = 10;
        $id = $request->input("f_id");
        $re = Fun::gets($id);
        //print_r($re);die;
        $surplus = $re[0]['f_num'] - $re[0]['p_num'];
        $i_id = Users::finds($u_id);
        $res = Integral::gets($i_id);
        $user = Fun_user::personS($id);
        return view("home/fun/add", ["re" => $re, "user" => $user, "name" => $name, "uid" => $u_id, "surplus" => $surplus, "res" => $res]);
    }

    /**
     * 志同道合列表展示
     */
    public function replay()
    {
        $name=Session::get("name");
        //$name = "summer";
        $re = Fun::lists();
        return view("home/fun/replay", ['re' => $re, "name" => $name]);
    }
    /**
     * 志同道合发起页面
     */
    public function post()
    {
        $type = F_type::selAll();
        // print_r($type);die;
        return view("home/fun/post", ["type" => $type]);
    }
    /**
     * 志同道合添加
     */
    public function adds(Request $request)
    {
        $re = $request->input();
       // print_r($re);die;
        unset($re['_token']);
        $file = $request->file("f_img");
        $clientName = $file->getClientOriginalName();//获得文件名字
        $entension = $file->getClientOriginalExtension(); //上传文件的后缀.
        $newName = md5(date('ymdhis') . $clientName) . "." . $entension;//改名字
        $path = $file->move('./fun', $newName);//将图片放到storage/uploads下
        $path1 = str_replace('\\', '/', $path);
        $re['f_img'] = "." . $path1;
        Fun::add($re);
        return Redirect::to("home/funReplay");
    }
    /**
     * 志同道合关联好友
     */
    public function user(Request $request)
    {
        $u_id = $request->input("u_id");
        $f_id = $request->input("f_id");
        $time = date("y-m-d h:i:s");
        $friend = Fun_user::friend($u_id);
        if (in_array($f_id, $friend)) {
            echo 1;
        } else {
            $s = Fun::nows($f_id);
            $re = Fun_user::start($u_id);
            foreach ($re as $v) {
                if ($v['start_time'] <= $s['start_time'] && $v['end_time'] >= $s['start_time']) {
                    return 3;
                } else if ($v['start_time'] <= $s['end_time'] && $v['end_time'] >= $s['end_time']) {
                    return 3;
                }
            }
            if (empty($b)) {
                Fun_user::user($u_id, $f_id, $time);
                $person = Fun::person($f_id);
                $persons = $person['p_num'] + 1;
                Fun::upd($f_id, $persons);
                echo 0;
            } else {
                Fun_user::user($u_id, $f_id, $time);
                $person = Fun::person($f_id);
                $persons = $person['p_num'] + 1;
                Fun::upd($f_id, $persons);
                echo 0;
            }
        }
    }
}