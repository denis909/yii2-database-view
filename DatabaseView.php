<?php

namespace denis909\yii;

abstract class DatabaseView extends \yii\db\ActiveRecord
{

    use DatabaseViewTrait;

    public static $tableName;

    public static abstract function createTable(string $tableName);

}