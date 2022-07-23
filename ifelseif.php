<?php
// $name="yahoo baba";
// $gender="male";
// // $b=250;
// if($gender=='male'){
//     echo "hello mr. " . $name;
// }
// else{ echo "hello miss . " .  $name;
// }

$per = 12;
// if we use "{}"

// if($per >= 80 && $per <=100){
//     echo "<h2>Your are Merit</h2>";
// }elseif($per >=60 && $per <=79){
//     echo "you are 1st Devision";
// }elseif($per >=34 && $per <=59){
//     echo "yor are 2nd division";
// }elseif($per<33){
//     echo "you are fail";
// }else{
//     echo "please enter valid percentage";
// }

// if we not use "{}"

if($per >= 80 && $per <=100):
    echo "<h2>Your are Merit</h2>";
elseif($per >=60 && $per <=79):
    echo "you are 1st Devision";
elseif($per >=34 && $per <=59):
    echo "yor are 2nd division";
elseif($per<33):
    echo "you are fail";
else:
    echo "please enter valid percentage";
endif;
?>