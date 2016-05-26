<?php
/**
 * Created by PhpStorm.
 * User: Yulia
 * Date: 26.05.2016
 * Time: 23:38
 */

namespace app\models;


class SumAlgorithm
{
    private $w = array();
    private $b1 = array();
    private $b2 = array();
    private $sum = array();
    private $brel1 = array();
    private $brel2= array();
    private $b_d = array();
    private $b_s= array();
    private $ra=array();
    private $mrel= array();
    private $rel= array();
    private $t1=array();
    private $t2=array();
    private $name_first_team;
    private $name_second_team;


    public function sum($b1, $b2)
    {

        for($i = 0; $i < count($b1); $i++){
            $sum [$i] = $b1[$i] + $b2[$i];
        }

        return $sum;
    }

    public function brel1($b1, $b2)
    {
        for ($i = 0; $i < count($b1); $i++) {
            $brel1[$i] = round($b1[$i] / $this->sum($b1, $b2)[$i],2);
        }

        return $brel1;
    }
    public function brel2($b1, $b2)
    {
        for ($i = 0; $i < count($b2); $i++) {
            $brel2[$i] = round((1- ($b1[$i] /($this->sum($b1, $b2)[$i]))),2);
        }

        return $brel2;
    }

    public function brel_team($b1, $b2){
        for($i = 0; $i < count($b1); $i++){
            if($i<count($b1)-3){
                if ($this->brel1($b1, $b2)[$i]>$this->brel2($b1, $b2)[$i]){
                    $mrel [$i] [0]= $this->brel1($b1, $b2)[$i];
                    $mrel [$i] [1] = $this->brel2($b1, $b2)[$i];
                }
                else{
                    $mrel [$i] [0] = $this->brel2($b1, $b2)[$i];
                    $mrel [$i] [1] = $this->brel1($b1, $b2)[$i];
                }
            }else{
                if ($this->brel1($b1, $b2)[$i]>$this->brel2($b1, $b2)[$i]){
                    $mrel [$i] [0] = $this->brel2($b1, $b2)[$i];
                    $mrel [$i] [1] = $this->brel1($b1, $b2)[$i];
                }
                else{
                    $mrel [$i] [0] = $this->brel1($b1, $b2)[$i];
                    $mrel [$i] [1] = $this->brel2($b1, $b2)[$i];
                }
            }
        }
        echo "<pre>";
        print_r($mrel);
        echo "</pre>";
        return $mrel;

    }

    public function rating($b1, $b2, $w, $pointer){
        $mrel = $this->brel_team($b1, $b2);
        $ra_team =0;
        for ($i=0;$i< count($mrel);$i++){
            $ra_team+=$mrel[$i][$pointer]*$w[$i]; echo $mrel[$i][$pointer]." ".$w[$i]."<br>";
            echo $ra_team."<br>";
        }
        return $ra_team;
    }

    public function rel($b1, $b2, $w, $name_first_team, $name_second_team){

        $ra [0] = $this -> rating($b1, $b2, $w, 0);
        $ra [1] = $this -> rating($b1, $b2, $w, 1);
        echo $ra[0]+$ra[1];
        for ($i = 0; $i < 2; $i++) {
            if($i == 0){
                $rel[$name_second_team] = $ra[$i] /($ra[0]+$ra[1]);
            } else{
                $rel[$name_first_team] = $ra[$i] /($ra[0]+$ra[1]);
            }
        }
        echo "<pre>";
        print_r($rel);
        echo "</pre>";
        return $rel;
    }

    public function result($b1, $b2, $w,$name_first_team, $name_second_team){
        $y = $this->rel($b1, $b2, $w, $name_first_team, $name_second_team);
        $max_value = max($y);
        $max_key = array_keys($y, max($y))[0];

        if($max_value > 0.75) {
            return "Victory ".$max_key ;
        }
        if(($max_value<=0.75) and ($max_value>0.55)){
            return "Victory ".$max_key ." or a draw";
        }
        if(($max_value>=0.45) and ($max_value<0.55)){
            return "Draw";
        }
    }
}




