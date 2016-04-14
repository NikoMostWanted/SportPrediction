<?php

use app\assets\AppAsset;

$this->title = 'SpainLiga';
$this->params['breadcrumbs'][] = ['label' => 'Basketball', 'url' => ['basketball/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>