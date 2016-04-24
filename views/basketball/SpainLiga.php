<?php

use app\assets\AppAsset;

$this->title = 'SpainLiga';
$this->params['breadcrumbs'][] = ['label' => 'Basketball', 'url' => ['basketball/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-8 col-xs-12">
            <?php $this->beginContent('@app/views/layouts/basketballNavbar.php'); ?>
            <?php $this->endContent(); ?>
        </div>
    </div>
</div>
