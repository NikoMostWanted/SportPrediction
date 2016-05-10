<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 23/03/16
 * Time: 22:48
 */

namespace app\controllers;

use app\models\APISite;
use Yii;
use yii\web\Controller;
use app\models\FuzzyAlgorithm;

class FootballController extends Controller
{

    public function actionLeagues($id, $caption)
    {
        $fixtures = APISite::api('http://api.football-data.org/v1/soccerseasons/'.$id.'/teams');
        $id_team = array();
        for($i = 0; $i < $fixtures->{'count'}; $i++)
        {
            $id_team[$i] = explode('/',$fixtures->{'teams'}[$i]->{'_links'}->{'self'}->{'href'})[5];
        }
        return $this->render('leagues', ['team'=>$fixtures, 'caption'=>$caption, 'id_team' => $id_team, 'id_league' => $id]);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionInfoClub($id, $league)
    {
        $teams = APISite::api('http://api.football-data.org/v1/teams/'.$id);
        $players = APISite::api('http://api.football-data.org/v1/teams/'.$id.'/players');
        $statistics = APISite::api('http://api.football-data.org/v1/soccerseasons/'.$league.'/leagueTable');
        $fixtures = APISite::api('http://api.football-data.org/v1/teams/'.$id.'/fixtures');
        return $this->render('infoClub',['teams' => $teams, 'players' => $players, 'statistics' => $statistics, 'fixtures' => $fixtures]);
    }

    public  function actionFuzzyAlgorithm()
    {
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