<?php

namespace App\Control;

use SilverStripe\Control\Controller;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Control\HTTPResponse;
use SilverStripe\Control\HTTPResponse_Exception;

class AppController extends Controller
{

    private static array $allowed_actions = [
        'getting-started',
    ];

    private static array $url_handlers = [
        '$Action//$ID/$OtherID' => 'index',
    ];

    protected string $title = 'Silverstripe Serverless';

    protected string $summary = 'Recipe Core components with the intention of running a lighter framework to build '
        . 'and run your Silverstripe Serverless Applications';

    /**
     * Default Route handler
     *
     * @throws HTTPResponse_Exception - invoked by httpError()
     */
    public function index(HTTPRequest $request): HTTPResponse
    {
        $index = 'index';
        $urlParams = $this->getURLParams();
        $action = $urlParams['Action'] ?? $index;

        if ($action === $index) {
            return $this->getResponse()
                ->setBody($this->getViewer($index)->process($this));
        }

        $method = $this->getMethodForAction($action);

        return $method ? $this->$method($request) : $this->httpError(404, 'Not found');
    }

    /**
     * Route URL handler for getting-started segment
     */
    public function gettingStarted(HTTPRequest $request): HTTPResponse
    {
        $this->title = 'Getting Started';
        $this->summary = '';

        return $this->getResponse()
            ->setBody($this->getViewer('gettingStarted')->process($this));
    }

    /**
     * Route URL handler for contact segment
     */
    public function contactUs(HTTPRequest $request): HTTPResponse
    {
        $this->title = '';
        $this->summary = '';

        return $this->getResponse()
            ->setBody($this->getViewer('contact')->process($this));
    }

    /**
     * Template helper method used for $Title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Template helper method used for $Summary
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

}
