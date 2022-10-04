<?php

function getRandomArray(int $length): array
{
    $array = [];

    while ($length--) {
        $array[] = random_int(10, 99);
    }

    return $array;
}

/**
 * Swap two variables
 */
function swap(int &$a, int &$b): void
{
    $tmp = $a;

    $a = $b;
    $b = $tmp;
}

function bubbleSort(array $array): array
{
    $n = count($array);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if ($array[$j] > $array[$j+1]) {
                swap($array[$j], $array[$j+1]);
            }
        }
    }

    return $array;
}

$array = getRandomArray(10);
$sortedArray = bubbleSort($array);

echo 'Array: ' . PHP_EOL . implode(', ', $array) . PHP_EOL . PHP_EOL .
     'Sorted array: ' . PHP_EOL . implode(', ', $sortedArray) . PHP_EOL;

