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
        return $this->hasMany(LeaguesDB::className(),['id' => 'id_league'])->viaTable('league-team-Helper',['id_team' => 'id']);
    }
    
    public function getCoach()
    {
        return $this->hasMany(CoachsDB::className(),['id' => 'id_coach']);
    }

    public function getPresident()
    {
        return $this->hasOne(PresidentsDB::className(),['id' => 'id']);
    }

    public function getStatistic()
    {
        return $this->hasOne(StatisticsDB::className(),['id' => 'id']);
    }
}