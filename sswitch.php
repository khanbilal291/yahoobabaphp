<?php
$age = 35;
switch(true){
    case ($age >=15 && $age <=20):
        echo "you are eligible.";
        break;
        case ($age >=21 && $age <=29):
            echo "you are not eligible.";
            break;case ($age >=30 && $age <=45):
                echo "you are qualify.";
                break;
        default;
        echo "please entre valid age";
        break;
}  
?>