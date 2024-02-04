<?php

function simpleSearch($array, $number)
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $number) {
            return $i;
        }
    }

    return "Not found!";
}

// Example array from 1 to 1,000,000
$array = range(1, 1000000);
$number = 123456;

// Measure execution time
$start_time = microtime(true);
$result = simpleSearch($array, $number);
$end_time = microtime(true);

// Calculate the time spent
$time_spent = $end_time - $start_time;
$time_spent_readable = sprintf("%.10f", $time_spent);

// Output the result and time spent
if (is_numeric($result)) {
    echo "Index: {$result['index']}\nIteration: {$result['index']}\n";
} else {
    echo "Not found!\n";
}
echo "Time spent: $time_spent_readable seconds\n";