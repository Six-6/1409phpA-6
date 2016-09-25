<?php
/*
*@旅游管理
*
*@韦森编写 
* 
 */
namespace App\Http\Controllers;

use DB, Input, Session;
use Illuminate\Http\Request;

use App\Way;

class WayController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    /*
     *递归展示类型
     *@return 
     */
	public function index()
	{
		$tables = DB::table('region')->get();
		$types = $this->Cate($tables,0,0);
        return view('admin.types',['arr' => $types]);
	}
    /*
         * 添加展示
         * @return
         */
    public function wayadd()
    {
        $tables = DB::table('region')->get();
        return view('admin.article_add', ['arr' => $tables]);
    }
    /*
     *旅游景点修改
     * @return
     */
    public function jgaiWay(){
		$tables = Input::get();
		$uploads = DB::table('scenic_spot')
            ->where('s_id', $tables['s_id'])
            ->update(['s_name' => $tables['vals']]);
        if ($uploads) {
            echo 1;
        }
    }

    /*
     * 树形遍历数组
     * @return  $info要遍历的值 、$child自增 、$pid父集id
     */
    public function Cate(&$info, $child, $pid)
    {
        $child = array();
        if (!empty($info)) {
            foreach ($info as $k => &$v) {
                if ($v->p_id == $pid) {
                    $v->child = $this->Cate($info, $child, $v->r_id);
                    $child[] = $v;
                    unset($info[$k]);
                }
            }
        }
        return $child;//返回生成的树形数组
    }

    public function types()
    {
        $id = Input::get('id');
        $name = Input::get('name');
        $typeSel = DB::table('region')->where('p_id', $id)->get();
        return view('admin.small_types', ['typearr' => $typeSel, 'names' => $name]);
    }

    /*
     *旅游分类即时修改
     *@return
     */
    public function jgaitypes()
    {
        $tables = Input::get();
        $uploads = DB::table('region')
            ->where('r_id', $tables['s_id'])
            ->update(['r_region' => $tables['vals']]);
        if ($uploads) {
            echo 1;
        }
	}
	
	/*
	 *删除大分类
	 *@return
	 */
	public function typedel(){
		$rid = Input::get('rid');
		$sel = DB::table('region')->where('p_id',$rid)->get();
		if ($sel) {
			echo 1;
		}else{
			$del = DB::table('region')->where('r_id',$rid)->delete();
			if ($del) {
				echo 2;
			}
		}
	}
	/*
	 *删除小分类
	 *@return
	 */
	public function delsmall(){
		$id = Input::get('id');
		$delsmall = DB::table('region')->where('r_id', $id)->delete();
		if ($delsmall) {
			echo 1;
		}
	}
	/*
	 *删除景点
	 *@return
	 */
	public function delway(){
		$id = Input::get('sid');
		$del = DB::table('scenic_spot')->where('s_id', $id)->delete();
		if ($del) {
			echo 1;
		}
	}


	/*
	 *添加旅游方式
	 *@return
	 */
	public function addway(){
		$data = Input::get();

		$addway = DB::table('scenic_spot')->insert([
			'r_id' => $data['types'],
			's_name' => $data['SiteName'],
			's_traffic' => $data['traffic'],
			's_img' => $data['files'],
			's_day' => $data['day']
		]);

		if ($addway) {
			echo 1;
		}
	}
	/*
	 *图片上传
	 *
	 *@param  Request  $request
	 *
     * @return Response
	 */
	public function uploas(Request $request){
		$data = $request->all();
		$file = $request->file('file');
		 //if($data['SiteName']==''||$data['traffic']==''||$data['day']==''||$data['file']==''||$data['types']==''||$data['classify']==''){

		 	$file_name = $file->getClientOriginalName();//图片名
			$file_ex = $file->getClientOriginalExtension();    //上传文件的后缀	
		//判断文件格式
		if(!in_array($file_ex, array('jpg', 'gif', 'png'))){
			echo "<script>alert('文件格式错误,仅支持 jpg ,gif,png');location.href='admin/wayadd'</script>";
		}
		$newname = md5(date('ymdhis').$file_name).".".$file_ex;
		$savepath = base_path().'/public/image/one/shopphoto/';
		$filepath = $request->file('file')->move($savepath, $file_name);
		if ($filepath) {
			$fileadd = "/image/one/shopphoto/".$file_name;
			$id = DB::table('scenic_spot')->insertGetId(['s_img' => $fileadd]);
			if ($id) {
				$tuadd = DB::table('scenic_spot')->where('s_id',$id)->update([
					'r_id' => $data['types'],
	            	's_name' => $data['SiteName'],
	            	's_traffic' => $data['traffic'],
	            	's_day' => $data['day'],
	            	'c_id' => $data['classify'],
	            	's_sprice' => $data['sprice']
	            ]);
	            if ($tuadd) {
	            	//return http_redirect();
	            	return redirect('admin/waysel');
	            }else{
	            	echo "<script>alert('添加失败');location.href='{{URL('admin/wayadd')}}'</script>";
	            }
				
			}
		}else{
			echo "<script>alert('上传失败');location.href='{{URL('admin/wayadd')}}'</script>";
		}
	}

	/**
	 * 展示旅游方式
	 * @return [type] $tables [旅游方式]
	 */
	public function waysel(){
		$tables = DB::table('scenic')->get();
		return view('admin.admin_cardTemplate2',['arr' => $tables]);
	}

	/**
	 * 后台用户管理--用户评价审核
	 * @return [type] $data [用户的所有评论]
	 * @return [type] $lefts [递归左侧]
	 */
	function toExamine(){
		$name=Session::get("name");

		$Model = new Way();

		$data = $Model->toExamine();

		$lefts = $Model->lefts();

		return view('admin.toExamine',['examine' => $data,'ar'=>$lefts,'name'=>$name]);
	}

	/**
	 * 审核用户的评论
	 * @return [type] $data [审核后的评论]
	 */
	function examine(){
		$exaId = Input::get('examineId');

		$Model = new Way();

		$data = $Model->examine($exaId);

		return $data;
	}

	function jgaiExamine(){
		$gid = Input::get();

		$Model = new Way();

		$data = $Model->jgaiExamine($gid);

		return $data;
	}
}
	
