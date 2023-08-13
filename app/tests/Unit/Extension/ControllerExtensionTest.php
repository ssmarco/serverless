<?php

namespace App\Tests\Unit\Extension;

use App\Control\AppController;
use App\Extension\ControllerExtension;
use SilverStripe\Core\Config\Config;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\Dev\Debug;
use SilverStripe\Dev\SapphireTest;

class ControllerExtensionTest extends SapphireTest
{

    public function testGetMethodForAction(): void
    {
        $controller = Injector::inst()->get(AppController::class);
        $extension = new ControllerExtension();
        $extension->setOwner($controller);

        $allowedActions = Config::inst()->get(AppController::class, 'allowed_actions', Config::UNINHERITED);

        $this->assertContains('getting-started', $allowedActions);
        $this->assertEquals('gettingStarted', $extension->getMethodForAction('getting-started'));
        $this->assertContains('contact-us', $allowedActions);
        $this->assertEquals('contactUs', $extension->getMethodForAction('contact-us'));

        $this->assertNotContains('blog', $allowedActions);
        $this->assertEquals('', $extension->getMethodForAction('blog'));
    }

}
