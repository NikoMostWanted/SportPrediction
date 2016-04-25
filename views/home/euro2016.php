<?php
use app\assets\AppAsset;
use Yii\base;

$this->title = 'EURO 2016';
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/homeNavbar.php'); ?>
    <?php $this->endContent(); ?>
</div>