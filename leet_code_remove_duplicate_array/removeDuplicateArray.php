<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $i=0;
        $total = count($nums)-1;
        while($i < $total){
            $nums1 = $nums[$i];
            $nums2 = $nums[$i+1];
            if ($nums1 == $nums2){
                unset($nums[$i]);
            }
            
            $i++;
        }
        return count($nums);
    
    }
}