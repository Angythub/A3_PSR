<?php

require __DIR__.'/vendor/autoload.php';


//$slugify = new \Cocur\Slugify\Slugify();
//echo $slugify->slugify('Mé ré & <xd> lol _');

echo \OKLM\StringGenerator\PasswordGenerator::generate(10, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_EASY, '').'<br>';
echo \OKLM\StringGenerator\PasswordGenerator::generate(10, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_MEDIUM, '').'<br>';
echo \OKLM\StringGenerator\PasswordGenerator::generate(10, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_HARD, '').'<br>';
echo \OKLM\StringGenerator\LatinGenerator::generate(10).'<br>';