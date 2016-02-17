<?php

namespace Phpass\Tests;

use Phpass\PasswordHash;

/**
 * Created by PhpStorm.
 * User: kyle
 * Date: 2/16/16
 * Time: 10:48 PM
 */
class PasswordHashTest extends \PHPUnit_Framework_TestCase
{
    public function testCheckPassword()
    {
        $hasher = new PasswordHash(8, true);

        $testHash = '$P$BbD1flG/hKEkXd/LLBY.dp3xuD02MQ/';
        $testCorrectPassword = 'test123456!@#';
        $testIncorrectPassword = 'test123456!#$';

        $this->assertTrue($hasher->CheckPassword($testCorrectPassword, $testHash));
        $this->assertFalse($hasher->CheckPassword($testIncorrectPassword, $testHash));
    }

    public function testHashPassword()
    {
        $hasher = new PasswordHash(8, true);

        $testPassword = 'test123456!@#';
        for ($i = 0; $i < 10; $i++) {
            $hash = $hasher->HashPassword($testPassword);
            $this->assertTrue($hasher->CheckPassword($testPassword, $hash));
        }
    }
}
