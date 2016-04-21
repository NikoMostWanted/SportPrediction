<?php

use app\assets\AppAsset;
use Yii\base;
use app\models\OutputImages;
use yii\bootstrap\Nav;

$this->title = 'Liga1';
$this->params['breadcrumbs'][] = ['label' => 'Football', 'url' => ['football/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);

$path = Yii::$app->request->baseUrl;
$dir = $_SERVER['DOCUMENT_ROOT'].$path.'/images/france';
$dirLocal = $path.'/images/france/';
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
                'options' => ['class' => ' nav nav-pills nav-stacked'],
            ]);
            ?>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
            <?php foreach($all_pictures as $picture) { ?>
                <img src="<?=$dirLocal.$picture?>"/>
            <?php } ?>
        </div>
    </div>
</div>
