<?php
$age = 20;
$permission = true;

if ($age >= 18 && $permission) {
    echo "Доступ разрешён";
} elseif ($age < 18 && $permission) {
    echo "Доступ разрешён при родительском согласии";
} elseif (!$permission) {
    echo "Доступ запрещён";
}

echo "\n";
