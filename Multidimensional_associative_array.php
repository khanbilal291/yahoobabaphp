<?php
$marks = [
    "Krishna"=> [
        "physics" => 65,
        "maths" => 35,
        "chemistry" => 98,
        "biology" => 85,
    ],
    "Salman"=> [
        "physics" => 52,
        "maths" => 66,
        "chemistry" => 65,
        "biology" => 36,
    ],
    "Anil"=> [
        "physics" => 67,
        "maths" => 87,
        "chemistry" => 45,
        "biology" => 42,
    ],
    "Aman"=> [
        "physics" => 64,
        "maths" => 75,
        "chemistry" => 45,
        "biology" => 89,
    ]
    ];
    echo "<table border = '2px' cellpadding = '5px'cellspacing = '0px'>
    <tr>
    <th>Name</th>
    <th>physics</th>
    <th>maths</th>
    <th>chemistry</th>
    <th>biology</th>
    </tr>
    ";
    foreach($marks as $key => $v1){
        echo "<tr>
        <td>$key</td>";
        foreach($v1 as $v2){
            
            echo "<td>$v2</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // echo "<pre>";
    // print_r($marks);
    // echo "</pre>";




?>