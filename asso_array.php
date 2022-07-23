<?php
$age = array(
    "bill"=> 25,
    "slen"=> 5,
    "john"=> 45,
    "marry"=> 225,
    "sultan"=> 65,
    "elon"=> 33,
);
echo $age["elon"]."<br>";
echo $age["bill"]."<br>";
echo $age["john"]."<br>";
echo $age["sultan"]."<br>";
?>



<?php
$age = [
    "bill"=> 25,
    "slen"=> 5,
    "john"=> 45,
    "marry"=> 225,
    "sultan"=> 65,
    "elon"=> 33,
];
echo "<pre>";
print_r($age);
echo "</pre>";
// echo $age["elon"];
?>



<?php
$age = [
    "bill"=> "25.35",
    "slen"=> "bilal",
    "john"=> 45,
    "marry"=> 22.5,
    "sultan"=> 65,
    "elon"=> 33,
];

$age["marry"]=4.5;
echo "<pre>";
var_dump($age);
echo "</pre>";

echo $age["john"]."<br>";
echo $age["elon"]."<br>";
echo $age["slen"]."<br>";
?>