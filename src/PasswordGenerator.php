<?php

namespace OKLM\StringGenerator;

/**
 * Class PasswordGenerator
 * @package OKLM\StringGenerator
 */
class PasswordGenerator
{
    const PASSWORD_EASY = 0;
    const PASSWORD_MEDIUM = 1;
    const PASSWORD_HARD = 2;
    /**
     * @var string
     */
    private static $strenghtEasy = 'azertyuiopqsdfghjklmwxcvbn';
    /**
     * @var string
     */
    private static $strenghtMedium= 'AZERTYUIOPQSDFGHJKLMWXCVBN0123456789';
    /**
     * @var string
     */
    private static $strenghtHard = '$€£%!#&éèà';

    /**
     * Constructor
     */
    public function __construct()
    {

    }

    /**
     * @param int $length
     * @param $strength
     * @param $char
     *
     * @return string
     *
     * @throws \Exception
     */
    public static function generate($length = 10, $char = '', $strength = '')
    {
        if ($strength)
        {
            switch($strength)
            {
                case self::PASSWORD_EASY:
                    $char = self::$strenghtEasy;
                    break;
                case self::PASSWORD_MEDIUM:
                    $char = self::$strenghtEasy.self::$strenghtMedium;
                    break;
                case self::PASSWORD_HARD:
                    $char = self::$strenghtEasy.self::$strenghtMedium.self::$strenghtHard;
                    break;
            }
        }

        $password = '';

        for($i = 0; $i < $length; $i++)
        {
            $password .= mb_substr($char, mt_rand(0, mb_strlen($char)-1), 1);
        }

        return $password;
    }
} 