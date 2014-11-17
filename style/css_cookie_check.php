<?php
// Tutorial Files for web site theme changing using CSS stylesheets and PHP Cookies
// Created by Adam Khoury @ www.developphp.com July 29, 2010
//-------------------------------------------------------------------------------------------------------
// This file checks to see if they have a style cookie present in their browser software
// If they do then we access its value and put it into the $styleChoice variable
// If they do not then we simply place the default site theme into the variable value
$styleChoice = "";
if (!isset($_COOKIE['sitestyle'])) {
    $styleChoice = "ladybug";
} else {
	$styleChoice = $_COOKIE['sitestyle'];
}
?>