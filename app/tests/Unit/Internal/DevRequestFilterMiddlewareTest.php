<?php

namespace App\Tests\Unit\Internal;

use App\Internal\DevRequestFilterMiddleware;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Dev\SapphireTest;

class DevRequestFilterMiddlewareTest extends SapphireTest
{

    public function testProcess(): void
    {
        $middleware = new DevRequestFilterMiddleware();
        $request = new HTTPRequest('GET', '/dev/build');

        $this->assertEmpty($request->getVars());

        // Callable here is just a mock function
        $middleware->process($request, function($requested) {
            return $requested;
        });

        $getVars = $request->getVars();
        $this->assertArrayHasKey('quiet', $getVars);
        $this->assertArrayHasKey('from_installer', $getVars);
        $this->assertArrayHasKey('dont_populate', $getVars);
    }

}
