<?php

namespace codicastudio\Enum\Tests;

use Orchestra\Testbench\TestCase;
use codicastudio\Enum\EnumServiceProvider;

class ApplicationTestCase extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            EnumServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['path.lang'] = __DIR__ . '/lang';
    }
}
