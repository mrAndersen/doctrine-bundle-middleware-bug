<?php

declare(strict_types=1);

namespace App\Doctrine\Middleware;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Driver;
use Doctrine\DBAL\Driver\Middleware;

class AppLoggingMiddleware implements Middleware
{
    public function __construct(Connection $connection)
    {
    }

    public function wrap(Driver $driver): Driver
    {
        echo("[!!!!!!] Never called [!!!!!!]".PHP_EOL);

        return $driver;
    }
}
