<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $panjang = count($nums);
        $sum=0;
        sort($nums);
        $v = $nums[0];
        $result=[];
        for($i=0; $i<$panjang; $i++){
            if ($v == $nums[$i]){
                $sum +=1;
                $result[$v] = $sum;
            }else{
                $v = $nums[$i];
                $i = $i-1;
                $sum=0;
            }
        }
        return array_search(max($result),$result);
    }
}