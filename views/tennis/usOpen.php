<?php

use app\assets\AppAsset;

$this->title = 'USOpen';
$this->params['breadcrumbs'][] = ['label' => 'Tennis', 'url' => ['tennis/index'], 'title' => 'Tennis'];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/tennisNavbar.php'); ?>
    <?php $this->endContent(); ?>
</div>
