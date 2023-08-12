<?php

namespace App\Internal;

use SilverStripe\ORM\Connect\NullDatabase;

/**
 * TODO: This is optional and can be removed for your own project.
 * Created this class in order to bypass DataObject recording to MySQL database.
 */
class ZeroDatabase extends NullDatabase
{

    protected $schemaManager = null;

    public function getSchemaManager()
    {
        return new ZeroSchemaManager();
    }

    public function query($sql, $errorLevel = E_USER_ERROR)
    {
        return new class {
            public function column($column = null)
            {
                return [];
            }
        };
    }

    public function getQueryBuilder()
    {
        return new class {
            public function buildSQL()
            {
                return null;
            }
        };
    }

    public function preparedQuery($sql, $parameters, $errorLevel = E_USER_ERROR)
    {
        return null;
    }
}
