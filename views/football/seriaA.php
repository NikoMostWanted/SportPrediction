<?php

use app\assets\AppAsset;
use Yii\base;

$this->title = 'SeriaA';
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
        <?php foreach ($all_pictures as $picture) { ?>
            <img class="image-wrap" src="<?= $dirLocal . $picture ?>"/>
        <?php } ?>
    </div>
</div>
