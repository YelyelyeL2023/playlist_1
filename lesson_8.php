<?php
$month = date('n');
if ($month >= 3 && $month <= 5) {
    echo "It is Spring.";
} elseif ($month >= 6 && $month <= 8) {
    echo "It is Summer.";
} elseif ($month >= 9 && $month <= 11) {
    echo "It is Autumn.";
} else {
    echo "It is Winter.";
}
