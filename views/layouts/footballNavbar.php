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
<?php $this->endPage() ?>
