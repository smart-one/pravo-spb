<?php 
/////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////  ����� ����������� ��������  /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////   �����: ������ �������   sitespring.ru //
//  ������ 120809
//
//	public function MyPage($src) - �����������
//	public function Attach() - ���������� ��������
//	�����:
//		public $defaultPage="/head.php";
//		public $title="� ��� ��� ����� ����� ���� ��� ������...";
//
//	public function getThisPageAttributs() - �������� �������� �������� �� ����� �����������
//	public function setMetaDefinitionDir($newDir) - ������������� ���������� ��� ��������� ���� � ���� ����������� == dirSrc!
//	public function getAttributsByPageName($pageSrc) - ���������� ������ ��������� ��� �������� �� ����� �����������
//	public function setAttributsByPageName($pageSrc,$name,$title,$metas) - ���������� �������� ��������
//	�����:
//		public $createFileIfNotExist = 0; 	{ 1-�������, 0 - �� ���������}
// 		public $startUpText = "����� ��������";
//
//  public function delete($src) - ������� �������� �� ����� ����������� � ������������� ���� �����
//	�����:
//		public $createFileIfNotExist = 0; 	{ 1-�������, 0 - �� �������}
//
//
//
class MyPage
{
	//�������� ������� ��������	
	public $name=""; //   �������� ��� ���������

	public $src=""; //���������� ����
	//������ ���� � �����	
	public $path=""; //������ ����
	//����
	public $metas="";
	
	
	/////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////// �����  ///////////////////////////////////////////////////////
	//�������� �� ���������
	public $defaultPage="/head.php";
	//��������� �� ���������
	public $title="�� �������.";
	//���������� ��� �������� meta ���������
	private $metaDefinitionDir="/configs/metas";
	//���� ����������� �������� �������
	private $defineXMLFile="/configs/metas/define.xml";


	public $error=false;
	public $statusLog="";
	//�����: ������� ���� ���� ��� ���
	public $createFileIfNotExist = 0;
	
	public $startUpText = "����� ��������";
	/////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////// ������ ///////////////////////////////////////////////////////

	//����������� - ���������� �������� ��������
	public function MyPage($src)
	{
		if(empty($src))	
		{	
			$this->src=$this->defaultPage;
			$this->error="�������� �� ������!";
			return 0;
		}
		else
			$this->src=htmlspecialchars($src);
	
		$this->path=$_SERVER['DOCUMENT_ROOT'].$this->src;
		return 1;
	}
	
	
	//���������� ��������
	public function Attach()
	{
		if(is_file($this->path)) 
		{
			require_once $this->path;
			return 1;
		}
		else
			if(is_file($_SERVER['DOCUMENT_ROOT'].$this->defaultPage)) 
			{
				require_once $_SERVER['DOCUMENT_ROOT'].$this->defaultPage;
				$this->error="������������ �������� �����������. ���������� �������� �� ���������.";
				return 0;
			}
			else
			{
				$this->error="������������ � �� ��������� �������� �����������! ������� ��������� ������!";
				return 0;
			}
	}
	
	
	//���������� �������� ��������
	public function getThisPageAttributs()
	{
		if(!is_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="����� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." �� ����������!";
			return 0;
		} 
		
		if(!$xml=@simplexml_load_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="���� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." ����� ������������ xml ������!";
			return 0;
		}


		$fileDefaultAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/default.php";
		if(!is_file($fileDefaultAttach)) 
		{
			$this->error="��� ����� ���� ����� �� ��������� $fileDefaultAttach!";
			return 0;
		}	
		
		$this->metas = @file_get_contents($fileDefaultAttach);
		foreach($xml->page as $page)
		{
			if($page->src==$this->src)
			{
				$this->title= (!empty($page->title)) ? iconv("UTF-8","Windows-1251",$page->title) : $this->title;
				$this->name= (!empty($page->name)) ? iconv("UTF-8","Windows-1251",$page->name) : $this->name;
				$filePersonalAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/".$page->metasFile;
				if(!empty($page->metasFile) && !is_file($filePersonalAttach))
				{
					$this->error="���� $filePersonalAttach ����� ��� ������������ ���� ����, �� ��� �� ����������!";
					return 0;
				}
				if(!empty($page->metasFile)) $this->metas.= @file_get_contents($filePersonalAttach);
				return 1;
			}
		}
		$this->error="��������� ��� ".$this->name." � ����� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." �� �������!";
		return -1;
	}
	
	
	
