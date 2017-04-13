<?php

include 'numbers.php';

?>

<!doctype html>
<html>
    <body>
        <h1>LOTTO GAME</h1>
        <h3>Select 6 numbers</h3>
            <form action="" method="post">
                <table>
                    <?php
                 //I generate table with numbers to select

                    for($i=1; $i<=49; $i++){
                        echo'<td>';
                        echo '<label><input type="checkbox" name="number'.$i.'">'.$i.'</label>';
                        echo'</td>';
                        
                        if(is_int($i/7)){
                            echo '<tr></tr>';
                        }
                    }
                    ?>
                </table>
                    <button type="submit">Play</button>

            </form>

        <h3>Win numbers: <?php if(isset($winNumbers)) echo implode(', ', $winNumbers);?></h3>
        <h3>Your numbers: 
            <?php if(isset($numbers) && count($numbers)==6){
                echo implode(', ', $numbers);
                }  else {
                    echo 'Make sure you select 6 numbers';
                }   
                ?>
        </h3>
        <?php
                include 'result.php';
        
        ?>
    </body>
</html>