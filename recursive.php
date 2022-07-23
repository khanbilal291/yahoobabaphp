<?php
function display($number){
    if($number<=5){
        echo "$number";
        display($number + 1);
    }
}
display(2);
?>

<?php
function factorial($r){
    if($r==0){
        return 1;
    }else{
        return ($r * factorial($r-1));
    }
    }
echo factorial(999);
?>
