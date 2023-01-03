<?php

// FOR LOOPS

// for ($x=0; $x < 15; $x++) { 
//   echo 'Number: $x <br>';
// }

// WHILE LOOPS - they will always run once even if condition is false

$num = 1;

// do {
//   echo 'Number ' . $num . '<br>';
//   $num++;
// } while ($num <= 15);

// FOREACH LOOPS 

$posts = ['First Post', 'Second Post', 'Third Post'];

for ($x=0; $x < count($posts); $x++) { 
  echo $posts[$x];
}
?>