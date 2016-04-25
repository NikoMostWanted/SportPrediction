<?php

use app\assets\AppAsset;

$this->title = 'Football';
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/footballNavbar.php'); ?>
    <?php $this->endContent(); ?>
</div>
