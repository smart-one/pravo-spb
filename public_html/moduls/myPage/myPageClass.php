<?php 
/////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////  Класс определения страницы  /////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////   Автор: Шевцов Евгений   sitespring.ru //
//  Сборка 120809
//
//	public function MyPage($src) - конструктор
//	public function Attach() - подключает страницу
//	опции:
//		public $defaultPage="/head.php";
//		public $title="А фиг его знает какой титл тут задать...";
//
//	public function getThisPageAttributs() - получает атрибуты страницы из файла определения
//	public function setMetaDefinitionDir($newDir) - устанавливает директорию где храняться мета и файл определения == dirSrc!
//	public function getAttributsByPageName($pageSrc) - возвращает массив атрибутов для страницы из файла определения
//	public function setAttributsByPageName($pageSrc,$name,$title,$metas) - записывает атрибуты страницы
//	опции:
//		public $createFileIfNotExist = 0; 	{ 1-создать, 0 - не создавать}
// 		public $startUpText = "Новая страница";
//
//  public function delete($src) - удаляет страницу из файла определения и сопутствующие мета файлы
//	опции:
//		public $createFileIfNotExist = 0; 	{ 1-удалить, 0 - не удалять}
//
//
//
class MyPage
{
	//Название текущей страницы	
	public $name=""; //   Описания для менеджера

	public $src=""; //абсолютный путь
	//Полный путь к файлу	
	public $path=""; //полный путь
	//Мета
	public $metas="";
	
	
	/////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////// Опции  ///////////////////////////////////////////////////////
	//Страница по умолчанию
	public $defaultPage="/head.php";
	//Заголовок по умолчанию
	public $title="Не найдено.";
	//Директория где хранятся meta заголовки
	private $metaDefinitionDir="/configs/metas";
	//Файл определения настроек страниц
	private $defineXMLFile="/configs/metas/define.xml";


	public $error=false;
	public $statusLog="";
	//Опция: Создать файл если его нет
	public $createFileIfNotExist = 0;
	
	public $startUpText = "Новая страница";
	/////////////////////////////////////////////////////////////////////////////////////////////////
	////////////////////////////////// Методы ///////////////////////////////////////////////////////

