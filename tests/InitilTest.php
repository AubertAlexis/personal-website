<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InitilTest extends WebTestCase
{
    public function testInitial()
    {
        $number = 5;

        $this->assertEquals("5", $number);
    }
}
