<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $data = array_merge($nums1,$nums2);
        $totalData = count($data);
        
        // jika jumlah data sama dengan satu
        if($totalData == 1){
            return $data[0];
        }
        
        sort($data);        
        $median = floor(count($data)/2);  
        
        // apakah jumlah data adalah bilangan genap
        if($totalData %2 ==0)
        {
             $nilai = $data[$median-1] + $data[$median];
             $result = $nilai/2;
             return $result;  
            
        // jika bukan bilangan genap
        }else{
             return $data[$median];
        }
     
    }
}