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
}