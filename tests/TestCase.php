<?php

namespace Dcblogdev\Hashnode\Tests;

use Dcblogdev\Hashnode\HashnodeServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            HashnodeServiceProvider::class,
        ];
    }
}
