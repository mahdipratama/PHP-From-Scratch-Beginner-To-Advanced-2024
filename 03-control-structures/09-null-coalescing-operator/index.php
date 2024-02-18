<?php

$favoriteColor = 'red';
$secondFavoriteColor = 'green';
$color = isset($favoriteColor) ? $favoriteColor : 'blue';

echo $color;

// Null Coalescing Operator
echo $color ?? 'blue';

// Ternary operator
$color2 = isset($favoriteColor) ? $favoriteColor : (isset($secondFavoriteColor) ? $secondFavoriteColor : 'blue');

$color2 = $favoriteColor ?? $secondFavoriteColor ?? 'blue';

echo $color2;
