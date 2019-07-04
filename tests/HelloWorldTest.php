<?php

declare(strict_types=1);

namespace Skeleton\Test;

use PHPUnit\Framework\TestCase;
use Skeleton\HelloWorld;

class HelloWorldTest extends TestCase
{
    /** @test */
    public function return_expected_greeting(): void
    {
        $this->assertSame('Hello John!', (new HelloWorld())->hi('John'));
    }
}
