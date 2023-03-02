<?php
require_once 'src/Exercise.php';

use src\Exercise;

$ex = new Exercise();
$testCases = [
    [7, 5, 12345, 12339],
    [5, 0, 4, 0],
    [10, 5, 15, 15],
    [17, 8, 54321, 54306],
    [499999993, 9, 1000000000, 999999995],
    [10, 5, 187, 185],
    [2, 0, 999999999, 999999998],
];

foreach ($testCases as [$x, $y, $n, $expectedOutput]) {
    echo $expectedOutput. ' - Expected<br>';
    echo $ex->findMaxK($x, $y, $n) . ' - Result';

    echo '<hr>';
}