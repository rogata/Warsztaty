<?php
            //I check the result of hit numbers

if(isset($winNumbers) && isset($numbers) && count($numbers)==6){
            
            $doubleNumbers = array_count_values(array_merge($winNumbers, $numbers));
            foreach ($doubleNumbers as $key => $value) {
                if($value == 2){
                    $double[] = $key;
                }
            }
                if(count(array_diff($winNumbers, $numbers))==1){
                    echo '<h2>You got 5 numbers: '.implode(', ', $double).'</h2>';
                }elseif (count(array_diff($winNumbers, $numbers))==2) {
                    echo '<h2>You got 4 numbers: '.implode(', ', $double).'</h2>';
                }elseif (count(array_diff($winNumbers, $numbers))==3) {
                    echo '<h2>You got 3 numbers: '.implode(', ', $double).'</h2>';
                }elseif (count(array_diff($winNumbers, $numbers))==4){
                    echo '<h2>You got 2 numbers: '.implode(', ', $double).'</h2>';
                }elseif (count(array_diff($winNumbers, $numbers))==5) {
                    echo '<h2>You got 1 numbers: '.implode(', ', $double).'</h2>';
                }elseif (count(array_diff($winNumbers, $numbers))==6) {
                    echo '<h2>Sorry! You got 0 numbers</h2>';
                }elseif (count(array_diff($winNumbers, $numbers))==0) {
                    echo '<h4>Congratulations! You won!';
                }
                
}
