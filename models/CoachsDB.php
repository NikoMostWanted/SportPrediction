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

    public function getTeam()
    {
        return $this->hasMany(TeamsDB::className(),['id_coach' => 'id']);
    }
}