<?php
// index array
$emp = [
    [1, "Imran", "Manager", 50000],
    [2, "sultan", "driver", 10000],
    [3, "sonu", "salesman", 12000],
    [4, "alen", "computer operator", 21050],
    [5, "elon", "carpenter", 21550],
    [6, "ana", "plumber", 32250]
];

echo "<table border = '2px' cellpadding = '5px'cellspacing = '0px'>
<tr>
<th>Employee id</th>
<th>Employee Name</th>
<th>Employee Designation</th>
<th>Employee Salary</th>
</tr>";
foreach($emp as list($id, $name, $designation,$salary)){
    echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td> <br>";
}
echo "</table>";
?>
<?php

// associative array

$marks = [
    [
        "physics" => 65,
        "maths" => 35,
        "chemistry" => 98,
        "biology" => 85,
    ],
    [
        "physics" => 52,
        "maths" => 66,
        "chemistry" => 65,
        "biology" => 36,
    ],
    [
        "physics" => 67,
        "maths" => 87,
        "chemistry" => 45,
        "biology" => 42,
    ],
    [
        "physics" => 64,
        "maths" => 75,
        "chemistry" => 45,
        "biology" => 89,
    ]
    ];
    echo "<table border = '2px' cellpadding = '5px'cellspacing = '0px'>
<tr>
<th>physics</th>
<th>maths</th>
<th>chemistry</th>
<th>biology</th>
</tr>";
foreach($marks as list("physics"=>$name, "maths"=>$designation,"chemistry"=>$salary, "biology"=>$biology)){
    echo "<tr> <td>$name</td> <td>$designation</td> <td>$salary</td> <td>$biology</td> <br>";
}
echo "</table>";
?>