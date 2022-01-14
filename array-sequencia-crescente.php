<?php

function sequenciaCrescente($array)
{
    $sorted = $array;
    sort($sorted, SORT_NUMERIC);
    $arrayArr = $array;
    $arraySort = $sorted;
    foreach ($array as $key => $value) {
        $array = $arrayArr;
        $sorted = $arraySort;
        unset($array[$key]);
        unset($sorted[array_search($value, $arraySort)]);
        $sorted = array_values(array_unique($sorted));
        $array = array_values($array);
        if ($array === $sorted)
            return print "true" . PHP_EOL;
    }
    return print "false" . PHP_EOL;
}

sequenciaCrescente([1, 3, 2, 1]); //false
sequenciaCrescente([1, 3, 2]);  //true
sequenciaCrescente([1, 2, 1, 2]);  //false
sequenciaCrescente([3, 6, 5, 8, 10, 20, 15]); //false
sequenciaCrescente([1, 1, 2, 3, 4, 4]); //false
sequenciaCrescente([1, 4, 10, 4, 2]); //false
sequenciaCrescente([10, 1, 2, 3, 4, 5]); //true
sequenciaCrescente([1, 1, 1, 2, 3]); //false
sequenciaCrescente([0, -2, 5, 6]); //true
sequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]); //false
sequenciaCrescente([40, 50, 60, 10, 20, 30]); //false
sequenciaCrescente([1, 1]); //true
sequenciaCrescente([1, 2, 5, 3, 5]); // true
sequenciaCrescente([1, 2, 5, 5, 5]); //false
sequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]); //false
sequenciaCrescente([1, 2, 3, 4, 3, 6]); //true
sequenciaCrescente([1, 2, 3, 4, 99, 5, 6]); //true
sequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]); //true
sequenciaCrescente([3, 5, 67, 98, 3]); //true