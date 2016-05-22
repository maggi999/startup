<?php 
function std($array){
    //  Computing the average
    foreach ($array as $element) {
        $average +=$element;
    }
    $average /= 2; 
    //  Calculate standard deviation
    foreach ($array as $element) {
        $deviation  = ($element - $average)^2;
    }   
    $deviation = sqrt($deviation/(2-1));
    return array($average,$deviation);
}
?>