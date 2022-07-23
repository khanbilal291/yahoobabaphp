<?php
/* function argument By Value */
function testing(&$string)
{
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
testing($str);
echo $str;


/* function argument By Reference*/
function first($num) {
  $num += 5;
}

function second(&$num) {
  $num += 6;
}

$number = 10;
first( $number );
echo "Original Value is $number<br />";

second( $number );
echo "Original Value is $number<br />";

?>
<!-- <?php
function x($fir){
    $fir +=11;
}
function y(&$fir){
    $fir +=13;
}
$firs = 15;
x($firs);
echo "orig $firs";
y($firs);
echo "new $firs";
?> -->