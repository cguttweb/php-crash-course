<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$vegetables = ['potatoes', 'onions', 'carrots'];

// get length
echo count($vegetables);

// search in array returns boolean
// var_dump(in_array('onions', $vegetables));

// add new values to array

$vegetables[] = 'sprouts';
// add to start of array
array_unshift($vegetables, 'parsnips');
// adds to end of array
array_push($vegetables, 'cabbages', 'lettuces');

// remove values from an array
// remove from start of array
array_shift($vegetables);
// remove from end
array_pop($vegetables);
// remove specific element
// unset($vegetables[3]);

// split into chunks
$array_chunks = array_chunk($vegetables, 2);
// print_r($array_chunks);

// print_r($vegetables);
$arr1 = ['10', '11', '12'];
$arr2 = ['20', '21', '22'];
$new_arr = array_merge($arr1, $arr2);
// or using spread operator
$new_arr2 = [...$arr1, ...$arr2];
// print_r($new_arr);

$colors = ['red', 'green', 'yellow'];
$fruits = ['apple', 'avocado', 'banana'];
// colors = keys, fruits = values
$combined_arr = array_combine($colors, $fruits);
// print_r($combined_arr);

$keys = array_keys($combined_arr);
// print_r($keys);

$flip_arr = array_flip($combined_arr);
// flips keys and values
// print_r($flip_arr);

$nums = range(1, 20);
// print_r($nums);
// similar to JS map
$newNums = array_map(function ($number) {
  return "Number ${number}";
}, $nums);

// print_r($newNums);

$lessThan7 = array_filter($nums, fn ($number) => $number <= 7);

// print_r($lessThan7);

$sum = array_reduce($nums, fn ($carry, $number) => $carry + $number);

// var_dump($sum);
