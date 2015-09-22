// JavaScript Document
function showPicture(pictureObject)
{
	//var width = (!pictureObject.width) ? 800:pictureObject.width;
	//var height = (!pictureObject.height) ? 600:pictureObject.height;
	var width = 800;
	var height = 600;
	
	var hostName=window.location.host;
	
	var pictureSrc=str_replace("http://"+hostName,"",pictureObject.src);
	var pictureSrc=str_replace("http://www."+hostName,"",pictureSrc);
	
	var newWin=window.open("/viewPicture.php?src="+pictureSrc,"","width="+width+",height="+height+",toolbar=no,location=no,status=no,menubar=no,directories=no,scrollbars=yes,dependent=yes,resizeable=no,center=yes");
	//newWin.document.write("<body></body>");
	moveWindowToCenter(newWin);
	//newWin.location.href=pageUrl;

}

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

