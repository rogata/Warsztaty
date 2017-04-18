<?php


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    if(($_POST['start']) != ($_POST['end'])){
        
        $startAirport = $_POST['start'];
        $endAirport = $_POST['end'];
        
    }else{
        echo 'The same airport!';
    }
    
    
    if(isset($_POST['date']) && isset($_POST['length']) && isset($_POST['price']) && $_POST['price'] >0){
        
        $dateFly = $_POST['date'];
        
        $lengthFly = $_POST['length'];
        
        $priceFly = $_POST['price'];
        
    }
include 'includes/airports.php';
    
foreach ($airports as $key => $value){
    foreach ($value as $airport) {
        if($airport == $startAirport){
            
            $timezoneStart = $value['timezone'];
           // var_dump($timezoneStart);
        }
        if($airport == $endAirport){
            
            $timezoneEnd = $value['timezone'];
           // var_dump($timezoneEnd);
        }
    }    
}
}

