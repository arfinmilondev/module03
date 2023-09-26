<?php

/*
Task 4: Multidimensional Array

Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for
three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to
calculate and print the average grade for each student.
*/

$studentGrades = [
    ['Math' => 89, 'English' => 94, 'Science' => 86],
    ['Math' => 54, 'English' => 86, 'Science' => 78],
    ['Math' => 83, 'English' => 76, 'Science' => 67],
];


function calculateAverageGrades($grades)
{
    foreach ($grades as $student) {
        $total = array_sum($student);
        $subjectCount = count($student);
        $average = $total / $subjectCount;
        $averageGrades = number_format($average, 2);
        echo "Average Grade for each student: $averageGrades\n";
    }
}


calculateAverageGrades($studentGrades);
