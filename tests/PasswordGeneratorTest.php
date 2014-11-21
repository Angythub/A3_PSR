<?php
/**
 * Created by PhpStorm.
 * User: Willy
 * Date: 21/11/2014
 * Time: 15:35
 * To change this template use File | Settings | File Templates.
 */
 
namespace Tests\OKLM\StringGenerator;


use OKLM\StringGenerator\PasswordGenerator;

/**
 * Class PasswordGeneratorTest
 * @package Tests\OKLM\StringGenerator
 */
class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @throws \Exception
     */
    public function testGenerateLength()
    {
        $length = mt_rand(10, 1000);
        $password = PasswordGenerator::generate($length, PasswordGenerator::PASSWORD_HARD);
        $passwordLength = mb_strlen($password);

        $this->assertEquals($length, $passwordLength);
    }
}