<h1>ПРАЙС-ЛИСТ "Центра Правовых Услуг"</h1>

<style>

.pageArea2 td

{

	text-align:center;

	vertical-align:middle;

}

</style>



<ol>

	<li><a href="#p01">РЕГИСТРАЦИОННЫЕ УСЛУГИ</a></li>

<?php /* 	<li><a href="#p02">ЮРИДИЧЕСКИЕ УСЛУГИ ОРГАНИЗАЦИЯМ</a></li>

	<li><a href="#p03">ЮРИДИЧЕСКИЕ УСЛУГИ ДЛЯ ГРАЖДАН</a></li>

	<li><a href="#p04">СУДЕБНЫЕ УСЛУГИ</a></li>

	<li><a href="#p05">БУХГАЛТЕРСКИЕ УСЛУГИ ДЛЯ ОРГАНИЗАЦИЙ И ПРЕДПРИНИМАТЕЛЕЙ</a></li> */?>

</ol>

<? 

$content = file_get_contents($_SERVER['DOCUMENT_ROOT']."/price2.htm");

//$content = strip_tags($content,"<table><tr><td><p>");

//@file_put_contents($_SERVER['DOCUMENT_ROOT']."/price2.htm",$content);

echo $content;



//////////////////////////////////////////////////////////////////////////////////////////////









//////////////////////////////////////////////////////////////////////////////////////////////





?>

<p>&nbsp;</p>

<p>&nbsp;</p>



<p  style="text-align:center"><img src="/pictures/bottom.jpg" usemap="#map1"></p>

<map name="map1">

	

	<area shape="rect" coords="17,110,159,127" href="/question">

	<area shape="rect" coords="171,110,248,127" href="/price">

</map>