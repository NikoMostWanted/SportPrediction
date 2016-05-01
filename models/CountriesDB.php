<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 02/05/16
 * Time: 00:28
 */

namespace app\models;


use yii\db\ActiveRecord;

class CountriesDB extends ActiveRecord
{
    public static function tableName()
    {
        return 'countries';
    }
}