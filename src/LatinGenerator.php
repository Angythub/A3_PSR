<?php

namespace OKLM\StringGenerator;


/**
 * Class LatinGenerator
 * @package OKLM\StringGenerator
 */
class LatinGenerator
{
    /**
     * @var string
     */
    private static $char = "Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat";

    /**
     *
     */
    public function __construct()
    {

    }

    /**
     * @param int $words
     * @return string
     */
    public static function generate($words)
    {
        if (is_int($words))
        {
            $latin = explode(' ', self::$char);
            shuffle($latin);
            $result = implode(" ", array_splice($latin, 0, $words));
        }
        else
        {
            $result = "number of words needs to be a number... CAPTAIN OBVIOUS.";
        }
        return $result;


    }
}