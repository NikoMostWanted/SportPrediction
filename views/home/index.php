<?php
use yii\helpers\Html;
use yii\bootstrap\Carousel;
use yii\bootstrap\Nav;
use app\assets\AppAsset;


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
    <div class="layer1">
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
            'options' => ['class' => ' nav nav-pills nav-stacked'],
        ]);
        ?>
    </div>
    <div class="container" align="center">
        <?php
        echo Carousel::widget ( [
            'items' => [
                [
                    'content' => '<img style="width: 500px; height: 325px" src="../web/css/images/1.jpg"/>',
                    'caption' => '<h2>Football</h2><p>First slide</p>',
                    'options' => [ ]
                ],
                [
                    'content' => '<img style="width: 500px; height: 325px" src="../web/css/images/2.jpg"/>',
                    'caption' => '<h2>Tennis</h2><p>Second slide</p>',
                    'options' => []
                ],
                [
                    'content' => '<img style="width: 500px; height: 325px" src="../web/css/images/3.jpg"/>',
                    'caption' => '<h2>Basketball</h2><p>Third slide</p>',
                    'options' => []
                ]
            ],
            'options' => [
                'style' => 'width:500px;', // Задаем ширину контейнера
            ]
        ]);
        ?>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>