<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function subarraySum($nums, $k) {
        $preSum=[];//前缀和出现次数的哈希表
        $preSum[0]=1;
        $ans=0;//保存结果
        $sum0i=0;
        $numsLen=sizeof($nums);
        for($i=0;$i<$numsLen;$i++){
            $sum0i+=$nums[$i];
            $sum0j=$sum0i-$k;
            if(isset($preSum[$sum0j])){//查找哈希表
                $ans+=$preSum[$sum0j];
            }
            $preSum[$sum0i]=isset($preSum[$sum0i])?$preSum[$sum0i]+1:1;//更新哈希表
        }

        return $ans;
    }
}