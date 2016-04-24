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
    'options' => ['class' => ' nav navbar-default nav-pills nav-stacked'],
]);
?>

<?php $this->endPage() ?>
