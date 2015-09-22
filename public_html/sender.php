<? 
require_once $_SERVER['DOCUMENT_ROOT']."/configs/config.php";
if(!isset($_POST["submit"]) or !isset($_POST["type"])) 
{
	goto("/");
	exit;
}


/* Mail initialize */
require_once $_SERVER['DOCUMENT_ROOT']."/moduls/Mail/grab_email.php";



/*  Common headers */
	$message="";
	
	foreach($_POST as $name=>$value)
	{
		if($name!="submit" and $name!="type")
			$message.="<p style='margin:0px;'><b>$name:</b> <em>$value</em> </p>"; 
	}
	
	$hdrs = array(
	      'From'    => $_SERVER['SERVER_NAME']."-backForm",
		  'To' => _ADMIN_MAIL,
		  'Content-type' => 'text/html; charset=windows-1251',
          'Subject' => ''
             ); 

/*  Generic message */	
if($_POST["type"] == "question")
{
	$hdrs['Subject'] = '=?koi8-r?B?'.base64_encode(convert_cyr_string("Форма: Задать вопрос", "w","k")).'?=';
	$message = "<h1>Форма: Задать вопрос</h1> ".$message;
}

if($_POST["type"] == "call")
{
	$hdrs['Subject'] = '=?koi8-r?B?'.base64_encode(convert_cyr_string("Форма: Заказать звонок", "w","k")).'?=';
	$message = "<h1>Форма: Заказать звонок</h1>".$message;
}

if($_POST["type"] == "regFirm")
{
	$hdrs['Subject'] = '=?koi8-r?B?'.base64_encode(convert_cyr_string("Форма: Регистрация фирмы", "w","k")).'?=';
	$message = "<h1>Форма: Регистрация фирмы</h1>".$message;
}



/*  Send message */

	$mime = new Mail_mime("\r\n");
	$mime->setHTMLBody($message); 
	$body = $mime->get(array("html_charset"=>"windows-1251"));
	$hdrs = $mime->headers($hdrs); 
	
	$status = $smtp->send(_ADMIN_MAIL, $hdrs, $body); 
	
	/* $addedHeadersString = "";
	foreach($hdrs as $key=>$value)
	{
		if($key!='Subject')
		{
			$addedHeadersString.= $key.": $value \n\r";
		}
	}
	$status = mail(_ADMIN_MAIL,$hdrs['Subject'],$body,$addedHeadersString); */
	
	if($status) 
		{
			alert("Ваше сообщение успешно отправлено!");
			goto($_SERVER['HTTP_REFERER']);
		}

	else 
		{
			alert("Сервер сообщает о невозможности отправки письма. Попробуйте повторить попытку позже.");
			goto($_SERVER['HTTP_REFERER']);
		}
?>