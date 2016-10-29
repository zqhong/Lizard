<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/9/27 22:03
 * @namespace Lizard\Utils
 * @filename StringHelper.php
 * @encoding UTF-8
 */

namespace Lizard\Utils;

class StringHelper
{
    /**
     * Validate $str is email or not.
     *
     * @param $str
     * @return bool
     */
    public static function isEmail($str)
    {
        return (bool) filter_var($str, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Validate $str is phone number or not.
     *
     * @param $str
     * @return bool
     */
    public static function isPhoneNum($str)
    {
        return (bool) preg_match('/^1\d{10}$/', $str);
    }
}
