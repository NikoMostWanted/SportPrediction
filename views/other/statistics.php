<?php
/**
 * Created by PhpStorm.
 * User: Neymar
 * Date: 24.03.2016
 * Time: 14:41
 */

use app\assets\AppAsset;

$this->title = 'Statistics';
$this->params['breadcrumbs'][] = ['label' => 'Other', 'url' => ['other/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/otherNavbar.php'); ?>
    <?php $this->endContent(); ?>
</div>
