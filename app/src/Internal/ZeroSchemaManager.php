<?php

namespace App\Internal;

use SilverStripe\ORM\Connect\DBSchemaManager;

/**
 * TODO: This is optional and can be removed for your own project.
 * Created this class in order to bypass DataObject recording to MySQL database.
 */
class ZeroSchemaManager extends DBSchemaManager
{

    public function schemaUpdate($callback)
    {
        // no-op
    }

    public function hasTable($tableName)
    {
        // no-op
    }

    public function IdColumn($asDbValue = false, $hasAutoIncPK = true)
    {
        // no-op
    }

    public function checkAndRepairTable($tableName)
    {
        // no-op
    }

    public function enumValuesForField($tableName, $fieldName)
    {
        // no-op
    }

    public function dbDataType($type)
    {
        // no-op
    }

    public function databaseList()
    {
        // no-op
    }

    public function databaseExists($name)
    {
        // no-op
    }

    public function createDatabase($name)
    {
        // no-op
    }

    public function dropDatabase($name)
    {
        // no-op
    }

    public function alterIndex($tableName, $indexName, $indexSpec)
    {
        // no-op
    }

    protected function indexKey($table, $index, $spec)
    {
        // no-op
    }

    public function indexList($table)
    {
        // no-op
    }

    public function tableList()
    {
        // no-op
    }

    public function createTable($table, $fields = null, $indexes = null, $options = null, $advancedOptions = null)
    {
        // no-op
    }

    public function alterTable(
        $table,
        $newFields = null,
        $newIndexes = null,
        $alteredFields = null,
        $alteredIndexes = null,
        $alteredOptions = null,
        $advancedOptions = null
    ) {
        // no-op
    }

    public function renameTable($oldTableName, $newTableName)
    {
        // no-op
    }

    public function createField($table, $field, $spec)
    {
        // no-op
    }

    public function renameField($tableName, $oldName, $newName)
    {
        // no-op
    }

    public function fieldList($table)
    {
        // no-op
    }

    public function boolean($values)
    {
        // no-op
    }

    public function date($values)
    {
        // no-op
    }

    public function decimal($values)
    {
        // no-op
    }

    public function enum($values)
    {
        // no-op
    }

    public function set($values)
    {
        // no-op
    }

    public function float($values)
    {
        // no-op
    }

    public function int($values)
    {
        // no-op
    }

    public function datetime($values)
    {
        // no-op
    }

    public function text($values)
    {
        // no-op
    }

    public function time($values)
    {
        // no-op
    }

    public function varchar($values)
    {
        // no-op
    }

    public function year($values)
    {
        // no-op
    }
}
