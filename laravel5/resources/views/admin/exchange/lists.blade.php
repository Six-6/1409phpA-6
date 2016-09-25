@include("admin/index/index")
<div class="public-ifame-content">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台欢迎页</title>
    <link rel="stylesheet" href="./css/reset.css" />
    <link rel="stylesheet" href="./css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
<div class="container">
    <div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">信息管理</a><a href="">会员信息</a></div>
    <div class="public-content">
        <div class="public-content-cont">
            <input type="hidden" name="_token" id="token" value="{{csrf_token()}}" />
            <table class="public-cont-table">
                <table class="public-cont-table">
                <tr>
                    <th style="width:5%">选择</th>
                    <th style="width:10%">ID</th>
                    <th style="width:10%">商品名称</th>
                    <th style="width:5%">商品价格</th>
                    <th style="width:5%">市场价格</th>
                    <th style="width:10%">商品图片</th>
                    <th style="width:5%">库存数量</th>
                    <th style="width:10%">商品简介</th>
                    <th style="width:10%">到期时间</th>
                    <th style="width:10%">商品链接</th>
                    <th style="width:10%">商品类型</th>
                    <th style="width:10%">操作</th>
                </tr>
                @foreach($data['data'] as $v)
                    <tr>
                        <td><input type="checkbox"></td>
                        <td>{{$v->e_id}}</td>
                        <td>{{$v->e_name}}</td>
                        <td>{{$v->e_price}}</td>
                        <td>{{$v->r_price}}</td>
                        <td>
                            @if(empty($v->e_img))
                                <img class="thumb"  src="./images/thumb.jpg" />
                            @else
                                <img class="thumb" width="200px" height="20px" src="{{$v->e_img}}" />
                            @endif
                        </td>
                        <td>{{$v->e_num}}</td>
                        <td>{{$v->e_content}}</td>
                        <td>{{$v->e_time}}</td>
                        <td>{{$v->e_href}}</td>
                        <td>{{$v->t_name}}</td>
                        <td>
                            <div class="table-fun">
                                <a href="">删除</a>
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
                <div class="page-bottom">
                    <a rel="nofollow" href="">一共{{$data['mexpage']}}页</a>
                    <a rel="nofollow" href="">第{{$data['page']}}页</a>
                    <a rel="nofollow" href="{{$data['url']}}?page=1">首页</a>
                    <a rel="nofollow" href="{{$data['url']}}?page={{$data['page']-1}}">上一页</a>
                    <a rel="nofollow" href="{{$data['url']}}?page={{$data['page']+1}}">下一页</a>
                    <a rel="nofollow" href="{{$data['url']}}?page={{$data['mexpage']}}">末页</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
    </div>
<script src="./jq.js"></script>
<script>
    $(".perfect").click(function(){
        var _this=$(this);
        var token=$("#token").val();
        var id=$(this).attr("id");
        $.post("userInfo",{id:id,_token:token},function(msg){
            _this.html(msg);
        });
    });
</script>