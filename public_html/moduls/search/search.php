<?php 
class Search
{
	var $action="/search.php";
	var $method="POST";
	var $search_content="";
		
	
	
	function setContent($val)
	{
		$this->search_content=strtolower($val);
	}
	
	
	function searchContent($Arr)
	{
		if(empty($this->search_content) or strlen($this->search_content)<3) return 0;
		if(!is_array($Arr)) return -1;
		
		for ($i=0;$i<count($Arr);$i++)
		{
			
			$content=@file("http://".$_SERVER["SERVER_NAME"].$Arr[$i]);
			$content=@strip_tags(strtolower(implode("",$content)),"<p>,<title>,<h1>,<h2>,<h3>,<h4>,<h5>,<h6>");
		
			preg_match_all("/<(h1|h2|h3|h4|h5|h6|p)[^>]*>([^\/\\1]*)<\/\\1>/s",$content,$res,PREG_SET_ORDER);
			if (count($res)!=0) 
			{
				$k=0;
				for($j=0;$j<count($res);$j++)
				{
					$cnt=substr_count($res[$j][2],$this->search_content);
					if ($cnt>0) 
					{
						$VALUE["p"][$k]=str_replace($this->search_content,"<b>".$this->search_content."</b>",$res[$j][2]);
						$VALUE["p_count"][$k]=$cnt;
						$k++;
					}					
				}
				
				
				if($k)
				{
				preg_match("/<title[^>]*>(.*)<\/title>/s",$content,$res);
				$VALUE["title"]=$res[1]; 
				$VALUE["href"]=$Arr[$i]; 
			 	$CONTENT_ARR[$i]=$VALUE;
				}
			}
			/*preg_match_all("/class=.?acrobat.?[^>]*>(.*)<\/a>/",$content,$res,PREG_SET_ORDER);
			if (count($res)!=0) 
			{
				for($j=0;$j<count($res);$j++)
				{
					$cnt=substr_count(strtolower(strip_tags($res[$j][1])),strtolower($this->search_content));
					if ($cnt>0) 
					{
						$DOCS["acrobat"][$j]=$res[$j][1];
						$DOCS["a_count"][$j]=$cnt;
					}
				}
			}*/
			
			
		}
		return $CONTENT_ARR;
	}
}
?>
