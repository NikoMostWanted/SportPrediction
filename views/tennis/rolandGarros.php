<?php

use app\assets\AppAsset;

$this->title = 'RolandGarros';
$this->params['breadcrumbs'][] = ['label' => 'Tennis', 'url' => ['tennis/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/tennisNavbar.php'); ?>
    <?php $this->endContent(); ?>
</div>
