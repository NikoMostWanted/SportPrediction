<?php

use app\assets\AppAsset;

$this->title = 'Liga1';
$this->params['breadcrumbs'][] = ['label' => 'Football', 'url' => ['football/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);
?>