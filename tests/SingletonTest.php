<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\Singleton;

class SingletonTest extends TestCase
{
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertInstanceOf(Singleton::class, $secondCall);

        $this->assertSame($firstCall, $secondCall);
    }
}