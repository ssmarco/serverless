<?php

namespace App\Tests\Functional;

use App\Control\AppController;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Core\Config\Config;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\Dev\FunctionalTest;

class AppControllerTest extends FunctionalTest
{

    public function testHomepage(): void
    {
        $response = $this->get('/');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertStringContainsString('Recipe Core components', $response->getBody());
        $this->assertStringContainsString('Where to deploy?', $response->getBody());
    }

    public function testGettingStarted(): void
    {
        $response = $this->get('/getting-started');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertStringContainsString('Getting Started', $response->getBody());
        $this->assertStringContainsString('To get started with the SilverStripe framework', $response->getBody());
    }

    public function testContactUs(): void
    {
        $response = $this->get('/contact-us');

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertStringContainsString('Contact Us', $response->getBody());
    }

    public function testConfigAllowedActions(): void
    {
        $allowedActions = Config::inst()->get(AppController::class, 'allowed_actions', Config::UNINHERITED);

        $this->assertEquals(['getting-started', 'contact-us'], $allowedActions);
    }

    public function testGetTitle(): void
    {
        /** @var AppController $controller */
        $controller = Injector::inst()->get(AppController::class);

        $this->assertEquals('Silverstripe Serverless', $controller->getTitle());

        $controller->gettingStarted(new HTTPRequest('GET', 'getting-started'));

        $this->assertEquals('Getting Started', $controller->getTitle());
    }

    public function testGetSummary(): void
    {
        /** @var AppController $controller */
        $controller = Injector::inst()->get(AppController::class);

        $this->assertEquals(
            'Recipe Core components with the intention of running a lighter framework to build '
            . 'and run your Silverstripe Serverless Applications',
            $controller->getSummary()
        );

        $controller->gettingStarted(new HTTPRequest('GET', 'getting-started'));

        $this->assertEquals('', $controller->getSummary());
    }


}
