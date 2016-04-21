<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use app\assets\AppAsset;

$this->title = 'Basketball';
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
        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
