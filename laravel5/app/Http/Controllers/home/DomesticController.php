<?php
/**
 * @国内游
 * @李来恩编写
 **/
namespace App\Http\Controllers\home;

header('content-type:text/html;charset=utf-8');

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Domestic;
use Session,DB,Input,Redirect;

class DomesticController extends BaseController{
	/**
	* @国内游首页展示
	* @return Request $request 接收值
	**/
    public function index(Request $request){

    	$rid=$request->rid;

    	//调用model层

		$model = new Domestic();

    	$regionArr=$model->regionSelect(1);

        $scenicArr=$model->scenicSelect($regionArr);

        return view('home/domestic/domestic_list',['arr'=>$regionArr,'scenicArrs'=>$scenicArr]);
    }
    /**
    * @景点对比
    * @return Request $request 接收值
    **/
    public function contrast(Request $request){
        $ids=$request->sid;

        $sid=explode(',',$ids);

        $scenidArr=DB::table('scenic_spot')->wherein('s_id',$sid)->get();
        
        echo json_encode($scenidArr);
    }

    /**
    * @景点详情
    * @return Request $request 接收值
    **/
    public function scenicDetails(Request $request){

        $sid=$request->sid;

        //调用model层

        $model = new Domestic();

        $scenicArr=$model->scenicSels($sid);

        return view('home/domestic/details_list',['arr'=>$scenicArr]);
    }

    /**
    * @填写订单
    * @return Request $request 接收值
    **/
    public function fill(Request $request){

        $adult=$request->adult;

        $children=$request->children;

        $nums=$children+$adult;

        $sid=$request->sid;
          
        $scenicArr=DB::table('scenic_spot')->where('s_id',$sid)->first();

        return view('home/domestic/order_form',['arr'=>$scenicArr,'adult'=>$adult,'children'=>$children,'nums'=>$nums]);
    }

    /**
    * @填写用户信息
    * @return Request $request 接收值
    **/
    public function write_information(Request $request){

        $adult=$request->adult;

        $children=$request->children;

        $sprice=$request->sprice;

        $s_sprice=$request->s_sprice;

        $s_id=$request->s_id;

        return view('home/domestic/write_information',['sprice'=>$sprice,'adult'=>$adult,'children'=>$children,'s_sprice'=>$s_sprice,'s_id'=>$s_id]);
    }

    /**
    * @核对订单
    * @return Request $request 接收值
    **/
    public function check_order(Request $request){

        $orderJson=$request->domArr;

        $domArr=json_decode($orderJson);

        $name=$domArr->member_name;

        $phone=$domArr->member_phone;

        $code_type=$domArr->member_type;

        $code=$domArr->member_id;

        $nameArr=explode(',',$name);

        $phoneArr=explode(',',$phone);

        $code_typeArr=explode(',',$code_type);

        $codeArr=explode(',',$code);

        $arr=array();

        $arr['name']=$nameArr;

        $arr['phone']=$phoneArr;

        $arr['type']=$code_typeArr;

        $arr['code']=$codeArr;

        foreach ($arr as $key => $value) {

            foreach ($value as $k => $v) {

               $newArr[$k][$key] = $v;

            }
        }    
        $date=date('Y-m-d');

        $s_name=DB::table('scenic_spot')->where('s_id',$domArr->s_id)->lists('s_name');

        Session::put('date',$domArr);

        return view('home/domestic/check_order',['arr'=>$domArr,'sname'=>$s_name,'newarr'=>$newArr,'date'=>$date]);
    }

