<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/configs/config.php"); 
require_once $_SERVER['DOCUMENT_ROOT']."/moduls/myPage/myPageClass.php";

$page=new myPage($_GET["page"]);
$page->defaultTitle="Добро пожаловать в панель управления сайтом специально для Иришки! ;)";
$page->titleDefinitionFile="/admin/configs/titles/titles.php";
$page->metaDefinitionDir="/admin/configs/metas";
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" >
<html>
<head>
	<? $page->Metas();?>
	<title><? echo $page->Title();?></title>
</head>
<body>

	<table class="tb_main" cellpadding="0" cellspacing="0">
    <tr>
    	<td class="navi"></td>
        <td class="pages"><? $page->Attach();?></td>
    </tr>
    
    </table>

</body>
</html>