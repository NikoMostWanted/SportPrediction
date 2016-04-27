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

    public function getTeam()
    {
        return $this->hasMany(TeamsDB::className(),['id_statistic' => 'id']);
    }
}