<?php

function calc_average(array $array)
{
    $somme = 0;

    foreach ($array as $nombre)
    {
        $somme += $nombre;
    }

    $moyenne = $somme / count($array);

    return round($moyenne, 1);
}