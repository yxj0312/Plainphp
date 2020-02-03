<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use Plainphp\HelloWorld;
use function DI\create;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$containerBuilder = new ContainerBuilder();
$containerBuilder->useAutowiring(false);
$containerBuilder->useAnnotations(false);
$containerBuilder->addDefinitions([
    HelloWorld::class => create(HelloWorld::class)
]);

$container = $containerBuilder->build();

$helloWorld = $container->get(HelloWorld::class);

//echo 'Hello, world!';

$helloworld = new HelloWorld();
$helloworld->announce();




