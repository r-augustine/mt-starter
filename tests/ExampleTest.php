<?php
declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testPushPop()
    {
        $stack = [];

        $this->assertSame(0, count($stack));
    }
}