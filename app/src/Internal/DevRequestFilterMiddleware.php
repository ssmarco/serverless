<?php

namespace App\Internal;

use ReflectionProperty;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Control\Middleware\HTTPMiddleware;

/**
 * TODO: This is optional and can be removed for your own project.
 * @see app/_config/internal.yml and SS_BYPASS_BUILD_DATABASE="1"
 * Created this class in order to bypass DataObject recording to the database
 * and to prevent browser and cli errors when running dev/build
 */
class DevRequestFilterMiddleware implements HTTPMiddleware
{

    /**
     * @inheritDoc
     */
    public function process(HTTPRequest $request, callable $delegate)
    {
        $getVars = $request->getVars();
        $attribute = new ReflectionProperty(get_class($request), 'getVars');
        $attribute->setAccessible(true);
        $attribute->setValue($request, $getVars + ['quiet' => '1', 'from_installer' => '1', 'dont_populate' => '1']);

        return $delegate($request);
    }
}
