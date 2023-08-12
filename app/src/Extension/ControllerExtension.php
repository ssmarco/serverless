<?php

namespace App\Extension;

use SilverStripe\Control\Controller;
use SilverStripe\Core\Config\Config;
use SilverStripe\Core\Extension;

/**
 * An Extension allows for adding additional functionality to a class or
 * modifying existing functionality without the hassle of creating a subclass
 * This blows my mind when adding a method to existing class that we don't own or
 * written and then calling these functions as if they belong to the original class methods.
 * In this case, we apply this extension to SilverStripe\Control\Controller and since AppController
 * is a child class, this automatically inherits the extension method from the parent as well. Awesome!
 * @see AppController where it calls like, $this->getMethodForAction($action)
 */
class ControllerExtension extends Extension
{

    public function getMethodForAction(string $action): string
    {
        /** @var Controller $owner */
        $owner = $this->getOwner();
        $allowedActions = (array) $owner->config()->get('allowed_actions', Config::UNINHERITED);

        if (!$action || !$allowedActions || !in_array($action, $allowedActions)) {
            return '';
        }

        $hyphens = explode('-', $action);
        $first = array_shift($hyphens);
        $hyphens = array_map('ucfirst', $hyphens);
        $method = sprintf('%s%s', $first, implode('', $hyphens));

        return $owner->hasMethod($method) ? $method : '';
    }

}
