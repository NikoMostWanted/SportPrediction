<?php
/**
 * Created by PhpStorm.
 * User: Yulia
 * Date: 04.05.2016
 * Time: 13:38
 */

namespace app\models;


class FuzzyAlgorithm
{
    private $c_array;
    private $b_array;
    private $x_array;
    private $y_array;

    private function m($x, $b, $c)
    {
        $m = exp(-(pow(($x - $b), 2)) / (2 * pow($c, 2)));
        return round($m, 5);
    }

// first rule ------------------------------------------------------------------------------
    public function find_m_kv($x_array, $b_array, $c_array)
    {
        $m_kv = max(
            min($this->m($x_array[0], $b_array[0][0], $c_array[0][0]), $this->m($x_array[1], $b_array[1][3], $c_array[1][3]),
                $this->m($x_array[2], $b_array[2][0], $c_array[2][0]), $this->m($x_array[3], $b_array[3][2], $c_array[3][2]),
                $this->m($x_array[4], $b_array[4][2], $c_array[4][2])),

            min($this->m($x_array[0], $b_array[0][1], $c_array[0][1]), $this->m($x_array[1], $b_array[1][2], $c_array[1][2]),
                $this->m($x_array[2], $b_array[2][1], $c_array[2][1]), $this->m($x_array[3], $b_array[3][2], $c_array[3][2]),
                $this->m($x_array[4], $b_array[4][2], $c_array[4][2])),

            min($this->m($x_array[0], $b_array[0][1], $c_array[0][1]), $this->m($x_array[1], $b_array[1][1], $c_array[1][1]),
                $this->m($x_array[2], $b_array[2][0], $c_array[2][0]), $this->m($x_array[3], $b_array[3][2], $c_array[3][2]),
                $this->m($x_array[4], $b_array[4][2], $c_array[4][2])),

            min($this->m($x_array[0], $b_array[0][0], $c_array[0][0]), $this->m($x_array[1], $b_array[1][2], $c_array[1][2]),
                $this->m($x_array[2], $b_array[2][1], $c_array[2][1]), $this->m($x_array[3], $b_array[3][2], $c_array[3][2]),
                $this->m($x_array[4], $b_array[4][1], $c_array[4][1])));
        return $m_kv;
    }

// second rule ---------------------------------------------------------------------------------
    public function find_m_v($x_array, $b_array, $c_array)
    {
        $m_v = max(
            min($this->m($x_array[0], $b_array[0][0], $c_array[0][0]), $this->m($x_array[1], $b_array[1][2], $c_array[1][2]),
                $this->m($x_array[2], $b_array[2][1], $c_array[2][1]), $this->m($x_array[3], $b_array[3][2], $c_array[3][2]),
                $this->m($x_array[4], $b_array[4][1], $c_array[4][1])),

            min($this->m($x_array[0], $b_array[0][1], $c_array[0][1]), $this->m($x_array[1], $b_array[1][2], $c_array[1][2]),
                $this->m($x_array[2], $b_array[2][2], $c_array[2][2]), $this->m($x_array[3], $b_array[3][1], $c_array[3][1]),
                $this->m($x_array[4], $b_array[4][2], $c_array[4][2])),

            min($this->m($x_array[0], $b_array[0][2], $c_array[0][2]), $this->m($x_array[1], $b_array[1][1], $c_array[1][1]),
                $this->m($x_array[2], $b_array[2][1], $c_array[2][1]), $this->m($x_array[3], $b_array[3][2], $c_array[3][2]),
                $this->m($x_array[4], $b_array[4][1], $c_array[4][1])),

            min($this->m($x_array[0], $b_array[0][1], $c_array[0][1]), $this->m($x_array[1], $b_array[1][2], $c_array[1][2]),
                $this->m($x_array[2], $b_array[2][2], $c_array[2][2]), $this->m($x_array[3], $b_array[3][1], $c_array[3][1]),
                $this->m($x_array[4], $b_array[4][2], $c_array[4][2])));
        return $m_v;
    }

    // third rule --------------------------------------------------------------------------------
    public function find_m_n($x_array, $b_array, $c_array)
    {
        $m_n = max(
            min($this->m($x_array[0], $b_array[0][1], $c_array[0][1]), $this->m($x_array[1], $b_array[1][2], $c_array[1][2]),
                $this->m($x_array[2], $b_array[2][2], $c_array[2][2]), $this->m($x_array[3], $b_array[3][1], $c_array[3][1]),
                $this->m($x_array[4], $b_array[4][1], $c_array[4][1])),

            min($this->m($x_array[0], $b_array[0][2], $c_array[0][2]), $this->m($x_array[1], $b_array[1][0], $c_array[1][0]),
                $this->m($x_array[2], $b_array[2][2], $c_array[2][2]), $this->m($x_array[3], $b_array[3][1], $c_array[3][1]),
                $this->m($x_array[4], $b_array[4][1], $c_array[4][1])),

            min($this->m($x_array[0], $b_array[0][1], $c_array[0][1]), $this->m($x_array[1], $b_array[1][1], $c_array[1][1]),
                $this->m($x_array[2], $b_array[2][3], $c_array[2][3]), $this->m($x_array[3], $b_array[3][2], $c_array[3][2]),
                $this->m($x_array[4], $b_array[4][0], $c_array[4][0])),

            min($this->m($x_array[0], $b_array[0][0], $c_array[0][0]), $this->m($x_array[1], $b_array[1][0], $c_array[1][0]),
                $this->m($x_array[2], $b_array[2][1], $c_array[2][1]), $this->m($x_array[3], $b_array[3][1], $c_array[3][1]),
                $this->m($x_array[4], $b_array[4][1], $c_array[4][1])));
        return $m_n;
    }

