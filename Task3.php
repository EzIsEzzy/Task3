<?php
echo "1st Program:" . "<br>";
//1. How to sort array by key, suppose you have an array with keys, just like below:
$array1 = [
    'name' => 'Esmail',
    'age' => '24',
    'city' => 'Aden'
];
print_r($array1);

//to sort it by the array helper "ksort" to sort an array by key

ksort($array1); echo "<br>";
print_r($array1); echo "<br>";

echo "<br>2nd Program:" . "<br>";
//2. how to remove duplicate values in an array, suppose you have an array like this below:
$array2 = [
    'families' => 2,
    'cars' => 4,
    'people' => 'hassan', 'saleh', 'sami', 'sami',
    'relatives' => 'hassan' , 'sami', 'taher'
];
print_r($array2);
//to remove duplicates, we use the "array_unique" array helper
echo "<br>";
print_r(array_unique($array2)); echo "<br>";

//Note: for this to work, the array helper must be inside the printing function.

echo "<br>3rd Program:<br>";
//3. how to change values in an array from lowercase to uppercase, suppose you have an array like the following:
$array3 = [
    'name' => 'mohsen',
    'age' => 'tweNty',
];
print_r($array3);
//to change values from lowercase to uppercase, we use the "ucwords" to chnage the first letter from lower to upper, or the "strtoupper" to change a whole value from lower to upper depending on the key, or the "array_change_key_case" to change the key itself 
$array3['name'] = ucwords($array3['name']);
echo "<br>";
print_r($array3);
//use of "ucword" depending on the corresponding key
$array3['name'] = strtoupper($array3['name']);
echo "<br>";
print_r($array3);
//use of "strtoupper" depending on the corresponsding key
echo "<br>";
print_r(array_change_key_case($array3,CASE_UPPER)); echo "<br>";
//use of "array_change_key_case"

echo "<br>4th Program:<br>";
//4. how to search for an item in an array, suppose you have this array:
$array4 = [
    'name' => 'Joe Rogan',
    'age' => 52,
];
print_r($array4);
//to search for an item in an array, we use the "in_array" array helper, if used without an if-condition, it returns true, otherwise false
echo "<br>";

echo $result = in_array("52",$array4)? "Match!" : "No Match!";