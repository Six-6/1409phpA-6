<meta name="csrf-param" content="_csrf">
<meta name="csrf-token" content="WllhTDdOMTUqLTINeilmUzctCnl5L2hUACA1B08aCWcsMDQpQwlEew==">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./fun/foot.css">

<style type="text/css">
    .logo span {
        float: left;
        width: 163px;
        height: 55px;
        margin: 5px 0 0 0;
    }
</style>
<link id="skinlayercss" href="./fun/layer.css" rel="stylesheet" type="text/css">
<link href="./fun/mask.css" rel="stylesheet" type="text/css">
<link id="rightCommonCss" rel="stylesheet" type="text/css" href="./fun/right_common.css"></head>

<script type="text/javascript" src="./fun/in-min.js"></script>
<script type="text/javascript" src="./fun/header_v2.js"></script>
<script type="text/javascript" src="./fun/getDegree.js"></script>
<script type="text/javascript" src="./fun/screen_size.js"></script>
<link rel="stylesheet" href="./fun/index_nav_menu.css">
<link rel="stylesheet" type="text/css" href="./fun/TN_date.css">
<script type="text/javascript" src="./fun/search_ajax.js"></script>

<script type="text/javascript" src="./fun/jquery-1.js"></script>
<link rel="stylesheet" type="text/css" href="./fun/jquery.css" media="screen">
<link rel="stylesheet" type="text/css" href="./fun/playingHome.css">
<link rel="stylesheet" href="./fun/pub_mod.css">

<div id="description1" class="description">
    <div class="des-show">
        <div class="yj-name">【现金征集】全球目的地玩法火热进行</div>
    </div>
</div>
<div id="description2" class="description">
    <div class="des-show">
        <div class="yj-name">【玩法】7天6晚 日本轻奢慢生活</div>
    </div>
</div>
<div id="description3" class="description">
    <div class="des-show">
        <div class="yj-name">【玩法】4天3晚伦敦，行走在阳光与阴雨下</div>
    </div>
</div>


<div class="fix-playing">
    <img src="./fun/playing.png" alt="">
</div>

