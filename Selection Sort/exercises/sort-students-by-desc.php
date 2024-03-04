<?php

$students = [
    ['name' => "John", 'grade' => 56],
    ['name' => "Emma", 'grade' => 78],
    ['name' => "Michael", 'grade' => 90],
    ['name' => "Sophia", 'grade' => 82],
    ['name' => "William", 'grade' => 67],
    ['name' => "Olivia", 'grade' => 73],
    ['name' => "James", 'grade' => 88],
    ['name' => "Isabella", 'grade' => 95],
    ['name' => "Alexander", 'grade' => 60],
    ['name' => "Ava", 'grade' => 79],
];

function sortStudents($students)
{
    $count = count($students);

    for ($i = 0; $i < $count; $i++) {
        $big = $i;

        for ($j = $i + 1; $j < $count; $j++) {
            if ($students[$big]['grade'] < $students[$j]['grade']) {
                $big = $j;
            }
        }

        $temp = $students[$big];
        $students[$big] = $students[$i];
        $students[$i] = $temp;
    }

    return $students;
}

$sortedStudents = sortStudents($students);

foreach ($sortedStudents as $index => $student) {
    echo $index + 1 . ". {$student['name']}: {$student['grade']}\n";
}