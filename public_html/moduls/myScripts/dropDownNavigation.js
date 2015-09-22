// JavaScript Document
d=document;
	
function DD_Draw(parentObj,index)
{
	DD_Drop();
	var div=elem=d.getElementById("DDN"+index);

	pos = getElementPosition(parentObj);
	
	
	div.style.display="block";
	div.style.top=(pos.top+pos.height-10)+"px";
	div.style.left=(pos.left)+"px";
	
	//alert("Родительский объект находится на "+pos.top+" : "+pos.left+" высота -"+pos.height+"\nДочерний объект перемещен на "+div.style.top+" : "+div.style.left);
	
}


function DD_Drop()
{
	var i=1;
	while (d.getElementById("DDN"+i))
	{
		d.getElementById("DDN"+i).style.display="none";
		i++;
	}
}



function getElementPosition(elem)
{
	
    var w = elem.offsetWidth;
    var h = elem.offsetHeight;
	
    var l = 0;
    var t = 0;
	
    while (elem)
    {
        l += elem.offsetLeft;
        t += elem.offsetTop;
        elem = elem.offsetParent;
    }

    return {"left":l, "top":t, "width": w, "height":h};
}
