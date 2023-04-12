<?php

declare(strict_types=1);

namespace ShinyaSakurai\TwitterOAuth\Tests;

use PHPUnit\Framework\TestCase;
use ShinyaSakurai\TwitterOAuth\Consumer;

class ConsumerTest extends TestCase
{
    public function testToString()
    {
        $key = uniqid();
        $secret = uniqid();
        $consumer = new Consumer($key, $secret);

        $this->assertEquals(
            "Consumer[key=$key,secret=$secret]",
            $consumer->__toString()
        );
    }
}
