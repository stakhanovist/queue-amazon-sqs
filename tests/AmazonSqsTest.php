<?php

namespace Stakhanovist\Queue\Adapter\AmazonSqsTest;

use Stakhanovist\Queue\Adapter\AmazonSqs\AmazonSqs;

class AmazonSqsTest extends \PHPUnit_Framework_TestCase
{
    public function testConnect()
    {
        $adapter = new AmazonSqs();
        $connected  = $adapter->connect();

        $this->assertTrue($connected);
    }
}