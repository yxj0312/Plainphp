<?php

declare(strict_types = 1);

namespace Plainphp;

class HelloWorld
{
    public function announce()
    {
        echo "Hello, autoloaded world!";
    }

//    public function __invoke(): void
//    {
//        echo 'Hello, autoloaded world!';
//        exit;
//    }
}

$hi = new HelloWorld();
$hi->announce();
