<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 23/03/16
 * Time: 22:48
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class FootballController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLaLiga()
    {
        return $this->render('laLiga');
    }

    public function actionBundesLiga()
    {
        return $this->render('bundesLiga');
    }

    public function actionSeriaA()
    {
        return $this->render('seriaA');
    }

    public function actionBarclays()
    {
        return $this->render('barclays');
    }

    public function actionLiga1()
    {
        return $this->render('liga1');
    }

    public function actionUkranianLigue()
    {
        return $this->render('ukranianLigue');
    }
}