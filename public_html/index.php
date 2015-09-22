<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/configs/config.php";
	$page = new myPage($_GET["page"]);
	$page->getThisPageAttributs();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<? echo $page->metas;?>
<script type="text/javascript" src="/Scripts/menu.js"></script>
<script type="text/javascript" src="/moduls/myScripts/myValidForm.js"></script>
<link rel="stylesheet" type="text/css" href="/css/pageArea.css">
<script type="text/javascript" src="/Scripts/jquery.js"></script>
<script type="text/javascript" src="/Scripts/init.js"></script>

<title><? echo $page->title;?></title>
<link href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>

<body>
    <center>
    <table cellpadding="0" cellspacing="0" border="0" class="tb_index" >
    <tr>
    	<td colspan="100%"  style="height:146px;">
        	<? include $_SERVER['DOCUMENT_ROOT']."/top.php";?>        </td>
    </tr>
    <tr>
    	<td class="leftSideTD" rowspan="2">
        	<? require_once $_SERVER['DOCUMENT_ROOT']."/leftSide.php";?>        </td>
    	<td class="pageSide" rowspan="2" >
        	<?  include $_SERVER['DOCUMENT_ROOT']."/a_pageInclude.php";?>        </td>
        <td class="rightSideTD">
        	<? require_once $_SERVER['DOCUMENT_ROOT']."/rightSide.php";?>        </td>
    </tr>
    <tr>
    	<td class="bottomTD" style="vertical-align:bottom; text-align:right;">
        	<? include $_SERVER['DOCUMENT_ROOT']."/bottom.php";?>        </td>
    </tr>
    </table>
    </center>
</body>
</html>
