<?php

namespace App\Tests;

use App\Entity\Users;
use PHPUnit\Framework\TestCase;

class WebMagTest extends TestCase
{
    public function testWebzine(): void
    {
        $test = new Users();
        $test->setFirstname('test');
        $test->setLastname('test');
        $test->setUsername('test');
        $this->assertEquals('test', $test->getFirstname());
        $this->assertEquals('test', $test->getLastname());
        $this->assertEquals('test', $test->getUsername());
        $this->assertTrue(true);
    }
}
