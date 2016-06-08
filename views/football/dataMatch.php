<?php

use app\assets\AppAsset;
use Yii\base;
use yii\helpers\Html;

AppAsset::register($this);

?>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <img src="http://upload.wikimedia.org/wikipedia/commons/c/c5/Logo_FC_Bayern_München.svg" style="height: 200px; width: 200px;">
        </div>
        <div class="col-lg-6">
            <center><h1>FC Bayern München - Borussia Dortmund</h1></center>
            <center><form>
                <fieldset class="form-group">
                    <label for="exampleInputEmail1">Place in team standings</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter place(First team - Last team)">
                </fieldset>
                    <fieldset class="form-group">
                        <label for="exampleInputEmail1">How many games last team missed a single ball (in a row)</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter games(First team - Last team)">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="exampleInputEmail1">How many recent games the team scored goals (in a row)</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter games(First team - Last team)">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="exampleInputEmail1">How many points recruited in the last five games</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter points(First team - Last team)">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="exampleInputEmail1">How many points recruited in the last five games</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter points(First team - Last team)">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="exampleInputEmail1">How many goals the team scored in the last five games</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter goals(First team - Last team)">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="exampleInputEmail1">How many goals in the team missed the past five games</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter goals(First team - Last team)">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="exampleInputEmail1">The importance of the match for the team
                            (0-9 points)</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter points(First team - Last team)">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="exampleInputEmail1">Leisure (how many days the team did not play)</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter days(First team - Last team)">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="exampleInputEmail1">Number of main players who miss match</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter number(First team - Last team)">
                    </fieldset>
                    <fieldset class="form-group">
                        <label for="exampleInputEmail1">Number of main players who miss match</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter number(First team - Last team)">
                    </fieldset>
                <button type="submit" class="btn btn-primary">Prognosis</button>
            </form>
            </center>
        </div>
        <div class="col-lg-3">
            <img src="http://upload.wikimedia.org/wikipedia/commons/6/67/Borussia_Dortmund_logo.svg" style="height: 200px; width: 200px;">
        </div>
    </div>
</div>