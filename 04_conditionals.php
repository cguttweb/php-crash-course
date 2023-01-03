<?php

  $age = 25;

  // if($age >= 18){
  //   echo "You can vote";
  // }

  $time = date("H");

  // if ($time < 12) {
  //   echo 'Good Morning';
  // } elseif ($time < 17){
  //   echo 'Goos Afternoon';
  // } else {
  //   echo 'Good Evening';
  // }

  $posts = ['My First Post', 'Second Post'];
  
  // if (!empty($posts)) {
  //   echo $posts[0];
  // } else {
  //   echo 'You have no posts';
  // }

// Ternary operator = shorthand must have else if not will error out could use null

$firstPost = !empty($posts) ? $posts[0] : 'You have no posts';

// $firstPost = echo !empty($posts) ? $posts[0] : null;
// coalescing operator
$firstPost = $posts[0] ?? null;

// echo $firstPost;

// SWITCH

$favcolor = 'red';

switch($favcolor) {
  case 'red':
    echo 'Your favourite colour is red';
    break;
  case 'blue':
    echo 'Your favourite is blue';
  break;
  default:
  echo 'Your favourite colour is not red or blue';
}
?>