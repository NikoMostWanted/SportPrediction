<?php

use app\assets\AppAsset;
use Yii\base;
use yii\bootstrap\Nav;

$this->title = $data['nameTeam'];
$this->params['breadcrumbs'][] = ['label' => 'Barclays', 'url' => ['football/index']];
$this->params['breadcrumbs'][] = $this->title;

AppAsset::register($this);

?>

<div class="row">
    <?php $this->beginContent('@app/views/layouts/footballNavbar.php'); ?>
    <?php $this->endContent(); ?>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
        <article class="info-article">
            <h3 class="feed-header">team profiles</h3>
                <div class="info-logo">
                    <img src="<?=Yii::$app->request->baseUrl;?><?=$data['icon']?>" alt="<?=$data['nameTeam']?>">
                </div>
                <div class="info-intro">
                    <h1><?=$data['nameTeam']?></h1>
                    <table class="info-page-table">
                        <tbody>
                            <tr>
                                <td> Manager </td>
                                <td> <?=$data['president']?> </td>
                            </tr>
                            <tr>
                                <td> Coach</td>
                                <td> <?=$data['coach']?> </td>
                            </tr>
                            <tr>
                                <td> Stadium</td>
                                <td> <?=$data['field']?> </td>
                            </tr>
                            <tr>
                                <td> Year of foundation</td>
                                <td> <?=$data['foundationYear']?> </td>
                            </tr>
                            <tr>
                                <td> League</td>
                                <td> <?=$data['nameLeague']?> </td>
                            </tr>
                            <tr>
                                <td>Club website </td>
                                <td> <a href="<?=$data['website']?>" target="_blank"><?=$data['website']?></a></td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                 </div>
       </article>
        <div>
            <?php
            echo Nav::widget([
                'items' => [
                    [
                        'label' => 'Profile' ,
                        'url' => [' '],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'Statistics',
                        'url' => [' '],
                        'visible' => Yii::$app->user->isGuest
                    ],
                    [
                        'label' => 'The history of the club',
                        'url' => [' '],
                        'visible' => Yii::$app->user->isGuest
                    ],

                ],
                'options' => ['class' => ' nav navbar-default nav-pills'],
            ]);
            ?>
        </div>
        <div class="col-left" style="display:block">
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
            <article class="team-consist">
                <h3 class="feed-header">Command structure</h3>
                <h4  class="consist-header"> Goalkeepers</h4>
                <table class="consist-table">
                    <tbody>
                        <tr>
                            <td class="num">13</td>
                            <td class="nation">
                                <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                            </td>
                            <td class="fio"> David Ospina</td>
                            <td class="birth"><p>31.08.1988</p></td>
                        </tr>
                        <tr>
                            <td class="num">13</td>
                            <td class="nation">
                                <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                            </td>
                            <td class="fio"> David Ospina</td>
                            <td class="birth"><p>31.08.1988</p></td>
                        </tr>
                        <tr>
                            <td class="num">13</td>
                            <td class="nation">
                                <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                            </td>
                            <td class="fio"> David Ospina</td>
                            <td class="birth"><p>31.08.1988</p></td>
                        </tr>
                        <tr>
                            <td class="num">13</td>
                            <td class="nation">
                                <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
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
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Kiran Gibs</td>
                        <td class="birth"><p>26.09.1989</p></td>
                    </tr>
                    <tr>
                        <td class="num">3</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Kiran Gibs</td>
                        <td class="birth"><p>26.09.1989</p></td>
                    </tr>
                    <tr>
                        <td class="num">3</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Kiran Gibs</td>
                        <td class="birth"><p>26.09.1989</p></td>
                    </tr>
                    <tr>
                        <td class="num">3</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Kiran Gibs</td>
                        <td class="birth"><p>26.09.1989</p></td>
                    </tr>
                    <tr>
                        <td class="num">3</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Kiran Gibs</td>
                        <td class="birth"><p>26.09.1989</p></td>
                    </tr>
                    <tr>
                        <td class="num">3</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
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
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Mesut Ozil</td>
                        <td class="birth"><p>15.10.1988</p></td>
                    </tr>
                    <tr>
                        <td class="num">11</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Mesut Ozil</td>
                        <td class="birth"><p>15.10.1988</p></td>
                    </tr>
                    <tr>
                        <td class="num">11</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Mesut Ozil</td>
                        <td class="birth"><p>15.10.1988</p></td>
                    </tr>
                    <tr>
                        <td class="num">11</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Mesut Ozil</td>
                        <td class="birth"><p>15.10.1988</p></td>
                    </tr>
                    <tr>
                        <td class="num">11</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Mesut Ozil</td>
                        <td class="birth"><p>15.10.1988</p></td>
                    </tr>
                    <tr>
                        <td class="num">11</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Mesut Ozil</td>
                        <td class="birth"><p>15.10.1988</p></td>
                    </tr>
                    <tr>
                        <td class="num">11</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Mesut Ozil</td>
                        <td class="birth"><p>15.10.1988</p></td>
                    </tr>
                    <tr>
                        <td class="num">11</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
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
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Chuba Akpom</td>
                        <td class="birth"><p>09.10.1997</p></td>
                    </tr>
                    <tr>
                        <td class="num">38</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Chuba Akpom</td>
                        <td class="birth"><p>09.10.1997</p></td>
                    </tr>
                    <tr>
                        <td class="num">38</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Chuba Akpom</td>
                        <td class="birth"><p>09.10.1997</p></td>
                    </tr>
                    <tr>
                        <td class="num">38</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Chuba Akpom</td>
                        <td class="birth"><p>09.10.1997</p></td>
                    </tr>
                    <tr>
                        <td class="num">38</td>
                        <td class="nation">
                            <img src="http://s.ill.in.ua/i/country/16x0/87.gif" alt="��������">  <!--Nation player-->
                        </td>
                        <td class="fio"> Chuba Akpom</td>
                        <td class="birth"><p>09.10.1997</p></td>
                    </tr>
                    </tbody>
                </table>
            </article>
        </div>
    </div>
</div>
