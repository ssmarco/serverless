<?php

use App\Internal\ZeroDatabase;
use SilverStripe\Control\HTTPApplication;
use SilverStripe\Control\HTTPRequestBuilder;
use SilverStripe\Core\CoreKernel;
use SilverStripe\Core\DatabaselessKernel;
use SilverStripe\Core\Environment;
use SilverStripe\Core\Kernel;
use SilverStripe\ORM\DB;

// Find autoload.php
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require __DIR__ . '/../vendor/autoload.php';
} elseif (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
} else {
    header('HTTP/1.1 500 Internal Server Error');
    echo "autoload.php not found";
    exit(1);
}

// TODO: For testing purpose only, when you don't have access to environment variables or .env
// Environment::setEnv('SS_ENVIRONMENT_TYPE', Kernel::DEV);
// Environment::setEnv('SS_DATABASE_CLASS', 'ZeroDatabase'); // No database
// Environment::setEnv('SS_DATABASE_CLASS', 'SQLite3Database'); // SQLite 3
// Environment::setEnv('SS_DATABASE_NAME', 'SS_mysite');
// Environment::setEnv('SS_SQLITE_DATABASE_PATH', ':memory:');
// Environment::setEnv('SS_TRUSTED_PROXY_IPS', '*');

// Build request and detect flush
$request = HTTPRequestBuilder::createFromEnvironment();

// Default application
$kernel = new CoreKernel(BASE_PATH);

// TODO: For testing purpose only, when you don't have access to environment variables or .env
// $kernel->setEnvironment(Kernel::DEV);

// Instantiate application
$app = new HTTPApplication($kernel);

// Handle request
$response = $app->handle($request);
$response->output();
