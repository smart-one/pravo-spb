// JavaScript Document

var ua = navigator.userAgent.toLowerCase();
// Определим Internet Explorer
isIE = (ua.indexOf("msie") != -1 && ua.indexOf("opera") == -1); 
// Opera
isOpera = (ua.indexOf("opera") != -1); 
// Gecko = Mozilla + Firefox + Netscape
isGecko = (ua.indexOf("gecko") != -1);
// Safari, используется в MAC OS
isSafari = (ua.indexOf("safari") != -1);
// Konqueror, используется в UNIX-системах
isKonqueror = (ua.indexOf("konqueror") != -1);


function openListById(theobjid)
{
	if(!theobjid) return false;
	var listContainer = document.getElementById(theobjid);
	if(!listContainer) return false;
	
	//Если был невидим
	if(listContainer.className=="menuContainer")
	{
		closeAll();
		listContainer.className = "menuContainerOpen";
		
		var aList = listContainer.getElementsByTagName('a');
		for(i=0;i<aList.length;i++)
		{
			if(aList[i].href == document.location)
			{
				aList[i].className = "currentLink";
			}
			else
			{
				aList[i].className = "";
			}
		}
	}
	else
	{
		listContainer.className = "menuContainer";
		//listContainer.style.display = "none";
	}	

	return 1;
}












function openList(obj)
{
	//closeAll();
	if(!obj) return false;
	var listContainer = (isIE)? obj.nextSibling:obj.nextSibling.nextSibling;
	
	//alert(obj.nextSibling.nextSibling+" - "+listContainer.className);
	//Если был невидим
	if(listContainer.className=="menuContainer")
	{
		closeAll();
		listContainer.className = "menuContainerOpen";
		
		var aList = listContainer.getElementsByTagName('a');
		for(i=0;i<aList.length;i++)
		{
			if(aList[i].href == document.location)
			{
				aList[i].className = "currentLink";
			}
			else
			{
				aList[i].className = "";
			}
		}
	}
	else
	{
		listContainer.className = "menuContainer";
		//listContainer.style.display = "none";
	}	

	return 1;
}

function closeAll()
{
	var leftSideMenuContainer = document.getElementById("leftSideMenuContainer");
	var catalogNamesList = mygetElementsByClassName(leftSideMenuContainer, "menuContainerOpen");
		
	
	for(i=0;i<catalogNamesList.length;i++)
	{
		catalogNamesList[i].className = "menuContainer";
		//catalogNamesList[i].nextSibling.nextSibling.style.display = "none";
	}
}



function mygetElementsByClassName(theContainer, className)
{
	var elems = theContainer.getElementsByTagName('*');
	if(!elems) return false;
	var returnNodeList = Array();
	 
	for(var i=0; i<elems.length; i++)
	{
		if(elems[i].className == className)
		{
			returnNodeList.push(elems[i]);
		}
	}
	return returnNodeList;
}