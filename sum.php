<?php

 function sum(){
   $num = 0;
 for ($i=1; $i<=50; $i++){
    $num=$num+$i;
   }
  
 
 if($num>900){
  print "900より大きい";
 }
 else{
  print "900以下";
 }
 }
 
 sum();
 
 

 
?>