<div class="content-bg">
    <!-- 游玩内容 start -->
    <div class="content-wrapper">
        <!-- 玩法描述 按钮 start-->
        <div class="play-description">
            <div class="description-show">
                <img src="./fun/desbg.png" alt="">
            <span>
                旅行，就是去玩！同一个世界，玩法不同，体验也不同。玩法是旅行达人经验和情怀的产物，是达人以
                自己的方式体验某个目的地之后，沉淀出来的有温度，有深度的游玩指南。玩法，让旅行更简单！
            </span>
            </div>
            <div class="description-btn">
                <a href="javascript:;" class="write-playing">我要写玩法</a>
                <a href="" class="my-playing" target="_blank">我的玩法</a>
            </div>
        </div>
        <!-- 玩法描述 按钮 end-->
        <!-- 玩法推荐 start-->
        <div class="play-recommend">
            <p class="recommend-tit">热门玩法</p>

            <p class="recommend-des">选择最中意的玩法，探索未知的精彩世界！</p>

            <div class="list-container">
                <ul class="pro-list">
                    @foreach($res as $v)
                    <li>
                        <a href="http://www.tuniu.com/way/188645" target="_blank">
                            <div class="pro-img">
                                <img src="{{$v->f_img}}" alt=""
                                     class="pro-img-show">
                                <img src="./fun/recbg.png" alt="" class="tit-meng">

                                <div class="pro-tit-show">
                                    <img src="{{$v->f_person}}"
                                         alt="">

                                    <div class="pro-auther-name">{{$v->f_name}}</div>
                                    <div class="pro-ding" id="dingAjax" data-id="188645"><i></i>2</div>
                                    <div class="pro-comment"><i></i>0</div>
                                    <div class="pro-scan"><i></i>5441</div>
                                </div>
                            </div>
                            <div class="pro-detail">
                                <div class="detail-days">
                                    <span class="day-num">{{$v->f_num}}</span>
                                    <span class="day-day">DAYS</span>
                                </div>
                                <div class="detail-show">
                                    <div class="detail-tit">{{$v->f_title}}</div>
                                    <div class="detail-line">{{$v->f_content}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <a href="javascript:;" class="pro-prev" id="pro-prev"></a>
            <a href="javascript:;" class="pro-next" id="pro-next"></a>
        </div>
        <!-- 玩法推荐 end-->
        <!-- 游玩内容 start-->
        <div class="playing-content">
            <!-- 左侧内容 游玩列表 start-->
            <div class="content-left">

                <!-- 广告位  -->
                <a href="http://www.tuniu.com/trips/10099021" class="ad" target="_blank" rel="nofollow">
                    <img src="./fun/Cii-TFfE8umIJBlLAAF8zvL72aIAAB27AIKknMAAXzm79_w800_h0_c0_t0.jpg" alt="玩法头条">
                </a>

                <div class="left-top">
                    <!-- 游记tab start-->
                    <ul class="playing-tab">
                        <li class="current">境外热门</li>
                        <li>境内热门</li>
                        <li>最新发布</li>
                    </ul>
                </div>
                <div class="list-show">
                    <div style="display: none;" class="commen-loadding"></div>
                    <ul style="display: block;" class="list-data">
                        <li>
                            <a href="http://www.tuniu.com/way/189358" target="_blank">
                                <div class="playing-img">
                                    <img src=""
                                         alt="" class="playing-img-show">
                                    <img src="" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num"></span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit"></div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 </p>

                                            <p>D2 </p>

                                            <p>D3 </p>

                                            <p>D4 </p>

                                            <p>D5 </p>

                                            <p>D6 </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="189358"><i></i>4</div>
                                <div class="playing-comment"><i></i>5</div>
                                <div class="playing-scan"><i></i></div>
                                <a href="http://www.tuniu.com/person/379DD834FF8D5BA4D903AC55D9525352" target="_blank">
                                    <img src="./fun/Cii9EVdiC6WIXTkhAAAUT2FlVgYAAGkbwP_xCAAABRn641_w120_h120_c1_.jpg"
                                         alt="">

                                    <div class="playing-auther-name"></div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/188810" target="_blank">
                                <div class="playing-img">
                                    <img src=""
                                         alt="" class="playing-img-show">
                                    <img src="" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num">7</span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit"></div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 </p>

                                            <p>D2 </p>

                                            <p>D3 </p>

                                            <p>D4 </p>

                                            <p>D5 </p>

                                            <p>D6 </p>

                                            <p>D7 </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="188810"><i></i>3</div>
                                <div class="playing-comment"><i></i>0</div>
                                <div class="playing-scan"><i></i>3650</div>
                                <a href="http://www.tuniu.com/person/22C427593DF54F523241A24C9ACCCC9E" target="_blank">
                                    <img src=""
                                         alt="">

                                    <div class="playing-auther-name"></div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/188453" target="_blank">
                                <div class="playing-img">
                                    <img src=""
                                         alt="" class="playing-img-show">
                                    <img src="./fun/recbg.png" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num"></span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit"></div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 </p>

                                            <p>D2 </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="188453"><i></i>3</div>
                                <div class="playing-comment"><i></i>0</div>
                                <div class="playing-scan"><i></i>1609</div>
                                <a href="http://www.tuniu.com/person/F239DD24744253C52493602FBB57D9C1" target="_blank">
                                    <img src="./fun/Cii9EFdP0MCIbDMdAAB_5XFD8JsAAGSiAAskq8AAH_9619_w120_h120_c1_.jpg"
                                         alt="">

                                    <div class="playing-auther-name"></div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/195382" target="_blank">
                                <div class="playing-img">
                                    <img src=""
                                         alt="" class="playing-img-show">
                                    <img src="./fun/recbg.png" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num">17</span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit">俄罗斯17日自由行（3大主城、5金环小城、1银环小城）</div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 香港-莫斯科</p>

                                            <p>D2 莫斯科-弗拉基米尔-博戈柳博沃-苏兹达尔</p>

                                            <p>D3 苏兹达尔-弗拉基米尔-莫斯科</p>

                                            <p>D4 莫斯科-大诺夫哥罗德</p>

                                            <p>D5 大诺夫哥罗德-圣彼得堡</p>

                                            <p>D6 圣彼得堡</p>

                                            <p>D7 圣彼得堡</p>

                                            <p>D8 圣彼得堡-巴甫洛夫斯克-叶卡捷琳娜宫</p>

                                            <p>D9 圣彼得堡</p>

                                            <p>D10 圣彼得堡-雅罗斯拉夫尔</p>

                                            <p>D11 雅罗斯拉夫尔-大罗斯托夫</p>

                                            <p>D12 大罗斯托夫-谢尔盖耶夫</p>

                                            <p>D13 谢尔盖耶夫-莫斯科</p>

                                            <p>D14 莫斯科-喀山</p>

                                            <p>D15 喀山-莫斯科</p>

                                            <p>D16 莫斯科-香港</p>

                                            <p>D17 莫斯科-香港-深圳</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="195382"><i></i>5</div>
                                <div class="playing-comment"><i></i>0</div>
                                <div class="playing-scan"><i></i>3188</div>
                                <a href="http://www.tuniu.com/person/5B81880A543BFBCEA831EBF85C76C11E" target="_blank">
                                    <img src="./fun/Cii9EVbv-5aIDHM2ABfRuEwKIZ8AACtkAM-obsAF9HQ375_w120_h120_c1_.jpg"
                                         alt="">

                                    <div class="playing-auther-name"></div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/193346" target="_blank">
                                <div class="playing-img">
                                    <img src=""
                                         alt="" class="playing-img-show">
                                    <img src="" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num">3</span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit"></div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1</p>

                                            <p>D2 </p>

                                            <p>D3 </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="193346"><i></i>0</div>
                                <div class="playing-comment"><i></i>0</div>
                                <div class="playing-scan"><i></i>1890</div>
                                <a href="http://www.tuniu.com/person/B59532BF49BE98F98BF3113D673AFA56" target="_blank">
                                    <img src="" alt="">

                                    <div class="playing-auther-name"></div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/190599" target="_blank">
                                <div class="playing-img">
                                    <img src=""
                                         alt="" class="playing-img-show">
                                    <img src="" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num">7</span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit"></div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 </p>

                                            <p>D2 </p>

                                            <p>D3 </p>

                                            <p>D4 </p>

                                            <p>D5 </p>

                                            <p>D6 </p>

                                            <p>D7 </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="190599"><i></i>8</div>
                                <div class="playing-comment"><i></i>5</div>
                                <div class="playing-scan"><i></i>2330</div>
                                <a href="http://www.tuniu.com/person/AF7C03A7F65618C342755CAD54AB460C" target="_blank">
                                    <img src="./fun/Cii-TleAmS-IPM17AAZWX2fRnpUAAAENwIOQA8ABlZ3175_w120_h120_c1_.jpg"
                                         alt="">

                                    <div class="playing-auther-name"></div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/190105" target="_blank">
                                <div class="playing-img">
                                    <img src=""
                                         alt="" class="playing-img-show">
                                    <img src="" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num">2</span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit"></div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 </p>

                                            <p>D2 </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="190105"><i></i>1</div>
                                <div class="playing-comment"><i></i>0</div>
                                <div class="playing-scan"><i></i>1344</div>
                                <a href="http://www.tuniu.com/person/B1924DDDF511020756BADF0EAD9C59F9" target="_blank">
                                    <img src="./fun/Cii9EFdD0POIAb7nABX05pyV3wsAAGJVwN0BDcAFfT-333_w120_h120_c1_.jpg"
                                         alt="">

                                    <div class="playing-auther-name"></div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/188649" target="_blank">
                                <div class="playing-img">
                                    <img src=""
                                         alt="" class="playing-img-show">
                                    <img src="" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num">7</span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit"></div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 </p>

                                            <p>D2 </p>

                                            <p>D3 </p>

                                            <p>D4 </p>

                                            <p>D5 </p>

                                            <p>D6 </p>

                                            <p>D7 </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="188649"><i></i>16</div>
                                <div class="playing-comment"><i></i>16</div>
                                <div class="playing-scan"><i></i>1855</div>
                                <a href="http://www.tuniu.com/person/338CA2AABE559A5929DAE437D0F28C36" target="_blank">
                                    <img src="./fun/Cii9EVdTADGIamGbAA9NCDOpHSAAAGY9wPvdgsAD00g768_w120_h120_c1_.JPG"
                                         alt="">

                                    <div class="playing-auther-name">紫色飞絮</div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/188645" target="_blank">
                                <div class="playing-img">
                                    <img src=""
                                         alt="" class="playing-img-show">
                                    <img src="" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num">11</span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit"></div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 </p>

                                            <p>D2 </p>

                                            <p>D3 伊斯坦布尔</p>

                                            <p>D4 伊斯坦布尔</p>

                                            <p>D5 </p>

                                            <p>D6 </p>

                                            <p>D7 </p>

                                            <p>D8 格雷梅热气球日出</p>

                                            <p>D9 棉花堡</p>

                                            <p>D10 费特希耶地中海滑翔伞</p>

                                            <p>D11 费特希耶</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="188645"><i></i>2</div>
                                <div class="playing-comment"><i></i>0</div>
                                <div class="playing-scan"><i></i>5441</div>
                                <a href="http://www.tuniu.com/person/C0240C0C9F4E11E28A0F62CE9C6E8A23" target="_blank">
                                    <img src="./fun/Cii9EFdFco-IfGunAAeJ8v0QjFsAAGKwgOQi1QAB4oK598_w120_h120_c1_.jpg"
                                         alt="">

                                    <div class="playing-auther-name"></div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/188530" target="_blank">
                                <div class="playing-img">
                                    <img src=""
                                         alt="" class="playing-img-show">
                                    <img src="" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num">4</span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit"></div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 </p>

                                            <p>D2 </p>

                                            <p>D3 </p>

                                            <p>D4 </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="188530"><i></i>3</div>
                                <div class="playing-comment"><i></i>1</div>
                                <div class="playing-scan"><i></i>3405</div>
                                <a href="http://www.tuniu.com/person/B59532BF49BE98F98BF3113D673AFA56" target="_blank">
                                    <img src="./fun/f5ba6e0589a7dbd1547c7cd088482f81_w120_h120_c1_t0.jpg" alt="">

                                    <div class="playing-auther-name"></div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/188450" target="_blank">
                                <div class="playing-img">
                                    <img src=""
                                         alt="" class="playing-img-show">
                                    <img src="" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num">4</span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit"></div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 </p>

                                            <p>D2 </p>

                                            <p>D3 </p>

                                            <p>D4 </p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="188450"><i></i>5</div>
                                <div class="playing-comment"><i></i>0</div>
                                <div class="playing-scan"><i></i>2845</div>
                                <a href="http://www.tuniu.com/person/B59532BF49BE98F98BF3113D673AFA56" target="_blank">
                                    <img src="./fun/f5ba6e0589a7dbd1547c7cd088482f81_w120_h120_c1_t0.jpg" alt="">

                                    <div class="playing-auther-name"></div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/188435" target="_blank">
                                <div class="playing-img">
                                    <img src=""
                                         alt="" class="playing-img-show">
                                    <img src="" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num">4</span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit"></div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 </p>

                                            <p>D2 </p>

                                            <p>D3 </p>

                                            <p>D4 伦敦</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="188435"><i></i>3</div>
                                <div class="playing-comment"><i></i>1</div>
                                <div class="playing-scan"><i></i>2592</div>
                                <a href="http://www.tuniu.com/person/9BAA2BF99BD3CC88A2E100A0630C072D" target="_blank">
                                    <img src="./fun/7bb40c694568935e86d1916d48aee37d_w120_h120_c1_t0.jpg" alt="">

                                    <div class="playing-auther-name"></div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/188385" target="_blank">
                                <div class="playing-img">
                                    <img src=""
                                         alt="" class="playing-img-show">
                                    <img src="" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num">3</span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit"></div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 上海-阿布扎比-日内瓦</p>

                                            <p>D2 日内瓦-蒙特勒-韦沃-洛桑-日内瓦</p>

                                            <p>D3 日内瓦-因特拉肯</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="188385"><i></i>2</div>
                                <div class="playing-comment"><i></i>1</div>
                                <div class="playing-scan"><i></i>2842</div>
                                <a href="http://www.tuniu.com/person/F7B314F45296EC1A42892EF072A7A6E1" target="_blank">
                                    <img src="./fun/Cii9EVckQ7WICcttAAB_gUaqMdQAAFIbQMfoY8AAH-Z741_w120_h120_c1_.jpg"
                                         alt="">

                                    <div class="playing-auther-name">享旅</div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/188370" target="_blank">
                                <div class="playing-img">
                                    <img src="./fun/Cii-TlfBD5KIYA2qAAMRr6z_WEoAABxdAGd5vYAAxHH305_w300_h165_c1_.jpg"
                                         alt="" class="playing-img-show">
                                    <img src="./fun/recbg.png" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num">4</span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit">【缅甸】4天4夜曼德勒 古老国度的迷人光线</div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 昆明-曼德勒</p>

                                            <p>D2 曼德勒</p>

                                            <p>D3 曼德勒</p>

                                            <p>D4 曼德勒-眉缪</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="188370"><i></i>4</div>
                                <div class="playing-comment"><i></i>0</div>
                                <div class="playing-scan"><i></i>4489</div>
                                <a href="http://www.tuniu.com/person/1D96BB332B719375BE1E3D8645E9D029" target="_blank">
                                    <img src="./fun/Cii-TFeqdtGIVj2OAABMYn7ocjQAABAXgNUpAEAAEx6853_w120_h120_c1_.jpg"
                                         alt="">

                                    <div class="playing-auther-name">太空精灵</div>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="http://www.tuniu.com/way/188365" target="_blank">
                                <div class="playing-img">
                                    <img src="./fun/Cii-Tle_3AeIP87KAAUnMzn-YDYAABvYwFRN8EABSdL799_w300_h165_c1_.jpg"
                                         alt="" class="playing-img-show">
                                    <img src="./fun/recbg.png" alt="" class="playing-meng">

                                    <div class="playing-des">
                                        <div class="playing-top">
                                            <div class="playing-days">
                                                <span class="day-num">7</span>
                                                <span class="day-day">DAYS</span>
                                            </div>
                                            <div class="playing-tit">吃河豚、和牛、蟹道乐、怀石料理才是游玩东京的正确打开方式</div>
                                        </div>
                                        <div class="playing-hover-show">
                                            <p>D1 广州-东京</p>

                                            <p>D2 涩谷</p>

                                            <p>D3 东京</p>

                                            <p>D4 东京</p>

                                            <p>D5 东京</p>

                                            <p>D6 东京</p>

                                            <p>D7 东京-广州</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="playing-tit-show">
                                <div class="playing-ding" id="dingAjax" data-id="188365"><i></i>6</div>
                                <div class="playing-comment"><i></i>1</div>
                                <div class="playing-scan"><i></i>2789</div>
                                <a href="http://www.tuniu.com/person/46410F4B6E0A51086A2D45D9DCF9B202" target="_blank">
                                    <img src="./fun/Cii9EFc0AQmIWijSAAKYY7xQOzcAAFZCgBEM7cAAph7615_w120_h120_c1_.jpg"
                                         alt="">

                                    <div class="playing-auther-name">敏华爱美丽</div>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <ul class="list-data"></ul>
                    <ul class="list-data"></ul>
                    <!-- 游记列表 end-->
                    <!-- 分页 -->
                    <div class="pager pagination" data-init="pager" style="display:none"></div>
                    <div data-curpage="1" data-pager-inited="true" class="pager pagination" data-init="pager" style="">
                        <div class="page-bottom"><a class="page-prev" href="javascript:void(0)" data-page="0">上一页</a><a
                                    class="page-first" href="javascript:void(0)" data-page="1"
                                    style="display: none;">1</a><span class="page-break"
                                                                      style="display: none;">...</span><a
                                    class="pager-item page-cur firstshowing" href="javascript:void(0);"
                                    data-page="1">1</a><a class="pager-item " href="javascript:void(0);"
                                                          data-page="2">2</a><a class="pager-item "
                                                                                href="javascript:void(0);"
                                                                                data-page="3">3</a><a
                                    class="pager-item " href="javascript:void(0);" data-page="4">4</a><a
                                    class="pager-item lastshowing" href="javascript:void(0);" data-page="5">5</a><span
                                    class="page-break">...</span><a class="page-last" href="javascript:void(0)"
                                                                    data-page="9">9</a><a class="page-next"
                                                                                          href="javascript:void(0)"
                                                                                          data-page="2">下一页</a></div>
                    </div>
                    <div class="pager pagination" data-init="pager" style="display:none"></div>
                </div>
            </div>
            <!-- 交互数据 -->
            <script>
                window.$render_data = {
                    count: 9
                }
            </script>
            <!-- 左侧内容 游玩列表end-->
            <!-- 右侧内容 start-->
            <div class="content-right">
                <div class="right-traverler">
                    <div class="right-commen-tit">
                        <p class="right-tit">大玩家</p>
                        <a href="http://www.tuniu.com/traveler" class="right-more" target="_blank" rel="nofollow">更多&nbsp;&gt;</a>
                    </div>
                    <div class="traverler-auther">
                        <div class="traverler-img">
                            <div class="traverler-sex  sex-women"></div>
                            <a href="http://www.tuniu.com/person/4F8F9694E6F3FD3EFE97289DF24BBE70" target="_blank"
                               rel="nofollow"><img
                                        src="./fun/Cii-TlfRwXeIJ5y0AAbidFjkLeEAACMygNQFYsABuKM545_w90_h90_c1_t0.jpg"
                                        alt="" class="traverler-title-img"></a>
                        </div>
                        <div class="traverler-name">无食不欢</div>
                        <div class="traverler-des">唯有美景与美食不可辜负，用眼睛和舌头来探索，用心去体悟。
                            偶是发动了洪荒之力来品鉴的萌萌哒小女子。
                            作为三明四季旅行家受邀参加三明悠然四季行的旅行活动。
                        </div>
                        <ul class="traverler-label">
                            <li>摄影</li>
                            <li>写攻略</li>
                            <li>美食</li>
                        </ul>
                        <a href="http://www.tuniu.com/traveler/recruit/" class="master-btn" target="_blank">申请大玩家</a>
                    </div>
                </div>
                <div class="mater-show">
                    <div class="right-commen-tit">
                        <p class="right-tit">玩家排行榜</p>
                    </div>
                    <!--周排行-->
                    <ul class="maseter-list">
                        <li>
                            <a href="http://www.tuniu.com/person/B1EBC030012D2FA54D3B813D3726B919" target="_blank">
                                <div class="master-img">
                                    <img src="./fun/Cii9EFdzuv6IWd9ZAAB6ZQCxKl4AAG0BgC58YEAAHp964_w120_h120_c1_t.jpg"
                                         alt="" class="master-titimg">

                                    <div class="master-sort sort1"></div>
                                </div>
                                <div class="master-detail">
                                    <p class="master-name">qyyhades</p>
                                </div>
                            </a>

                            <div class="master-ding" id="dingAjax">
                                <i></i>

                                <p>116</p>
                            </div>
                        </li>
                        <li>
                            <a href="http://www.tuniu.com/person/9BC66B8E019C67DBB272B5103F68E734" target="_blank">
                                <div class="master-img">
                                    <img src="./fun/Cii9EVc7RJSIPJSnAArJSvi9vkAAAF4RAEKY4cACsli433_w120_h120_c1_.jpg"
                                         alt="" class="master-titimg">

                                    <div class="master-sort sort2"></div>
                                </div>
                                <div class="master-detail">
                                    <p class="master-name">大大江</p>
                                </div>
                            </a>

                            <div class="master-ding" id="dingAjax">
                                <i></i>

                                <p>83</p>
                            </div>
                        </li>
                        <li>
                            <a href="http://www.tuniu.com/person/0F3CF946908678A81AFC35B326C5C64A" target="_blank">
                                <div class="master-img">
                                    <img src="./fun/6c84d91a557cace0295020b23c073514_w120_h120_c1_t0.jpg" alt=""
                                         class="master-titimg">

                                    <div class="master-sort sort3"></div>
                                </div>
                                <div class="master-detail">
                                    <p class="master-name">活猪子</p>
                                </div>
                            </a>

                            <div class="master-ding" id="dingAjax">
                                <i></i>

                                <p>74</p>
                            </div>
                        </li>
                        <li>
                            <a href="http://www.tuniu.com/person/E40C00D0568435BA3F9897F76B65EAF2" target="_blank">
                                <div class="master-img">
                                    <img src="./fun/Cii9EVdztKeIBBE6AAKqrokOQTgAAG0AAI8VVgAAqrG730_w120_h120_c1_.jpg"
                                         alt="" class="master-titimg">

                                    <div class="master-sort sort4"></div>
                                </div>
                                <div class="master-detail">
                                    <p class="master-name">WHV视界</p>
                                </div>
                            </a>

                            <div class="master-ding" id="dingAjax">
                                <i></i>

                                <p>70</p>
                            </div>
                        </li>
                        <li>
                            <a href="http://www.tuniu.com/person/1D96BB332B719375BE1E3D8645E9D029" target="_blank">
                                <div class="master-img">
                                    <img src="./fun/Cii-TFeqdtGIVj2OAABMYn7ocjQAABAXgNUpAEAAEx6853_w120_h120_c1_.jpg"
                                         alt="" class="master-titimg">

                                    <div class="master-sort sort5"></div>
                                </div>
                                <div class="master-detail">
                                    <p class="master-name">太空精灵</p>
                                </div>
                            </a>

                            <div class="master-ding" id="dingAjax">
                                <i></i>

                                <p>68</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="bk-recommend">
                    <div class="right-commen-tit">
                        <p class="right-tit">爆款推荐</p>
                        <a href="http://temai.tuniu.com/" class="right-more">更多&nbsp;&gt;<i></i></a>
                    </div>
                    <ul class="bk-list">
                        <li><a href="http://temai.tuniu.com/tours/212081739/" target="_blank"> <img
                                        src="./fun/39e7ea198c053f2bf5ff85c34e055a34_w180_h180_c1_t0.jpg"
                                        data-src="http://m.tuniucdn.com/filebroker/cdn/vnd/39/e7/39e7ea198c053f2bf5ff85c34e055a34_w180_h180_c1_t0.jpg"
                                        alt="" class="bk-img">

                                <div class="bk-des-show"><p class="bk-name">[含签]&lt;普吉岛-皮皮岛5晚6日或7日游&gt;畅玩珍珠岛十合一娱乐项目，升级国五酒店</p>

                                    <p class="bk-des">含签，畅玩珍珠岛十合一娱乐项目，升级国五酒店</p>

                                    <div class="price-show"><span class="bk-type">跟团游</span>

                                        <div class="bk-price"><span class="price-num">￥1799.00</span> 起</div>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="http://temai.tuniu.com/tours/212079959/" target="_blank"> <img
                                        src="./fun/Cii9EVcHYJGIZd-vAAizmDtsNDQAADCtQIadHIACLOw820_w180_h180_c1_.jpg"
                                        data-src="http://m.tuniucdn.com/fb2/t1/G1/M00/62/9A/Cii9EVcHYJGIZd-vAAizmDtsNDQAADCtQIadHIACLOw820_w180_h180_c1_t0.jpg"
                                        alt="" class="bk-img">

                                <div class="bk-des-show"><p class="bk-name">丽江-香格里拉-玉龙雪山双飞5日游</p>

                                    <p class="bk-des">冰川大索道，虎跳峡，普达措，一晚古城客栈，藏家体验，品牦牛火锅，赠丽水金沙</p>

                                    <div class="price-show"><span class="bk-type">跟团游</span>

                                        <div class="bk-price"><span class="price-num">￥1099.00</span> 起</div>
                                    </div>
                                </div>
                            </a></li>
                        <li><a href="http://temai.tuniu.com/tours/212081749/" target="_blank"> <img
                                        src="./fun/Cii-TFfIHruILG6IAAcoHLt2zpgAAB8wgPAGlcAByg0604_w180_h180_c1_.jpg"
                                        data-src="http://m.tuniucdn.com/fb2/t1/G2/M00/54/9D/Cii-TFfIHruILG6IAAcoHLt2zpgAAB8wgPAGlcAByg0604_w180_h180_c1_t0.jpg"
                                        alt="" class="bk-img">

                                <div class="bk-des-show"><p class="bk-name">长滩岛4晚5日半自助游</p>

                                    <p class="bk-des">赠送苏州往返交通，赠送回程到上海一晚住宿，赠送特色欢迎午餐，指定入住杜鹃花或高尔夫或同级</p>

                                    <div class="price-show"><span class="bk-type">跟团游</span>

                                        <div class="bk-price"><span class="price-num">￥2199.00</span> 起</div>
                                    </div>
                                </div>
                            </a></li>
                    </ul>
                </div>
            </div>
            <!-- 右侧内容 end-->
        </div>
        <!-- 游玩内容 start-->
    </div>
    <!-- 游玩内容 end -->
</div>

<script type="text/javascript" src="./fun/template.js"></script>
<script type="text/javascript" src="./fun/jquery.js"></script>
<script type="text/javascript" src="./fun/playingHome.js"></script>
<script type="text/javascript" src="./fun/unveil.js"></script>
<script type="text/javascript" src="./fun/pager.js"></script>
<script type="text/javascript" src="./fun/layer.js"></script>

<!--start foot-->
<!-- siteMap S -->