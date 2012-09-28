<?php
require_once("config/configuration.php");
		setcookie('lang', 'ru', time() + 60 * 60 * 24 * 7, '/');
		setcookie('locale', 'ru', time() + 60 * 60 * 24 * 7, '/');
?>