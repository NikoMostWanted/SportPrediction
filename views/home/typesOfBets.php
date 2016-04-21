<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use Yii\base;

$this->title = 'Types of bets';
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-8 col-xs-12">
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
                    'options' => ['class' => ' nav navbar-default nav-pills nav-stacked'],
                ]);
                ?>
            </div>

        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>