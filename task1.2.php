<?php
/**
 * Задача 1.2
 * @param $haystack
 * @param $needle
 * @return int|string
 */
function find($haystack, $needle)
{
    $i = 0;
    $val = $haystack[0];
    $z = abs($val - $needle);
    foreach ($haystack as $k => $v) {
        $new = abs($v - $needle);
        if ($new < $z) {
            $i = $k;
            $val = $v;
            $z = $new;
        }
    }
    return $i;
}