	//////////////////////////////////////////////////////////////////
	public function setMetaDefinitionDir($newDir)
	{
		if(!is_dir($_SERVER['DOCUMENT_ROOT'].$newDir))
		{
			$this->error="��� ����� ���������� ".$_SERVER['DOCUMENT_ROOT'].$newDir;
			return 0;
		}
		
		if(!is_file($_SERVER['DOCUMENT_ROOT'].$newDir."/define.xml"))
		{
			$this->error="� �������� ���������� ��� ����� define.xml";
			return 0;
		}
	
		$this->metaDefinitionDir=$newDir;
		$this->defineXMLFile=$this->metaDefinitionDir."/define.xml";
		return 1;
	}
	
	
	
	
	//////////////////////////////////////////////////////////////////
	public function getAttributsByPageName($pageSrc)
	{
		$VAL="";
		if(!is_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="����� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." �� ����������!";
			return 0;
		} 
		
		if(!$xml=@simplexml_load_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="���� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." ����� ������������ xml ������!";
			return 0;
		}


		$fileDefaultAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/default.php";
		if(!is_file($fileDefaultAttach)) 
		{
			$this->error="��� ����� ���� ����� �� ��������� $fileDefaultAttach!";
			return 0;
		}	
		
		$VAL["metas"] = @file_get_contents($fileDefaultAttach);
		foreach($xml->page as $page)
		{
			if($page->src==$pageSrc)
			{
				$VAL["title"]= (!empty($page->title)) ? iconv("UTF-8","Windows-1251",$page->title) : $this->title;
				$VAL["name"]= (!empty($page->name)) ? iconv("UTF-8","Windows-1251",$page->name) : "";
				$filePersonalAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/".$page->metasFile;
				if(!empty($page->metasFile) && !is_file($filePersonalAttach))
				{
					$this->error="���� $filePersonalAttach ����� ��� ������������ ���� ����, �� ��� �� ����������!";
					return 0;
				}
				if(!empty($page->metasFile)) $VAL["metas"].=htmlentities(@file_get_contents($filePersonalAttach));
				return $VAL;
			}
		}
		$this->error="��������� ��� ".$this->name." � ����� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." �� �������!";
		return $VAL;
	}
	
	
	
	
	
