<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function registerUser($email)
{
  $x = 10; // function scoped
  echo $email . ' registered';
}

// echo $x; // throws error
// registerUser('Chloe'); // needs to have an argument passed in
// can pass in default values
function sum($num1 = 4, $num2 = 6)
{
  return $num1 + $num2;
}

// echo sum();

// anonymous functions

$subtract = function ($num1, $num2) {
  return $num1 - $num2;
};

// echo $subtract(254, 134);

// can use arrow functions e.g.

$multiply = fn ($num1, $num2) => $num1 * $num2;
echo $multiply(9, 18);
