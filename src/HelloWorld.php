<?php

declare(strict_types=1);

namespace Skeleton;

class HelloWorld
{
    public function hi(string $name = 'World'): string
    {
        return "Hello $name!";
    }
}
