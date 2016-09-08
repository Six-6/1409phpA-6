<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>游记管理</title>
	<link rel="stylesheet" href="../admin/css/reset.css" />
	<link rel="stylesheet" href="../admin/css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="{{URL('admin/travelnotes')}}">游记审核</a></div>
		<div class="public-content">
			<div class="public-content-header">
				<h3 style="display: inline-block;">游记审核</h3>
				<div class="public-content-right fr">
					<!--<a href="" style="height: 24px; width: 60px;border: 1px solid #ccc;font-size: 12px;text-align:center">添加信息</a> -->
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="public-content-cont two-col">
				<!--<div class="public-cont-left col-1">
					<div class="public-cont-title">
						<h3>信息分类</h3>
					</div>
					<ul class="public-cate-list">
						<li class="public-cate-item"><a href="{{URL('admin/travelnotes')}}">人在旅途</a></li>
						<li class="public-cate-item"><a href="{{URL('admin/classics')}}">经典回顾</a></li>
						<li class="public-cate-item"><a href="{{URL('admin/audit')}}">游记审核</a></li>
					</ul>
				</div> -->
				<table class="public-cont-table col-2">
					<tr>
						<th style="width:5%">选择</th>
						<th style="width:5%">ID</th>
						<th style="width:35%">游记名称</th>
						<th style="width:10%">发表人</th>>
						<th style="width:10%">加入时间</th>						
						<th style="width:15%">操作</th>
					</tr>
					@foreach ($T_audit['data'] as $T_audits)
					<tr>
						<td><input type="checkbox" /></td>
						<td>{{$T_audits -> t_id}}</td>						
						<td>{{$T_audits-> t_title}}</td>
						<td>{{$T_audits -> u_name}}</td>
					
						<td><span style="color:#999">{{$T_audits -> t_times}}</span></td>
						<td>
							<div class="table-fun">
   
								<a href="{{URL('admin/travelsupdata')}}?id={{$T_audits -> t_id}}">审核</a>								
								<a href="{{URL('admin/travelsdelete')}}?id={{$T_audits -> t_id}}">删除</a>
							</div>
						</td>
					</tr>
					@endforeach
				</table>
				<center>
				<table>
					<tr>
						<td>
							<a href="http://www.tianhao.com/1409phpA-6/laravel5/public/admin/audit?page=1">首页</a>						
						</td>
						<td>
							@if ($T_audit['page'] == 1)   
								<a href="http://www.tianhao.com/1409phpA-6/laravel5/public/admin/audit?page=1">上一页</a>
							@else
								<a href="http://www.tianhao.com/1409phpA-6/laravel5/public/admin/audit?page={{$T_audit['page']-1}}">上一页</a>
							@endif							
						</td>
						<td>
							@if ($T_audit['page'] == $T_audit['mexpage']) 
								<a href="http://www.tianhao.com/1409phpA-6/laravel5/public/admin/audit?page={{$T_audit['mexpage']}}">下一页</a>
							@else
								<a href="http://www.tianhao.com/1409phpA-6/laravel5/public/admin/audit?page={{$T_audit['page']+1}}">下一页</a>
							@endif
						</td>
						<td>
							@if ($T_audit['page'] > $T_audit['mexpage'])    
							@else
								<a href="http://www.tianhao.com/1409phpA-6/laravel5/public/admin/audit?page={{$T_audit['mexpage']}}">最后一页</a>
							@endif
						</td>
					</tr>
				</table>
				</center>
			</div>
		</div>
	</div>
</body>
</html>
<script src="./js/jquery.1.12.js"></script>
<script src="./js/mytravelnotes.js"></script>









