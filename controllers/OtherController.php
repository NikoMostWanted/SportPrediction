<?php
/**
 * Created by PhpStorm.
 * User: Neymar
 * Date: 24.03.2016
 * Time: 14:35
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;

class OtherController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionStatistics()
    {
        return $this->render('statistics');
    }

    public function actionExperts()
    {
        return $this->render('experts');
    }

    public function actionContacts()
    {
        return $this->render('contacts');
    }

    public function actionInformation()
    {
        return $this->render('information');
    }
}