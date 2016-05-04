<?php

use app\assets\AppAsset;
use Yii\base;
use yii\helpers\Html;


$this->title = $team_data->nameTeam;
$this->params['breadcrumbs'][] = ['label' => 'Football', 'url' => ['football/index'], 'title' => 'Football'];
$this->params['breadcrumbs'][] = ['label' => $team_data->league[0]->nameLeague, 'url' => ['football/leagues','league'=>$team_data->league[0]->nameLeague], 'title' => $team_data->league[0]->nameLeague];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);

?>

<div class="row">
    <?php $this->beginContent('@app/views/layouts/footballNavbar.php'); ?>
    <?php $this->endContent(); ?>
    <div class=" container col-lg-10 col-md-10 col-sm-8 col-xs-12">
        <article class="info-article">
            <h3 class="feed-header">team profiles</h3>
                <div class="info-logo">
                    <img src="<?=Yii::$app->request->baseUrl;?><?=$team_data->icon?>" alt="<?=$team_data->nameTeam?>">
                </div>
                <div class="info-intro">
                    <h1><?=$team_data->nameTeam?></h1>
                    <table class="info-page-table">
                        <tbody>
                            <tr>
                                <td> Manager </td>
                                <td> <?=$team_data->president->name.' '.$team_data->president->surname?> </td>
                            </tr>
                            <tr>
                                <td> Coach</td>
                                <td> <?=$team_data->coach[0]->name.' '.$team_data->coach[0]->surname?> </td>
                            </tr>
                            <tr>
                                <td> Stadium</td>
                                <td> <?=$team_data->field?> </td>
                            </tr>
                            <tr>
                                <td> Year of foundation</td>
                                <td> <?=$team_data->foundationYear?> </td>
                            </tr>
                            <tr>
                                <td> League</td>
                                <td> <?=$team_data->league[0]->nameLeague?> </td>
                            </tr>
                            <tr>
                                <td>Club website </td>
                                <td> <a title="<?=$team_data->nameTeam?>" href="<?=$team_data->website?>" target="_blank"><?=$team_data->website?></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                 </div>
       </article>
        <div id="exTab1" class="row">
            <ul  class="nav nav-pills">
                <li class="active">
                    <a  href="#1a" data-toggle="tab">Profile</a>
                </li>
                <li><a href="#2a" data-toggle="tab">Standings</a>
                </li>
                <li><a href="#3a" data-toggle="tab">Statistics</a>
                </li>
            </ul>
            <hr>
            <div class="tab-content clearfix">
                <div class="tab-pane active" id="1a">
                    <div class="col-left ">
                        <article class="game-feed">
                            <h3 class="feed-header">Last games</h3>
                            <table class="feed-table">
                                <tbody>
                                <tr>
                                    <th colspan="4">
                                        <p align="center"> 02.04.2016 Barclays league. 32 tour</p>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="time"> 17:00</td>
                                    <td class="left-team"><a href="#">Arsenal</a></td>
                                    <td class="score"><a href="#">4:0</a> </td>
                                    <td class="right-team"><a href="#">Watford</a> </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th colspan="4">
                                        <p align="center"> 09.04.2016 Barclays league. 33 tour</p>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="time"> 14:45</td>
                                    <td class="left-team"><a href="#">West Ham</a></td>
                                    <td class="score"><a href="#">3:3</a> </td>
                                    <td class="right-team"><a href="#">Arsenal</a> </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th colspan="4">
                                        <p align="center"> 17.04.2016 Barclays league. 34 tour</p>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="time"> 18:00</td>
                                    <td class="left-team"><a href="#">Arsenal</a></td>
                                    <td class="score"><a href="#">1:1</a> </td>
                                    <td class="right-team"><a href="#">Crystal Palace</a> </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th colspan="4">
                                        <p align="center"> 21.04.2016 Barclays league. 30 tour</p>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="time"> 21:45</td>
                                    <td class="left-team"><a href="#">Arsenal</a></td>
                                    <td class="score"><a href="#">2:0</a> </td>
                                    <td class="right-team"><a href="#">West Brom</a> </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th colspan="4">
                                        <p align="center"> 24.04.2016 Barclays league. 35 tour</p>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="time"> 16:05</td>
                                    <td class="left-team"><a href="#">Sunderland</a></td>
                                    <td class="score"><a href="#">0:0</a> </td>
                                    <td class="right-team"><a href="#">Arsenal</a> </td>
                                </tr>
                                </tbody>
                            </table>
                        </article>
                        <div class="separator"></div>
                        <article class="game-feed">
                            <h3 class="feed-header">The following games</h3>
                            <table class="feed-table">
                                <tbody>
                                <tr>
                                    <th colspan="4">
                                        <p align="center"> 30.04.2016 Barclays league. 36 tour</p>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="time"> 19:30</td>
                                    <td class="left-team"><a href="#">Arsenal</a></td>
                                    <td class="score"><a href="#">-:-</a> </td>
                                    <td class="right-team"><a href="#">Norwich</a> </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th colspan="4">
                                        <p align="center"> 07.05.2016 Barclays league. 37 tour</p>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="time"> 17:00</td>
                                    <td class="left-team"><a href="#">Man City</a></td>
                                    <td class="score"><a href="#">-:-</a> </td>
                                    <td class="right-team"><a href="#">Arsenal</a> </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <th colspan="4">
                                        <p align="center"> 15.05.2016 Barclays league. 38 tour</p>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="time"> 17:00</td>
                                    <td class="left-team"><a href="#">Arsenal</a></td>
                                    <td class="score"><a href="#">-:-</a> </td>
                                    <td class="right-team"><a href="#">Aston Villa</a> </td>
                                </tr>
                                </tbody>
                            </table>
                        </article>
                    </div>
                    <div  class="main-right">
                        <article class="team-consist ">
                            <h3 class="feed-header">Command structure</h3>
                            <h4  class="consist-header"> Goalkeepers</h4>
                            <table class="consist-table">
                                <tbody>
                                <tr>
                                    <td class="num">13</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/co.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> David Ospina</td>
                                    <td class="birth"><p>31.08.1988</p></td>
                                </tr>
                                <tr>
                                    <td class="num">13</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/co.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> David Ospina</td>
                                    <td class="birth"><p>31.08.1988</p></td>
                                </tr>
                                <tr>
                                    <td class="num">13</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/co.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> David Ospina</td>
                                    <td class="birth"><p>31.08.1988</p></td>
                                </tr>
                                <tr>
                                    <td class="num">13</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/co.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> David Ospina</td>
                                    <td class="birth"><p>31.08.1988</p></td>
                                </tr>
                                </tbody>
                            </table>
                            <h4  class="consist-header">Defenders</h4>
                            <table class="consist-table">
                                <tbody>
                                <tr>
                                    <td class="num">3</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/gb.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Kiran Gibs</td>
                                    <td class="birth"><p>26.09.1989</p></td>
                                </tr>
                                <tr>
                                    <td class="num">3</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/gb.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Kiran Gibs</td>
                                    <td class="birth"><p>26.09.1989</p></td>
                                </tr>
                                <tr>
                                    <td class="num">3</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/gb.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Kiran Gibs</td>
                                    <td class="birth"><p>26.09.1989</p></td>
                                </tr>
                                <tr>
                                    <td class="num">3</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/gb.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Kiran Gibs</td>
                                    <td class="birth"><p>26.09.1989</p></td>
                                </tr>
                                <tr>
                                    <td class="num">3</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/gb.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Kiran Gibs</td>
                                    <td class="birth"><p>26.09.1989</p></td>
                                </tr>
                                <tr>
                                    <td class="num">3</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/gb.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Kiran Gibs</td>
                                    <td class="birth"><p>26.09.1989</p></td>
                                </tr>
                                </tbody>
                            </table>
                            <h4  class="consist-header">Midfielders</h4>
                            <table class="consist-table">
                                <tbody>
                                <tr>
                                    <td class="num">11</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/de.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Mesut Ozil</td>
                                    <td class="birth"><p>15.10.1988</p></td>
                                </tr>
                                <tr>
                                    <td class="num">11</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/de.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Mesut Ozil</td>
                                    <td class="birth"><p>15.10.1988</p></td>
                                </tr>
                                <tr>
                                    <td class="num">11</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/de.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Mesut Ozil</td>
                                    <td class="birth"><p>15.10.1988</p></td>
                                </tr>
                                <tr>
                                    <td class="num">11</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/de.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Mesut Ozil</td>
                                    <td class="birth"><p>15.10.1988</p></td>
                                </tr>
                                <tr>
                                    <td class="num">11</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/de.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Mesut Ozil</td>
                                    <td class="birth"><p>15.10.1988</p></td>
                                </tr>
                                <tr>
                                    <td class="num">11</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/de.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Mesut Ozil</td>
                                    <td class="birth"><p>15.10.1988</p></td>
                                </tr>
                                <tr>
                                    <td class="num">11</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/de.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Mesut Ozil</td>
                                    <td class="birth"><p>15.10.1988</p></td>
                                </tr>
                                <tr>
                                    <td class="num">11</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/de.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Mesut Ozil</td>
                                    <td class="birth"><p>15.10.1988</p></td>
                                </tr>
                                </tbody>
                            </table>
                            <h4  class="consist-header">Forwards</h4>
                            <table class="consist-table">
                                <tbody>
                                <tr>
                                    <td class="num">38</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/gb.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Chuba Akpom</td>
                                    <td class="birth"><p>09.10.1997</p></td>
                                </tr>
                                <tr>
                                    <td class="num">38</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/gb.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Chuba Akpom</td>
                                    <td class="birth"><p>09.10.1997</p></td>
                                </tr>
                                <tr>
                                    <td class="num">38</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/gb.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Chuba Akpom</td>
                                    <td class="birth"><p>09.10.1997</p></td>
                                </tr>
                                <tr>
                                    <td class="num">38</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/gb.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Chuba Akpom</td>
                                    <td class="birth"><p>09.10.1997</p></td>
                                </tr>
                                <tr>
                                    <td class="num">38</td>
                                    <td class="nation">
                                        <img src="<?=Yii::$app->request->baseUrl.'/images/flags/gb.png';?>"/>  <!--Nation player-->
                                    </td>
                                    <td class="fio"> Chuba Akpom</td>
                                    <td class="birth"><p>09.10.1997</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </article>
                    </div>
                </div>
                <div class="tab-pane" id="2a">
                    <div class="container col-lg-12 col-md-10 col-sm-8 col-xs-12">
                        <div class="col-top ">
                            <article class="tournament-article">
                                <h3 class="feed-header">Spain.La liga, 2015-2016</h3>
                                <table class="main-tournament-table">
                                    <tbody>
                                        <tr>
                                            <th class="num" title="Place team">#</th>
                                            <th></th>
                                            <th class="date" title="Date remove">03.05.2016</th>
                                            <th class="games" title="games">games</th>
                                            <th class="win" title="wins">win</th>
                                            <th class="draw" title="draws">draw</th>
                                            <th class="lose" title="loses">lose</th>
                                            <th class="goal" title="goals">goal</th>
                                            <th class="miss" title="misses">miss</th>
                                            <th class="diff" title="diff">diff</th>
                                            <th class="score" title="score">score</th>
                                            <th class="form" title="form">form</th>
                                        </tr>
                                        <?php for($i = 0; $i < count($statistics_club); $i++) { ?>
                                            <tr>
                                                <td class="num"><?=$statistics_club[$i]->statistic->place?></td>
                                                <td class="logo">
                                                    <img src="<?=Yii::$app->request->baseUrl.$statistics_club[$i]->icon;?>"/>
                                                </td>
                                                <td class="team">
                                                    <?php echo Html::a($statistics_club[$i]->nameTeam, ['football/info-club', 'club'=>$statistics_club[$i]->nameTeam, 'league'=>$team_data->league[0]->nameLeague],['title'=>$statistics_club[$i]->nameTeam]) ?>
                                                </td>
                                                <td class="games"><?=$statistics_club[$i]->statistic->games?></td>
                                                <td class="win"><?=$statistics_club[$i]->statistic->win?></td>
                                                <td class="draw"><?=$statistics_club[$i]->statistic->draw?></td>
                                                <td class="lose"><?=$statistics_club[$i]->statistic->lose?></td>
                                                <td class="goal"><?=$statistics_club[$i]->statistic->goals?></td>
                                                <td class="miss"><?=$statistics_club[$i]->statistic->missing?></td>
                                                <td class="diff"><?=$statistics_club[$i]->statistic->goals - $statistics_club[$i]->statistic->missing?></td>
                                                <td class="score"><?=$statistics_club[$i]->statistic->points?></td>
                                                <td class="form">
                                                    <a href="#" class="lose-form" title="Real 12:1 Barcelona"></a>
                                                    <a href="#" class="lose-form" title="Barca 1:2 Valencia"></a>
                                                    <a href="#" class="win-form" title=" "></a>
                                                    <a href="#" class="win-form" title=" "></a>
                                                    <a href="#" class="win-form" title=" "></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="3a">
                    <h3>Statistics page</h3>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
