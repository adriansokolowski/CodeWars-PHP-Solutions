<?php
/* 
Description:
Complete the solution so that it returns true if the first argument(string) passed in ends with the 2nd argument (also a string).

Examples:

solution('abc', 'bc') // returns true
solution('abc', 'd') // returns false
*/

// Solution 1:
function solution(string $str, string $ending): bool {
  return str_ends_with($str, $ending);
}

// Solution 2
function solution(string $str, string $ending): bool {
  return $ending == '' || substr_compare($str, $ending, -strlen($ending)) == 0;
}

// Solution 3
function solution($str, $ending): bool {
  return substr($str, -strlen($ending), strlen($ending)) == $ending;
}

// Solution 4
function solution($str, $ending) {
  if ($ending === '') return true;
  return strrpos($str, $ending) === strlen($str) - strlen($ending);
}

?>
