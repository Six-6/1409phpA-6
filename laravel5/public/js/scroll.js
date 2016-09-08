;(function($){$.fn._tripscroll=function(param){var o=$.extend({parent_ele:'.a',pre_btn:'.pre',next_btn:'.next',num:1,gd_num:1},param);var target_ele=$(this).selector;var $left=$(o.pre_btn);var $right=$(o.next_btn);var $con=$(target_ele).find('div.item');var curr=0;var len=$con.length;var count_page=Math.ceil(len/o.gd_num);var out_width=$con.outerWidth(true);var out_height=$con.outerHeight(true);var first_click=true;var wrapbox_w=out_width*o.num;var scrollbox_w=wrapbox_w*count_page;function init(){$(o.parent_ele).width(wrapbox_w);$(target_ele).width(scrollbox_w);}
function goto_curr(page){if(page>count_page){curr=0;$(o.parent_ele).scrollLeft(0);$(o.parent_ele).animate({scrollLeft:wrapbox_w},500);}else{var sp=(page+1)*wrapbox_w;if($(o.parent_ele).is(':animated')){$(o.parent_ele).stop();$(o.parent_ele).animate({scrollLeft:sp},500);}else{$(o.parent_ele).animate({scrollLeft:sp},500);}
curr=page+1;}}
function left_click(){curr++;if(curr>=count_page){curr=0;}
var curLiIndex=curr;if(first_click){curr=curLiIndex-1;first_click=false;}else{curr=curLiIndex-1;}
goto_curr(curr);}
function right_click(){curr--;if(curr<0){curr=count_page-1;}else if(curr==(count_page-1)){curr=0;}
var curLiIndex=curr;curr=curLiIndex-1;goto_curr(curr);}
$left.bind('click',right_click);$right.bind('click',left_click)
return init();}})(jQuery);