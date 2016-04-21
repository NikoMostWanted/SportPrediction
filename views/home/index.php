<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use app\assets\AppAsset;
use Yii\base;
use app\models\OutputImages;

AppAsset::register($this);

$path = Yii::$app->request->baseUrl;
$dir = $_SERVER['DOCUMENT_ROOT'].$path.'/images/carousel';
$dirLocal = $path.'/images/carousel/';
$imageObject = new OutputImages();
$all_pictures = $imageObject->outDirFile($dir);

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
                    'options' => ['class' => ' nav  navbar-default nav-pills nav-stacked'],
                ]);
                ?>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 carousel-size">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        <?php for($i = 1 ; $i < count($all_pictures); $i++) { ?>
                            <li data-target="#carousel" data-slide-to="<?=$i?>"></li>
                        <?php } ?>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active image-size">
                            <img  src="<?=$dirLocal.$all_pictures[0]?>" alt="">
                        </div>
                        <?php array_shift($all_pictures); ?>
                        <?php foreach($all_pictures as $picture) { ?>
                            <div class="item image-size">
                                <img  src="<?=$dirLocal.$picture?>" alt="">
                            </div>
                        <?php } ?>
                    </div>
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
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>