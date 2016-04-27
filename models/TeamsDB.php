<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 27/04/16
 * Time: 16:15
 */

namespace app\models;


use yii\db\ActiveRecord;

class TeamsDB extends ActiveRecord
{
    public static function tableName()
    {
        return 'teams';
    }

    public function getLeague()
    {
        return $this->hasOne(LeaguesDB::className(),['id' => 'id_nameLeague']);
    }
    
    public function getCoach()
    {
        return $this->hasOne(CoachsDB::className(),['id' => 'id_coach']);
    }

    public function getPresident()
    {
        return $this->hasOne(PresidentsDB::className(),['id' => 'id_president']);
    }

    public function getStatistic()
    {
        return $this->hasOne(StatisticsDB::className(),['id' => 'id_statistic']);
    }
}