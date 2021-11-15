<?php

namespace Hackathon\LevelA;

class Palindrome
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * This function creates a palindrome with his $str attributes
     * If $str is abc then this function return abccba
     *
     * @TODO
     * @return string
     */
    public function generatePalindrome()
    {
        $str = utf8_decode($this->str);
        $rotated = strrev($str);
        $decoded = utf8_encode($rotated);
        $res = $this->str.$decoded;
        return $res;
    }

}
