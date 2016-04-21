<?php

use app\assets\AppAsset;
use yii\bootstrap\Nav;

$this->title = 'Wimbledon';
$this->params['breadcrumbs'][] = ['label' => 'Tennis', 'url' => ['tennis/index']];
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
                        'label' => 'AustraliaOpen',
                        'url' => ['tennis/australia-open'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'RolandGarros',
                        'url' => ['tennis/roland-garros'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'USOpen',
                        'url' => ['tennis/u-s-open'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'Wimbledon',
                        'url' => ['tennis/wimbledon'],
                        'visible' => Yii::$app->user->isGuest
                    ],
                ],
                'options' => ['class' => ' nav nav-pills nav-stacked'],
            ]);
            ?>
        </div>
    </div>
</div>
