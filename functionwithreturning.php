<?php

function hello($fname="First",$lname="Last"){
// echo "Hello $fname $lname.<br>";
// }
// hello ("bilal", "khan");
// hello ("bilal", "khan");
// hello ("bilal", "khan");
// hello ();
$v = "$fname $lname";
return $v;
}

$name = hello("Bilal", "Khan");
echo "Hello $name";
?>


<?php
function sum($math, $eng, $sc, $hin){
$s=$math + $eng + $sc + $hin;
return $s;
}
$total = sum(56,55,25,99);
echo $total;

function per($st){
    $per = $st/4;
    echo $per . "%";
}
// $per = $total/4;
// echo $per;
per($total);

?>