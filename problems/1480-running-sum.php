<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function runningSum($nums) {
        $arr = [];

        array_reduce($nums, function ($sum, $item) use (&$arr) {
            $number = $sum + $item;
            $arr[] = $number;

            return $number;
        });

        return $arr;
    }
}

$arr = [1, 2, 3, 4];
$class = new Solution();

$sumArr = $class->runningSum($arr);

var_dump($sumArr);

//array(4) {
//    [0]=>
//  int(1)
//  [1]=>
//  int(3)
//  [2]=>
//  int(6)
//  [3]=>
//  int(10)
//}