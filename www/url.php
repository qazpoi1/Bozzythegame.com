<?php // Файл редиректа с портала
require_once("config/configuration.php");
// require_once ("");

if ($GET['redirect'] = "vk")
	{
		echo '<meta http-equiv=Refresh content="0; url=http://' . $_GET['redirect'] .  '.com">';
	}
?>