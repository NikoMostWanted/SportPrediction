<?php
/**
 * Created by PhpStorm.
 * User: Neymar
 * Date: 24.03.2016
 * Time: 14:23
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\RotshteyinAlgorithm;

class BasketballController extends  Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionNBA()
    {
        return $this->render('NBA');
    }

    public function actionSpainLiga()
    {
        return $this->render('SpainLiga');
    }

    public function actionEuroLiga()
    {
        return $this->render('EuroLiga');
    }

    public function actionUALiga()
    {
        return $this->render('UALiga');
    }

    public  function actionRotsteyinAlgorithm()
    {
        $number_of_goals = array(109, 143, 161, 136, 161, 163, 213, 220, 162, 194, 164, 196, 245, 252, 240, 225);
        $object = new RotshteyinAlgorithm();
        $object->rules($number_of_goals);
    }
}