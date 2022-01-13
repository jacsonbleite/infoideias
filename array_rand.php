<?php
$array = [];

for ($i = 1; $i <= 20; $i++) {
    $int = mt_rand(1, 10);
    array_push($array, $int);
}

$res = array_keys(array_filter(array_count_values($array), function ($unique) {
    return $unique == 1;
}));

echo "Array sorteado = [" . implode(', ', $array) . "] <br>";

echo "Os números que não se repetem são o " . implode(' e ', $res);