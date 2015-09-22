<?php 
// ���������� �������� �������
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////// �����: ������ �������
//������ 130509
//
//
//  showme($par) -����������� ����������
//	goto($url) - ������� �� ������
//	refresh()	-�������� ��������
//	alert($str)	-���������
//	strcut($str,$num)	-	�������� ������ �� num �������� �������
//	fullDirectoryDelete($direcoryName)	-	�������� ����������
//	getReadTime($stamp)	-	�������������� �������
//	getReadDate($stamp)	- �������������� ����
//	function getBrowser()	- ���������� �������


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
		$stamp=date("d.m.Y � H:i:s",$stamp);
		$stamp=str_replace($today,"�������",$stamp);
		$stamp=str_replace($tommorrow,"�����",$stamp);
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
?>