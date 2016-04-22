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
            'label' => 'Results',
            'url' => ['home/results'],
            'visible' => Yii::$app->user->isGuest
        ],
        [
            'label' => 'Sport news',
            'url' => ['home/sport-news'],
            'visible' => Yii::$app->user->isGuest
        ],
        [
            'label' => 'What is betting',
            'url' => ['home/what-is-betting'],
            'visible' => Yii::$app->user->isGuest
        ],
        [
            'label' => 'Types of bets',
            'url' => ['home/types-of-bets'],
            'visible' => Yii::$app->user->isGuest
        ],
        [
            'label' => 'EURO 2016',
            'url' => ['home/euro-2016'],
            'visible' => Yii::$app->user->isGuest
        ],
        [
            'label' => 'WORLD CUP 2018',
            'url' => ['home/world-cup-2018'],
            'visible' => Yii::$app->user->isGuest
        ],
    ],
    'options' => ['class' => ' nav  navbar-default nav-pills nav-stacked'],
]);
?>
<?php $this->endPage() ?>