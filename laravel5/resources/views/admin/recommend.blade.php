<div class="public-ifame-content">
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台欢迎页</title>
	<link rel="stylesheet" href="../admin/css/reset.css" />

</head>
<body marginwidth="0" marginheight="0">
<div style="width:100%;height:auto;float:left" >
	@foreach($data['meme'] as $key => $value)
	<div style=" margin-top:3%;margin-left:4%;width:20%;float:left">
		<div>
			<div></div>
			<div> <img width="110" height="110" src="../home/images/{{$value -> s_img}}"> </div>
			<div style="margin-top:10px"> 
				<span class="tit">{{$value->s_name}}</span>
			</div>
			<div class="txt2" style="margin-top:10px"> 
				<span class="tit">￥{{$value->s_sprice}}</span>&nbsp&nbsp&nbsp
			    <span class="tit">{{$value->s_degree}}人次</span>
			    </a> 
			</div>
		</div>    
	</div>
	@endforeach
</div>
</body>
</html>
</html>
</div>