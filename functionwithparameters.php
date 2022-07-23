<?php

function hello($fname="123",$lname="456"){
    echo "<b>hello $fname $lname</b>.<br>";
}
hello("bilal","khan");

hello("bill","gates");

hello();

hello("realme","x20");

function sum($a, $b){
    echo $a+$b;
}
sum(30,500);
sum(20,40.66)
?>