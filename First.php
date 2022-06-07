<?php

// // $name = "Sun";
// // $id = 1234;
// // $email = "sun@gmail.com";

// // echo $name;

// $array1 = ['sun', 'Prince', 'Rahat'];
// // echo $array1[0];


// for($i = 0; $i<sizeof($array1);$i++){
//     echo $array1[$i]."\r\n";
// }

$array2 = [
    ['name' => 'Sun', 'id' => 1234, 'email' => 'Sun@gmail.com'],
    ['name' => 'Prince', 'id' => 5678, 'email' => 'Prince@gmail.com'],
    ['name' => 'Turzo', 'id' => 9101, 'email' => 'Turzo@gmail.com'],
    ['name' => 'Rahat', 'id' => 1112, 'email' => 'Rahat@gmail.com']
];

foreach($array2 as $a){
    echo $a['name'] . " " . $a['id'] . " " . $a['email']."\r\n";
}

function sum($a, $b)
{
    return $a + $b;
}
echo sum(7, 8);

?>