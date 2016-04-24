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
<?php $this->endPage() ?>
