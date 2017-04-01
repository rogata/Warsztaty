<?php

function rentCost($days){
    
    $kosztWynajmu = 0;
    
    if($days==1){
        
      return 200;
      
    } elseif ($days<=3) {
        
         return $days * 180;
         
      } elseif ($days<=7) {
          
           $kosztWynajmu = $days * 160;
           
        } else {
            
            $kosztWynajmu = $days * 150;
          }
          
     $rabat = intval($days / 7) * 50;

     return $kosztWynajmu - $rabat;

}
echo rentCost(8) . "<br/>";   //1150
echo rentCost(3) . "<br/>";   //540
echo rentCost(15) . "<br/>";  //2150
echo rentCost(13) . "<br/>"
?>


