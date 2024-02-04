<?php

function binarySearch($array, $number)
{
    $iteration = 0;
    $low = 0;
    $high = count($array) - 1;

    while ($low <= $high) {
        $iteration++;

        $middle = intval(($low + $high) / 2);
        $guess = $array[$middle];

        if ($guess === $number) {
            return [
                "index" => $middle,
                "iteration" => $iteration
            ];
        }

        if ($guess > $number) {
            $high = $middle - 1;
        } else {
            $low = $middle + 1;
        }
    }

    return "Not found!";
}

// Example array from 1 to 1,000,000
$array = range(1, 1000000);
$number = 123456;

// Measure execution time
$start_time = microtime(true);
$result = binarySearch($array, $number);
$end_time = microtime(true);

// Calculate the time spent
$time_spent = $end_time - $start_time;
$time_spent_readable = sprintf("%.10f", $time_spent);

// Output the result and time spent
if (is_array($result)) {
    echo "Index: {$result['index']}\nIteration: {$result['iteration']}\n";
} else {
    echo "Not found!\n";
}
echo "Time spent: $time_spent_readable seconds\n";

