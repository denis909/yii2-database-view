<?php

namespace denis909\yii;

use Yii;

trait DatabaseViewTrait
{

    public static function dropTable(string $tableName)
    {
        return SchemaHelper::dropDbView($tableName);
    }

    public static function tableName(bool $refresh = false)
    {
        assert(isset(static::$tableName), __CLASS__ . '::$tableName');

        $schema = Yii::$app->db->getTableSchema(static::$tableName, true);

        if ($schema && $refresh)
        {
            static::dropTable(static::$tableName);

            $schema = null;
        }

        if (!$schema)
        {
            static::createTable(static::$tableName);
        }

        return static::$tableName;
    }

}