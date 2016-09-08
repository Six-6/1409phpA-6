@include("home/common/left")
<div id="main">
    <div class="common_head cf">
        <h2>订单</h2>
        <input type="hidden" name="create_type_flag" id="create_type_flag" value="4"></input>
        <div class="tabBox">
            <div id="tab_1">
                <ul class="order_cate">
                    <li class="csel"><a id="all"  href="javascript:void(0)">所有 							订单</a></li>

                </ul>
            </div>

        </div>
    </div>
    <div class="tabContent">
        <table cellpadding="0" cellspacing="0" border="0" class="common-table mbt10" width="750">
            <tr>
                <th width="60" scope="col">订单编号</th>
                <th width="68" scope="col">下单时间</th>
                <th width="68" scope="col">出发时间</th>
                <th scope="col" align="left">产品名称</th>
                <th scope="col" width="45">价格</th>
                <th width="60" scope="col">订单状态</th>
                <th width="60" scope="col">在线支付</th>
                <th width="80"  scope="col">点评</th>
            </tr>

            @foreach($order as $v)
            <tr>
                <td>{{$v['o_num']}}</td>
                <td>{{$v['o_time']}}</td>
                <td>{{$v['start_time']}}</td>
                <td>
                    <a href="http://{{$v['o_href']}}" target="_blank" class="cgreen">{{$v['o_name']}}</a>
                </td>
                <td class="u-price">{{$v['c_price']}}</td>
                <td >
                    @if($v['state']==0)
                    等待付款
                    @else
                    已付款
                    @endif
                </td>
                <td><a href="" target="_blank"><img src=http://www.byts.com.cn/ORG7188_templets/002//images/newOrder3.jpg /></a></td>
                <td>
                    @if($v['state']==0)
                        等待付款
                    @else
                        已付款
                    @endif
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</div>

@include("home/common/footer")
