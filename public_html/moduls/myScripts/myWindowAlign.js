// JavaScript Document

function moveWindowToCenter(winObj)
{
	if(winObj.innerWidth)
	{
		var w=winObj.outerWidth;
		var h=winObj.outerHeight;
	}
	else
	{
		with(winObj.document.body)
		{
			var w=clientWidth;
			var h=clientHeight;
		}
	}
	
	var X=parseInt(getClientCenterX() - w/2);
	var Y=parseInt(getClientCenterY() - h/2);
	//alert("x="+X+" , Y="+Y);
	winObj.moveTo(X,Y);
	
	return 1;
}



function getClientWidth()
{
  return document.compatMode=='CSS1Compat' && !window.opera?document.documentElement.clientWidth:document.body.clientWidth;
}

function getClientHeight()
{
  return document.compatMode=='CSS1Compat' && !window.opera?document.documentElement.clientHeight:document.body.clientHeight;
}




function getBodyScrollTop()
{
	return self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
}

function getBodyScrollLeft()
{
	return self.pageXOffset || (document.documentElement && document.documentElement.scrollLeft) || (document.body && document.body.scrollLeft);
}


function getClientCenterX()
{
	return parseInt(getClientWidth()/2);
}

function getClientCenterY()
{
	return parseInt(getClientHeight()/2);
}
