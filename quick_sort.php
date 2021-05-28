<?php

echo "//quick sortn";
$data=array(6,5,3,1,8,7,2,4);
function quick_sort($data) {
    if(!count($data)) return $data;
    $pivot= $data[0];
    $low = $high = array();
    $n = count($data);
    for($i=1; $i < $n; $i++) {
        if($data[$i] <= $pivot) {
            $low [] = $data[$i];
        } else {
            $high[] = $data[$i];
        }
    }
    return array_merge(quick_sort($low), array($pivot), quick_sort($high));
}
print_r(quick_sort($data));

?>