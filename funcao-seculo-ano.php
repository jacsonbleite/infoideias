<?php

function seculoAno(int $ano): int
{
    $seculo = ($ano - 1) / 100;
    $seculo = $seculo + 1;
    return  (int) $seculo;
}
echo seculoAno(1501) . PHP_EOL;

echo seculoAno(1700);