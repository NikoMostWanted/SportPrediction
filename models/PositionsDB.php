<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 02/05/16
 * Time: 00:29
 */

namespace app\models;


use yii\db\ActiveRecord;

class PositionsDB extends ActiveRecord
{
    public static function tableName()
    {
        return 'positions';
    }
}