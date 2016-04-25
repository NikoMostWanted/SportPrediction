<?php
/**
 * Created by PhpStorm.
 * User: Neymar
 * Date: 24.03.2016
 * Time: 14:38
 */

use app\assets\AppAsset;

$this->title = 'Other';
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>
<div class="row">
    <?php $this->beginContent('@app/views/layouts/otherNavbar.php'); ?>
    <?php $this->endContent(); ?>
</div>

