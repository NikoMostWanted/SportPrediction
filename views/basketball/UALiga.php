<?php

use app\assets\AppAsset;

$this->title = 'UALiga';
$this->params['breadcrumbs'][] = ['label' => 'Basketball', 'url' => ['basketball/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/basketballNavbar.php'); ?>
    <?php $this->endContent(); ?>
</div>
