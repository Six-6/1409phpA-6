var delQ=true;var rep=true;var ask=true;var sub=true;var communication={sendLike:function(sendData,callback){$.get('/yii.php?r=ask/guideask/SendLike',{key:sendData},function(data){if(data){callback(data);}},'json');},detailFollows:function(sendData,callback){$.get('/yii.php?r=ask/guideask/detailFollows',{key:sendData},function(data){if(data){callback(data);}},'json');},detailAccept:function(sendData,callback){$.get('http://127.0.0.1/tour2/test.php',{key:sendData},function(data){data={uId:1,uName:'我是博士TG1',commentId:'111',accept:'1',flag:'0'}
if(data){callback(data);}},'json');},detailReport:function(sendData,callback){$.get('/yii.php?r=ask/ask/SetReport',{key:sendData},function(data){if(data){callback(data);}},'json');},changeNextData:function(sendData,callback){$.get('/yii.php?r=ask/ask/HotQuestionRefresh',{key:sendData},function(data){if(data){callback(data);}},'json')},delQuestion:function(sendData,callback){if(!delQ){return;}
delQ=false;$.get('/yii.php?r=ask/guideask/DeleteQuestion',{key:sendData},function(data){delQ=true;if(data){callback(data);}},'json');},replayDel:function(sendData,callback){$.get('/yii.php?r=ask/guideask/ReplayDel',{key:sendData},function(data){if(data){callback(data);}},'json');},userRepaly:function(sendData,callback){$.get('/yii.php?r=ask/guideask/SecondAnswer',{key:sendData},function(data){if(data){callback(data);}},'json');},repalyDone:function(sendData,callback){if(!rep){return;}
rep=false;$.get('/yii.php?r=ask/guideask/repalyDone',{key:sendData},function(data){rep=true;if(data){callback(data);}},'json');},innerDel:function(sendData,callback){$.get('/yii.php?r=ask/guideask/ReplayDel',{key:sendData},function(data){if(data){callback(data);}},'json');},repalyAsk:function(sendData,callback,token){if(!ask){return;}
ask=false;$.get('/yii.php?r=ask/guideask/addanswer',{key:sendData,csrf_token:token},function(data){ask=true;if(data){callback(data);}},'json');},verfMsg:function(sendData,callback){$.get('http://127.0.0.1/tour2/test.php',{key:sendData},function(data){var data={success:true};if(data){callback(data);}},'json');},submitForm:function(sendData,callback){if(!sub){return;}
sub=false;$.ajax({url:'/yii.php?r=ask/ask/askquestion/',type:'post',dataType:'json',data:sendData,success:function(data){if(data){callback(data);}},error:function(){}})},ucenterXList:function(sendData,callback){$.post('/yii.php?r=person/personpage/UcenterList',{key:sendData},function(data){if(data){callback(data);}},'json');}}