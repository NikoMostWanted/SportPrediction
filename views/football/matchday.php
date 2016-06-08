<?php

use app\assets\AppAsset;
use Yii\base;
use yii\helpers\Html;

AppAsset::register($this);

?>

<div class="container">
    <div class="row">
        <div class="col-lg-2">
            <img src="http://upload.wikimedia.org/wikipedia/commons/c/c5/Logo_FC_Bayern_München.svg" style="height: 200px; width: 200px;">
        </div>
        <div class="col-lg-8">
            <center><h1>FC Bayern München - Borussia Dortmund</h1></center>
        </div>
        <div class="col-lg-2">
            <img src="http://upload.wikimedia.org/wikipedia/commons/6/67/Borussia_Dortmund_logo.svg" style="height: 200px; width: 200px;">
        </div>
    </div>
    <div class="row">
        <div class="text-center"><h2>Time: 2016-07-12 13:30</h2></div>
    </div>
    <div class="row">
        <div class="text-center"><h2>Stadium: Allianz Arena</h2></div>
    </div>
   <div class="row">
       <div class="text-center">
           <br>
           <div class="btn btn-primary"><h1>Prognosis</h1></div>
       </div>
   </div>
</div>
