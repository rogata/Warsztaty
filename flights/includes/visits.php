<?php

if(!isset($_COOKIE['visits'])){
    
    echo 'Welcome first time on our website';
    
    setcookie('visits', '1', time()+3600*24*365);
}else{
 
     
     $cookie = $_COOKIE['visits'];
     $cookie++;
     
     setcookie('visits', $cookie);
    
    echo 'Welcome, You visit our website '.$cookie.' times';
        
}
 

