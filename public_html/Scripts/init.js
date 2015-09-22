// JavaScript Document

$(document.body).ready(function(){

	$('.more_hiddenBox').hide();
	
	$('.more_linkAction').click(function(){
		var moreObjectBox = $('.'+$(this).attr('box'));
		
		if(moreObjectBox.css('display')=='none')
		{
			$(this).text('скрыть подробную информацию');
			moreObjectBox.show();
		}
		else
		{
			$(this).text('подробнее...');
			moreObjectBox.hide();
		}
		return false;	
	});
});