<?php 

$path = './img';
$files = scandir($path);
// print_r($files);

$files = array_diff($files, array('.', '..'));