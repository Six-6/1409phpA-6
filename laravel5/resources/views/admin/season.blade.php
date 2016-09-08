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
		<div class="public-nav">您当前的位置：<a href="">当期推荐</a></div>
		<div class="public-content">
			<div class="public-content-header">
				<h3>当期推荐</h3>
			</div>
			<div class="public-content-cont">
					<table class="public-cont-table col-2">
						<tr>
							<th style="width:30%">当季标题</th>
							<th style="width:30%">当季图片</th>
							<th style="width:10%">加入时间</th>						
							<th style="width:20%">选在 </th>
							<th style="width:10%">操作</th>
						</tr>
						@foreach ($season as $sea)
							<form action="{{URL('admin/seaadd')}}" method="post" enctype="multipart/form-data" >
								<tr>
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="hidden" value="{{$sea->s_id}}" name="s_id"/>					
									<td><input type="text" value="{{$sea->s_name}}" name="s_name"></td>						
									<td><img width="80" height="80" src="{{$sea->s_image}}" name="s_image"></td>						
									<td><span>{{$sea->s_time}}</span></td>
									<td><input type="file" name="file"></td>
									<td>
										<div class="table-fun">
		   									<input type="submit" value="上传">
										</div>
									</td>
								</tr>
							</form>
						@endforeach
					</table>				
			</div>
		</div>
	</div>
<script src="../kingediter/kindeditor-all-min.js"></script>
<script src="../js/laydate.js"></script>
<script>
	 KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
</script>
</body>
</html>