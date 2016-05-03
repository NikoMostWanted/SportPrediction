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
}