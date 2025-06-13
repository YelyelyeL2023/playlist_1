<?php
// 1.
$array1 = [1, 2, 3, 4, 5];
$array2 = [1, 3, 5, 7, 9];
$associate1 = ['one' =>  1, 'two' => 2, 'three' => 3, 'four' => 4];
$associate2 = ['a' => 2, 'b' => 3, 'c' => 4, 'd' => 5];
$associate3 = ['alpha' => 1, 'beta' => 2, 'gamma' => 3, 'delta' => 4];
// 2.
$array1[] = 6;
$array1[0] = 0;
$associate3['epsilon'] = 5;
// 3.
unset($array2[4]);
unset($associate2['c']);

print_r($array1);
echo '<br>';
print_r($array2);
echo '<br>';
print_r($associate1);
echo '<br>';
print_r($associate2);
echo '<br>';
print_r($associate3);
echo '<br>';
