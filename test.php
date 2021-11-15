<?php

function calc($val1, $val2)
{
    $area = $val1 * $val2;
    $volume = $val1 - $val2;
    return array($area, $volume);
}

list($area_result, $vol_result) = calc(25, 5);
echo "Area: " . $area_result . "<br/>";
echo "Volume: " . $vol_result . "<br/>";
