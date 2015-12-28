<?php
// Smarty.class.phpへのフルパス
require('/usr/share/php/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->compile_dir = 'C:\xampp\htdocs\myapp\smarty\templates';
$smarty->compile_dir = 'C:\xampp\htdocs\myapp\smarty\cache';
$smarty->compile_dir = 'C:\xampp\htdocs\myapp\smarty\configs';

$blog_title ="Coffee Talk Blog";
?>
