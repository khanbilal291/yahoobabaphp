<?php

$colors = [
    "red",
    "yello",
    "brown",
    "black"
];
// echo "<ol>";
foreach($colors as $values){
    echo "<li>$values</li>";
}
// echo "</ol>";


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
echo "<ol>";
foreach($age as $key=> $values){
    // echo $key." = ".$values."<br>";
    echo "<li>$key = $values</li>";
}
echo "</ol>";

?>