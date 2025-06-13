<?php
// 1.

$students = [
    [
        "name" => "Aidos",
        "age" => 20,
        "subjects" => [
            ["name" => "Math", "grade" => 90],
            ["name" => "Physics", "grade" => 85]
        ]
    ],
    [
        "name" => "Zhanna",
        "age" => 21,
        "subjects" => [
            ["name" => "Computer Science", "grade" => 95],
            ["name" => "English", "grade" => 88]
        ]
    ]
];

foreach ($students as $student) {
    echo "Name: {$student['name']}, Age: {$student['age']}<br>";
    echo "Subjects:<br>";
    foreach ($student['subjects'] as $subject) {
        echo "- {$subject['name']}: {$subject['grade']}<br>";
    }
    echo "<br>";
}
// 2.

$products = [
    [
        "name" => "Laptop",
        "price" => 350000,
        "stock" => 5
    ],
    [
        "name" => "Smartphone",
        "price" => 180000,
        "stock" => 12
    ],
    [
        "name" => "Headphones",
        "price" => 25000,
        "stock" => 30
    ]
];

foreach ($products as $product) {
    echo "Product: {$product['name']}, Price: {$product['price']} KZT, In stock: {$product['stock']} pcs<br>";
}

