<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 23/03/16
 * Time: 22:48
 */

namespace app\controllers;

use app\models\TeamsDB;
use Yii;
use yii\web\Controller;
use app\models\FuzzyAlgorithm;

class FootballController extends Controller
{

    public function actionLeagues($league)
    {
        $team = TeamsDB::find()
            ->joinWith('league')
            ->where(['like','leagues.nameLeague',$league])
            ->all();
        return $this->render('leagues', ['team'=>$team]);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionInfoClub($club, $league)
    {
        $team_data = TeamsDB::find()
            ->where(['like','teams.nameTeam',$club])
            ->one();
        $statistics = TeamsDB::find()
            ->joinWith('league')
            ->joinWith('statistic')
            ->where(['like','leagues.nameLeague',$league])
            ->orderBy('statistics.place')
            ->all();
        return $this->render('infoClub',['team_data' => $team_data, 'statistics_club'=>$statistics]);
    }

    public  function actionFuzzyAlgorithm(){
        $object = new FuzzyAlgorithm();
        $c_array = array(array(2.55, 2.55, 2.55), array(4.25, 4.25, 4.25, 4.25), array(2.76, 2.76, 2.76, 2.76, 2.76), array(0.7, 0.7, 0.7, 0.7),
            array(8.5, 8.5, 8.5));
        $b_array = array(array(-6, 0, 6), array(-15, -5, 5, 15), array(-13, -6.5, 0, 6.5, 13), array(-2, -0.33, 1.33, 3),
            array(-20, 0, 20));
        $x_array = array(-2, 7, -8, 1.75, 17);
        $y_array = array(-3, -0.9, 0, 0.9, 3);
        echo $object->find_m_kv($x_array, $b_array, $c_array)."<br>";
        echo $object->find_m_v($x_array, $b_array, $c_array)."<br>";
        echo $object->find_m_n($x_array, $b_array, $c_array)."<br>";
        echo $object->find_m_p($x_array, $b_array, $c_array)."<br>";
        echo $object->find_m_p($x_array, $b_array, $c_array)."<br>";
    }
}