    // fourth rule ---------------------------------------------------------------------------------
    public function find_m_p($x_array, $b_array, $c_array)
    {
        $m_p = max(
            min($this->m($x_array[0], $b_array[0][0], $c_array[0][0]), $this->m($x_array[1], $b_array[1][1], $c_array[1][1]),
                $this->m($x_array[2], $b_array[2][2], $c_array[2][2]), $this->m($x_array[3], $b_array[3][0], $c_array[3][0]),
                $this->m($x_array[4], $b_array[4][1], $c_array[4][1])),

            min($this->m($x_array[0], $b_array[0][1], $c_array[0][1]), $this->m($x_array[1], $b_array[1][2], $c_array[1][2]),
                $this->m($x_array[2], $b_array[2][3], $c_array[2][3]), $this->m($x_array[3], $b_array[3][1], $c_array[3][1]),
                $this->m($x_array[4], $b_array[4][0], $c_array[4][0])),

            min($this->m($x_array[0], $b_array[0][2], $c_array[0][2]), $this->m($x_array[1], $b_array[1][0], $c_array[1][0]),
                $this->m($x_array[2], $b_array[2][2], $c_array[2][2]), $this->m($x_array[3], $b_array[3][2], $c_array[3][2]),
                $this->m($x_array[4], $b_array[4][0], $c_array[4][0])),

            min($this->m($x_array[0], $b_array[0][1], $c_array[0][1]), $this->m($x_array[1], $b_array[1][1], $c_array[1][1]),
                $this->m($x_array[2], $b_array[2][4], $c_array[2][4]), $this->m($x_array[3], $b_array[3][1], $c_array[3][1]),
                $this->m($x_array[4], $b_array[4][1], $c_array[4][1])));
        return $m_p;
    }
    // fifth rule ---------------------------------------------------------------------------------
    public function find_m_kp($x_array, $b_array, $c_array)
    {
        $m_kp = max(
            min($this->m($x_array[0], $b_array[0][0], $c_array[0][0]), $this->m($x_array[1], $b_array[1][1], $c_array[1][1]),
                $this->m($x_array[2], $b_array[2][2], $c_array[2][2]), $this->m($x_array[3], $b_array[3][0], $c_array[3][0]),
                $this->m($x_array[4], $b_array[4][1], $c_array[4][1])),

            min($this->m($x_array[0], $b_array[0][1], $c_array[0][1]),  $this->m($x_array[1], $b_array[1][2], $c_array[1][2]),
                $this->m($x_array[2], $b_array[2][3], $c_array[2][3]),  $this->m($x_array[3], $b_array[3][1], $c_array[3][1]),
                $this->m($x_array[4], $b_array[4][0], $c_array[4][0])),

            min($this->m($x_array[0], $b_array[0][2], $c_array[0][2]),  $this->m($x_array[1], $b_array[1][0], $c_array[1][0]),
                $this->m($x_array[2], $b_array[2][2], $c_array[2][2]), $this->m($x_array[3], $b_array[3][2], $c_array[3][2]),
                $this->m($x_array[4], $b_array[4][0], $c_array[4][0])),

            min($this->m($x_array[0], $b_array[0][1], $c_array[0][1]),  $this->m($x_array[1], $b_array[1][1], $c_array[1][1]),
                $this->m($x_array[2], $b_array[2][4], $c_array[2][4]),  $this->m($x_array[3], $b_array[3][1], $c_array[3][1]),
                $this->m($x_array[4], $b_array[4][1], $c_array[4][1])));
        return $m_kp;
    }

    public function expression($x_array, $b_array, $c_array)
    {
        return min($this->find_m_kv($x_array, $b_array, $c_array),
            $this->find_m_v($x_array, $b_array, $c_array),
            $this->find_m_n($x_array, $b_array, $c_array),
            $this->find_m_p($x_array, $b_array, $c_array),
            $this->find_m_kp($x_array, $b_array, $c_array)
        );
    }

    public function calcIntegral($a, $b, $n)
    {
        $result = 0;
        $h = ($b - $a) / $n;
        for ($i = 0; $i < $n; $i++) {
            $result += expression($a + $h * ($i + 0.5));
        }
        $result *= $h;
        return $result;
    }

}