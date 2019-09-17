<?php

$rows = readline("Hoeveel stapels wil je hebben? ");

for ($i = 1; $i <= $rows; $i++) {

    for ($a = 1; $a <= $i; $a++) {
        echo "*";
    }
    echo "\n";
}
