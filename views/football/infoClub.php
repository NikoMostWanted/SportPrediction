<?php

use app\assets\AppAsset;
use Yii\base;
use yii\helpers\Html;


$this->title = $teams->{'name'};
$this->params['breadcrumbs'][] = ['label' => 'Football', 'url' => ['football/index'], 'title' => 'Football'];
//$this->params['breadcrumbs'][] = ['label' => $team_data->league[0]->nameLeague, 'url' => ['football/leagues','league'=>$team_data->league[0]->nameLeague], 'title' => $team_data->league[0]->nameLeague];
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
                    <img src="<?=$teams->{'crestUrl'}?>" alt="<?=$teams->{'name'}?>" style="height: 200px; width: 200px;">
                </div>
                <div class="info-intro">
                    <h1><?=$teams->{'name'}?></h1>
                    <table class="info-page-table">
                        <tbody>
                            <tr>
                                <td> Squad Market Value </td>
                                <td> <?=$teams->{'squadMarketValue'}?> </td>
                            </tr>
                            <tr>
                                <td> Short name</td>
                                <td> <?=$teams->{'shortName'}?> </td>
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
                                <?php for($i =0; $i < $fixtures->{'count'}; $i++) { ?>
                                    <?php if($fixtures->{'fixtures'}[$i]->{'status'} == 'FINISHED') { ?>
                                        <tbody>
                                        <tr>
                                            <td class="time"><?=$fixtures->{'fixtures'}[$i]->{'date'}?></td>
                                            <td class="left-team"><a href="#"><?=$fixtures->{'fixtures'}[$i]->{'homeTeamName'}?></a></td>
                                            <td class="score"><a href="#"><?=$fixtures->{'fixtures'}[$i]->{'result'}->{'goalsHomeTeam'}?>:<?=$fixtures->{'fixtures'}[$i]->{'result'}->{'goalsAwayTeam'}?></a> </td>
                                            <td class="right-team"><a href="#"><?=$fixtures->{'fixtures'}[$i]->{'awayTeamName'}?></a> </td>
                                        </tr>
                                        </tbody>
                                    <?php } ?>
                                <?php } ?>
                            </table>
                        </article>
                        <div class="separator"></div>
                        <article class="game-feed">
                            <h3 class="feed-header">The following games</h3>
                            <table class="feed-table">
                                <?php for($i =0; $i < $fixtures->{'count'}; $i++) { ?>
                                    <?php if($fixtures->{'fixtures'}[$i]->{'status'} == 'TIMED') { ?>
                                        <tbody>
                                        <tr>
                                            <td class="time"><?=$fixtures->{'fixtures'}[$i]->{'date'}?></td>
                                            <td class="left-team"><a href="#"><?=$fixtures->{'fixtures'}[$i]->{'homeTeamName'}?></a></td>
                                            <td class="score"><a href="#"><?=$fixtures->{'fixtures'}[$i]->{'result'}->{'goalsHomeTeam'}?>:<?=$fixtures->{'fixtures'}[$i]->{'result'}->{'goalsAwayTeam'}?></a> </td>
                                            <td class="right-team"><a href="#"><?=$fixtures->{'fixtures'}[$i]->{'awayTeamName'}?></a> </td>
                                        </tr>
                                        </tbody>
                                    <?php } ?>
                                <?php } ?>
                                </tbody>
                            </table>
                        </article>
                    </div>
                    <div class="main-right">
                        <article class="team-consist ">
                            <h3 class="feed-header">Command structure</h3>
                            <table class="consist-table">
                                <tbody>
                                <?php for($i =0; $i < $players->{'count'}; $i++) { ?>
                                    <tr>
                                        <td class="num"><?=$players->{'players'}[$i]->{'jerseyNumber'}?></td>
                                        <td class="nation">
                                            <p><?=$players->{'players'}[$i]->{'nationality'}?></p>  <!--Nation player-->
                                        </td>
                                        <td class="fio"><?=$players->{'players'}[$i]->{'name'}?></td>
                                        <td class="birth"><p><?=$players->{'players'}[$i]->{'dateOfBirth'}?></p></td>
                                    </tr>
                                <?php } ?>
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

                                        <?php for($i = 0; $i < count($statistics->{'standing'}); $i++) { ?>
                                            <tr>
                                                <td class="num"><?=$statistics->{'standing'}[$i]->{'position'}?></td>
                                                <td class="logo">
                                                    <img style="width: 40px; height: 40px;" src="<?=$statistics->{'standing'}[$i]->{'crestURI'};?>"/>
                                                </td>
                                                <td class="team">
                                                    <?php echo Html::a($statistics->{'standing'}[$i]->{'teamName'}, ['football/info-club'/*, 'club'=>$statistics_club[$i]->nameTeam, 'league'=>$team_data->league[0]->nameLeague*/],['title'=>$statistics->{'standing'}[$i]->{'teamName'}]) ?>
                                                </td>
                                                <td class="games"><?=$statistics->{'standing'}[$i]->{'playedGames'}?></td>
                                                <td class="win"><?=$statistics->{'standing'}[$i]->{'wins'}?></td>
                                                <td class="draw"><?=$statistics->{'standing'}[$i]->{'draws'}?></td>
                                                <td class="lose"><?=$statistics->{'standing'}[$i]->{'losses'}?></td>
                                                <td class="goal"><?=$statistics->{'standing'}[$i]->{'goals'}?></td>
                                                <td class="miss"><?=$statistics->{'standing'}[$i]->{'goalsAgainst'}?></td>
                                                <td class="diff"><?=$statistics->{'standing'}[$i]->{'goalDifference'}?></td>
                                                <td class="score"><?=$statistics->{'standing'}[$i]->{'points'}?></td>
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
