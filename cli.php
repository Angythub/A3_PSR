#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

$length = (isset($argv[1]) && (int)$argv[1] > 0) ? (int)$argv[1] : mt_rand(0,30);
$char = 'azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789$€£%!#&éèà';
$password = '';




echo \OKLM\StringGenerator\PasswordGenerator::generate($length, $char).'<br>';

//for($i = 0; $i < $length; $i++)
//{
//    $password .= mb_substr($char, mt_rand(0, mb_strlen($char)-1), 1);
//}

echo $password.PHP_EOL;
 
 