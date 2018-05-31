<?php

namespace PHPModules\Database;

use Illuminate\Database\Capsule\Manager;

class ConfigProvider
{
    public function __invoke() : array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }
    public function getDependencies() : array
    {

        return [
            'aliases' => [
                'DB' => Manager::class,
            ],
            'factories'  => [
                Manager::class => DatabaseFactory::class,
            ],
        ];
    }
}
