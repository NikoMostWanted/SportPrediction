<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use app\assets\AppAsset;

$this->title = 'Football';
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
            </div>
        </div>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>