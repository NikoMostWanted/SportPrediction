<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 24/03/16
 * Time: 13:05
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;


class TennisController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAustraliaOpen()
    {
        return $this->render('australiaOpen');
    }

    public function actionWimbledon()
    {
        return $this->render('wimbledon');
    }

    public function actionRolandGarros()
    {
        return $this->render('rolandGarros');
    }

    public function actionUSOpen()
    {
        return $this->render('usOpen');
    }
}