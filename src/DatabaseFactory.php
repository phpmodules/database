<?php

namespace PHPModules\Database;
use Psr\Container\ContainerInterface;
use Illuminate\Database\Capsule\Manager as Capsule;


class DatabaseFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $capsule = new Capsule;
        $config = $container->get('config');

        $capsule->addConnection($config['DB']);
        $capsule->setAsGlobal();

        return $capsule;
    }
}