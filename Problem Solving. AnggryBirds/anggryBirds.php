<?php
function migratoryBirds($arr) {
    $bird = $arr;
    $burungPalingBanyakMuncul = array_count_values($bird);
    
    $data = array_keys($burungPalingBanyakMuncul,max($burungPalingBanyakMuncul));
    return min($data);
}
