<?php 
// Библиотека полезных функций
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////// Автор: Шевцов Евгений
//Сборка 130509
//
//
//  showme($par) -распечатать переменную
//	goto($url) - перейти по адресу
//	refresh()	-обновить страницу
//	alert($str)	-сообщение
//	strcut($str,$num)	-	обрезает строку на num символов сначала
//	fullDirectoryDelete($direcoryName)	-	удаление директории
//	getReadTime($stamp)	-	преобразование времени
//	getReadDate($stamp)	- преобразование даты
//	function getBrowser()	- определить браузер


function showme($par)
{
	echo "<pre>";
	echo print_r($par);
	echo "</pre>";
}



function refresh()
{
	echo "<meta http-equiv='refresh' content='0;'> ";
}

function alert($str)
{
	echo "<script> alert('$str'); </script>";
}


function strcut($str,$num)
{
	$val="";
	for($i=0;$i<$num;$i++)
	{
		$val.=$str[$i];
	}
	return $val;
}



function fullDirectoryDelete($direcoryName)
{
	if(empty($direcoryName) || !is_dir($direcoryName) || !$handler=opendir($direcoryName)) return 0;
	while( ($file=readdir($handler)) !== false)
	{
		if($file!="." && $file!="..")
		{
			if(is_dir($direcoryName."/".$file)) fullDirectoryDelete($direcoryName."/".$file);
			if(is_file($direcoryName."/".$file)) unlink($direcoryName."/".$file);
		}
	}
	closedir($handler);
	rmdir($direcoryName);
	return 1;
}




function getReadTime($stamp)
{
		if(!(int)($stamp)) return "";
		$today=date("d.m.Y");
		$tommorrow= (date("d")-1) < 10 ?  "0".(date("d")-1): (date("d")-1);
		$tommorrow.=date(".m.Y");
		$stamp=date("d.m.Y в H:i:s",$stamp);
		$stamp=str_replace($today,"Сегодня",$stamp);
		$stamp=str_replace($tommorrow,"Вчера",$stamp);
		return $stamp;
}


function getReadDate($stamp)
{
		if(!(int)($stamp)) return 0;
		$stamp=date("d.m.Y",$stamp);
		return $stamp;
}




function getBrowser()
{
	$Browser=array();
	preg_match("/(Opera|Firefox)\/([0-9\.]+)/i",$_SERVER['HTTP_USER_AGENT'],$res);
	if(isset($res[1]))
	{
		$Browser["name"]=$res[1];
		$Browser["version"]=$res[2];
		return $Browser;
	}

	preg_match("/(MSIE) ([0-9\.]+)/i",$_SERVER['HTTP_USER_AGENT'],$res);
	if(isset($res[1]))
	{
		$Browser["name"]=$res[1];
		$Browser["version"]=$res[2];
		return $Browser;
	}

	return false;
}

function dd($str){
	echo "<pre>";
	var_dump($str);
	echo "</pre>";
	die();
}

function link_to($routeName){
	return "http://" . HOST . "/" . trim(UrlMap::getLinkByRoute($routeName), " /\\");
}

function get_common_part($fileName, $listId = 1){

	require ($_SERVER['DOCUMENT_ROOT'] . "/" . trim($fileName, " /\\"));
}

function breadcrumbs($page){
	if (!$page->path){
		return;
	}
	$pageAlias = UrlMap::getRuBreadcrumb($page->src) ?: $page->title; 
	$mid = '';
	if(strstr($page->path, '/p_ur/')){
		$mid .= "Юридические услуги &gt; ";
	}
	return "<p class='breadcrumbs'><a href='/'>Главная</a> &gt; " . $mid . " " . $pageAlias . "</p>";
}

function isUTF8($string){
    return preg_match('%(?:
    [\xC2-\xDF][\x80-\xBF]        # non-overlong 2-byte
    |\xE0[\xA0-\xBF][\x80-\xBF]               # excluding overlongs
    |[\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}      # straight 3-byte
    |\xED[\x80-\x9F][\x80-\xBF]               # excluding surrogates
    |\xF0[\x90-\xBF][\x80-\xBF]{2}    # planes 1-3
    |[\xF1-\xF3][\x80-\xBF]{3}                  # planes 4-15
    |\xF4[\x80-\x8F][\x80-\xBF]{2}    # plane 16
    )+%xs', $string);
}