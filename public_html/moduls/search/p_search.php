<? 
require $_SERVER['DOCUMENT_ROOT']."/moduls/search/search.php";
require $_SERVER['DOCUMENT_ROOT']."/moduls/search/config.php";

$S=new Search();
$S->setContent(htmlspecialchars($_POST["stext"]));
$SEARCH=$S->searchContent($S_PAGES);

if($SEARCH>0)
{

echo "<p>Вы искали: <b>\"".$S->search_content."\"</b> - найдено в <b>".count($SEARCH)."</b> источниках</p>"; 
	foreach($SEARCH as $key => $value)
	{
	echo "<p> =>";
	if (!empty($SEARCH[$key]["title"])) echo "<a href='".$SEARCH[$key]["href"]."'>".$SEARCH[$key]["title"]." </a><br>";
	else echo "<a href='".$SEARCH[$key]["href"]."'>".$SEARCH[$key]["href"]." </a><br>";
	
	echo "...".$SEARCH[$key]["p"][0]."...</br>
				<font style='color:gray;font-size:12px;'>( Всего совпадений в тексте: ".count($SEARCH[$key]["p"]).")</font>";
	
	echo "</p>";
	}
}
else
echo "<p>Вы искали: <b>\"".$S->search_content."\"</b></p>
	<p>По Вашему запросу ничего не найдено. Если вы используете комбинацию слов, попробуйте их разделить. Искомое слово должно содержать не менее 3 символов.</p>"; 

?>