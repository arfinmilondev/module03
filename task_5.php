<?php
// Task 5: Password Generator

// Create a PHP function called generatePassword($length) that generates a random password of the specified length. The
// password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a
// PHP program to generate a password with a length of 12 characters using this function and print the password.

function generatePassword($length)
{
    $uppercaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()_+';

    $requiredChars = $uppercaseLetters . $lowercaseLetters . $symbols . $numbers;

    $password = '';

    // Add at least one uppercase letter
    $password .= $uppercaseLetters[rand(0, strlen($uppercaseLetters) - 1)];

    // Add at least one lowercase letter
    $password .= $lowercaseLetters[rand(0, strlen($lowercaseLetters) - 1)];

    // Add at least one symbol
    $password .= $symbols[rand(0, strlen($symbols) - 1)];

    // The remaining characters are randomly selected from the pool
    for ($i = 0; $i < ($length - 3); $i++) {
        $randomChar = $requiredChars[rand(0, strlen($requiredChars) - 1)];
        $password .= $randomChar;
    }

    // Shuffle the password to ensure randomness
    $password = str_shuffle($password);

    return $password;
}

$password = generatePassword(12);

// Print the generated password
echo $password;
