<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use app\assets\AppAsset;

$this->title = 'Tennis';
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
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>