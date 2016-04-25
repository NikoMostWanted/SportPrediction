<?php

use yii\bootstrap\Nav;

/* @var $this yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
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
<?php $this->endPage() ?>
