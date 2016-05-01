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
use app\models\OutputImages;

class FootballController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLaLiga()
    {
        $outImg = new OutputImages();
        $data = $outImg->outImages('/images/spain');
        return $this->render('laLiga',['dirLocal'=>$data['dirLocal'], 'all_pictures'=>$data['all_pictures'], 'name_pictures'=>$data['name_pictures']]);
    }

    public function actionBundesLiga()
    {
        $outImg = new OutputImages();
        $data = $outImg->outImages('/images/germany');
        return $this->render('bundesLiga',['dirLocal'=>$data['dirLocal'], 'all_pictures'=>$data['all_pictures'], 'name_pictures'=>$data['name_pictures']]);
    }

    public function actionSeriaA()
    {
        $outImg = new OutputImages();
        $data = $outImg->outImages('/images/italy');
        return $this->render('seriaA',['dirLocal'=>$data['dirLocal'], 'all_pictures'=>$data['all_pictures'], 'name_pictures'=>$data['name_pictures']]);
    }

    public function actionBarclays()
    {
        $outImg = new OutputImages();
        $data = $outImg->outImages('/images/apl');
        return $this->render('barclays',['dirLocal'=>$data['dirLocal'], 'all_pictures'=>$data['all_pictures'], 'name_pictures'=>$data['name_pictures']]);
    }

    public function actionLiga1()
    {
        $outImg = new OutputImages();
        $data = $outImg->outImages('/images/france');
        return $this->render('liga1',['dirLocal'=>$data['dirLocal'], 'all_pictures'=>$data['all_pictures'], 'name_pictures'=>$data['name_pictures']]);
    }

    public function actionUkranianLigue()
    {
        $outImg = new OutputImages();
        $data = $outImg->outImages('/images/upl');
        return $this->render('ukranianLigue',['dirLocal'=>$data['dirLocal'], 'all_pictures'=>$data['all_pictures'], 'name_pictures'=>$data['name_pictures']]);
    }

    public function actionInfoClub($name)
    {
        $team = TeamsDB::find()
            ->where(['like','teams.nameTeam',$name])
            ->one();
        $coach_name = $team->coach[0]->name.' '.$team->coach[0]->surname;
        $president_name = $team->president->name.' '.$team->president->surname;
        $data = [
            'icon'=>$team->icon,
            'nameTeam'=>$team->nameTeam,
            'coach'=>$coach_name,
            'foundationYear'=>$team->foundationYear,
            'field'=>$team->field,
            'president'=>$president_name,
            'website'=>$team->website,
            'nameLeague'=>$team->league[0]->nameLeague
        ];
        return $this->render('infoClub',['data' => $data]);
    }
}