<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';

if (file_exists($file)) {
  // echo readFile($file);
  // r = read mode also write etc
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  // PHP_EOL adds new line equivalent of \n
  $contents = 'Chloe' . PHP_EOL . 'Louise' . PHP_EOL . 'James';
  fwrite($handle, $contents);
  fclose($handle);
}