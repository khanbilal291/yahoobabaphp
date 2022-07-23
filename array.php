<?php
$a = array("red","blue","yello","white","15","15.5");
$a = ["red","blue","yello","white","15","15.5"];
echo $a[1]."<br>";
echo $a[4]."<br>";
echo $a[0]."<br>";
echo "<pre>";
print_r($a);
?>

<?php
$a[0] = "red";
$a[1] = "12.5";
$a[2] = "bilal";
$a[3] = "grey";
$a[4] = "15";
echo "<pre>";
print_r($a);
?>

<?php

$a =["red","20","15.25","bilal"];
for($x = 0;$x<4;$x++){
    echo $a[$x]."<br>";
}
?>

<?php

$a =["red","20","15.25","bilal"];
echo "<ol>";
for($x = 0; $x<4; $x++){
    echo "<li> $a[$x] </li>";
}
echo "</ol>";

?>

<?php
$s = ["1","5","7","155","bilal"];
echo "<ul>";
for($z = 0; $z<5; $z++){
    echo "<li>$s[$z]</li>";
}
echo "</ul>";

?>