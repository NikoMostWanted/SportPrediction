<?php
/**
 * Created by PhpStorm.
 * User: Yulia
 * Date: 04.05.2016
 * Time: 14:31
 */

namespace app\models;


class RotshteyinAlgorithm
{
    private $number_of_goals = array();
    private $data_for_rules = array();

    // determine range one term
    public function size_of_term($number_of_goals){
        return (max($number_of_goals) - min($number_of_goals))/5;
    }

    // determine term for certain value of array
    public function term($x, $number_of_goals){
        if (($x>=min($number_of_goals)) and ($x<(min($number_of_goals)+$this->size_of_term($number_of_goals)))){
            return "L";
        }
        if (($x>(min($number_of_goals)+$this->size_of_term($number_of_goals))) and
            ($x<(min($number_of_goals)+2*$this->size_of_term($number_of_goals)))){
            return "LA";
        }
        if (($x>(min($number_of_goals)+2*$this->size_of_term($number_of_goals)))and
            ($x<(min($number_of_goals)+3*$this->size_of_term($number_of_goals)))){
            return "A";
        }
        if (($x<(max($number_of_goals)-$this->size_of_term($number_of_goals))) and
            ($x>(min($number_of_goals)+3*$this->size_of_term($number_of_goals)))){
            return "HA";
        }
        if (($x<=max($number_of_goals)) and ($x>(max($number_of_goals)-$this->size_of_term($number_of_goals)))){
            return "H";
        }
    }

// create multidimensional associative array for writing rules
    public function array_for_rules($number_of_goals){
        for( $i=0; $i<count($number_of_goals); $i++){
            $data_for_rules[$i][$number_of_goals[$i]] = $this->term($number_of_goals[$i], $number_of_goals);

        }
        return $data_for_rules;
    }

// create rules using previously created array $data_for_rules
    public function rules($number_of_goals){
        $tmp = $this->array_for_rules($number_of_goals);
        $i = 0;
        foreach ($tmp as $k1 => $v1) {
            foreach ($v1 as $k2 => $v2) {
                echo $tmp[$i][$k2]. "<br>" ;
            }   $i++;

        }

    }


}