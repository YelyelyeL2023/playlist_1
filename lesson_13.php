<?php

$words = ['cat', 'dog', 'elephant', 'butterfly', 'mouse', 'hippopotamus', 'lion', 'crocodile', 'fish', 'turtle'];

$filteredWords = array_filter($words, function($word) {
    return strlen($word) > 5;
});

print_r($filteredWords);
