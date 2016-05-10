<?php

use yii\bootstrap\Nav;

/* @var $this yii\web\View */
/* @var $content string */

$fixtures = \app\models\APISite::api('http://api.football-data.org/v1/soccerseasons/?season=2015');

?>
<?php $this->beginPage() ?>
<div class="col-lg-2 col-md-2 col-sm-8 col-xs-12">

    <?php
    echo Nav::widget([
        'items' => [
            [
                'label' => 'Bundesliga',
                'url' => ['football/leagues', 'id' => $fixtures[0]->{'id'}, 'caption' => 'Bundesliga'],
                'visible' => Yii::$app->user->isGuest
            ],
            [
                'label' => 'Ligue 1',
                'url' => ['football/leagues', 'id' => $fixtures[2]->{'id'}, 'caption' => 'Ligue 1'],
                'visible' => Yii::$app->user->isGuest
            ],
            [
                'label' => 'Premier League',
                'url' => ['football/leagues', 'id' => $fixtures[4]->{'id'}, 'caption' => 'Premier League'],
                'visible' => Yii::$app->user->isGuest
            ],
            [
                'label' => 'Primera Division',
                'url' => ['football/leagues', 'id' => $fixtures[5]->{'id'}, 'caption' => 'Primera Division'],
                'visible' => Yii::$app->user->isGuest
            ],
            [
                'label' => 'Serie A',
                'url' => ['football/leagues', 'id' => $fixtures[7]->{'id'}, 'caption' => 'Serie A'],
                'visible' => Yii::$app->user->isGuest
            ],
            [
                'label' => 'Primeira Liga',
                'url' => ['football/leagues', 'id' => $fixtures[8]->{'id'}, 'caption' => 'Primeira Liga'],
                'visible' => Yii::$app->user->isGuest
            ],
        ],
        'options' => ['class' => ' nav navbar-default nav-pills nav-stacked'],
    ]);
    ?>

</div>
<?php $this->endPage() ?>
