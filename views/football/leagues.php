<?php

use app\assets\AppAsset;
use Yii\base;
use yii\helpers\Html;

$this->title = $caption;
$this->params['breadcrumbs'][] = ['label' => 'Football', 'url' => ['football/index'], 'title' => 'Football'];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/footballNavbar.php'); ?>
    <?php $this->endContent(); ?>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 image-center">
        <?php $this->beginContent('@app/views/layouts/footballAlert.php'); ?>
        <?php $this->endContent(); ?>
        <?php for($i = 0; $i < $team->{'count'}; $i++) { ?>
            <?php echo Html::a("<img alt='".$team->{'teams'}[$i]->{'name'}."' style='width:40px; height:40px;' class='image-wrap' src='".$team->{'teams'}[$i]->{'crestUrl'}."'/>", ['football/info-club', 'id' => $id_team[$i], 'league' => $id_league, 'caption' => $caption ],['title'=>$team->{'teams'}[$i]->{'name'}]) ?>
        <?php } ?>
    </div>
</div>