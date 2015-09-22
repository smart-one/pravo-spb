<? 
//Конфигурационный файл
setlocale(LC_ALL, "ru_RU.CP1251");
ini_set("display_errors",1);
ini_set("display_startup_errors",1);
ini_set("error_reporting",E_ALL ^ E_NOTICE);

//define(_ADMIN_MAIL,"pravo@pravo-spb.net");
define(_ADMIN_MAIL,"pravo-spb@mail.ru");


$_Browser = $_SERVER['HTTP_USER_AGENT'];
if(strstr($_Browser,"MSIE")) $_Browser="MSIE";
if(strstr($_Browser,"Firefox")) $_Browser="Firefox";
if(strstr($_Browser,"Opera")) $_Browser="Opera";

$root=$_SERVER['DOCUMENT_ROOT'];

include $root."/moduls/myPage/myPageClass.php";
include $root."/libs/lib.php";



?>