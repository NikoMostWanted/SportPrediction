<?php

use app\assets\AppAsset;
use Yii\base;
use app\models\OutputImages;
use yii\bootstrap\Nav;
use yii\bootstrap\Alert;

$this->title = 'LaLiga';
$this->params['breadcrumbs'][] = ['label' => 'Football', 'url' => ['football/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);

$path = Yii::$app->request->baseUrl;
$dir = $_SERVER['DOCUMENT_ROOT'].$path.'/images/spain';
$dirLocal = $path.'/images/spain/';
$imageObject = new OutputImages();
$all_pictures = $imageObject->outDirFile($dir);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-8 col-xs-12">
            <?php
            echo Nav::widget([
                'items' => [
                    [
                        'label' => 'Barclays',
                        'url' => ['football/barclays'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'BundesLiga',
                        'url' => ['football/bundes-liga'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'LaLiga',
                        'url' => ['football/la-liga'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'Liga1',
                        'url' => ['football/liga1'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'SeriaA',
                        'url' => ['football/seria-a'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'UkranianLigue',
                        'url' => ['football/ukranian-ligue'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                ],
                'options' => ['class' => ' nav navbar-default nav-pills nav-stacked'],
            ]);
            ?>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 image-center">
            <?php
            echo Alert::widget([
                'options' => [
                    'class' => 'alert-info'
                ],
                'body' => '<b>Click</b> on the <b>logo</b> for more information about the team &darr;'
            ]); ?>
            <?php foreach($all_pictures as $picture) { ?>
                <img class="image-wrap" src="<?=$dirLocal.$picture?>"/>
            <?php } ?>
        </div>
    </div>
</div>

