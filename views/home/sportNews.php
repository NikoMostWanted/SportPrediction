<?php

use app\assets\AppAsset;
use Yii\base;

$this->title = 'Sport news';
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/homeNavbar.php'); ?>
    <?php $this->endContent(); ?>
</div>
