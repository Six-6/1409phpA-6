$(function(){
	var numpic=$('#slides li').size()-1;var nownow=0;
	var inout=0;var TT=0;var SPEED=5000;
	$('#slides li').eq(0).siblings('li').css({'display':'none'});
	$('#description li').eq(0).siblings('li').css({'display':'none'});
	$('#description li').eq(0).show();
	var pagination=$('#pagination li');
	var description=$('#description li');
	var paginationwidth=$('#pagination').width();
	$('#pagination').css('margin-left',(470-paginationwidth));
	pagination.eq(0).addClass('current');
	$('.slide-bg').eq(0).hide();
	pagination.on('click',DOTCHANGE);
	function DOTCHANGE(){
		var changenow=$(this).index();
		$('#description li').eq(nownow).css('z-index','900');
		$('#description li').eq(changenow).css({'z-index':'800'}).show();
		$('#slides li').eq(nownow).css('z-index','900');
		$('#slides li').eq(changenow).css({'z-index':'800'}).show();
		pagination.eq(changenow).addClass('current').siblings('li').removeClass('current');
		$('.slide-bg').show().eq(changenow).hide();
		$('#description li').eq(nownow).fadeOut(10,function(){
			$('#description li').eq(changenow).fadeIn(20);
			});
		$('#slides li').eq(nownow).fadeOut(400,function(){
			$('#slides li').eq(changenow).fadeIn(500);
			});
		nownow=changenow;
	}
pagination.mouseenter(function(){inout=1;})
pagination.mouseleave(function(){inout=0;})
function GOGO(){
	var NN=nownow+1;if(inout==1){}else{if(nownow<numpic){$('#description li').eq(nownow).css('z-index','900');$('#description li').eq(NN).css({'z-index':'800'}).show();$('#slides li').eq(nownow).css('z-index','900');$('#slides li').eq(NN).css({'z-index':'800'}).show();pagination.eq(NN).addClass('current').siblings('li').removeClass('current');$('.slide-bg').show().eq(NN).hide();$('#description li').eq(nownow).fadeOut(100,function(){$('#description li').eq(NN).fadeIn(200);});$('#slides li').eq(nownow).fadeOut(400,function(){$('#slides li').eq(NN).fadeIn(500);});nownow+=1;}else{NN=0;$('#description li').eq(nownow).css('z-index','900');$('#description li').eq(NN).stop(true,true).css({'z-index':'800'}).show();$('#description li').eq(nownow).fadeOut(100,function(){$('#description li').eq(0).fadeIn(200);});$('#slides li').eq(nownow).css('z-index','900');$('#slides li').eq(NN).stop(true,true).css({'z-index':'800'}).show();$('#slides li').eq(nownow).fadeOut(400,function(){$('#slides li').eq(0).fadeIn(500);});pagination.eq(NN).addClass('current').siblings('li').removeClass('current');$('.slide-bg').show().eq(NN).hide();nownow=0;}}
TT=setTimeout(GOGO,SPEED);}
TT=setTimeout(GOGO,SPEED);})