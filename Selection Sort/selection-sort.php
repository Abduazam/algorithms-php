<?php

function selectionSort(array $array): array
{
    $count = count($array);

    for ($i = 0; $i < $count; $i++) {
        $small = $i;

        for ($j = $i + 1; $j < $count; $j++) {
            if ($array[$small] > $array[$j]) {
                $small = $j;
            }
        }

        $temp = $array[$small];
        $array[$small] = $array[$i];
        $array[$i] = $temp;
    }

    return $array;
}

$array = [10, 21, 9, 1, 3, 7, 33, 29];

$sortedArray = selectionSort($array);

print_r($sortedArray);