	//Конструктор - определяет название страницы
	public function MyPage($src)
	{
		if(empty($src))	
		{	
			$this->src=$this->defaultPage;
			$this->error="Страница не задана!";
			return 0;
		}
		else
			$this->src=htmlspecialchars($src);
	
		$this->path=$_SERVER['DOCUMENT_ROOT'].$this->src;
		return 1;
	}
	
	
	//Подключает страницу
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
				$this->error="Подключаемая страница отсутствует. Подключена страница по умолчанию.";
				return 0;
			}
			else
			{
				$this->error="Подключаемая и по умолчанию страница отсутствуют! Проверь настройки класса!";
				return 0;
			}
	}
	
	
	//Возвращает атрибуты страницы
	public function getThisPageAttributs()
	{
		if(!is_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="Файла ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." не существует!";
			return 0;
		} 
		
		if(!$xml=@simplexml_load_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="Файл ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." имеет неправильный xml формат!";
			return 0;
		}


		$fileDefaultAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/default.php";
		if(!is_file($fileDefaultAttach)) 
		{
			$this->error="Нет файла мета тэгов по умолчанию $fileDefaultAttach!";
			return 0;
		}	
		
		$this->metas = @file_get_contents($fileDefaultAttach);
		foreach($xml->page as $page)
		{
			if($page->src==$this->src)
			{
				$this->title= (!empty($page->title)) ? iconv("UTF-8","utf-8",$page->title) : $this->title;
				$this->name= (!empty($page->name)) ? iconv("UTF-8","utf-8",$page->name) : $this->name;
				$filePersonalAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/".$page->metasFile;
				if(!empty($page->metasFile) && !is_file($filePersonalAttach))
				{
					$this->error="Файл $filePersonalAttach задан как персональные мета тэги, но его не существует!";
					return 0;
				}
				if(!empty($page->metasFile)) $this->metas.= @file_get_contents($filePersonalAttach);
				return 1;
			}
		}
		$this->error="Аттрибуты для ".$this->name." в файле ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." не найдены!";
		return -1;
	}
	
	
	
	//////////////////////////////////////////////////////////////////
	public function setMetaDefinitionDir($newDir)
	{
		if(!is_dir($_SERVER['DOCUMENT_ROOT'].$newDir))
		{
			$this->error="Нет такой директории ".$_SERVER['DOCUMENT_ROOT'].$newDir;
			return 0;
		}
		
		if(!is_file($_SERVER['DOCUMENT_ROOT'].$newDir."/define.xml"))
		{
			$this->error="В заданной директории нет файла define.xml";
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
			$this->error="Файла ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." не существует!";
			return 0;
		} 
		
		if(!$xml=@simplexml_load_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="Файл ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." имеет неправильный xml формат!";
			return 0;
		}


		$fileDefaultAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/default.php";
		if(!is_file($fileDefaultAttach)) 
		{
			$this->error="Нет файла мета тэгов по умолчанию $fileDefaultAttach!";
			return 0;
		}	
		
		$VAL["metas"] = @file_get_contents($fileDefaultAttach);
		foreach($xml->page as $page)
		{
			if($page->src==$pageSrc)
			{
				$VAL["title"]= (!empty($page->title)) ? iconv("UTF-8","utf-8",$page->title) : $this->title;
				$VAL["name"]= (!empty($page->name)) ? iconv("UTF-8","utf-8",$page->name) : "";
				$filePersonalAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/".$page->metasFile;
				if(!empty($page->metasFile) && !is_file($filePersonalAttach))
				{
					$this->error="Файл $filePersonalAttach задан как персональные мета тэги, но его не существует!";
					return 0;
				}
				if(!empty($page->metasFile)) $VAL["metas"].=htmlentities(@file_get_contents($filePersonalAttach));
				return $VAL;
			}
		}
		$this->error="Аттрибуты для ".$this->name." в файле ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." не найдены!";
		return $VAL;
	}
	
	
	
	
	
	//////////////////////////////	//////////////////////////////////////////////////////////////////
	public function setAttributsByPageName($pageSrc,$name,$title,$metas)
	{
		
		
		if(!is_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="Файла ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." не существует!";
			return 0;
		} 
		
		if(!$xml=@simplexml_load_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="Файл ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." имеет неправильный xml формат!";
			return 0;
		}

		
		if($this->createFileIfNotExist && !is_file($_SERVER['DOCUMENT_ROOT'].$pageSrc))
		{
			$this->statusLog[] = "Файла ".$_SERVER['DOCUMENT_ROOT'].$pageSrc." не существует. Создаем!";
			
			$dirs = explode("/",$pageSrc);
			$currentPath = $_SERVER['DOCUMENT_ROOT'];
			foreach($dirs as $dir)
			{
				if(!empty($dir) and $dir!=basename($pageSrc) and !is_dir($currentPath."/$dir"))
				{
					$currentPath.= "/$dir";
					if(!@mkdir($currentPath)) $this->statusLog[] = "ПРОВАЛЕНО! не удалось создать подпапку $currentPath";
				}
			}
			
			$this->statusLog[] = "Результат: ".( (@file_put_contents($_SERVER['DOCUMENT_ROOT'].$pageSrc,$this->startUpText)) ? "УСПЕШНО":"ПРОВАЛЕНО!" );
		}
		
		
		if(!$this->createFileIfNotExist && !is_file($_SERVER['DOCUMENT_ROOT'].$pageSrc))
		{
			$this->statusLog[] = "Файла ".$_SERVER['DOCUMENT_ROOT'].$pageSrc."не существует. Флаг createFileIfNotExist не установлен. ";;
		}
		

		foreach($xml->page as $page)
		{
			if($page->src==$pageSrc)
			{
				$this->statusLog[] = "Найдена запись по $pageSrc";
				
				$page->title= iconv("utf-8","UTF-8",$title);
				$page->name = iconv("utf-8","UTF-8",$name);
				
				$this->statusLog[] = "Заголовок успешно обновлен";
				
				$filePersonalAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/".$page->metasFile;
				if(is_file($filePersonalAttach))
				{
					if(!empty($metas) && !@file_put_contents($filePersonalAttach,$metas))
					{
						$this->error="Не удалось записать в объявленный в файле описания файл $filePersonalAttach";
						return 0;
					}
					
					$this->statusLog[] = "Файл мета существует. Мета тэги успешно обновлены";
				}
				else
				{
					$filePersonalAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/".rand(1,99).str_replace("/","_",$pageSrc);
					if(!empty($metas) && !@file_put_contents($filePersonalAttach,$metas))
					{
						$this->error="Не удалось записать мета данные в новый файл $filePersonalAttach";
						return 0;
					}
					$page->metasFile=basename($filePersonalAttach);	
					$this->statusLog[] = "Файла мета НЕсуществует. Мета тэги успешно созданы и записаны в файл $filePersonalAttach";
				}
				
				if(!@file_put_contents($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile,$xml->asXML()))
				{
					$this->error="Не удалось записать данные в файл описания ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile;
					return 0;
				}
				
				return 1;
			}
		}

		$this->statusLog[] = "НЕ найдена запись по $pageSrc. Создаем новую запись";
				
		$filePersonalAttach=$_SERVER['DOCUMENT_ROOT'].$this->metaDefinitionDir."/".rand(1,99).str_replace("/","_",$pageSrc);
		if(!empty($metas) && !@file_put_contents($filePersonalAttach,$metas))
		{
			$this->error="Не удалось записать новые мета данные в новый файл $filePersonalAttach";
			return 0;
		}

		$this->statusLog[] = "Новые мета успешно записаны в файл $filePersonalAttach";
				
		$newNode=$xml->addChild("page");
		$newNode->addChild("src",$pageSrc);
		$newNode->addChild("name",iconv("utf-8","UTF-8",$name));
		$newNode->addChild("title",iconv("utf-8","UTF-8",$title));
		$newNode->addChild("metasFile",basename($filePersonalAttach));
		if(!@file_put_contents($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile,$xml->asXML()))
		{
			$this->error="Не удалось дописать новые данные в файл описания ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile;
			return 0;
		}
		
		$this->statusLog[] = "Запись по $pageSrc успешно добавлены в файл описания";
				
		return 1;
	}
	
	
	
	
	
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function delete($pageSrc)
	{
		$this->statusLog[] = "Удаляем страницу $pageSrc";
		if(!is_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="Файла ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." не существует!";
			return 0;
		} 
		
		if(!$xml=@simplexml_load_file($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile))
		{
			$this->error="Файл ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." имеет неправильный xml формат!";
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
					$this->statusLog[]="Файл $filePersonalAttach задан как персональные мета тэги, но его не существует! ПРопускаем!";
				}
				else
				if(!empty($page->metasFile) && is_file($filePersonalAttach)) 
				{
					$this->statusLog[] = "Файл $filePersonalAttach задан как персональные мета тэги, УДАЛяЕм! Результат: ".@					unlink($filePersonalAttach);;
				}
				unset($xml->page[$pageIndex]);
				$this->statusLog[] = "Запись в файле описания о странице $pageSrc удалена!";
				if($this->createFileIfNotExist)
				{
					if(!is_file($_SERVER['DOCUMENT_ROOT'].$pageSrc))
					{
						$this->statusLog[] = "Флаг createFileIfNotExist установлен но файла $pageSrc не существует";
					}
					else
					{
						$this->statusLog[] = "Флаг createFileIfNotExist установлен и файл $pageSrc существует. Удаляем! Результат: ".@unlink($_SERVER['DOCUMENT_ROOT'].$pageSrc);
					}
				}
				else
				{
					$this->statusLog[] = "Флаг createFileIfNotExist не установлен. Файл $pageSrc не удаляем. ";
				}
				
				
				if(!@file_put_contents($_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile,$xml->asXML()))
				{
					$this->error="Не удалось изменить данные в файле описания ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile.". Ошибка при доступе к фалу на запись.";
					return 0;
				}
		
				return 1;
			}
			$pageIndex++;
		}
		
		$this->error="Запись для $pageSrc в файле ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." не найдена!";
		if($this->createFileIfNotExist and is_file($_SERVER['DOCUMENT_ROOT'].$pageSrc))
		{
			$this->statusLog[] = "Запись для $pageSrc в файле ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." не найдена! Но файл существует и флаг createFileIfNotExist установлен. Удаляем! Результат: ".@unlink($_SERVER['DOCUMENT_ROOT'].$pageSrc);
		}
		else
		if(!is_file($_SERVER['DOCUMENT_ROOT'].$pageSrc))
		{
			$this->statusLog[] = "Запись для $pageSrc в файле ".$_SERVER['DOCUMENT_ROOT'].$this->defineXMLFile." не найдена и файла $pageSrc не существует";
		}
		return 0;
	}
	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
}

?>