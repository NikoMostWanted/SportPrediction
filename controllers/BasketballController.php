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
}