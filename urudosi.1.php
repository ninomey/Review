<?php
 function isLeap($year){
     if($year%400==0){
      print "true";
     }
     elseif($year%100==0){
      print "false";
     }
     elseif($year%4==0){
      print "true";
     }
     else{
      print "false";
     }
 }
 
 isLeap(1900);
 