<?php

use app\assets\AppAsset;
use Yii\base;
use app\models\OutputImages;

$this->title = 'Liga1';
$this->params['breadcrumbs'][] = ['label' => 'Football', 'url' => ['football/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);

$path = Yii::$app->request->baseUrl;
$dir = $_SERVER['DOCUMENT_ROOT'].$path.'/images/france';
$dirLocal = $path.'/images/france/';
$imageObject = new OutputImages();
$all_pictures = $imageObject->outDirFile($dir);
?>
<div class="container" align="center">
    <?php foreach($all_pictures as $picture) { ?>
        <img src="<?=$dirLocal.$picture?>"/>
    <?php } ?>
</div>
