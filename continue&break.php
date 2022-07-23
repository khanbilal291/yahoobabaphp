<?php
for($a=1; $a<=10; $a++){
    if($a==5){
    // echo "Number :" .$a."<br>";
    continue;
}
    echo "Number :" .$a."<br>";
}
?>

<?php
for($a=1; $a<=10; $a++){
    if($a==5){
    // echo "Number :" .$a."<br>";
    break;
}
    echo "Number :" .$a."<br>";
}
?>