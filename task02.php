<?php

function dog_bark(int $woof_nb)
{
    $compteur = 0;

    while ($compteur < $woof_nb)
    {
        echo "woof";
        $compteur++;

        if ($compteur < $woof_nb)
        {
            echo " ";
        }
    }

    echo "\n";
}