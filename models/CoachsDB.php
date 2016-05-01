<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 27/04/16
 * Time: 16:10
 */

namespace app\models;


use yii\db\ActiveRecord;

class CoachsDB extends ActiveRecord
{
    public static function tableName()
    {
        return 'coachs';
    }
}