<?php

use app\assets\AppAsset;

$this->title = 'EuroLiga';
$this->params['breadcrumbs'][] = ['label' => 'Basketball', 'url' => ['basketball/index'], 'title' => 'Basketball'];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/basketballNavbar.php'); ?>
    <?php $this->endContent(); ?>
</div>

