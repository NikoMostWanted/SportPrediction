<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 27/04/16
 * Time: 16:11
 */

namespace app\models;


use yii\db\ActiveRecord;

class LeaguesDB extends ActiveRecord
{
    public static function tableName()
    {
        return 'leagues';
    }

    public function getTeam()
    {
        return $this->hasMany(TeamsDB::className(),['id_nameLeague' => 'id']);
    }
}