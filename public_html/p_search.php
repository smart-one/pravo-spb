<div class="text">
<h1>Поиск по сайту</h1>
<? 
	$_POST["stext"] = htmlspecialchars($_POST["sstring"]);
	require_once $_SERVER['DOCUMENT_ROOT']."/moduls/search/p_search.php";?>
    
    <p>&nbsp;</p>
<p>&nbsp;</p>

<p  style="text-align:center"><img src="/pictures/bottom.jpg" usemap="#map1"></p>
<map name="map1">
	
	<area shape="rect" coords="17,110,159,127" href="/question">
	<area shape="rect" coords="171,110,248,127" href="/price">
</map>
</div>