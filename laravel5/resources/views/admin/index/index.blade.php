<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/public.css">
</head>
<body>
<div class="public-header-warrp">
    <div class="public-header">
        <div class="content">
            <div class="public-header-logo"><a href=""><i>LOGO</i>

                    <h3>拓源网络科技</h3></a></div>
            <div class="public-header-admin fr">
                <p class="admin-name"><?php echo $name?>管理员 您好！</p>

                <div class="public-header-fun fr">
                    <a href="" class="public-header-man">管理</a>
                    <a href="javascript:void(0)" onclick="unsession()" class="public-header-loginout">安全退出</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<!-- 内容展示 -->
<div class="public-ifame mt20">
    <div class="content">
        <div class="clearfix"></div>
        <!-- 左侧导航栏 -->
        <div class="public-ifame-leftnav">
            <div class="public-title-warrp">
                <div class="public-ifame-title ">
                    <a href="">首页</a>
                </div>
            </div>
            <ul class="left-nav-list">
                @foreach($ar as $val)
                    <li class="public-ifame-item">
                        <a href="javascript:;">{{$val->pname}}</a>
                        <div class="ifame-item-sub">
                            <ul>
                                @if(!empty($val->child))
                                    @foreach($val->child as $va)
                                        @if(!empty($va->pname))
                                            <li class="active"><a href="{{URL($va->p_url)}}">{{$va->pname}}</a></li>
                                        @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- 右侧内容展示部分 -->
        <div class="public-ifame-content">

        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery1.8.js"></script>
<script>
    $().ready(function () {
        var item = $(".public-ifame-item");

        for (var i = 0; i < item.length; i++) {
            $(item[i]).on('click', function () {
                $(".ifame-item-sub").hide();
                if ($(this.lastElementChild).css('display') == 'block') {
                    $(this.lastElementChild).hide()
                    $(".ifame-item-sub li").removeClass("active");
                } else {
                    $(this.lastElementChild).show();
                    $(".ifame-item-sub li").on('click', function () {
                        $(".ifame-item-sub li").removeClass("active");
                        $(this).addClass("active");
                    });
                }
            });
        }
    });
    function unsession() {
        location.href = 'unsession';
    }
</script>
</body>
</html>