	//////////////////////////////	//////////////////////////////////////////////////////////////////
	public function setAttributsByPageName($pageSrc,$name,$title,$metas)
	{
		
		
		if(!is_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="����� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." �� ����������!";
			return 0;
		} 
		
		if(!$xml=@simplexml_load_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="���� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." ����� ������������ xml ������!";
			return 0;
		}

		
		if($this->createFileIfNotExist && !is_file($_SERVER['DOCUMENT_ROOT'].$pageSrc))
		{
			$this->statusLog[] = "����� ".$_SERVER['DOCUMENT_ROOT'].$pageSrc." �� ����������. �������!";
			
			$dirs = explode("/",$pageSrc);
			$currentPath = $_SERVER['DOCUMENT_ROOT'];
			foreach($dirs as $dir)
			{
				if(!empty($dir) and $dir!=basename($pageSrc) and !is_dir($currentPath."/$dir"))
				{
					$currentPath.= "/$dir";
					if(!@mkdir($currentPath)) $this->statusLog[] = "���������! �� ������� ������� �������� $currentPath";
				}
			}
			
			$this->statusLog[] = "���������: ".( (@file_put_contents($_SERVER['DOCUMENT_ROOT'].$pageSrc,$this->startUpText)) ? "�������":"���������!" );
		}
		
		
		if(!$this->createFileIfNotExist && !is_file($_SERVER['DOCUMENT_ROOT'].$pageSrc))
		{
			$this->statusLog[] = "����� ".$_SERVER['DOCUMENT_ROOT'].$pageSrc."�� ����������. ���� createFileIfNotExist �� ����������. ";;
		}
		

		foreach($xml->page as $page)
		{
			if($page->src==$pageSrc)
			{
				$this->statusLog[] = "������� ������ �� $pageSrc";
				
				$page->title= iconv("Windows-1251","UTF-8",$title);
				$page->name = iconv("Windows-1251","UTF-8",$name);
				
				$this->statusLog[] = "��������� ������� ��������";
				
				$filePersonalAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/".$page->metasFile;
				if(is_file($filePersonalAttach))
				{
					if(!empty($metas) && !@file_put_contents($filePersonalAttach,$metas))
					{
						$this->error="�� ������� �������� � ����������� � ����� �������� ���� $filePersonalAttach";
						return 0;
					}
					
					$this->statusLog[] = "���� ���� ����������. ���� ���� ������� ���������";
				}
				else
				{
					$filePersonalAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/".rand(1,99).str_replace("/","_",$pageSrc);
					if(!empty($metas) && !@file_put_contents($filePersonalAttach,$metas))
					{
						$this->error="�� ������� �������� ���� ������ � ����� ���� $filePersonalAttach";
						return 0;
					}
					$page->metasFile=basename($filePersonalAttach);	
					$this->statusLog[] = "����� ���� ������������. ���� ���� ������� ������� � �������� � ���� $filePersonalAttach";
				}
				
				if(!@file_put_contents($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile,$xml->asXML()))
				{
					$this->error="�� ������� �������� ������ � ���� �������� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile;
					return 0;
				}
				
				return 1;
			}
		}

		$this->statusLog[] = "�� ������� ������ �� $pageSrc. ������� ����� ������";
				
		$filePersonalAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/".rand(1,99).str_replace("/","_",$pageSrc);
		if(!empty($metas) && !@file_put_contents($filePersonalAttach,$metas))
		{
			$this->error="�� ������� �������� ����� ���� ������ � ����� ���� $filePersonalAttach";
			return 0;
		}

		$this->statusLog[] = "����� ���� ������� �������� � ���� $filePersonalAttach";
				
		$newNode=$xml->addChild("page");
		$newNode->addChild("src",$pageSrc);
		$newNode->addChild("name",iconv("Windows-1251","UTF-8",$name));
		$newNode->addChild("title",iconv("Windows-1251","UTF-8",$title));
		$newNode->addChild("metasFile",basename($filePersonalAttach));
		if(!@file_put_contents($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile,$xml->asXML()))
		{
			$this->error="�� ������� �������� ����� ������ � ���� �������� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile;
			return 0;
		}
		
		$this->statusLog[] = "������ �� $pageSrc ������� ��������� � ���� ��������";
				
		return 1;
	}
	
	
	
	
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function delete($pageSrc)
	{
		$this->statusLog[] = "������� �������� $pageSrc";
		if(!is_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="����� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." �� ����������!";
			return 0;
		} 
		
		if(!$xml=@simplexml_load_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="���� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." ����� ������������ xml ������!";
			return 0;
		}


		$pageIndex = 0;
		foreach($xml->page as $page)
		{
			if($page->src==$pageSrc)
			{
				$filePersonalAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/".$page->metasFile;
				if(!empty($page->metasFile) && !is_file($filePersonalAttach))
				{
					$this->statusLog[]="���� $filePersonalAttach ����� ��� ������������ ���� ����, �� ��� �� ����������! ����������!";
				}
				else
				if(!empty($page->metasFile) && is_file($filePersonalAttach)) 
				{
					$this->statusLog[] = "���� $filePersonalAttach ����� ��� ������������ ���� ����, �������! ���������: ".@					unlink($filePersonalAttach);;
				}
				unset($xml->page[$pageIndex]);
				$this->statusLog[] = "������ � ����� �������� � �������� $pageSrc �������!";
				if($this->createFileIfNotExist)
				{
					if(!is_file($_SERVER['DOCUMENT_ROOT'].$pageSrc))
					{
						$this->statusLog[] = "���� createFileIfNotExist ���������� �� ����� $pageSrc �� ����������";
					}
					else
					{
						$this->statusLog[] = "���� createFileIfNotExist ���������� � ���� $pageSrc ����������. �������! ���������: ".@unlink($_SERVER['DOCUMENT_ROOT'].$pageSrc);
					}
				}
				else
				{
					$this->statusLog[] = "���� createFileIfNotExist �� ����������. ���� $pageSrc �� �������. ";
				}
				
				
				if(!@file_put_contents($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile,$xml->asXML()))
				{
					$this->error="�� ������� �������� ������ � ����� �������� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile.". ������ ��� ������� � ���� �� ������.";
					return 0;
				}
		
				return 1;
			}
			$pageIndex++;
		}
		
		$this->error="������ ��� $pageSrc � ����� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." �� �������!";
		if($this->createFileIfNotExist and is_file($_SERVER['DOCUMENT_ROOT'].$pageSrc))
		{
			$this->statusLog[] = "������ ��� $pageSrc � ����� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." �� �������! �� ���� ���������� � ���� createFileIfNotExist ����������. �������! ���������: ".@unlink($_SERVER['DOCUMENT_ROOT'].$pageSrc);
		}
		else
		if(!is_file($_SERVER['DOCUMENT_ROOT'].$pageSrc))
		{
			$this->statusLog[] = "������ ��� $pageSrc � ����� ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." �� ������� � ����� $pageSrc �� ����������";
		}
		return 0;
	}
	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
}

?>