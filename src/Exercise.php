<?php

namespace src;

class Exercise
{
    public function findMaxK($x, $y, $n) {
        $max_k = $n - $y;
        return $max_k - ($max_k % $x) + $y;
    }
}