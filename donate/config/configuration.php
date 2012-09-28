<?php 
// Файл конфигурации configuration.php
// Браузерная игра
// Bozzy Adventures
// 2012 (c)

require_once ("core/connect.php");
require_once ("core/cookie.php");
require_once ("core/chat.php");
require_once ("core/core.php");
require_once ("core/function.php");
require_once ("core/gear.php");
require_once ("core/item.php");
require_once ("core/link.php");
require_once ("core/localization.php");
require_once ("core/location.php");
require_once ("core/search.php");
require_once ("core/static.php");
require_once ("core/text.php");
require_once ("core/title.php");
require_once ("core/world.php");


$server_www = $_SERVER['SERVER_NAME'];

$dblocation = "localhost";
$dbname = "bozzygame";
$dbuser = "bozzygame";
$dbpassword = "pfqrjgfif0";

$mysqli = new mysqli($dblocation, $dbuser, $dbpassword, $dbname);
	
	$mysqli->query("SET NAMES 'cp1251'");

?>