<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台欢迎页</title>
	<link rel="stylesheet" href="../admin/css/reset.css" />
	<link rel="stylesheet" href="../admin/css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">名片管理</a></div>
		<div class="public-content">
			<div class="public-content-header">
				<h3>修改网站配置</h3>
			</div>
			<div class="public-content-cont">
				<table class="public-cont-table">
					<tr>
						<th style="width:2%">编号</th>
						<th style="width:2%">景点</th>
						<th style="width:5%">景点名称</th>
						<th style="width:5%">往返交通</th>
						<th style="width:5%">旅游价格</th>
						<th style="width:5%">旅游天数</th>
						<th style="width:5%">发布人</th>
						<th style="width:5%">操作</th>
					</tr>
					@foreach($arr as $v)
					<tr id="yi{{ $v->s_id }}">
						<td>{{$v->s_id}}</td>
						<td><img class="thumb" src="../image/one/shopphoto/{{$v->s_img}}" width="30px" height="30px" /></td>
						<td onclick="dians({{ $v->s_id }})">              
	                        <input type="text" id="aa{{$v->s_id}}" value="{{$v->s_name}}" style="display:none" onblur="gai({{$v->s_id}})">
	                        <span id="s{{$v->s_id}}">{{$v->s_name}}</span>
                        </td>
						<td>{{$v->s_traffic}}</td>						
						<td>{{$v->s_sprice}}</td>
						<td>{{$v->s_day}}</td>						
						<td></td>
						<td>
							<div class="table-fun">
								<a href="">修改</a>
								<a href="javascript:void(0)" onclick="delway({{$v->s_id}})">删除</a>
							</div>
						</td>
					</tr>
					@endforeach
				</table>
				<div class="page">
					<form action="" method="get">
					共<span>42</span>个站点
						<a href="">首页</a>
						<a href="">上一页</a>
						<a href="">下一页</a>
						第<span style="color:red;font-weight:600">12</span>页
						共<span style="color:red;font-weight:600">120</span>页
						<input type="text" class="page-input">
						<input type="submit" class="page-btn" value="跳转">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script src="../admin/js/jquery.min.js"></script>
<script>
	//删除
	function delway(sid){
		 $.ajax({
            type:"get",
            url:"{{URL('admin/delway')}}",
            data:"sid="+sid,
            success:function(data){
            	if (data == 1) {
            		$("#yi"+sid).remove();
            	}else{
            		alert("操作失败");
            	}
            }
         })
	}
    //即点即改
    function dians(s_id){
        $("#aa"+s_id).show();
        $("#aa"+s_id).focus();
        $("#s"+s_id).hide();
    }
    function gai(s_id){
        var vals=$("#aa"+s_id).val();//span name值
        $.ajax({
            type:"get",
            url:"{{URL('admin/jgaiWay')}}",
            data:"s_id="+s_id+"&&vals="+vals,
            success:function(data){
                if (data == 1) {
                    $("#s"+s_id).show();
                    $("#aa"+s_id).hide();
                    $("#s"+s_id).html(vals);
                }else{
                    alert("修改失败");
                }
            }
        })
    }
</script>