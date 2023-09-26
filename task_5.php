<?php
// Task 5: Password Generator

// Create a PHP function called generatePassword($length) that generates a random password of the specified length. The
// password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a
// PHP program to generate a password with a length of 12 characters using this function and print the password.


function generatePassword($length)
{
    $lowsercaseLetter = implode("", range('a', 'z'));
    $upperercaseLetter = implode("", range('A', 'Z'));
    $numbers = implode("", range(0, 9));
    $symbol = "!@#$%^&*()_+";

    $password = ($lowsercaseLetter . $upperercaseLetter . $numbers . $symbol);
    $generateedPassword = substr(str_shuffle($password), 0, $length);
    echo $generateedPassword;
}
generatePassword(12);


// Solution2:

// function generatePassword($length){

//     $char="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";

//     $password= substr(str_shuffle($char),0,$length);
//     echo $password;
// }
// generatePassword(12);