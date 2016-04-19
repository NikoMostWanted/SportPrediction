<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 24/03/16
 * Time: 12:48
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public  function actionResults()
    {
        return $this->render('results');
    }

    public function actionSportNews()
    {
        return $this->render('sportNews');
    }

    public function actionWhatIsBetting()
    {
        return $this->render('whatIsBetting');
    }

    public function actionTypesOfBets()
    {
        return $this->render('typesOfBets');
    }

    public function actionEuro2016()
    {
        return $this->render('euro2016');
    }

    public function actionWorldCup2018()
    {
        return $this->render('worldCup2018');
    }
}