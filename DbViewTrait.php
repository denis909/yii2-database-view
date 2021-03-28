<?php

namespace denis909\yii;

trait DbViewTrait
{

    public static function createDbView(string $tableName, string $sql)
    {
        $sql = 'CREATE VIEW ' . $tableName . ' AS ' . $sql;

        return Yii::$app->db->createCommand($sql)->execute();
    }

    public static function dropDbView(string $tableName)
    {
        $sql = 'DROP VIEW ' . $tableName;

        return Yii::$app->db->createCommand($sql)->execute();
    }
    
}