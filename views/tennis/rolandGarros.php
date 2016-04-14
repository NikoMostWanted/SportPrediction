<?php

use app\assets\AppAsset;

$this->title = 'RolandGarros';
$this->params['breadcrumbs'][] = ['label' => 'Tennis', 'url' => ['tennis/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>