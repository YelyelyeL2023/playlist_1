<?php
function calculateAverage($grades)
{
    if (empty($grades)) {
        return 0;
    }
    $sum = array_sum($grades);
    $count = count($grades);
    $average = $sum / $count;
    return $average;
}

$grades1 = [5, 4, 5, 3, 4];
$grades2 = [2, 3, 4, 5, 5, 4];
$grades3 = [5, 5, 5, 5];
$grades4 = [];

echo "Оценки [5, 4, 5, 3, 4]: " . calculateAverage($grades1) . "<br>";
echo "Оценки [2, 3, 4, 5, 5, 4]: " . calculateAverage($grades2) . "<br>";
echo "Оценки [5, 5, 5, 5]: " . calculateAverage($grades3) . "<br>";
echo "Пустой массив: " . calculateAverage($grades4) . "<br>";
