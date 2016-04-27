<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 27/04/16
 * Time: 16:12
 */

namespace app\models;


use yii\db\ActiveRecord;

class PresidentsDB extends ActiveRecord
{
    public static function tableName()
    {
        return 'presidents';
    }

    public function getTeam()
    {
        return $this->hasMany(TeamsDB::className(),['id_president' => 'id']);
    }
}