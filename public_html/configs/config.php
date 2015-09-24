<?php

//Конфигурационный файл
setlocale(LC_ALL, "ru_RU.utf8");

if(strstr($_SERVER['DOCUMENT_ROOT'], "Z:")){
  ini_set("display_errors", 1);
  ini_set("display_startup_errors", 1);
  ini_set("error_reporting", -1);  
} else{
  ini_set("display_errors", 0);
  ini_set("display_startup_errors", 0);
  ini_set("error_reporting", E_ALL ^ E_NOTICE);
}

define("_ADMIN_MAIL","info@pravo-spb.net");
define("HOST", $_SERVER['HTTP_HOST']);


$_Browser = $_SERVER['HTTP_USER_AGENT'];
if(strstr($_Browser,"MSIE")) $_Browser = "MSIE";
if(strstr($_Browser,"Firefox")) $_Browser = "Firefox";
if(strstr($_Browser,"Opera")) $_Browser = "Opera";

$root = $_SERVER['DOCUMENT_ROOT'];

include $root . "/moduls/myPage/UrlMap.php";
include $root . "/moduls/myPage/myPageClass.php";
include $root . "/libs/lib.php";