<?php

use app\assets\AppAsset;
use Yii\base;
use yii\helpers\Html;

$this->title = $team[0]->league[0]->nameLeague;
$this->params['breadcrumbs'][] = ['label' => 'Football', 'url' => ['football/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/footballNavbar.php'); ?>
    <?php $this->endContent(); ?>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 image-center">
        <?php $this->beginContent('@app/views/layouts/footballAlert.php'); ?>
        <?php $this->endContent(); ?>
        <?php for($i = 0; $i< count($team); $i++) { ?>
            <?php echo Html::a("<img class='image-wrap' src='".Yii::$app->request->baseUrl.$team[$i]->icon."'/>", ['football/info-club', 'club'=>$team[$i]->nameTeam, 'league'=>$team[0]->league[0]->nameLeague]) ?>
        <?php } ?>
    </div>
</div>