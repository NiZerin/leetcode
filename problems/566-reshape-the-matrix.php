<?php

class Solution {

    /**
     * @param Integer[][] $mat
     * @param Integer $r
     * @param Integer $c
     * @return Integer[][]
     */
    function matrixReshape(array $nums, int $r, int $c) {
        $x = count($nums);
        $y = count($nums[0]);
        if ($x * $y != $r * $c) return $nums;

        $res = [];
        for ($i = 0; $i < $x * $y; $i++) {
            $res[intval($i / $c)][$i % $c] = $nums[intval($i / $y)][$i % $y];
        }

        return $res;
    }
}

$c = new Solution();
$r1 = $c->matrixReshape([[1,2],[3,4]], 1, 4);
var_dump($r1);

$r2 = $c->matrixReshape([[1,2],[3,4]], 4, 1);
var_dump($r2);