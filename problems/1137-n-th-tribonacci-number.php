<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function tribonacci($n) {
        $pre=[];//保存前3个状态
        $pre[0]=0;
        $pre[1]=1;
        $pre[2]=1;
        $res=0;

        for($i=3;$i<=$n;$i++){//迭代
            $res=$pre[0]+$pre[1]+$pre[2];
            $pre[0]=$pre[1];
            $pre[1]=$pre[2];
            $pre[2]=$res;
            var_dump($res);
        }

        return $res>0?$res:$pre[$n];
    }
}

$c = new Solution();

var_dump($c->tribonacci(1));