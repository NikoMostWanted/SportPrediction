<?php

use app\assets\AppAsset;

$this->title = 'AustraliaOpen';
$this->params['breadcrumbs'][] = ['label' => 'Tennis', 'url' => ['tennis/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>