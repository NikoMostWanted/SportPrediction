<?php

use app\assets\AppAsset;

$this->title = 'Tennis';
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/tennisNavbar.php'); ?>
    <?php $this->endContent(); ?>
</div>
