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
}