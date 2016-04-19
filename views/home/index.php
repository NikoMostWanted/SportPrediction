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
    <div class="container" align="center" data-ride="carousel" style="height: 300px;width: 500px">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img style="width: 500px;height: 300px" src="../web/css/images/1.jpg" alt="">
                </div>
                <div class="item">
                    <img style="width: 500px;height: 300px" src="../web/css/images/2.jpg" alt="">
                </div>
                <div class="item">
                    <img style="width: 500px;height: 300px" src="../web/css/images/3.jpg" alt="">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>