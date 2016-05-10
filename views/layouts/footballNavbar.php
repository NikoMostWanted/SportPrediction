<?php

use yii\bootstrap\Nav;

/* @var $this yii\web\View */
/* @var $content string */

$uri = 'http://api.football-data.org/v1/soccerseasons/?season=2015';
$reqPrefs['http']['method'] = 'GET';
$reqPrefs['http']['header'] = 'X-Auth-Token: 7c6ad7dd16b341499df9be2f9dbe59e1';
$stream_context = stream_context_create($reqPrefs);
$response = file_get_contents($uri, false, $stream_context);
$fixtures = json_decode($response);

?>
<?php $this->beginPage() ?>
<div class="col-lg-2 col-md-2 col-sm-8 col-xs-12">

    <?php for($i = 0; $i < count($fixtures); $i++) { ?>
        <?php
        echo Nav::widget([
            'items' => [
                [
                    'label' => $fixtures[$i]->{'caption'},
                    'url' => ['football/leagues','id'=>$fixtures[$i]->{'id'}, 'caption'=>$fixtures[$i]->{'caption'}],
                    'visible' => Yii::$app->user->isGuest
                ],
            ],
            'options' => ['class' => ' nav navbar-default nav-pills nav-stacked'],
        ]);
        ?>
    <?php } ?>

</div>
<?php $this->endPage() ?>
