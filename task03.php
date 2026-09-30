<?php

function get_shortest(array $array)
{
    $plusCourt = $array[0];

    foreach ($array as $mot)
    {
        if (strlen($mot) < strlen($plusCourt))
        {
            $plusCourt = $mot;
        }
    }

    return $plusCourt;
}