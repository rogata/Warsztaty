<?php


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    if(($_POST['start']) != ($_POST['end'])){
        
        $startAirport = $_POST['start'];
        $endAirport = $_POST['end'];
        
    }else{
        echo 'The same airport!<br>';
    }
    
    
    if(isset($_POST['date']) && isset($_POST['length']) && isset($_POST['price']) && $_POST['price'] >0){
        
        $dateFly = $_POST['date'];
        
        $lengthFly = $_POST['length'];
        
        $priceFly = $_POST['price'];
        
    }else{
        echo 'Complete the data correctly <br>';
    }
    
    
    include 'includes/airports.php';
    if(isset($startAirport) && isset($endAirport)){    
        foreach ($airports as $key => $value){
            foreach ($value as $airport) {
                if($airport == $startAirport){

                    $timezoneStart = $value['timezone'];
                    $codeStart = $value['code'];
                   // var_dump($timezoneStart);
                }


                if($airport == $endAirport){

                    $timezoneEnd = $value['timezone'];
                    $codeEnd = $value['code'];
                   // var_dump($timezoneEnd);
                }
            }    
        }
    }
    
    
    $dateStart = new DateTime($dateFly);
    $timeZone1 = new DateTimeZone($timezoneStart);
    $dateStart->setTimezone($timeZone1);
    $dateStartZone = $dateStart->format("d.m.Y H:i:s ");
    
   // echo $dateStartZone;
    $dateStartModify = $dateStart->modify($lengthFly.'hours');
    $timeZone2 = new DateTimeZone($timezoneEnd);
    $dateStartModify->setTimezone($timeZone2);
    $dateEndZone = $dateStartModify ->format("d.m.Y H:i:s");
    
   // echo $dateEndZone;
}

    $priceFlyExplode = explode('.', $priceFly);
    $priceFlyImplode = implode('', $priceFlyExplode);

require_once './vendor/autoload.php';

    $faker = Faker\Factory::create();
    $passangerName = $faker->name;
   // var_dump($passangerName);
    
    use NumberToWords\NumberToWords;
    

    $numberToWords = new NumberToWords();
    $numberEn = $numberToWords->getCurrencyTransformer('en');
?>
<!doctype html>
<html>
    <body>
        <table border="3" cellpadding="10">
            <tr>
                <th colspan="4">Rogata Airlines</th>
            </tr>
            <tr>
                <th>Passenger</th>
                <td colspan="3"><?php echo $passangerName;?></td>
            </tr>
            <tr>
                <th>FROM</th>
                <td colspan="3"><?php echo $startAirport;?></td>
            </tr>
            <tr>
                <th>Departure (local time)</th>
                <td><?php echo $dateStartZone.' ('.$timezoneStart.')';?></td>
                <th>Code</th>
                <td><?php echo $codeStart;?></td>
            </tr>
            <tr>
                <th>TO</th>
                <td colspan="3"><?php echo $endAirport;?></td>
            </tr>
            <tr>
                <th>Arrival (local time)</th>
                <td><?php echo $dateEndZone.' ('.$timezoneEnd.')';?></td>
                <th>Code</th>
                <td><?php echo $codeEnd;?></td>
            </tr>
            <tr>
                <th>Ticket cost</th>
                <td><?php echo $priceFly.'&euro; ('.$numberEn->toWords($priceFlyImplode, 'EUR').')';?></td>
                <th>Flight time</th>
                <td><?php echo $lengthFly,' h';?></td>
            </tr>
        </table>
            
    </body>
</html>
