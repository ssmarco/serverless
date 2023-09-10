<?php

namespace App\Extension;

use SilverStripe\Control\Controller;
use SilverStripe\Core\Extension;
use SilverStripe\Dev\Debug;

class DatabaseAdminExtension extends Extension
{

    public function onBeforeBuild(bool &$quiet, bool &$populate, bool $testMode): void
    {
        $quiet = true;
        $populate = false;
    }

    public function onAfterBuild(bool $quiet, bool $populate, bool $testMode): void
    {
       Debug::message('$quiet: ' . json_encode($quiet));
       Debug::message('$populate: ' . json_encode($populate));

       $request = Controller::curr()->getRequest();
       Debug::message(json_encode($request->getVars()));
    }

}
