<?php
$emp = [
    [1, "Imran", "Manager", 50000],
    [2, "sultan", "driver", 10000],
    [3, "sonu", "salesman", 12000],
    [4, "alen", "computer operator", 21050],
    [5, "elon", "carpenter", 21550],
    [6, "ana", "plumber", 32250]
];
echo $emp[0][0]." ";
echo $emp[0][1]." ";
echo $emp[0][2]." ";
echo $emp[0][3]." ";

echo "<br>";

echo $emp[1][0]." ";
echo $emp[1][1]." ";
echo $emp[1][2]." ";
echo $emp[1][3]." ";

echo "<br>";


echo $emp[2][0]." ";
echo $emp[2][1]." ";
echo $emp[2][2]." ";
echo $emp[2][3]." ";

echo "<br>";

echo $emp[3][0]." ";
echo $emp[3][1]." ";
echo $emp[3][2]." ";
echo $emp[3][3]." ";

echo "<br>";

echo $emp[4][0]." ";
echo $emp[4][1]." ";
echo $emp[4][2]." ";
echo $emp[4][3]." ";

echo "<br>";
echo "<br>";
echo "<br>";


// echo "<pre>";
// print_r($emp);
// echo "</pre>";
?>


<?php

// with for loop

$emp = [
    [1, "Imran", "Manager", 50000],
    [2, "sultan", "driver", 10000],
    [3, "sonu", "salesman", 12000],
    [4, "alen", "computer operator", 21050],
    [5, "elon", "carpenter", 21550],
    [6, "ana", "plumber", 32250]
];

for($row = 0; $row  <4; $row++){
    for($col= 0; $col <4; $col++){
        echo $emp[$row][$col]."  ";
    }
    echo "<br>";
}
?>

<br>
<br>
<br>

<?php

// with foreach loop

$emp = [
    [1, "Imran", "Manager", 50000],
    [2, "sultan", "driver", 10000],
    [3, "sonu", "salesman", 12000],
    [4, "alen", "computer operator", 21050],
    [5, "elon", "carpenter", 21550],
    [6, "ana", "plumber", 32250]
];
echo "<table border = '2px' cellpadding = '5px'cellspacing = '0px'>";
echo "<tr>
        <th>Emp. Id</th>
        <th>Emp. Name</th>
        <th>Emp. Designation</th>
        <th>Emp. Salary</th>
    </tr>";
foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</td>";
}
echo "</table>";
?>
