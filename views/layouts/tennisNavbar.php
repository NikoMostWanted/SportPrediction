<?php

use yii\bootstrap\Nav;

/* @var $this yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
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
                    'options' => ['class' => ' nav navbar-default nav-pills nav-stacked'],
                ]);
                ?>
<?php $this->endPage() ?>
