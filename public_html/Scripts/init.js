// JavaScript Document

$(document.body).ready(function(){

	$('.more_hiddenBox').hide();
	
	$('.more_linkAction').click(function(){
		var moreObjectBox = $('.'+$(this).attr('box'));
		
		if(moreObjectBox.css('display')=='none')
		{
			$(this).text('������ ��������� ����������');
			moreObjectBox.show();
		}
		else
		{
			$(this).text('���������...');
			moreObjectBox.hide();
		}
		return false;	
	});
});