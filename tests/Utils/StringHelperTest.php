<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/9/27 22:48
 * @namespace Lizard\Test\Utils
 * @filename StringHelperTest.php
 * @encoding UTF-8
 */

namespace Lizard\Test\Utils;

use Lizard\Test\AbstractTestCase;
use Lizard\Utils\StringHelper;


class StringHelperTest extends AbstractTestCase
{
    public function testIsEmail()
    {
        // Valid Email address
        $this->assertEquals(true, StringHelper::isEmail('email@domain.com'));
        $this->assertEquals(true, StringHelper::isEmail('firstname+lastname@domain.com'));
        $this->assertEquals(true, StringHelper::isEmail('1234567890@domain.com'));
        $this->assertEquals(true, StringHelper::isEmail('_______@domain.com'));

        // Invalid Email address
        // Missing @ sign and domain
        $this->assertEquals(false, StringHelper::isEmail('plainaddress'));
        // Missing username
        $this->assertEquals(false, StringHelper::isEmail('@domain.com'));
        // Missing @
        $this->assertEquals(false, StringHelper::isEmail('email.domain.com'));
        // Unicode char as address
        $this->assertEquals(false, StringHelper::isEmail('あいうえお@domain.com'));
        // 	Multiple dot in the domain portion is invalid
        $this->assertEquals(false, StringHelper::isEmail('email@domain..com'));
    }

    public function testIsPhoneNum()
    {
        // Valid Phone number
        $this->assertEquals(true, StringHelper::isPhoneNum('13800000000'));

        // Invalid Phone number
        // Too short: phone number must equal 11 length in China
        $this->assertEquals(false, StringHelper::isPhoneNum('1111111111'));
        // Too long
        $this->assertEquals(false, StringHelper::isPhoneNum('111111111111'));
        // Phone number is only contains number(0-9)
        $this->assertEquals(false, StringHelper::isPhoneNum('1111111111a'));
        $this->assertEquals(false, StringHelper::isPhoneNum('1111111111+'));
    }
}