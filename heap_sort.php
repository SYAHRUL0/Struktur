<?php

echo "//heap sortn";
$data=array(6,5,3,1,8,7,2,4);
function build_heap(&$data, $i, $t){
  $tmp_var = $data[$i];    
  $j = $i * 2 + 1;
  while ($j <= $t)  {
   if($j < $t)
    if($data[$j] < $data[$j + 1]) {
     $j = $j + 1; 
    }
   if($tmp_var < $data[$j]) {
    $data[$i] = $data[$j];
    $i = $j;
    $j = 2 * $i + 1;
   } else {
    $j = $t + 1;
   }
  }
  $data[$i] = $tmp_var;
}

function heap_sort(&$data) {
  $init = (int)floor((count($data) - 1) / 2);
  for($i=$init; $i >= 0; $i--){
   $count = count($data) - 1;
   build_heap($data, $i, $count);
  }
  for ($i = (count($data) - 1); $i >= 1; $i--)  {
   $tmp_var = $data[0];
   $data[0] = $data[$i];
   $data[$i] = $tmp_var;
   build_heap($data, 0, $i - 1);
  }
}
heap_sort($data);
print_r($data);

?>