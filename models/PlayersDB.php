<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 02/05/16
 * Time: 00:27
 */

namespace app\models;


use yii\db\ActiveRecord;

class PlayersDB extends ActiveRecord
{
    public static function tableName()
    {
        return 'players';
    }

    public function getPosition()
    {
        return $this->hasMany(PositionsDB::className(),['id' => 'id_position']);
    }

    public function getCountries()
    {
        return $this->hasMany(CountriesDB::className(),['id' => 'id_country'])->viaTable('country-player-Helper',['id_player' => 'id']);
    }

    public function getTeam()
    {
        return $this->hasMany(TeamsDB::className(),['id' => 'id_team'])->viaTable('player-team-Helper',['id_player' => 'id']);
    }
}