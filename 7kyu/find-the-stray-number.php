<?php
/*
You are given an odd-length array of integers, in which all of them are the same, except for one single number.

Complete the method which accepts such an array, and returns that single different number.

The input array will always be valid! (odd-length >= 3)

Examples
[1, 1, 2] ==> 2
[17, 17, 3, 17, 17, 17, 17] ==> 3
*/

// Solution 1
function stray(array $arr) 
{
  return array_search(1, array_count_values($arr));
}

// Solution 2
function stray(array $arr) 
{
  sort($arr);
  return $arr['0'] ==  $arr['1'] ? end($arr) : $arr['0'];
}

// Solution 3
function stray(array $arr) 
{
  return array_flip(array_count_values($arr))[1];
}

?>
