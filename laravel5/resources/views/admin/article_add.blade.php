@include("admin/index/index")
<div class="public-ifame-content">
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台欢迎页</title>
	<link rel="stylesheet" href="../admin/css/reset.css" />
	<link rel="stylesheet" href="../admin/css/public.css" />
	<link rel="stylesheet" href="../admin/css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="public-content">
			<div class="public-content-header">
				<h3>修改网站配置</h3>
			</div>
			<div class="public-content-cont">
			    <form method="post" action="{{URL('admin/uploas')}}" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">请选择分类</label>
					<select name="types" class="form-select">
						<option value="">--请选择--</option>
			    		@foreach($arr as $s=>$k)
						<option id='types' value="{{ $k->r_id }}" />&nbsp;{{ $k->r_region }}</option>
					    @endforeach
					</select>

					<select name="classify" class="form-select">
						<option value="">--请选择--</option>
						<option id='types' value="1" />&nbsp;马尔代夫度假</option>
						<option id='types' value="2" />&nbsp;欧洲文艺都市</option>
						<option id='types' value="3" />&nbsp;热血之路</option>
						<option id='types' value="4" />&nbsp;古寨之旅</option>
						<option id='types' value="5" />&nbsp;文化之路</option>
					</select>

				</div>
				<div class="form-group">
					<label for="">风景名</label>
					<input class="form-input-txt" type="text" name="SiteName" id="SiteName" value="" onblur="SiteName2()" />
					<span id="fj"></span>
				</div>
				<div class="form-group">
					<label for="">往返交通</label>
					<input class="form-input-txt" type="text" name="traffic" id="traffic" value="" onblur="traffic2()"/>
					<span id="jt"></span>
				</div>
				<div class="form-group">
					<label for="">旅游价格</label>
					<input class="form-input-txt" type="text" name="sprice" id="sprice" value="" onblur="sprice2()"/>
					<span id="jg"></span>
				</div>
				<div class="form-group">
					<label for="">旅游天数</label>
					<input class="form-input-txt" type="text" name="day" id="day" value="" onblur="day2()" />
					<span id="ts"></span>
				</div>
<!-- 				<div class="form-group">
	<label for="">发布人</label>
	<input class="form-input-txt" type="button" name="username" id="username" value="{{Session::get('username')}}" />
</div> -->
				<div class="form-group">
					<label for="">图片</label>
    				<input type="hidden" name="_token" value="{{csrf_token()}}" />
					<div class="file"><input type="file" name="file" id="file" />选择文件</div>
					<!-- <div class="file"><input type="submit" class="form-input-file"/>上传</div> -->
				</div>
				<br>
				<div style="margin-left:150px;">
					<!-- <input type="button" class="sub-btn" onclick="addway()" value="提  交" /> -->
					<input type="submit" class="sub-btn" value="提  交" />
					<input type="reset" class="sub-btn" value="重  置" />
				</div>
				</form>
			</div>
		</div>
	</div>
<script src="../admin/kingediter/kindeditor-all-min.js"></script>
<script src="../admin/js/laydate.js"></script>
<script>
	 KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
</script>
<script src="../assets/js/jquery-2.1.4.min.js"></script>
<script>
	function SiteName2(){
		var SiteName=$("#SiteName").val();
		var verify=/^[\u4e00-\u9fa5]{2,17}$/;
		if (!verify.test(SiteName)) {
			$("#fj").html("<font color='red'>由6-18位汉字组成</font>");
			return false;
		}else
        {
            $("#fj").html("<font color='group'>可用</font>");
            return true;
        }
	}
	function traffic2(){
		var traffic=$("#traffic").val();
		if (traffic=='公交'||traffic=='火车'||traffic=='飞机'||traffic=='公交+火车'||traffic=='火车+飞机'||traffic=='公交+飞机') {
			$("#jt").html("<font color='green'>可用</font>");
			return false;
		}else{
			$("#jt").html("<font color='red'>公交、火车、飞机、公交+火车、火车+飞机、公交+飞机</font>");
			return false;
		}
		
	}
	function sprice2(){
		var sprice=$("#sprice").val();
		var verify=/^[0-9]{1,9}$/;
		if (!verify.test(sprice)) {
			$("#jg").html("<font color='red'>由1-9位数字组成</font>");
			return false;
		}else
        {
            $("#jg").html("<font color='green'>可用</font>");
            return true;
        }
	}
	function day2(){
		var day=$("#day").val();
		var verify=/^[0-9]{1,3}$/;
		if (!verify.test(day)) {
			$("#ts").html("<font color='red'>由1-3位数字组成</font>");
			return false;
		}else
        {
            $("#ts").html("<font color='green'>可用</font>");
            return true;
        }
	}
</script>
</body>
</html>
    </div>