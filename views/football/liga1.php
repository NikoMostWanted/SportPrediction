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
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-8 col-xs-12">
            <?php $this->beginContent('@app/views/layouts/footballNavbar.php'); ?>
            <?php $this->endContent(); ?>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 image-center">
            <?php $this->beginContent('@app/views/layouts/footballAlert.php'); ?>
            <?php $this->endContent(); ?>
            <?php foreach($all_pictures as $picture) { ?>
                <img class="image-wrap" src="<?=$dirLocal.$picture?>"/>
            <?php } ?>
        </div>
    </div>
</div>
