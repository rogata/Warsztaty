<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    
        for($i=1; $i<=49; $i++){
            if(isset($_POST['number'.$i])){
                $numbers[] = $i;//I save the selected numbers in the array
            }  
        }
    sort($numbers);
   
    
    $lottoNumbers = range(1, 49);//I generate random numbers
    shuffle($lottoNumbers);
    
        for ($i=0; $i<6; $i++) {

            $winNumbers[] = $lottoNumbers[$i];

        }
    sort($winNumbers);
    
    
}
