<?php

echo "//merge sortn";
$data=array(6,5,3,1,8,7,2,4);
function merge_sort ($data){
  if (count($data) <= 1 ) return $data;
  $left  = merge_sort(array_splice($data,floor(count($data) / 2)));
  $right = merge_sort($data);
  $result = array();
  while (count($left) > 0 && count($right) > 0){
      if ($left[0] <= $right[0])
          array_push($result, array_shift($left));
      else
          array_push($result, array_shift($right));
  }
  while (count($left) > 0)
      array_push($result, array_shift($left));
  while (count($right) > 0)
      array_push($result, array_shift($right));  
  return $result;
}
print_r(merge_sort($data));

?>