    /**
    * @下订单 付款
    * @return Request $request 接收值
    **/
    public function payment(Request $request){

        $date=Session::get('date');

        $u_id=Session::get('u_id');

        // $date=$request->session()->pull('date', 'default');

        //判断用户是否登录
        if(!empty($u_id))
        {
            $orderRow=DB::table('order')->where(['u_id'=>$u_id,'s_id'=>$date->s_id])->orderBy('o_time','desc')->lists('o_time');

            //判断订单表里是否有同一个用户下相同的景点订单
            if ($orderRow) {

                //获取下单的时间
                $newTime=strtotime($orderRow[0]); 

                $times=time();

                //获取本旅游景点的天数
                $newDays=DB::table('scenic_spot')->where('s_id',$date->s_id)->first();

                //判断相同订单的时间是否冲突
                if($times-$newTime<$newDays->s_day*24*3600)
                {
                    echo 1;

                }else
                {
                    //判断用户取得这个景点发表时间是否超过一个月,没超过一个月就给用户的尝鲜人字段加一
                    if($times-$newDays->s_times<3600*24*30)
                    {
                        $rank=DB::table('login')->where('u_id',$u_id)->lists('rank');

                        DB::table('login')->where('u_id',$u_id)->update(['rank'=>$rank[0]+1]);

                        DB::table('scenic_spot')->where('s_id',$date->s_id)->update(['s_degree'=>$newDays->s_degree+1,'s_sign_number'=>$newDays->s_sign_number+1]);
                       
                        $a_id=DB::table('attace_order')->insertGetId(['a_name'=>$date->a_name,'a_phone'=>$date->a_phone,'a_email'=>$date->a_email,'member_name'=>$date->member_name,'member_phone'=>$date->member_phone,'member_type'=>$date->member_type,'member_id'=>$date->member_id,'a_remarks'=>$date->a_remarks,'a_number'=>$date->adult+$date->children]);

                        if($a_id)
                        {
                            //获取当前日期
                            $newDate=date('Y-m-d',$times);

                            //获取旅游结束日期
                            $endTime=date('Y-m-d',$times+$newDays->s_day*24*3600);

                            //生成编号
                            $number='HW'.$date->s_id.time();

                            $row=DB::table('order')->insert(['s_id'=>$date->s_id,'o_time'=>$newDate,'start_time'=>$newDate,'end_time'=>$endTime,'r_price'=>$date->r_sprice,'o_num'=>$number,'c_price'=>$date->c_sprice,'o_name'=>$newDays->s_name,'u_id'=>$u_id,'a_id'=>$a_id]);
                            if($row)
                            {
                                $nums=$date->adult+$date->children;
                                // echo $nums;
                                return view('home/domestic/generate_order',['number'=>$number,'date'=>$date,'s_name'=>$newDays->s_name,'nums'=>$nums]);
                                
                            }
                        } 
                    }
                    else
                    {
                        

                        $rew=DB::table('scenic_spot')->where('s_id',$date->s_id)->update(['s_degree'=>$newDays->s_degree+1,'s_sign_number'=>$newDays->s_sign_number+1]);
                        
                        DB::table('scenic_spot')->where('s_id',$date->s_id)->update(['s_degree'=>$newDays->s_degree+1,'s_sign_number'=>$newDays->s_sign_number+1]);
                       
                        $a_id=DB::table('attace_order')->insertGetId(['a_name'=>$date->a_name,'a_phone'=>$date->a_phone,'a_email'=>$date->a_email,'member_name'=>$date->member_name,'member_phone'=>$date->member_phone,'member_type'=>$date->member_type,'member_id'=>$date->member_id,'a_remarks'=>$date->a_remarks,'a_number'=>$date->adult+$date->children]);

                        if($a_id)
                        {
                            //获取当前日期
                            $newDate=date('Y-m-d',$times);

                            //获取旅游结束日期
                            $endTime=date('Y-m-d',$times+$newDays->s_day*24*3600);

                            //生成编号
                            $number='HW'.$date->s_id.time();

                            $row=DB::table('order')->insert(['s_id'=>$date->s_id,'o_time'=>$newDate,'start_time'=>$newDate,'end_time'=>$endTime,'r_price'=>$date->r_sprice,'o_num'=>$number,'c_price'=>$date->c_sprice,'o_name'=>$newDays->s_name,'u_id'=>$u_id,'a_id'=>$a_id]);
                            if($row)
                            {
                                $nums=$date->adult+$date->children;

                                return view('home/domestic/generate_order',['number'=>$number,'date'=>$date,'s_name'=>$newDays->s_name,'nums'=>$nums]);
                            }
                        } 
                       
                    }
                }
            }
            //如果订单表里没有相同的订单
            else
            {
                $times=time();

                //获取订单旅游景点的天数
                $newDays=DB::table('scenic_spot')->where('s_id',$date->s_id)->first();
                
                //判断用户取得这个景点发表时间是否超过一个月,没超过一个月就给用户的尝鲜人字段加一
                    if($times-$newDays->s_times<3600*24*30)
                    {
                        $rank=DB::table('login')->where('u_id',$u_id)->lists('rank');

                        DB::table('login')->where('u_id',$u_id)->update(['rank'=>$rank[0]+1]);

                        DB::table('scenic_spot')->where('s_id',$date->s_id)->update(['s_degree'=>$newDays->s_degree+1,'s_sign_number'=>$newDays->s_sign_number+1]);
                       
                        $a_id=DB::table('attace_order')->insertGetId(['a_name'=>$date->a_name,'a_phone'=>$date->a_phone,'a_email'=>$date->a_email,'member_name'=>$date->member_name,'member_phone'=>$date->member_phone,'member_type'=>$date->member_type,'member_id'=>$date->member_id,'a_remarks'=>$date->a_remarks,'a_number'=>$date->adult+$date->children]);

                        if($a_id)
                        {
                            //获取当前日期
                            $newDate=date('Y-m-d',$times);

                            //获取旅游结束日期
                            $endTime=date('Y-m-d',$times+$newDays->s_day*24*3600);

                            //生成编号
                            $number='HW'.$date->s_id.time();

                            $row=DB::table('order')->insert(['s_id'=>$date->s_id,'o_time'=>$newDate,'start_time'=>$newDate,'end_time'=>$endTime,'r_price'=>$date->r_sprice,'o_num'=>$number,'c_price'=>$date->c_sprice,'o_name'=>$newDays->s_name,'u_id'=>$u_id,'a_id'=>$a_id]);
                            if($row)
                            {
                                $nums=$date->adult+$date->children;
                                // echo $nums;
                                return view('home/domestic/generate_order',['number'=>$number,'date'=>$date,'s_name'=>$newDays->s_name,'nums'=>$nums]);
                            }
                        } 
                    }
                    else
                    {
                        
                        $rew=DB::table('scenic_spot')->where('s_id',$date->s_id)->update(['s_degree'=>$newDays->s_degree+1,'s_sign_number'=>$newDays->s_sign_number+1]);
                        
                        DB::table('scenic_spot')->where('s_id',$date->s_id)->update(['s_degree'=>$newDays->s_degree+1,'s_sign_number'=>$newDays->s_sign_number+1]);
                       
                        $a_id=DB::table('attace_order')->insertGetId(['a_name'=>$date->a_name,'a_phone'=>$date->a_phone,'a_email'=>$date->a_email,'member_name'=>$date->member_name,'member_phone'=>$date->member_phone,'member_type'=>$date->member_type,'member_id'=>$date->member_id,'a_remarks'=>$date->a_remarks,'a_number'=>$date->adult+$date->children]);

                        if($a_id)
                        {
                            //获取当前日期
                            $newDate=date('Y-m-d',$times);

                            //获取旅游结束日期
                            $endTime=date('Y-m-d',$times+$newDays->s_day*24*3600);

                            //生成编号
                            $number='HW'.$date->s_id.time();

                            $row=DB::table('order')->insert(['s_id'=>$date->s_id,'o_time'=>$newDate,'start_time'=>$newDate,'end_time'=>$endTime,'r_price'=>$date->r_sprice,'o_num'=>$number,'c_price'=>$date->c_sprice,'o_name'=>$newDays->s_name,'u_id'=>$u_id,'a_id'=>$a_id]);
                            if($row)
                            {
                                $nums=$date->adult+$date->children;
                                // echo $nums;
                                return view('home/domestic/generate_order',['number'=>$number,'date'=>$date,'s_name'=>$newDays->s_name,'nums'=>$nums]);
                            }
                        } 
                       
                    }
            }
        }else
        {
            $pwd=rand(1000,9999);
            $uid=DB::table('login')->insertGetId(['phone'=>$date->a_phone,'email'=>$date->a_email,'user'=>$date->a_name,'pwd'=>MD5($pwd)]);
            if($uid)
            {
                Session::put('u_id',$uid);
    
                $times=time();

                //获取订单旅游景点的天数
                $newDays=DB::table('scenic_spot')->where('s_id',$date->s_id)->first();
                
                //判断用户取得这个景点发表时间是否超过一个月,没超过一个月就给用户的尝鲜人字段加一
                    if($times-$newDays->s_times<3600*24*30)
                    {
                        $rank=DB::table('login')->where('u_id',$uid)->lists('rank');

                        DB::table('login')->where('u_id',$uid)->update(['rank'=>$rank[0]+1]);

                        DB::table('scenic_spot')->where('s_id',$date->s_id)->update(['s_degree'=>$newDays->s_degree+1,'s_sign_number'=>$newDays->s_sign_number+1]);
                       
                        $a_id=DB::table('attace_order')->insertGetId(['a_name'=>$date->a_name,'a_phone'=>$date->a_phone,'a_email'=>$date->a_email,'member_name'=>$date->member_name,'member_phone'=>$date->member_phone,'member_type'=>$date->member_type,'member_id'=>$date->member_id,'a_remarks'=>$date->a_remarks,'a_number'=>$date->adult+$date->children]);

                        if($a_id)
                        {
                            //获取当前日期
                            $newDate=date('Y-m-d',$times);

                            //获取旅游结束日期
                            $endTime=date('Y-m-d',$times+$newDays->s_day*24*3600);

                            //生成编号
                            $number='HW'.$date->s_id.time();

                            $row=DB::table('order')->insert(['s_id'=>$date->s_id,'o_time'=>$newDate,'start_time'=>$newDate,'end_time'=>$endTime,'r_price'=>$date->r_sprice,'o_num'=>$number,'c_price'=>$date->c_sprice,'o_name'=>$newDays->s_name,'u_id'=>$uid,'a_id'=>$a_id]);
                            if($row)
                            {
                                $nums=$date->adult+$date->children;
                                // echo $nums;
                                return view('home/domestic/generate_order',['phone'=>$date->a_phone,'pwd'=>$pwd,'number'=>$number,'date'=>$date,'s_name'=>$newDays->s_name,'nums'=>$nums]);
                            }
                        } 
                    }
                    else
                    {
                        
                        $rew=DB::table('scenic_spot')->where('s_id',$date->s_id)->update(['s_degree'=>$newDays->s_degree+1,'s_sign_number'=>$newDays->s_sign_number+1]);
                        
                        DB::table('scenic_spot')->where('s_id',$date->s_id)->update(['s_degree'=>$newDays->s_degree+1,'s_sign_number'=>$newDays->s_sign_number+1]);
                       
                        $a_id=DB::table('attace_order')->insertGetId(['a_name'=>$date->a_name,'a_phone'=>$date->a_phone,'a_email'=>$date->a_email,'member_name'=>$date->member_name,'member_phone'=>$date->member_phone,'member_type'=>$date->member_type,'member_id'=>$date->member_id,'a_remarks'=>$date->a_remarks,'a_number'=>$date->adult+$date->children]);

                        if($a_id)
                        {
                            //获取当前日期
                            $newDate=date('Y-m-d',$times);

                            //获取旅游结束日期
                            $endTime=date('Y-m-d',$times+$newDays->s_day*24*3600);

                            //生成编号
                            $number='HW'.$date->s_id.time();

                            $row=DB::table('order')->insert(['s_id'=>$date->s_id,'o_time'=>$newDate,'start_time'=>$newDate,'end_time'=>$endTime,'r_price'=>$date->r_sprice,'o_num'=>$number,'c_price'=>$date->c_sprice,'o_name'=>$newDays->s_name,'u_id'=>$uid,'a_id'=>$a_id]);
                            if($row)
                            {
                                $nums=$date->adult+$date->children;
                                // echo $nums;
                                return view('home/domestic/generate_order',['phone'=>$date->a_phone,'pwd'=>$pwd,'number'=>$number,'date'=>$date,'s_name'=>$newDays->s_name,'nums'=>$nums]);
                            }
                        } 
                       
                    }
            }
        }
    }
}