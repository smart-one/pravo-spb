<? 
require $_SERVER['DOCUMENT_ROOT']."/moduls/search/search.php";
require $_SERVER['DOCUMENT_ROOT']."/moduls/search/config.php";

$S=new Search();
$S->setContent(htmlspecialchars($_POST["stext"]));
$SEARCH=$S->searchContent($S_PAGES);

if($SEARCH>0)
{

echo "<p>�� ������: <b>\"".$S->search_content."\"</b> - ������� � <b>".count($SEARCH)."</b> ����������</p>"; 
	foreach($SEARCH as $key => $value)
	{
	echo "<p> =>";
	if (!empty($SEARCH[$key]["title"])) echo "<a href='".$SEARCH[$key]["href"]."'>".$SEARCH[$key]["title"]." </a><br>";
	else echo "<a href='".$SEARCH[$key]["href"]."'>".$SEARCH[$key]["href"]." </a><br>";
	
	echo "...".$SEARCH[$key]["p"][0]."...</br>
				<font style='color:gray;font-size:12px;'>( ����� ���������� � ������: ".count($SEARCH[$key]["p"]).")</font>";
	
	echo "</p>";
	}
}
else
echo "<p>�� ������: <b>\"".$S->search_content."\"</b></p>
	<p>�� ������ ������� ������ �� �������. ���� �� ����������� ���������� ����, ���������� �� ���������. ������� ����� ������ ��������� �� ����� 3 ��������.</p>"; 

?>