<?php

namespace App\Internal;

use SilverStripe\ORM\Connect\DBConnector;

class ZeroConnector extends DBConnector
{

    /**
     * @inheritDoc
     */
    public function connect($parameters, $selectDB = false)
    {
        // TODO: Implement connect() method.
    }

    /**
     * @inheritDoc
     */
    public function getVersion()
    {
        // TODO: Implement getVersion() method.
    }

    /**
     * @inheritDoc
     */
    public function escapeString($value)
    {
        // TODO: Implement escapeString() method.
    }

    /**
     * @inheritDoc
     */
    public function quoteString($value)
    {
        // TODO: Implement quoteString() method.
    }

    /**
     * @inheritDoc
     */
    public function query($sql, $errorLevel = E_USER_ERROR)
    {
        // TODO: Implement query() method.
    }

    /**
     * @inheritDoc
     */
    public function preparedQuery($sql, $parameters, $errorLevel = E_USER_ERROR)
    {
        // TODO: Implement preparedQuery() method.
    }

    /**
     * @inheritDoc
     */
    public function selectDatabase($name)
    {
        // TODO: Implement selectDatabase() method.
    }

    /**
     * @inheritDoc
     */
    public function getSelectedDatabase()
    {
        // TODO: Implement getSelectedDatabase() method.
    }

    /**
     * @inheritDoc
     */
    public function unloadDatabase()
    {
        // TODO: Implement unloadDatabase() method.
    }

    /**
     * @inheritDoc
     */
    public function getLastError()
    {
        // TODO: Implement getLastError() method.
    }

    /**
     * @inheritDoc
     */
    public function getGeneratedID($table)
    {
        // TODO: Implement getGeneratedID() method.
    }

    /**
     * @inheritDoc
     */
    public function affectedRows()
    {
        // TODO: Implement affectedRows() method.
    }

    /**
     * @inheritDoc
     */
    public function isActive()
    {
        // TODO: Implement isActive() method.
    }
}
