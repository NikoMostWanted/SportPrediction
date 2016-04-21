<?php

use app\assets\AppAsset;
use yii\bootstrap\Nav;

$this->title = 'SpainLiga';
$this->params['breadcrumbs'][] = ['label' => 'Basketball', 'url' => ['basketball/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-8 col-xs-12">
            <?php
            echo Nav::widget([
                'items' => [
                    [
                        'label' => 'EuroLiga',
                        'url' => ['basketball/euro-liga'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'NBA',
                        'url' => ['basketball/n-b-a'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'SpainLiga',
                        'url' => ['basketball/spain-liga'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'UALiga',
                        'url' => ['basketball/u-a-liga'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                ],
                'options' => ['class' => ' nav nav-pills nav-stacked'],
            ]);
            ?>
        </div>
    </div>
</div>
