<?php 
$numbers = [1, 24, 36, 48];

// associative arrays
$hex_colours = [
  'red' => '#CC0000',
  'blue' => '#0000CC',
  'green' => '#00CC00'
];

// echo $hex_colours['red'];,


$person = [
  'first_name' => 'Chloe',
  'last_name' => 'Guttridge',
  'email' => 'test@test.com'
];

// echo $person['first_name'];

// multi dimensional array

$people = [
  [
    'first_name' => 'Chloe',
    'last_name' => 'Tester',
    'email' => 'test@test.com'
  ],
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'johndoe@test.com'
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'janedoe@test.com'
  ]
];

echo $people[2]['email']

?>