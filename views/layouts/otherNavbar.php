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
            'label' => 'Contacts',
            'url' => ['other/contacts'],
            'visible' => Yii::$app->user->isGuest
        ],
        [
            'label' => 'Experts',
            'url' => ['other/experts'],
            'visible' => Yii::$app->user->isGuest
        ],
        [
            'label' => 'Information',
            'url' => ['other/information'],
            'visible' => Yii::$app->user->isGuest
        ],
        [
            'label' => 'Statistics',
            'url' => ['other/statistics'],
            'visible' => Yii::$app->user->isGuest
        ],

    ],
    'options' => ['class' => ' nav navbar-default nav-pills nav-stacked'],
]);
?>

<?php $this->endPage() ?>
