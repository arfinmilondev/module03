<?php

/*
Task 2: Array Manipulation

Create an array called $numbers containing the numbers 1 to 10. 
Write a PHP function which takes the "$numbers" array as an argument to remove the even numbers from the array and print the resulting array.

*/

// $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numbers = range(1, 10);

// Define a function to remove even numbers
function removeEvenNumbers(&$arr) //shallow arguments : an array by reference
{
    $arr = array_filter($arr, function ($num) {
        return $num % 2 !== 0;
    });
}

// Call the function to remove even numbers
removeEvenNumbers($numbers);

// Print the resulting array
print_r($numbers);
