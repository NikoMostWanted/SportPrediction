<?php

use app\assets\AppAsset;

$this->title = 'RolandGarros';
$this->params['breadcrumbs'][] = ['label' => 'Tennis', 'url' => ['tennis/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-8 col-xs-12">
            <?php $this->beginContent('@app/views/layouts/tennisNavbar.php'); ?>
            <?php $this->endContent(); ?>
        </div>
    </div>
</div>
