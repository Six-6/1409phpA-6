<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Input;
class Login extends Model {
    public $timestamps=false;
    public $table="login";
    /**个人信息**/
    public static function selAll(){
        $re=DB::table("login")
            ->join("type","login.t_id","=","type.t_id")
            ->get();
        return $re;
    }
    /**个人信息验证**/
    public static function info(){
        $re=DB::table("login")->lists("name");
        return $re;
    }
    /**个人信息修改**/
    public static function upd($re){
        $re=DB::table("login")->where('u_id',$re['u_id'])->update($re);
        return $re;
    }
    /**原密码验证**/
    public static function pwd($id){
        $re=self::where("u_id",$id)->get()->toArray();
        return $re;
    }
    /**密码修改**/
    public static  function psw($id,$psw){
        $re=self::where("u_id",$id)->update(["pwd"=>$psw,"psw"=>$psw]);
        return $re;
    }
}
