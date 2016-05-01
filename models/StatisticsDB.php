<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 27/04/16
 * Time: 16:13
 */

namespace app\models;


use yii\db\ActiveRecord;

class StatisticsDB extends ActiveRecord
{
    public static function tableName()
    {
        return 'statistics';
    }
}