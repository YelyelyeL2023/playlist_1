<?php
$array1 = [1, 2, 3, 4, 5];
$array2 = [1, 3, 5, 7, 9];
$associate1 = ['one' =>  1, 'two' => 2, 'three' => 3, 'four' => 4];
$associate2 = ['a' => 2, 'b' => 3, 'c' => 4, 'd' => 5];
$associate3 = ['alpha' => 1, 'beta' => 2, 'gamma' => 3, 'delta' => 4];

echo "Array 1:<br>";
foreach ($array1 as $value) {
    echo $value . "<br>";
}

echo "<br>Array 2:<br>";
foreach ($array2 as $value) {
    echo $value . "<br>";
}

echo "<br>Associative Array 1:<br>";
foreach ($associate1 as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

echo "<br>Associative Array 2:<br>";
foreach ($associate2 as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

echo "<br>Associative Array 3:<br>";
foreach ($associate3 as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
