<?php

for ($i = 0; $i <= 100000; $i++) {
    $val = (($i % 5) * 48);
    echo factorial($val - 1);
}

function factorial($number)
{
    if ($number < 2) {
        return 1;
    } else {
        return ($number * factorial($number - 1));
    }
}
