<?php
function primos(int $inicial, int $final): string
{
    $primo = [];
    $i = $inicial + 1;
    for ($i; $i < $final; $i++) {
        if ($i === 2 || $i % 2 !== 0) {
            array_push($primo, $i);
        }
    }

    $resultado = implode(', ', $primo);

    return (string) "Encontrados 5 números primos, são eles: " . $resultado;
}

echo primos(1, 20);