<?php
    $a = 10;
    $b = 15;
function test(){
    global $a, $b;
    $a = $a + $b + 50;
    // echo "$a <br>";
}
test();
echo $a + $b;
?>