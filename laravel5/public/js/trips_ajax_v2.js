var contentEditor={"p_main":'content_start',"p_end":'content_end'};var last_title="";$(function(){var last_content=new Object();var last_place_obj=new Object();var last_schedule_start_obj=new Object();var last_schedule_end_obj=new Object();var last_schedule_date_obj=new Object();$(".draft-save").hide();$(".draft-preview").hide();$('.edui-body-container').live('blur',function(){var umEditor=$(this).attr('id');var editorContent=UM.getEditor(umEditor).getContent();if(contentEditor.hasOwnProperty(umEditor)){var postIndex=contentEditor[umEditor];if(last_content[postIndex]==editorContent){return false;}
last_content[postIndex]=editorContent;var postData={contentPart:editorContent,tid:apiParams['tid'],tripsType:postIndex};ajaxSubmitTrips(apiParams['updateTrips'],postData)}else{var idArray=umEditor.split('_');var contentInfo=parseInt(idArray[2]);if(contentInfo){if((idArray[0]+idArray[1])=='tripdes'){var schedule_date=$(this).parents('.trip-day').find('.trip-time').text();var schedule_end=UM.getEditor('trip_end_'+contentInfo).getContent();if(last_schedule_start_obj[umEditor]==editorContent&&last_schedule_end_obj['trip_end_'+contentInfo]==schedule_end&&last_schedule_date_obj['trip_time_'+contentInfo]==schedule_date){return false;}
last_schedule_start_obj[umEditor]=editorContent;last_schedule_end_obj['trip_end_'+contentInfo]=schedule_end;last_schedule_date_obj['trip_time_'+contentInfo]=schedule_date;var postData={schedule_id:contentInfo,tid:apiParams['tid'],schedule_start:editorContent,schedule_end:schedule_end,schedule_date:schedule_date};ajaxSubmitTrips(apiParams['actSchedule'],postData);}else if((idArray[0]+idArray[1])=='tripend'){var schedule_date=$(this).parents('.trip-day').find('.trip-time').text();var schedule_start=UM.getEditor('trip_des_'+contentInfo).getContent();if(last_schedule_start_obj['trip_des_'+contentInfo]==schedule_start&&last_schedule_end_obj[umEditor]==editorContent&&last_schedule_date_obj['trip_time_'+contentInfo]==schedule_date){return false;}
last_schedule_start_obj['trip_des_'+contentInfo]=schedule_start;last_schedule_end_obj[umEditor]=editorContent;last_schedule_date_obj['trip_time_'+contentInfo]=schedule_date;var postData={schedule_id:contentInfo,tid:apiParams['tid'],schedule_start:schedule_start,schedule_end:editorContent,schedule_date:schedule_date};ajaxSubmitTrips(apiParams['actSchedule'],postData);}else if((idArray[0]+idArray[1])=='addrrecord'){if(last_place_obj[umEditor]==editorContent){return false;}
last_place_obj[umEditor]=editorContent;var placeObj=$("#addr_day_"+contentInfo);var postData={place_data:editorContent,tid:apiParams['tid'],place_id:placeObj.attr("data-placeId"),poi_type:placeObj.attr("data-poiType"),poi_id:placeObj.attr("data-poiId"),poi_name:placeObj.attr("data-poiName"),district_id:placeObj.attr("data-districtId"),district_name:placeObj.attr("data-districtName"),belong_to:placeObj.attr("data-belongTo")};ajaxSubmitTrips(apiParams['actPlace'],postData);}}}});$(".releaseTrips").live('click',function(){var tripsTitle=$.trim($('#p-title').val());var proto=$('#J_Protocol');if(tripsTitle=='给游记取个好标题，为自己代言~'){tripsTitle='';}
if(isEmpty(tripsTitle)){alert('请填写标题！');$("#p-title").focus();return false;}else if(tripsTitle.length>30){alert('标题太长！');$("#p-title").focus();return false;}else if(!proto[0].checked){$.layer({type:1,title:['提示','color:#fff;border:none'],closeBtn:[0,true],btns:1,btn:['确定',''],area:['401','124'],success:function(layero){layero.find('.xubox_yes').css({left:'204px',top:'77px'});;},page:{html:'<p class="arrproto">你没有同意《途牛旅游协议》</p>'}})
return false;}else{var doType=$(this).attr('data-success');var postData={tid:apiParams['tid'],do_type:doType};ajaxReleaseTrips(apiParams['releaseTrips'],postData);return false;}});getPoiList("btnAddPoi");getPoiList("btnEditPoi");});function getTripsTitle(val){var title=$.trim(val);if(title=='给游记取个好标题，为自己代言~'||isEmpty(title)){title="";return false;}
if(!isEmpty(title)&&last_title==title){return false;}
last_title=title;var postData={title:val,tid:apiParams['tid'],tripsType:'subject'};ajaxSubmitTrips(apiParams['updateTrips'],postData);}
function ajaxSubmitTrips(subUrl,postData){$.ajax({type:'post',url:subUrl,data:postData,dataType:"json",beforeSend:function(){$(".draft-save").show();$(".draft-preview").hide();$(".submit-btn").css('background','#999');$(".submit-btn").removeClass('releaseTrips');},success:function(response){$(".draft-save").hide();$(".draft-preview").show();$(".submit-btn").css('background','#ff9219');$(".submit-btn").addClass('releaseTrips');}});}
function responseFun(response){}
function ajaxReleaseTrips(subUrl,postData){$.ajax({type:'post',url:subUrl,data:postData,dataType:"json",beforeSend:function(){$(".draft-save").text('发布游记中...').show();$(".draft-preview").hide();},success:function(response){$(".draft-save").hide();if(response['success']){var tip_value=postData['do_type'];var tips='发布成功!';if(tip_value!=0){tips='保存成功!';}
$(".draft-preview").html(tips+'<a href="/trips/'+postData.tid+'/?isReview=1" target="_blank">预览</a>').show();if(tip_value==0){window.location.href="/trips/write/dosuccess/"+apiParams.tid;}else{window.location.href='/trips/'+postData.tid+'/?isReview=1';}}else{$(".draft-preview").html(response['msg']).show();}}});}
Array.prototype.Exists=function(v){var result=false;for(var i=0;i<this.length;i++){if(this[i]==v){result=true;break;}}
return result;}
function showUploadImg(tid){$.ajax({type:"POST",url:"/tripsajax/selectimg",data:{"tid":tid},success:function(ret){$("#photoList").html("");var retObj=jQuery.parseJSON(ret);var dataObj=jQuery.parseJSON(retObj.data);$("#p_num").html(0);if(dataObj&&dataObj.imgList.length>0){$("#uploadDefault").addClass("upload-proccess-swfupload");$("#uploadDefault .btn_upload_swf").addClass("procdcessed_tit_swfupload");$(".local_pic").addClass('hide');$(".phone_pic").addClass('hide');$(".proccess_num").removeClass('hide');$(".photo_submit").removeClass('hide');$(".photo_list").removeClass('hide');$.each(dataObj.imgList,function(i,img){var content='<li id="'+img.id+'"><img width="130" height="130" src="'+img.url+'" ><span class="delete" onclick="att_cancel('+img.tid+','+img.id+')"></span></li>';$("#photoList").append(content);});$("#p_num").html(dataObj.count);}
setUploadImageLimit(dataObj.count);$('#photoManagerPopBox').css('visibility','visible');}});}
function closeUpload(tid){if($('.publish-photo').length!=0){refreshImgList(tid,1,true);}else{BlogPublish.judgeInserImg();}}
function refreshImgList(tid,page,flag){$("#SWFUpload_0").css("visibility","hidden");$('#photoManagerPopBox').css('visibility','hidden');if(flag){d={tid:tid,page:page,flag:flag}}else{d={tid:tid,page:page}}
$.ajax({type:"POST",url:"/tripsajax/getpageimg",data:d,success:function(ret){var retObj=jQuery.parseJSON(ret);var dataObj=jQuery.parseJSON(retObj.data);if(dataObj&&dataObj.imgList.length>0){if($(".photo-list-item").length==0){var divContent='<div class="photo-list-item">';$("#pagination").before(divContent);$(".no-photo").remove();}else{$(".photo-list-item").html("");}
$.each(dataObj.imgList,function(i,img){var content='<a href="javascript:void(0);"><img data-imgid="'+img.id+'" src="'+img.url+'" imglat="'+img.latitude+'" imglng="'+img.longitude+'" style="display: inline;"/></a>';$(".photo-list-item").append(content);});if(parseInt(dataObj.count)<=parseInt(dataObj.pagesize)){$("#pagination").css('visibility','hidden');}else{$("#pagination").css('visibility','visible');var page=parseInt(dataObj.page);var maxPage=parseInt(dataObj.maxPage);var content='';if(page>1){content='<a rel="nofollow" href="javascript:void(0);" class="pre-btn" onclick="refreshImgList('+tid+','+(page-1)+')">&#xe61e;</a>';}else{content='<a rel="nofollow" href="javascript:void(0);" class="pre-btn">&#xe61e;</a>';}
content+='<a rel="nofollow" href="javascript:void(0);" class="next-btn" onclick="refreshImgList('+tid+','+(page+1)+')">&#xe621;</a>'
$("#pagination").html(content);}
if($(".photo-tip").length==0){var photoTip='<div class="photo-tip"></div>';$(".photo-uploaded-list").append(photoTip);}
BlogPublish.photoEventBind();}else{$(".photo-list-item").remove();$(".photo-tip").remove();$("#pagination").css('visibility','hidden');if($(".no-photo").length==0){var noContent='<p class="no-photo">暂无照片哦</p>';$("#pagination").before(noContent);}}}});}
function getPoiList(objId){$("#"+objId).bind("keyup paste",function(event){$("#"+objId).siblings("span").css("display","none");var selectAddress=null;var selectAddressInner=null;if(objId=="btnAddPoi"){selectAddress=$("#addSelectAddress");selectAddressInner=$("#addSelectAddressInner");}else if(objId=="btnEditPoi"){selectAddress=$("#editSelectAddress");selectAddressInner=$("#editSelectAddressInner");}
var editEvent=function(){var poivalue=$.trim($("#"+objId).val());if(poivalue){$.ajax({url:"/tripsajax/getpoilist",data:{tid:apiParams.tid,poivalue:poivalue},type:"POST",success:function(res){res=eval("("+res+")");if(res&&res.success){var poiList=eval("("+res.data+")");selectAddressInner.html("");if(poiList.length>0){$.each(poiList,function(i,n){var districtname=(null==n.districtname)?"":(" ,"+n.districtname);n.Address=null==n.Address?"":n.Address;var content='<a href="javascript:;" data-id="'+n.id+'" poi-type="'+n.type+'" data-name="'+n.name+'" data-districtid="'+n.districtid+'" data-districtname="'+n.districtname+'">'+n.name.replace(poivalue,"<b>"+poivalue+"</b>")+districtname+'<span class="addr">'+n.Address+"</span></a>";selectAddressInner.append(content);});poiListClickEvent(objId,selectAddress,selectAddressInner);}else{var content1='<span style="line-height:30px;">&nbsp;&nbsp;&nbsp;暂无匹配结果</span>';var content='<a style="color:#0000FF" href="javascript:;" poi-type=9 data-name='+poivalue+' >&nbsp;&nbsp;+&nbsp;点击创建"'+poivalue+'"<a>';selectAddressInner.append(content1);selectAddressInner.append(content);poiListClickEvent(objId,selectAddress,selectAddressInner);}
selectAddress.css("display","block");}}});}};"keyup"==event.type?debounce(editEvent,500):setTimeout(editEvent,100);});}
var keyupTimeout;function debounce(callback,delay){if(typeof(callback)!=="function"){return;}
delay=delay||150;window.clearTimeout(keyupTimeout);keyupTimeout=window.setTimeout(callback,delay);}
function poiListClickEvent(objId,selectAddress,selectAddressInner){var poiAdd=null;if(objId=="btnAddPoi"){poiAdd=$("#addPoiAdd");}else if(objId=="btnEditPoi"){poiAdd=$("#editPoiAdd");}
selectAddressInner.find("a").bind("click",function(){$("#"+objId).val("");var districtname=$(this).attr("data-districtname")=='null'?null:$(this).attr("data-districtname");var content='<div class="poi" district-name="'+districtname+'" district-id="'+$(this).attr("data-districtid")+'" poi-name="'+$(this).attr("data-name")+'" poi-id="'+$(this).attr("data-id")+'" poi-type="'+$(this).attr("poi-type")+'"><a href="javascript:void(0);" class="del_address" id="delAddAddress">&#xe619;</a>'+$(this).attr("data-name")+'</div>'
poiAdd.before(content);$(this).remove();selectAddress.css("display","none");if(objId=="btnAddPoi"){$("#"+objId).siblings("span").css("display","block");$("#"+objId).focus();}else if(objId=="btnEditPoi"){$("#"+objId).hide();}
delAddress(objId);if(parseInt($('#addrConfirm').attr("data-moreAdd"))){$("#addPoiAdd").hide();}});}
function delAddress(objId){$(".del_address").bind("click",function(){$(this).parents(".poi").remove();if(objId=="btnEditPoi"){$("#"+objId).siblings("span").css("display","block");$("#"+objId).css("display","block");$("#"+objId).focus();}
if(parseInt($('#addrConfirm').attr("data-moreAdd"))){$("#addPoiAdd").show();$("#addPoiAdd").find('span').text('可添加一个拍摄地点');}});}
function isEmpty(value){if(value==null||value==""||value=="undefined"||value==undefined||value=="null"){return true;}
else{value=value.replace(/\s/g,"");if(value==""){return true;}
return false;}}
$(".order-confirm-btn").bind("click",function(){var orderObj=$(".order-box").find(".o-selected").parent().siblings(".td2");var orderId=parseInt($.trim(orderObj.html()));if(orderId){var orderType=parseInt(orderObj.attr("order-type"));$.ajax({url:'/tripsajax/bindorder',data:{id:orderId,type:orderType,tid:apiParams.tid},type:"POST",success:function(res){res=eval("("+res+")");var dataObj=eval("("+res.data+")");if(res.success&&dataObj.length!==0){$("#noBindTip").remove();var len=$(".order-box .order-list").length;var orderObj=$(".order-info");if(orderObj.length==0){var content='<div class="order-info"></div>';$(".publish-order").append(content);var orderStr='<a href="javascript:void(0);" class="order_name" style="cursor:default;">'+dataObj.productName+'</a>';orderStr+='<div class="order-id"><dl><dt>订单编号:</dt><dd id="orderId">'+dataObj.orderId+'</dd></dl></div>';orderStr+='<div class="order-time"><dl><dt>出游时间:</dt><dd>'+dataObj.startTime+'</dd></dl></div>';$(".order-info").append(orderStr);}else{orderObj.find(".order_name").html(dataObj.productName);$("#orderId").html(dataObj.orderId);orderObj.find(".order-time dd").html(dataObj.startTime);}
if(len>1){$(".order-modify-btn").html("修改");$.each($(".order-box .order-list"),function(i,n){$(n).find(".order-state").removeClass("o-selected ");var orderId=parseInt($.trim($(n).find(".td2").html()));if(orderId==dataObj.orderId){$(n).find(".order-state").addClass("o-selected ");}});}else{$(".order-modify-btn").html("");}}
$("#orderBindPanel").hide();}});}});