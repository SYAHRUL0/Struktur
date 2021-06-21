<?php


$data=array(6,5,3,1,8,7,2,4);
print_r($data);
echo "<br>";


  $n=count($data);

  echo "jumlah data : " .$n."<br>";


  for ($i = 1;$i<$n;$i++)
  
  
  
  { 
    echo "<br>";
    echo "perulangan : ".$i."<br>";
    
    
    for ($k = $i; $k>0; $k--)
    
    {
      if($data[$k]<$data[$k-1]){

        echo "index ke : ".$k. " = ".$data[$k]." < "."index ke : ".($k-1). " = ".$data[$k-1]." = tukar";

         $dummy=$data[$k]; "<br>";
         $data[$k]=$data[$k-1]; "<br>";
         $data[$k-1]=$dummy; "<br>";
        echo "<br>";
        
        print_r($data);
        echo "<br>";
      }
    
      }

      
    }
        return $data;
 



  ?>